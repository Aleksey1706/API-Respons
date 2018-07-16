<?php

namespace App\Http\Controllers;

use App\Helpers\RequestUser;
use Illuminate\Http\Request;


class IndexController extends Controller
{
    public  function  index(Request $request)
    {
        $data = array_except($request->post(), ['_token']);
        $response = RequestUser::get_user($data,'https://api.shipments.test-y-sbm.com/login');
        $token = isset($response->data) ? $response->data[0]->token : null;
        if ($token == null) {
            return redirect(route('show_form'))->with('message', 'not ok');
        }
        return view('success');

    }

 public  function  show(){
        if (view()->exists('form')) {
            return view('form');
        }
        abort(404);
 }
}
