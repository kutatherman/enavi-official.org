<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Gallery;

class GalleryController extends Controller
{
    public function galleryIndex(){
        return view('gallery.index');
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

        // Upload image
        $path =  $request->file('cover_image')->storeAs('public/album_covers', $filenameToStore);

            // Create Album
        $album = new Gallery;
        $album->name = $request->input('name');
        $album->description = $request->input('description');
        $album->cover_image = $filenameToStore;

        $album->save();

        smilify('success', 'Album successfully add');

        return redirect('gallery');


    }
    
    public function show(){
        return view('gallery.gallery');
    }

    public function create(){
        return view('gallery.create');
    }
}
