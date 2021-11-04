<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GalleryController extends Controller
{
    public function all()
    {
        return response()->json(Gallery::all());
    }

    public function index()
    {
        $gallery = Gallery::all();
        return view('admin.gallery.list', ['gallery' => $gallery]);
    }

    public function create(){
        return view('admin.gallery.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'images' => 'required',
            'images.*' => 'image|mimes:jpeg,jpg,png|required|max:10000'
        ]);

        $images = $request->file('images');

        foreach ($images as $image){
            $gallery = new Gallery();
            $gallery->image = $image->store('gallery', 'public');
            $gallery->save();
        }

        return redirect('/admin/gallery')->with(['message' => 'Успешно добавлено', 'alert' => 'alert-success']);
    }

    public function destroy($id){
        $image = Gallery::find($id);
        if (!$image) abort(404);
        Storage::disk('public')->delete($image->image);

        $image->delete();

        return redirect('/admin/gallery')->with(['message' => 'Фотография удалена', 'alert' => 'alert-success']);
    }
}
