<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Post;

class PostController extends Controller
{
    public function index(){
        return view('main-form');
    }
    //Thapa Sanjay
    public function store(Request $request){
        $post = new Post;
        $post->firstName = $request->fName;
        $post->lastName = $request->lName;
        $post->Event = $request->event;
        $post->save();
        return redirect('main-form')->with('status', 'Sucessfull');
    }

    public function db(Request $request){
        return DB::select("SELECT * FROM posts");
        return redirect('database-page');
    }
    //Thapa Sanjay
}
