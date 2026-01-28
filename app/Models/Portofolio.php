<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portofolio extends Model
{
    protected $fillable = [
        'title',
        'description',
        'category_id',
        'image',
    ];
    public function category()
    {
        return $this->belongsTo(CategoryPortofolio::class, 'category_id');
    }
}

