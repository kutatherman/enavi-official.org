<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except([
            'index','show'
        ]);
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
        
            $images = $request->file('img');
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
        $photos = Photo::where('gallery_id',$request->album_id)->get();
        $gallery=Gallery::find($request->album_id);
        $description = $gallery->description;
        return view('gallery.show', compact('photos', 'description'));

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
