<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function index(){
        return view('services.index');
    }
    public function services_details(){
        return view('services.service_details');
    }

    public function team(){
        return view('services.team');
    }
}
