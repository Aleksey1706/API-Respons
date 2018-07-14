<?php

namespace App\Http\Controllers;

use App\Helpers\RequestUser;
use Illuminate\Http\Request;


class IndexController extends Controller
{
    public  function  index(Request $request)
    {
           RequestUser::get_user($request['login'],$request['password'],'https://api.shipments.test-y-sbm.com/login');

    }

 public  function  show(){
        return view('form');
 }
}
