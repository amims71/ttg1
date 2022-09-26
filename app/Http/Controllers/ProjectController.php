<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index(){
        return view('project.index');
    }

    public function project_details(){
        return view('project.project_details');
    }

    public function pricing_plans(){
        return view('project.pricing_plans');
    }
}
