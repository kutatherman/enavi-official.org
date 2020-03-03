<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Photo;
use Intervention\Image\Facades\Image;

class PhotosController extends Controller
{
    public function create(int $albumId){
        return view('photos.create')->with('albumId', $albumId);
    }

    public function store(Request $request){


       
        $data = request()->validate([
            'photo' => 'required|image|mimes:jpg,jpeg,gif,png,bmp',
        ]);

        $image = $request->file('photo');
        $input['imagename'] = time(). '.'.$image->extension();
        $destinationPath = public_path('/photos');
        $img =  Image::make($image->path());
        $img->resize(2000, 2000, function($constraint){
            $constraint->aspectRatio();
        })->save($destinationPath.'/'.$input['imagename']);

        $gallery = auth()->user()->picture()->gallery()->create([
            'photo' => $input['imagename'],

        ]);
        smilify('success', 'Album successfully add');
        $photos = Photo::all();

        return view('gallery.show', compact('photos'));


    }

    
}
