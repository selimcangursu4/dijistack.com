<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ServiceController extends Controller
{
    public function view(){

        $services = DB::table('services')->get();
        return view('services.services',compact('services'));
    }
       public function edit($slug){

        $service = DB::table('services')->where('slug',$slug)->first();
        return view('services.service-detail',compact('service'));
    }
}
