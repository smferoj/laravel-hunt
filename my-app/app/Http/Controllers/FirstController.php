<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class FirstController extends Controller
{

    //index method
    // public function index(){
    //     return view('contact');
    // }

    public function Studentstore(Request $request){

        $data = array();
        $data['name']=$request->name;
        $data['email']=$request->email;
        $data['password']=$request->password;

        // database a store

        return redirect()->back()->with('success', 'student inserted!');
    }

    // store contact

  public function store(Request $request)
  {

    $validate = $request->validate([
        'name'=>'required|max:55',
        'email'=>'required|max:50',
        'password'=>'required|min:6|max:12',
    ]);

    dd($request->all());
    // return "Data inserted";
  }


}

