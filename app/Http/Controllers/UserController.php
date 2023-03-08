<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //

    public function create(Request $request){

        $data = $request;
        $fullname = $data['firstName']. ' ' . $data['lastName'];

        $check = User::where('name', $fullname);

        // No user account
        if(is_null($check)){
        
            if($data['password'] == $data['passwordRetype']){
                $newUser = new User();
                $newUser->name = $fullname;
                $newUser->email = $data['email'];
                $newUser->password = $data['password'];
                $newUser->created_at = now();
                $newUser->updated_at = now();
                $newUser->save();
            }else{
                return redirect()->back()->with('error-message', "The passwords entered do not match!");
            }
            
        }else{
            return redirect()->back()->with('error-message', "You may already have an account try signing in!");
        }

        

        return redirect()->back()->with('success-message', "Account created");
    }
}
