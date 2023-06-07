<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Basecontroller extends Controller
{
    public function home()
{
    return view("home");

}
public function services()
{
    return "Hello vishal coding master";
}
public function company()
{
    return "welcome to udaan";

}
public function contact_us()
{
    return "welcome to udaan company is popular frued";

}
}


