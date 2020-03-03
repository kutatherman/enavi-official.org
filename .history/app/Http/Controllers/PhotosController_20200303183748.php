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
        $this->validate($request,[
            'photo' => 'required|image|mimes:jpg,jpeg,gif,png,bmp'
        ]);

    //     $fileNameWithExt = $request->file('photo')->getClientOriginalName();
    //     $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
    //     $extension = $request->file('photo')->getClientOriginalExtension();
    //     $filenameToStore = $filename.'_'.time().'.'.$extension;

    //     $request->file('photo')->storeAs('public/photos/'. $request->input('album_id'), $filenameToStore);


    //    $photo = new Photo();
    //    $photo->$filenameToStore;
    //    $photo->photo = $request->file('photo')->getSize();
    //    $photo->gallery_id = $request->gallery_id;
    //    $photo->save();

    //    return redirect('/gallery/' . $request->input('gallery_id'));


        $data = request()->validate([
            'photo' => 'required|image|mimes:jpg,jpeg,gif,png,bmp',
        ]);

        $image = $request->file('photo');
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
        smilify('success', 'Album successfully add');
        $photos = Photo::all();
        //$album = Gallery::all();
        $gallery=Gallery::find($request->album_id);
        $description = $gallery->description);
        return view('gallery.show', compact('photos'));


    }

    
}
