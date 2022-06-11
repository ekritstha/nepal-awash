<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Backend\Traits\Crud;
use App\Http\Controllers\Controller;
use App\Models\City;
use App\Models\Property;
use Illuminate\Http\Request;

class PropertyController extends Controller
{
    use Crud;

    protected $module;
    protected $c;

    public function __construct()
    {
        $this->module = 'property';
        $this->c = app()->make(Property::class);
    }

    public function index()
    {
        $data = $this->c->orderBy('created_at', 'desc')->get(); // fetch resource data
        return view('backend.pages.' . $this->module . '.index', compact('data'))->withPage($this->module);
    }

    public function create()
    {
        $cities = City::get();
        return view('backend.pages.' . $this->module . '.create', compact('cities'))->withPage($this->module);
    }

    public function edit($id)
    {
        $cities = City::get();
        $data = $this->c->find($id);
        return view('backend.pages.' . $this->module . '.edit', compact('data', 'cities'))->withPage($this->module);
    }

    public function show($id)
    {
        $d = Property::with('galleries')->findOrFail($id);
        return view('backend.pages.' . $this->module . '.show', compact('d'))->withPage($this->module);
    }

    protected function uploadImage(UploadedFile $file, $oldfile = null)
    {
        $fileName = Str::slug(Carbon::now()) . '.' . $file->getClientOriginalExtension();
        $file->move($this->imgPath(), $fileName);
        if (!is_null($oldfile)) {
            $this->removeImage($oldfile);
        }
        return $fileName;
    }

    protected function removeImage($file)
    {
        if (!is_null($file)) {
            if (file_exists($this->imgPath() . '/' . $file)) {
                unlink($this->imgPath() . '/' . $file);
            }
        }
    }
    protected function imgPath()
    {
        return public_path('images/' . $this->module);
    }
}
