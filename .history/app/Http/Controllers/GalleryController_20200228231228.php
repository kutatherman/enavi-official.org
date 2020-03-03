<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function galleryIndex(){
        return view('gallery.index');
    } 
    
    public function store(Request $request){
        $this->validate($request, [
            'name' => 'required',
            'description' => 'min:10',
            'cover_image' => 'image|max:1500',
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
        //$path =  $request->file('cover_image')->storeAs('public/album_covers', $filenameToStore);


        return $filenameToStore;

        smilify('success', 'Album successfully add');

    }
    
    public function show(){
        return view('gallery.gallery');
    }

    public function create(){
        return view('gallery.create');
    }
}
