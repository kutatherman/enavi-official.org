<?php

namespace App\Http\Controllers;

use App\Teams;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Intervention\Image\Facades\Image;

class DashboardController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->except(['index']);
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



    public function postStore(Request $request)
    {

        $data = request()->validate([
            'name' => 'required|string',
            'quality' => 'required|string',
            'image' => 'required|image',
        ]);

        $imagePath = request('image')->store('uploads', 'public');
        request()->image->move(public_path('storage/uploads'), $imagePath);

        $teamPosts = auth()->user()->teams()->create([
            'name' => $data['name'],
            'quality' => $data['quality'],
            'image' => $imagePath,
        ]);

        smilify('success', 'Welcome to page about');

        $teamPosts=Teams::all();
        return view('teamMembers', compact('teamPosts'));
        //return redirect('home/dashboard');
    }

    public function show( User $user)
    {

    }


    public function postEdit($id)
    {
        return 'form update';
    }


    public function postUpdate(Request $request, $id)
    {
        dd( 'form update');
    }


    public function delete($id)
    {
        return 'form delte';
    }
}
