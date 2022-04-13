<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index(){
        return view('main-form');
    }
    public function store(Request $request){
        $post = new Post;
        $post->firstName = $request->fName;
        $post->lastName = $request->lName;
        $post->Event = $request->event;
        $post->save();
        return redirect('main-form')->with('status', 'Sucessfull');
    }
}
