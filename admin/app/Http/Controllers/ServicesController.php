<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HomeServices;

class ServicesController extends Controller
{
    public function serviceIndex(){
        return view('services');
    }
    public function getServicesData(){
        $result = json_encode(HomeServices::all());
        return $result;
    }
    public function serviceDelete( Request $res){
        $id = $res->input('id');
        $result = HomeServices::where('id',$id)->delete();
        if($result==true){
            return 1;
        }
        else{
            return 0;
        }

    }
}
