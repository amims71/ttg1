<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TermsConditionController extends Controller
{
    // trams & condition
    public function index(){
        return view('trams.index');
    }

    // privacy policy
    public function privacy_policy(){
        return view('trams.privacy_policy');
    }
}
