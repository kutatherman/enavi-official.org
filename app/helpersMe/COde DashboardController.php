<?php

namespace App\Http\Controllers;

use App\Teams;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Intervention\Image\Facades\Image;
/**
class DashboardController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        $teamPosts=Teams::all();
        return view('teamMembers', compact('teamPosts'));
    }


    public function create()
    {
        return view('admin.dashboard');
    }

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }


    public function contactStore(Request $request)
    {
        //
    }



    public function store(Request $request)
    {
        $data = request()->validate([
            'name' => 'required|string',
            'quality' => 'required|string',
            'image' => 'required|image',
            'facebook' => 'nullable',
            'linkedin' => 'nullable',
            'googleplus' => 'nullable',
            'twiter' => 'nullable',
        ]);

        $imagePath = $request->image;

        $fileName = Carbon::now()->timestamp . "imageMembers.jpg";
        $image = Image::make($imagePath)->resize(500, 400, function($constraint) {
            $constraint->aspectRatio();
        });

        $image->save(public_path('storage/uploads'). $fileName);

        //$imageSave =  public_path('storage/uploads/').$fileName;

        //request()->image->move(public_path('storage/uploads'), $fileName);


        $teamPosts =auth()->user()->teams()->create([
            'name' => $data['name'],
            'quality' => $data['quality'],
            'facebook' => $data['facebook'],
            'linkedin' => $data['linkedin'],
            'googleplus' => $data['googleplus'],
            'twiter' => $data['twiter'],
            'image' => $fileName,
        ]);

        $teamPosts=Teams::all();
        return view('teamMembers', compact('teamPosts'));

    }

    public function show( User $user)
    {

    }


    public function edit($id)
    {

    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
**/
