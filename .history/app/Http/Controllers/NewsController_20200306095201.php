<?php

namespace App\Http\Controllers;

use App\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Intervention\Image\Facades\Image;

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
        $news = News::all();
        return view('index', compact('news'));
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

        $data = request()->validate([
            'title' => 'required|max:20',
            'img' => 'required|image|mimes:jpg,jpeg,gif,png,bmp',
            'description' => 'required'
        ]);

        $image = $request->file('img');
        $input['imagename'] = time(). '.'.$image->extension();
        $destinationPath = public_path('/newsIMG');
        $img =  Image::make($image->path());
        $img->resize(1200, 1200, function($constraint){
            $constraint->aspectRatio();
        })->save($destinationPath.'/'.$input['imagename']);

        $$img = auth()->user()->newsImage()->create([
            'title' => $request->title,
            'img' => $input['imagename'],
            'description' => $request->description,

        ]);
        smilify('success', 'News successfully created');
        $news = DB::table('news')->orderBy('id', 'desc')->paginate(5);

        return redirect()->back()->with(compact('news' ));

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
        $image_path = $data->image;  
    if(file_exists($image_path)) {
        News::delete($image_path);
    }
        return back();
    }
}
