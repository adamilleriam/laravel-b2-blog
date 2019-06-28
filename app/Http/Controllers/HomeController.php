<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $data['recent_posts'] = Post::with('category','author')->where('status','published')->limit(3)->latest()->get();
//        dd($data);
        return view('front.home',$data);
    }
}
