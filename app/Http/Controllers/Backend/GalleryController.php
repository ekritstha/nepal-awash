<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Backend\Traits\Crud;
use App\Http\Controllers\Controller;
use App\Models\Gallery;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Str;

class GalleryController extends Controller
{
    use Crud;

    protected $module;
    protected $c;

    public function __construct()
    {
        $this->module = 'gallery';
        $this->c = app()->make(Gallery::class);
    }

    public function storeImage(Request $request, $id)
    {
        $filename = $this->uploadImage($request->file('file'));
        $gallery = new Gallery;
        $gallery->image = $filename;
        $gallery->property_id = $id;
        $gallery->save();
        return response()->json(['success'=>$filename]);
    }

    // public function destroy($id)
    // {
    //     $data = $this->c->find($id);
    //     $oldfile = $data->image;
    //     $data->delete();
    //     $this->removeImage($oldfile);
    //     return redirect()->back()->with('flash_success', 'Deleted Successfully');
    // }

    public function destroy(Request $request)
    {
        $filename =  $request->get('filename');
        Gallery::where('image', $filename)->delete();
        $path = public_path('uploads/gallery/').$filename;
        if (file_exists($path)) {
            unlink($path);
        }
        return response()->json(['success'=>$filename]);
    }

    public function getImages($id)
    {
        $images = Gallery::where('property_id', $id)->get()->toArray();
        foreach ($images as $image) {
            $tableImages[] = $image['image'];
        }
        $storeFolder = 'images/gallery';
        $files = scandir($storeFolder);
        $data=[];
        foreach ($files as $file) {
            if ($file !='.' && $file !='..' && in_array($file, $tableImages)) {
                $obj['name'] = $file;
                $file_path = asset('/images/gallery/' .$file);
                $obj['path'] = asset('/images/gallery/' .$file);
                $data[] = $obj;
            }
        }
        return response()->json($data);
    }

    public function gallery()
    {
        $images = Gallery::all()->toArray();
        foreach ($images as $image) {
            $tableImages[] = $image['image'];
        }
        $storeFolder = 'images/gallery';
        $files = scandir($storeFolder);
        foreach ($files as $file) {
            if ($file !='.' && $file !='..' && in_array($file, $tableImages)) {
                $obj['name'] = $file;
                // $file_path = asset('/images/gallery/' .$file);
                $obj['path'] = asset('/images/gallery/' .$file);
                $data[] = $obj;
            }
        }
        return response()->json($data);
    }


    protected function uploadImage(UploadedFile $file, $oldfile = null)
    {
        $fileName = Str::slug(Carbon::now()) . '.' . $file->getClientOriginalExtension();
        $file->move($this->imgPath(), $fileName);
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
