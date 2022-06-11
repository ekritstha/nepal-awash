<?php

namespace App\Http\Controllers\Backend\Traits;

use App\Models\Homeland;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Str;

trait Crud
{
    /**
     *
     * fetch resource data
     */
    public function index()
    {
        $data = $this->c->orderBy('sort', 'asc')->get(); // fetch resource data
        return view('backend.pages.' . $this->module . '.index', compact('data'))->withPage($this->module);
    }

    public function create()
    {
        return view('backend.pages.' . $this->module . '.create')->withPage($this->module);
    }
    public function store(Request $request)
    {
        $data = $request->except('_token', '_method');
        if (isset($data['slug'])) {
            $data['slug'] = Str::slug($data['title']);
        }
        foreach ($data as $key => $d) {
            if ($d instanceof UploadedFile) {
                $data[$key] = $this->uploadImage($d);
            }
        }
        $_d = $this->c->create($data);
        if ($this->module == 'property') {
            return redirect()->route('admin.' . $this->module . '.show', $_d->id)->with('flash_success', 'Added Successfully');
        }
        return redirect()->route('admin.' . $this->module . '.index')->with('flash_success', 'Added Successfully');
    }

    public function edit($id)
    {
        $data = $this->c->find($id);
        return view('backend.pages.' . $this->module . '.edit', compact('data'))->withPage($this->module);
    }

    public function update(Request $request, $id)
    {
        $olddata = $this->c->find($id);
        $data = $request->except('_token', '_method');
        if ($this->module == 'component') {
            $data['title'] = $olddata->title;
            $data['slug'] = Str::slug($data['title']);
        }
        if (isset($data['slug'])) {
            $data['slug'] = Str::slug($data['title']);
        }
        foreach ($data as $key => $d) {
            if ($d instanceof UploadedFile) {
                $data[$key] = $this->uploadImage($d, $olddata->$key);
            }
        }
        $olddata->update($data);
        // $_d = $this->c->create($data);
        if ($this->module == 'property') {
            return redirect()->route('admin.' . $this->module . '.show', $id)->with('flash_success', 'Updated Successfully');
        }
        return redirect()->route('admin.' . $this->module . '.index')->with('flash_success', 'Updated Successfully');
    }
    public function destroy($id)
    {
        $data = $this->c->find($id);
        $oldfile = $data->image;
        $data->delete();
        $this->removeImage($oldfile);
        return redirect()->route('admin.' . $this->module . '.index')->with('flash_success', 'Deleted Successfully');
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
