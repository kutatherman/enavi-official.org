<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Photo;
use Intervention\Image\Facades\Image;

class PhotosController extends Controller
{
    public function create(){
        return view('photos.create');
    }

    public function store(Request $request){

        $data = request()->validate([
            'name' => 'required',
            'photo' => 'required|image|max:1500',
        ]);

        $image = $request->file('photo');
        $input['imagename'] = time(). '.'.$image->extension();
        $destinationPath = public_path('/gallery_covers');
        $img =  Image::make($image->path());
        $img->resize(600, 600, function($constraint){
            $constraint->aspectRatio();
        })->save($destinationPath.'/'.$input['imagename']);

        $gallery = auth()->user()->gallerie()->create([
            'name' => $request->name,
            'description' => $request->description,
            'photo' => $input['imagename'],

        ]);
        smilify('success', 'Album successfully add');
        $galleries = Gallery::all();

        return view('gallery.index', compact('galleries'));

    }

    
}