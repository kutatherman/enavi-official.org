<?php

namespace App\Http\Controllers;

use App\ContactPost;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ContactPostController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->except([
            'index', 'show',
        ]);
    }


    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
//        $posts = ContactPost::latest()->paginate(10);
//        return view('contactPost.index', compact('posts'));
        $post = ContactPost::all();
        return view('contactPost.index', compact('post'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */
    public function store(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|min:3',
            'email' => 'required|email',
            'phone' => 'nullable',
            'msg' => 'required|min:10',
           'g-recaptcha-response' => 'required|captcha'
        ]);



            smilify('success', 'Votre message a bien été envoyer');
    }

    /**
     * Display the specified resource.
     *
     * @param ContactPost $post
     * @return Response
     */
    public function show(ContactPost $post)
    {
        //$posts = ContactPost::latest()->paginate(10);
       return view('contactPost.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return void
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param int $id
     * @return void
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
