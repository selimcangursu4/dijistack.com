<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BlogController extends Controller
{
    public function view()
    {
        $blogs = DB::table('blogs')->get();
        return view('blogs.blogs',compact('blogs'));
    }
      public function edit($slug)
    {
        $blog = DB::table('blogs')->where('slug',$slug)->first();
        return view('blogs.blog-detail',compact('blog'));
    }
}
