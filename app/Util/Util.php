<?php

namespace App\Util;

use App\Models\Property;
use Illuminate\Support\Str;

class Util
{
    public static function htmlReq()
    {
        return '<span style="color: #d44950">*</span>';
    }

    public static function getCData($components, $slug, $col)
    {
        $s = Str::slug($slug);
        return $components[$s][0][$col] ?? 'Coming Soon...';
    }
    public static function getMetDataCont($meta, $page, $title = null)
    {
        $q = $meta->where('page', $page);
        if (is_null($title)) {
            return $q->where('meta_name', '!=', 'title');
        }
        return $q->where('meta_name', 'title')->first()->meta_content ?? config('app.name');
    }
    public static function properties()
    {
        $footerProperty = Property::orderBy('sort', 'asc')->get()->take(2);
        return $footerProperty;
    }

    public static function getFormattedNumber($components, $slug, $col)
    {
        $s = Str::slug($slug);
        if ($components[$s][0][$col]) {
            $number = str_replace(' ', '', $components[$s][0][$col]);
            return str_replace(',', ' | ', $number);
        }
        return'Coming Soon...';
    }
}
