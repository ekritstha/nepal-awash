<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'slug',
        'author',
        'image',
        'synopsis',
        'description',
        'meta_tags',
        'sort'
    ];

    protected $appends = ['date_formatted'];


    public function getDateFormattedAttribute()
    {
        return date('d F Y', strtotime($this->created_at));
    }
}
