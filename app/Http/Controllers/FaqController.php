<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FaqController extends Controller
{
    public function index()
    {
        return view('faq.index');
    }

    public function pricing()
    {
        return view('price.index');
    }

    public function test(){
        $files = Storage::disk('asset')->files('img/tech');
//        dd($files);
        return array_map(static function ($item) {
            return basename($item);
        }, $files);
    }
}
