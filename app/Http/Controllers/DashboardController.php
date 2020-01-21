<?php

namespace App\Http\Controllers;

use App\ContactPost;
use App\Http\Requests\ContactRequest;
use App\Teams;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Intervention\Image\Facades\Image;

class DashboardController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->except(['index','donate', 'about', 'contactCreate', 'contactStore']);
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

    public function donate()
    {
        return view('donate');
    }

    /** Contact message  */
    public function contactCreate()
    {
        return view('contact');
    }


    public function contactStore(Request $request)
    {
        $this->validate($request, [
           'name' => 'required|min:3',
           'email' => 'required|email',
           'phone' =>  'required|phone:cm',
            'msg' => 'required|min:10',
            'g-recaptcha-response' => 'required|captcha'
        ]);
        ContactPost::create(['name' => $request->name, 'email' => $request->email, 'phone' => $request->phone, 'msg' => $request->msg]);
        smilify('success', 'Your message has sent successfully');
        return back();
    }

    public function contactIndex()
    {
        $posts = ContactPost::all();
        return view('contactPost.index', compact('posts'));
    }



    public function postStore(Request $request)
    {

        $data = request()->validate([
            'name' => 'required|string',
            'quality' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:10048',
            'facebook' => 'nullable',
            'linkedin' => 'nullable',
            'googleplus' => 'nullable',
            'twiter' => 'nullable',
            'emailAddress' => 'nullable',
            'description' => 'nullable',
        ]);
/*
        $imagePath = request('image')->store('uploads', 'public');
        request()->image->move(public_path('storage/uploads'), $imagePath);
*/
        $image = $request->file('image');
        $input['imagename'] = time().'.'.$image->extension();
        $destinationPath = public_path('/storage');
        $img = Image::make($image->path());
        $img->resize(200, 200, function ($constraint) {

            $constraint->aspectRatio();

        })->save($destinationPath.'/'.$input['imagename']);

        $teamPosts = auth()->user()->teams()->create([
            'name' => $request->name,
            'quality' => $data['quality'],
            'facebook' => $data['facebook'],
            'linkedin' => $data['linkedin'],
            'googleplus' => $data['googleplus'],
            'twiter' => $data['twiter'],
            'emailAddress' => $data['emailAddress'],
            'description' => $data['description'] ,
            'image' => $input['imagename'] ,
        ]);

        smilify('success', 'Member create successfully');

        $teamPosts=Teams::all();
        return view('teamMembers', compact('teamPosts'));
    }

    public function show($id )
    {
        $showTeam = Teams::findOrFail($id);
        return view('teams.show', compact('showTeam'));
    }


    public function postEdit($id)
    {
        $team = Teams::findOrFail($id);
        return view('teams.edit', compact('team'));
    }


    public function postUpdate(Request $request, $id)
    {
        $data = request()->validate([
            'name' => 'required|string',
            'quality' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:10048',
            'facebook' => 'nullable',
            'linkedin' => 'nullable',
            'googleplus' => 'nullable',
            'twiter' => 'nullable',
            'emailAddress' => 'nullable',
            'description' => 'nullable',
        ]);
        $image = $request->file('image');

        $input['imagename'] = time().'.'.$image->extension();



        $destinationPath = public_path('/storage');

        $img = Image::make($image->path());

        $img->resize(350, 350, function ($constraint) {

            $constraint->aspectRatio();

        })->save($destinationPath.'/'.$input['imagename']);


        $teamPosts = Teams::find($id);
        $teamPosts->name=$data['name'];
        $teamPosts->quality=$data['quality'];
        $teamPosts->facebook=$data['facebook'];
        $teamPosts->linkedin=$data['linkedin'];
        $teamPosts->googleplus=$data['googleplus'];
        $teamPosts->twiter=$data['twiter'];
        $teamPosts->emailAddress=$data['emailAddress'];
        $teamPosts->description=$data['description'];
        if(!empty($request->image)){
        $imagePath = request('image')->store('uploads', 'public');
        request()->image->move(public_path('storage/uploads'), $imagePath);
            $teamPosts->image=$input['imagename'];
        }
        $teamPosts->save();

        smilify('success', 'Member modify successfully');

        return redirect()->route('dashboard.index');
    }


    public function delete($id)
    {
        Teams::destroy($id);
        return back();
    }
}
