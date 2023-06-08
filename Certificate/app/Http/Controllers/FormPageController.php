<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormPageController extends Controller
{
    public function index (){
        $providers = [
            0=>[
                'name' => 'gentleman',
                'status' => 'active',
                'product' =>'good mood'
            ],
            1=>[
                'name' => 'madam',
                'status' => 'active',
                'product' =>'good vibes'
            ]
        ];
        return view('certificates', compact('providers'));
    }
}
