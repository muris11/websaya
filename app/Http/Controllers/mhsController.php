<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class mhsController extends Controller
{
    public function index(){
        $mhs = 'Rifqy';
        return view('mhs/index',compact('mhs'));
    }
    public function show(){
        $mhs = ['Rifqy','Esa','Decpo'];
        return view('mhs/show',compact('mhs'));
    }
    public function perulangan(){
        $mhs = ['Rifqy','Esa','Decpo'];
        return view('mhs/perulangan',compact('mhs'));
    }
}
