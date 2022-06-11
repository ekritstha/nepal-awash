<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Backend\Traits\Crud;
use App\Http\Controllers\Controller;
use App\Models\Component;
use Illuminate\Http\Request;

class ComponentController extends Controller
{
    use Crud;

    protected $module;
    protected $c;

    public function __construct()
    {
        $this->module = 'component';
        $this->c = app()->make(Component::class);
    }
}
