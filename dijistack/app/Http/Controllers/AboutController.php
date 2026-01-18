<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AboutController extends Controller
{
    public function view()
    {
        $about = DB::table('about')->where('id',1)->first();
        return view('about',compact('about'));
    }
}
