<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Gallery;
use Intervention\Image\Facades\Image;

class PhotosController extends Controller
{
    public function store(Request $request){

        $data = request()->validate([
            'name' => 'required',
            'cover_image' => 'required|image|max:1500',
        ]);

        $image = $request->file('cover_image');
        $input['imagename'] = time(). '.'.$image->extension();
        $destinationPath = public_path('/gallery_covers');
        $img =  Image::make($image->path());
        $img->resize(600, 600, function($constraint){
            $constraint->aspectRatio();
        })->save($destinationPath.'/'.$input['imagename']);

        $gallery = auth()->user()->gallerie()->create([
            'name' => $request->name,
            'description' => $request->description,
            'cover_image' => $input['imagename'],

        ]);
        smilify('success', 'Album successfully add');
        $galleries = Gallery::all();

        return view('gallery.index', compact('galleries'));

    }

    public function create(){
        return view('photos.create');
    }
}
