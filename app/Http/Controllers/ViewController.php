<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ViewController extends Controller
{
    public function index(){
        $data=[
            'age'=>90,
            'num'=>10,
            'article'=>[
                'n'=>1,
                'n2'=>2,
                'n3'=>3,
                'n4'=>4,
                'n5'=>5,
                'n6'=>6,
            ],
        ];

        return view('my_laravel',compact('data'));
    }
    public function view(){
        return view('index');
    }
}
