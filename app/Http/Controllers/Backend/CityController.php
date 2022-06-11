<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Backend\Traits\Crud;
use App\Http\Controllers\Controller;
use App\Models\City;
use Illuminate\Http\Request;

class CityController extends Controller
{
    use Crud;

    protected $module;
    protected $c;

    public function __construct()
    {
        $this->module = 'city';
        $this->c = app()->make(City::class);
    }
}
