<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Backend\Traits\Crud;
use App\Http\Controllers\Controller;
use App\Models\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    use Crud;

    protected $module;
    protected $c;

    public function __construct()
    {
        $this->module = 'slider';
        $this->c = app()->make(Slider::class);
    }
}
