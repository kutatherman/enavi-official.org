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
            'cover_image' => 'required|image|max:1500',
        ]);

        return $request->file('cover_image')->getClientOriginalName();
        smilify('success', 'Album successfully add');
    }
    
    public function show(){
        return view('gallery.gallery');
    }

    public function create(){
        return view('gallery.create');
    }
}
