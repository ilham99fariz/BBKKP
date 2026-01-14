<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomepageSlider extends Model
{
    use HasFactory;

    protected $fillable = [
        'image',
        'title',
        'title_id',
        'title_en',
        'description',
        'description_id',
        'description_en',
        'link_url',
        'link_text',
        'link_text_id',
        'link_text_en',
        'sort_order',
        'is_active'
    ];

    

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
     * Get description for current locale, fallback to default description
     */
    public function getDescriptionByLocale($locale = null)
    {
        $locale = $locale ?? app()->getLocale();
        if ($locale && isset($this->{'description_' . $locale}) && $this->{'description_' . $locale}) {
            return $this->{'description_' . $locale};
        }
        return $this->description;
    }

    /**
     * Get link text for current locale, fallback to default link text
     */
    public function getLinkTextByLocale($locale = null)
    {
        $locale = $locale ?? app()->getLocale();
        if ($locale && isset($this->{'link_text_' . $locale}) && $this->{'link_text_' . $locale}) {
            return $this->{'link_text_' . $locale};
        }
        return $this->link_text;
    }

    protected $casts = [
        'is_active' => 'boolean',
    ];

    /**
     * Get active sliders ordered by sort_order.
     */
    public static function getActiveSliders()
    {
        return static::where('is_active', true)
            ->orderBy('sort_order')
            ->orderBy('id')
            ->get();
    }

    /**
     * Scope: Only active sliders.
     */
    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    /**
     * Scope: Ordered by sort_order.
     */
    public function scopeOrdered($query)
    {
        return $query->orderBy('sort_order')->orderBy('id');
    }
}
