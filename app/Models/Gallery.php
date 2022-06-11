<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    use HasFactory;
    protected $fillable = [
        'image',
        'property_id',
        'sort'
    ];

    public function property()
    {
        return $this->belongsTo(Property::class);
    }
}
