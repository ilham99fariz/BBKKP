<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Partner extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'logo',
        'website_url',
        'is_active',
        'sort_order'
    ];

    protected $casts = [
        'is_active' => 'boolean',
    ];

    /**
     * Scope a query to only include active partners.
     */
    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    /**
     * Scope a query to order by sort order.
     */
    public function scopeOrdered($query)
    {
        return $query->orderBy('sort_order')->orderBy('name');
    }

    /**
     * Get public URL for the partner logo with fallback.
     */
    public function getLogoUrlAttribute(): string
    {
        if (!$this->logo) {
            return asset('images/placeholder-logo.png');
        }

        try {
            return \Storage::url($this->logo);
        } catch (\Throwable $e) {
            return asset('images/placeholder-logo.png');
        }
    }
}
