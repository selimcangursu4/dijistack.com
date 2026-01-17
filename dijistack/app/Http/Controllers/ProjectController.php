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
    // Tek proje detay sayfası
    public function edit($slug)
    {
        $project = DB::table('projects')->where('slug', $slug)->first();

        if (!$project) {
            abort(404);
        }
        $images = DB::table('project_images')
                    ->where('project_id', $project->id)
                    ->orderBy('sort_order')
                    ->get();
        $features = DB::table('project_features')->where('project_id',$project->id)->orderBy('sort_order')->get();

        return view('projects.project-detail', compact('project', 'images','features'));
    }
}
