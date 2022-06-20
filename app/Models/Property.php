<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'city',
        'location',
        'price',
        'lot_area',
        'bathroom',
        'bedroom',
        'parking_space',
        'year',
        'description',
        'image',
        'rent_sale',
        'house_land',
        'sort',
        'status',
        'slider',
        'meta_tags',
        'contact'
    ];
    protected $appends = ['property_id', 'price_formatted', 'bathroom_formatted', 'bedroom_formatted', 'parking_space_formatted', 'lot_area_formatted'];

    public function galleries()
    {
        return $this->hasMany(Gallery::class);
    }

    public function getPropertyIdAttribute($value)
    {
        return 'PRO-' . str_pad($this->id, 4, 0, STR_PAD_LEFT);
    }

    public function getPriceFormattedAttribute()
    {
        return $this->nepaliComma($this->price);
    }

    public function getBathroomFormattedAttribute()
    {
        return str_pad($this->bathroom, 2, 0, STR_PAD_LEFT);
    }

    public function getBedroomFormattedAttribute()
    {
        return str_pad($this->bedroom, 2, 0, STR_PAD_LEFT);
    }

    public function getParkingSpaceFormattedAttribute()
    {
        return str_pad($this->parking_space, 2, 0, STR_PAD_LEFT);
    }

    public function getLotAreaFormattedAttribute()
    {
        return $this->nepaliComma($this->lot_area);
    }

    public function nepaliComma($number)
    {
        $decimal = (string)($number - floor($number));
        $money = floor($number);
        $length = strlen($money);
        $delimiter = '';
        $money = strrev($money);

        for ($i=0;$i<$length;$i++) {
            if (($i==3 || ($i>3 && ($i-1)%2==0))&& $i!=$length) {
                $delimiter .=' ,';
            }
            $delimiter .=$money[$i];
        }

        $result = strrev($delimiter);
        $decimal = preg_replace("/0\./i", ".", $decimal);
        $decimal = substr($decimal, 0, 3);

        if ($decimal != '0') {
            $result = $result.$decimal;
        }

        return $result;
    }
}
