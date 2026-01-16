<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProjectController extends Controller
{
    public function view()
    {
         $projects = DB::table('projects')->where('is_active', 1)->get();
         return view('projects.projects', compact('projects'));
    }
    public function edit($slug)
    {
        return view('projects.project-detail');
    }
}
