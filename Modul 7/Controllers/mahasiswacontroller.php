<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class mahasiswacontroller extends Controller
{

    public function data(){
        return view('data');
    }

    public function input(){
        return view('input');
    }

    public function about(){
        return view('about');
    }

    public function input_edit(){
        return view('input_edit');
    }

    public function proses($request){
        return view('proses');
    }

    public function delete(){
        return view('delete');
    }
}
