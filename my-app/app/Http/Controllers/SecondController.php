<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SecondController extends Controller
{
 public function test(){
    return "its comes from another controler";
 }
}
