<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceRating extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'year1',
        'year2',
        'year3',
        'year4',
        'year5',
        'label_year1',
        'label_year2',
        'label_year3',
        'label_year4',
        'label_year5',
        'color1',
        'color2',
        'color3',
        'color4',
        'color5',
        'max_scale',
        'sort_order',
        'is_active',
    ];

    protected $casts = [
        'is_active' => 'boolean',
        'year1' => 'integer',
        'year2' => 'integer',
        'year3' => 'integer',
        'year4' => 'integer',
        'year5' => 'integer',
        'max_scale' => 'integer',
        'sort_order' => 'integer',
    ];

    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    public function scopeOrdered($query)
    {
        return $query->orderBy('sort_order')->orderBy('name');
    }

    public function getPercentage1Attribute()
    {
        return $this->max_scale > 0 ? ($this->year1 / $this->max_scale) * 100 : 0;
    }

    public function getPercentage2Attribute()
    {
        return $this->max_scale > 0 ? ($this->year2 / $this->max_scale) * 100 : 0;
    }

    public function getPercentage3Attribute()
    {
        return $this->max_scale > 0 ? ($this->year3 / $this->max_scale) * 100 : 0;
    }

    public function getPercentage4Attribute()
    {
        return $this->max_scale > 0 ? ($this->year4 / $this->max_scale) * 100 : 0;
    }

    public function getPercentage5Attribute()
    {
        return $this->max_scale > 0 ? ($this->year5 / $this->max_scale) * 100 : 0;
    }
}
