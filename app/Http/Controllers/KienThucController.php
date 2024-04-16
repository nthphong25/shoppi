<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KienThucController extends Controller
{
    public function toan(){
        return view('kien-thuc.toan');
    }
}
