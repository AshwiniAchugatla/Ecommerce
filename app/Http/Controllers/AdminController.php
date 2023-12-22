<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\user;
use App\Models\shipping;
use App\Models\ordertable;
use App\Models\checkout;
use Hash;
use Session;

class AdminController extends Controller
{
    public function login()
    {
        return view("login");
    }
    public function registration()
    {
        return view("registration");
    }

    public function registerAdmin(Request $request)
    {
        //echo 'Value Posted';
        $request->validate([
            'name'=>'required',
            'email'=>'required|email|unique:admins',
            'password'=>'required|min:5|max:10' //password 123456
        ]);
        $admin = new Admin();
        $admin->name = $request->name;
        $admin->email = $request->email;
        $admin->password = Hash::make($request->password);
        $res = $admin->save();
        if($res){
            return back()->with('success','You Have registered successfully');
        }else{
            return back()->with('fail','Something went wrong');
        }
    }

    public function loginAdmin(Request $request)
    {
        $request->validate([
            'email'=>'required|email',
            'password'=>'required|min:5|max:10'
        ]);
        $admin = Admin::where('email','=', $request->email)->first();
        if($admin){
            if(Hash::check($request->password, $admin->password)){
                $request->session()->put('loginId',$admin->id);
                return redirect('index');
            }else{
                return back()->with('fail','Password not matches.');
            }
        }else{
            return back()->with('fail','This email is not registered.');
        }
    }

    public function logout(){
        if(Session::has('loginId')){
            Session::pull('loginId');
            return redirect('login');
        }
    }

    //dashdoard
    public function index()
    {   
        $data= array();
        if(Session::has('loginId')){
            $data = Admin::where('id','=', Session::get('loginId'))->first();
        }
        return view('index',compact('data'));
    }

    //user register
    public function user()
    {
        $user=user::get();
        $data= array();
        if(Session::has('loginId')){
            $data = Admin::where('id','=', Session::get('loginId'))->first();
        }
        return view('userregister',compact('user','data'));
    }

    public function userregister_delete($id)
    {
        $delete=user::find($id);
        $delete->delete();
        echo "<script>alert ('Record Deleted')
        window.location.href='/userregister';
        </script>";
    }

    //user shipping details
    public function shippingdetails()
    {
        $shipping=shipping::get();
        $data= array();
        if(Session::has('loginId')){
            $data = Admin::where('id','=', Session::get('loginId'))->first();
        }
        return view('shippingdetails',compact('shipping','data'));
    }

    public function shippingdetails_delete($id)
    {
        $delete=shipping::find($id);
        $delete->delete();
        echo "<script>alert ('Record Deleted')
        window.location.href='/shippingdetails';
        </script>";
    }

    //user order details
    public function orderdetails()
    {
        $order=ordertable::get();
        $data= array();
        if(Session::has('loginId')){
            $data = Admin::where('id','=', Session::get('loginId'))->first();
        }
        return view('orderdetails',compact('order','data'));
    }

    public function orderdetails_delete($id)
    {
        $delete=ordertable::find($id);
        $delete->delete();
        echo "<script>alert ('Record Deleted')
        window.location.href='/orderdetails';
        </script>";
    }

    //user checkout details
    public function checkoutdetails()
    {
        $checkout=checkout::get();
        $data= array();
        if(Session::has('loginId')){
            $data = Admin::where('id','=', Session::get('loginId'))->first();
        }
        return view('checkoutdetails',compact('checkout','data'));
    }
    
    public function checkoutdetails_delete($id)
    {
        $delete=checkout::find($id);
        $delete->delete();
        echo "<script>alert ('Record Deleted')
        window.location.href='/checkoutdetails';
        </script>";
    }

}
