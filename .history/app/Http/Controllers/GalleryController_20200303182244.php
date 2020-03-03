<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Gallery;
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

/*

        $this->validate($request, [
            'name' => 'required',
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
        $request->file('cover_image')->storeAs('public/gallery_covers', $filenameToStore);
        
            // Create gallery
        $gallery = new Gallery();
        $gallery->name = $request->input('name');
        $gallery->description = $request->input('description');
        $gallery->cover_image = $filenameToStore;
        $gallery->save();

        smilify('success', 'Album successfully add');

        return redirect('/galleryIndex');
**/

    }
    
    // public function show(){
    //     return view('gallery.gallery');
    // }

    public function create(){
        return view('gallery.create');
    }


    public function show($id){
        $album = Gallery::with('photos')->find($id);
        return view('gallery.show')->with('album', $album);
    }
}
