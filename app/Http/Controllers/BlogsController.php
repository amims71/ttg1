<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogsController extends Controller
{
    public function index(){
        return view('blogs.index');
    }
    public function blogs_details(){
        return view('blogs.blog_details');
    }
}
