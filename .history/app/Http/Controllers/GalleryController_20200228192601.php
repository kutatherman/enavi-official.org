<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function galleryIndex(){
        return view('gallery.index');
    } 
    
    public function store(Request $request){
        return "bien réçu";
    }
    
    public function show(){
        return view('gallery.gallery');
    }

    public function create(){
        return view('gallery.create');
    }
}
