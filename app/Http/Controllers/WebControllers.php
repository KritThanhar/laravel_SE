<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebController extends Controllers
{
    //
    public function myshop()
    {
        $address = "IT CP KKU";
        $mobliephone = "088888888";
        $location = "Khon Kean";

        return view('myshop',[
            'address' =>$address,
            'mobliephone'=>$mobliephone,
            'location'=> $location
        ]);
    }
}