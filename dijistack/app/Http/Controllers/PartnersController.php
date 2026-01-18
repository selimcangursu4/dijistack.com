<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PartnersController extends Controller
{
    public function view()
    {
        $partners = DB::table('partners')->where('is_active',1)->get();
        return view('partners.partners',compact('partners'));
    }
}
