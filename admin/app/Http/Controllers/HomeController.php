<?php

namespace App\Http\Controllers;


use App\Models\VisitorModel;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function homeIndex(){

        return view('home');
    }
}
