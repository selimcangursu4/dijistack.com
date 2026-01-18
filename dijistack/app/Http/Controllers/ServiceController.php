<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ServiceController extends Controller
{
    public function view(){
        return view('services.services');
    }
       public function edit($slug){

        $service = DB::table('services')->where('slug',$slug)->first();
        return view('services.service-detail',compact('service'));
    }
}
