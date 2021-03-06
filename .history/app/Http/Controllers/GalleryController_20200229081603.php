<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Gallery;
use Intervention\Image\Facades\Image;

class GalleryController extends Controller
{
    public function galleryIndex(){
        $galleries = Gallery::with('Photos')->get();
        return view('gallery.index')->with('galleries', $galleries);
    } 
    
    public function store(Request $request){
        $this->validate($request, [
            'name' => 'required',
            'description' => 'min:5',
            'cover_image' => 'required|image|max:1500',
        ]);
        // Get fille Name with extention
        $fileNameWithExt = $request->file('cover_image')->getClientOriginalName();
        // Just get the filename
        $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
        // Get Extension
        $extension = $request->file('cover_image')->getClientOriginalExtension();
            // Create new filenamePattern
        $filenameToStore = $filename.'_'.time().'.'.$extension;
        
        $image = $request->file('cover_image');
        $destinationPath['imagename'] = public_path('/gallery_covers');

        $img = Image::make($image->path());

        $img->resize(700, 700, function ($constraint) {

            $constraint->aspectRatio();

        })->save($destinationPath.'/'.$filenameToStore['imagename']);


        // Upload image
        if (!empty($request->cover_image)) {
            $path =  $request->file('cover_image')->storeAs('public/gallery_covers', $filenameToStore);
            request()->cover_image->move(public_path('gallery_covers'), $path);
        }
        

            // Create gallery
        $gallery = new Gallery;
        $gallery->name = $request->input('name');
        $gallery->description = $request->input('description');
        $gallery->cover_image = $filenameToStore;

        $gallery->save();

        smilify('success', 'Album successfully add');

        return redirect('/galleryIndex');


    }
    
    public function show(){
        return view('gallery.gallery');
    }

    public function create(){
        return view('gallery.create');
    }
}
