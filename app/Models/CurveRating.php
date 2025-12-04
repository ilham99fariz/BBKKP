<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CurveRating extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'value1',
        'value2',
        'value3',
        'value4',
        'value5',
        'label_year1',
        'label_year2',
        'label_year3',
        'label_year4',
        'label_year5',
        'line_color',
        'tooltip_label',
        'sort_order',
        'is_active',
    ];

    protected $casts = [
        'is_active' => 'boolean',
        'value1' => 'float',
        'value2' => 'float',
        'value3' => 'float',
        'value4' => 'float',
        'value5' => 'float',
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
}
