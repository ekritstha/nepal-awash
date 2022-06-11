<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Backend\Traits\Crud;
use App\Http\Controllers\Controller;
use App\Models\WhyUs;
use Illuminate\Http\Request;

class WhyUsController extends Controller
{
    use Crud;

    protected $module;
    protected $c;

    public function __construct()
    {
        $this->module = 'why-us';
        $this->c = app()->make(WhyUs::class);
    }
}
