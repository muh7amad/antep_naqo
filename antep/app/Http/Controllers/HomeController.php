<?php

 namespace App\Http\Controllers;


class HomeController extends Controller
{
   public function show()
    {
        $name = "muhammad";
        $age = "30";
        $city = "Gaziantep'te";
        return view('About',compact('name','age','city'));

    }
}