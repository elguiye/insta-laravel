<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function config(){
        return view('user.config');
    }

    public function update(Request $request){

        $id = \Auth::user()->id;

       /* $validate = $this->validate($request, [
            'name' => ['required', 'string', 'max:255'],
            'surname' => ['required', 'string', 'max:255'],
            'nick' => ['required', 'string', 'max:255', 'unique:users, nick'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
        ]);*/
     
        $name = $request->input('name');
        $surname = $request->input('surname');
        $nick = $request->input('nick');
        $email = $request->input('email');


        var_dump($name);
        var_dump($surname);

        die();
    }
}
