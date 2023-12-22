<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user;
use App\Mail\MailNotify;
use Mail;
use Hash;
use Session;

class UserController extends Controller
{
    public function userlogin()
    {
        return view("userlogin");
    }
    public function userregistration()
    {
        return view("userregistration");
    }

    public function registerUser(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'email'=>'required|email|unique:users',
            'password'=>'required|min:5|max:10' //password 12345
        ]);
        $user = new user();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $res = $user->save();
        if($res){
            return back()->with('success','You Have Registered Successfully!');
        }else{
            return back()->with('fail','Something went wrong..');
        }

        // $mailData = [
        //     'title' => "Mail from Vertex",
        //     'body'=> "It's a testing mail",
        //  ];

        //  Mail::to($user->email)->send(new MailNotify($mailData));
        //  dd('Email send Successfully');
         //echo "<script>alert('Email send Successfully!')</script>";
    }

    public function loginUser(Request $request)
    {
        $request->validate([
            'email'=>'required|email',
            'password'=>'required|min:5|max:10'
        ]);
        $user = user::where('email','=', $request->email)->first();
        if($user){
            if(Hash::check($request->password, $user->password)){
                $request->session()->put('userloginId',$user->id);
                return redirect('index1');
            }else{
                return back()->with('fail','Password not matches.');
            }
        }else{
            return back()->with('fail','This email is not registered.');
        }
    }

    public function userlogout(Request $request)
    {
        $request->session()->flush();
        echo "<script>alert('Logout Successfully') 
        window.location.href='/index1';
        </script>";
        // if(Session::has('userloginId')){
        //     Session::pull('userloginId');
        //     return redirect('index1');
        // }
    }
}
