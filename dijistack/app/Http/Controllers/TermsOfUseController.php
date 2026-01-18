<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TermsOfUseController extends Controller
{
    public function view()
    {
        return view('terms-of-use');
    }
}
