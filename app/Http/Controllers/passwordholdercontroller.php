<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use App\Passwordholder;

class passwordholdercontroller extends Controller
{
    //


    public function store(){
        //Is this right?
        // $sentences = new App\Sentence;
        // return request()->all();
        $passer = new Passwordholder();
        $passer->password = request('password');
        $passer->user_id = 1;
        
        $sentence->save();
        return redirect('/hacked');

    }
}
