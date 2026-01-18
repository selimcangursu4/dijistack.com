<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        $projects = DB::table('projects')->where('is_active', 1)->get();
        $services = DB::table('services')->where('is_featured',1)->get();
        $testimonials = DB::table('testimonials')->where('is_active',1)->get();
        $brands = DB::table('partners')->where('is_active',1)->take(4)->get();
        return view('home',compact('projects','services','testimonials','brands'));
    }
}
