<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MenuItem extends Model
{
    protected $fillable = [
        'title',
        'title_id',
        'title_en',
        'slug',
        'slug_id',
        'slug_en',
        'url',
        'location',
        'parent_id',
        'sort_order',
        'is_active',
        'open_new_tab',
    ];

    protected $casts = [
        'is_active' => 'boolean',
        'open_new_tab' => 'boolean',
    ];

    /**
     * Get parent menu item
     */
    public function parent()
    {
        return $this->belongsTo(MenuItem::class, 'parent_id');
    }

    /**
     * Get child menu items
     */
    public function children()
    {
        return $this->hasMany(MenuItem::class, 'parent_id')->orderBy('sort_order');
    }

    /**
     * Get active children
     */
    public function activeChildren()
    {
        return $this->children()->where('is_active', true);
    }

    /**
     * Scope for active items
     */
    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    /**
     * Scope for navbar items
     */
    public function scopeNavbar($query)
    {
        return $query->where('location', 'navbar');
    }

    /**
     * Scope for footer items by location
     */
    public function scopeFooter($query, $location)
    {
        return $query->where('location', $location);
    }

    /**
     * Scope for parent items only
     */
    public function scopeParents($query)
    {
        return $query->whereNull('parent_id');
    }

    /**
     * Get full URL
     */
    public function getFullUrlAttribute()
    {
        if ($this->url) {
            return $this->url;
        }

        // Prefer locale-specific slug if available
        $locale = app()->getLocale();
        if ($locale && isset($this->{'slug_' . $locale}) && $this->{'slug_' . $locale}) {
            return url('/' . $this->{'slug_' . $locale});
        }

        if ($this->slug) {
            return url('/' . $this->slug);
        }

        return '#';
    }

    /**
     * Get title for current locale (fallback to default title)
     */
    public function getTitleByLocale($locale = null)
    {
        $locale = $locale ?? app()->getLocale();
        if ($locale && isset($this->{'title_' . $locale}) && $this->{'title_' . $locale}) {
            return $this->{'title_' . $locale};
        }

        return $this->title;
    }
}
