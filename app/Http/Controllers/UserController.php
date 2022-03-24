<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function Profile(){
      $array = array('name' => "Zeeshan",'age'=>'2' );

       return view("user",$array);
    }

    public function index()
    {
        return view('main');
    }

    }


