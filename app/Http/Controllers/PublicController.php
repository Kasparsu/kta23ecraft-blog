<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function index(){
        $posts = Post::simplePaginate(12);
        return view('welcome', compact('posts'));
    }
    public function page1(){
        return view('page1');
    }
    public function page2(){
        return view('page2');
    }
}
