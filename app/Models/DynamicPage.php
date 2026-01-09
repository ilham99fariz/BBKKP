<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DynamicPage extends Model
{
    use HasFactory;

    protected $fillable = [
        'slug',
        'slug_id',
        'slug_en',
        'title',
        'title_id',
        'title_en',
        'content',
        'content_id',
        'content_en',
        'hero_image',
        'hero_title',
        'hero_subtitle',
        'attachment_file',
        'attachment_name',
        'type',
        'category',
        'sort_order',
        'is_active',
    ];

    protected $casts = [
        'is_active' => 'boolean',
    ];

    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    public function scopeOrdered($query)
    {
        return $query->orderBy('sort_order');
    }

    public function scopeByType($query, $type)
    {
        return $query->where('type', $type);
    }

    public function attachments()
    {
        return $this->hasMany(PageAttachment::class, 'dynamic_page_id')->orderBy('sort_order');
    }

    /**
     * Get title for current locale, fallback to default title
     */
    public function getTitleByLocale($locale = null)
    {
        $locale = $locale ?? app()->getLocale();
        if ($locale && isset($this->{'title_' . $locale}) && $this->{'title_' . $locale}) {
            return $this->{'title_' . $locale};
        }

        return $this->title;
    }

    /**
     * Get content for current locale, fallback to default content
     */
    public function getContentByLocale($locale = null)
    {
        $locale = $locale ?? app()->getLocale();
        if ($locale && isset($this->{'content_' . $locale}) && $this->{'content_' . $locale}) {
            return $this->{'content_' . $locale};
        }

        return $this->content;
    }

    /**
     * Get slug for current locale, fallback to default slug
     */
    public function getSlugByLocale($locale = null)
    {
        $locale = $locale ?? app()->getLocale();
        if ($locale && isset($this->{'slug_' . $locale}) && $this->{'slug_' . $locale}) {
            return $this->{'slug_' . $locale};
        }

        return $this->slug;
    }
}
