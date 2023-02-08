<?php

namespace App\Http\Controllers;


use App\Models\VisitorModel;
use Illuminate\Http\Request;

class VisitorController extends Controller
{
    public function visitorIndex(){

        return view('visitors', ['visitors' => VisitorModel::orderBy('id', 'desc')->take(5)->get()]);
    }
}
