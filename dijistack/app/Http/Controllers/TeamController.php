<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TeamController extends Controller
{
    public function view()
    {
        $teams = DB::table('teams')->where('is_active',1)->get();
        return view('teams.teams',compact('teams'));
    }
}
