<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function galleryIndex0(){
        return view('gallery.index');
    } 
    
    public function store(){
        return "bien réçu";
    }
    
    public function show(){
        return view('gallery.gallery');
    }
}
