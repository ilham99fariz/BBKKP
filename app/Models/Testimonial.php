<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    use HasFactory;

    protected $fillable = [
        'client_name',
        'client_company',
        'content',
        'image',
        'is_approved',
        'rating',
        'sort_order'
    ];

    protected $casts = [
        'is_approved' => 'boolean',
    ];

    /**
     * Scope a query to only include approved testimonials.
     */
    public function scopeApproved($query)
    {
        return $query->where('is_approved', true);
    }

    /**
     * Scope a query to order by sort order.
     */
    public function scopeOrdered($query)
    {
        return $query->orderBy('sort_order')->orderBy('created_at', 'desc');
    }

    /**
     * Get the client display name.
     */
    public function getClientDisplayNameAttribute()
    {
        if ($this->client_company) {
            return $this->client_name . ' - ' . $this->client_company;
        }

        return $this->client_name;
    }
}
