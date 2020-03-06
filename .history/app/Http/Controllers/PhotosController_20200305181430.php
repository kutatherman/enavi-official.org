<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Photo;
use App\Gallery;
use Intervention\Image\Facades\Image;

class PhotosController extends Controller
{
    public function create($id){
      return view('photos.create')->with('albumId', $id);
   
    }

    public function store(Request $request){
  
        $photos=array();
        
            $images = $request->file('photo');
            foreach($images as $image){
            $input['imagename'] = time(). '.'.$image->extension();
            $destinationPath = public_path('/photos');
            
            $img =  Image::make($image->path());
            $img->resize(2000, 2000, function($constraint){
                $constraint->aspectRatio();
            })->save($destinationPath.'/'. $input['imagename']);

            $gallery = auth()->user()->picture()->create([
                'photo' => $input['imagename'],
                'gallery_id' => $request->album_id,

            ]);
        }
        smilify('success', 'Album successfully add');
        $photos = Photo::where('gallery_id',$request->album_id)->get();
        $gallery=Gallery::find($request->album_id);
        $description = $gallery->description;
        return view('gallery.show', compact('photos', 'description'));

    }

    
}
