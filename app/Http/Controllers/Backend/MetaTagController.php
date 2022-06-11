<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Backend\Traits\Crud;
use App\Http\Controllers\Controller;
use App\Models\MetaTag;
use Illuminate\Http\Request;

class MetaTagController extends Controller
{
    use Crud;

    protected $module;
    protected $c;

    public function __construct()
    {
        $this->module = 'meta-tag';
        $this->c = app()->make(MetaTag::class);
    }
}
