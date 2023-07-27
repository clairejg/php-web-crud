<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Auth extends BaseController
{
    public function loginFunc(){
        
        return view('auth/loginView');
    }

    public function registerFunc()
    {
        // echo "Register page";
        return view('auth/registerView');

    }

    // save new user to database.
    public function registerUser()
    {
        //1.validate a user
        $validated= $this-> validate([
              //name of element
            'name'=> 'required',
            'email'=> 'required|valid_email',
            'password'=> 'required|min_length[5]|max_length[20]',
            'passwordConfirm' => 'required|min_length[5]|max_length[20]|matches[password]'

        ]);

        if(!validated)
        {
            return view('auth/register',['validation' => $this-> validator]);

        }
    }
}



