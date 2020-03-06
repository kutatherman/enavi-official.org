<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Gallery;
use App\Photo;
use Intervention\Image\Facades\Image;

class GalleryController extends Controller
{
    public function galleryIndex(){
        $galleries = Gallery::get();
        return view('gallery.index')->with('galleries', $galleries);
    } 
    
    public function store(Request $request){

        $data = request()->validate([
            'name' => 'required',
            'cover_image' => 'required|image|mimes:jpg,jpeg,gif,png,bmp',
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

        return view('gallery.index', compact('galleries', ));

    }
    

    public function create(){
        return view('gallery.create');
    }


    public function show($id){
        $album = Gallery::with('photos')->find($id);
        $photos = Photo::where('gallery_id',$id)->get();
        $description = $album->description;
        return view('gallery.show', compact('album', 'description', 'photos'));
    }
}
