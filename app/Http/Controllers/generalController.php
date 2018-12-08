<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class generalController extends Controller
{
    public function test(){
        return view('test');
    }

    public function callApi(Request $request){
        $input = $request->request->all();
        $input = $input['input'];
        $array = explode(' ',$input);
        $cat_array = [];

        foreach($array as $cat) {
            if (preg_match('/\w.(cat)$\b/', $cat)) {
                $cat_array[] = $cat;
            }
        }
        return response(json_encode($cat_array));
    }
}
