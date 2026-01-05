<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PageAttachment extends Model
{
    protected $fillable = [
        'dynamic_page_id',
        'file_path',
        'file_name',
        'original_name',
        'mime_type',
        'file_size',
        'sort_order',
    ];

    public function page()
    {
        return $this->belongsTo(DynamicPage::class, 'dynamic_page_id');
    }

    public function getFileUrlAttribute()
    {
        return asset('storage/' . $this->file_path);
    }
}
