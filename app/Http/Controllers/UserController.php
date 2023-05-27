<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules\Password;

class UserController extends Controller
{
    public function register()
    {
        return view('register');
    }
    public function registerpost(Request $request)
    {
        $validator = Validator::make($request->all(), [
            //'name' => 'required',
            //'email' => 'required|email|unique:users',
            //'password' => 'required|min:8|confirmed',
            'name'=>'required|regex:/^[A-Z]+$/i',
            'email'=>'required|regex:/^.+@.+$/i|email|unique:users,email',
            'password'=>['required','string',
            Password::min(8)->letters()->numbers()->mixedCase()->symbols()->uncompromised(3)
        ],
      ]);
        
        if ($validator->fails()) {
            return view('register')->with('errors', $validator->errors());
           
        }
        $user= new User;
        $user->name=$request->name;
        $user->email=$request->email;
        //$user->password=Hash::make($request->password);
        $user->password=Hash::make($request->password);
        $user->save();
        return redirect('/register');
    
    }
    public function login()
    {
        return view('login');
    }
    public function loginuser(Request $request)
    {
      $user = User::where(['email'=>$request->email])->first();
       //return $user->password;
      if(!$user || !Hash::check($request->password,$user->password))
      {
         //return "Username or password is not matched";
         return redirect('/login');
      
      }
      else{
        $request->session()->put('user',$user); 
        return redirect('/'); 
      }
    }
}

