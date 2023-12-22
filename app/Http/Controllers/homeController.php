<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\category;
use App\Models\product;
use App\Models\user;
use App\Models\contact;
use App\Models\shipping;
use App\Models\checkout;
use App\Models\ordertable;
use App\Models\product_stock;
use App\Mail\MailNotify;
use Mail;
use DB;
use Session;



class homeController extends Controller
{
    //home page
    public function index1(Request $request)
    {
        $category=category::get();
        $data1= array();
        if(Session::has('userloginId')){
            $data1 = user::where('id','=', Session::get('userloginId'))->first();
        }
        $res=$request->session()->get('cart');
        $cnt=0;
        if($res=="")
        {
            $cnt=0;
        }
        else
        {
            $cnt=count($res);  
        }
        $product=product::Paginate(8);
        return view('index1',compact('category','product','data1','cnt'));
    }

    // public function search(Request $request)
    // {
    //     $category=category::get();
    //     $data1= array();
    //     if(Session::has('userloginId')){
    //         $data1 = user::where('id','=', Session::get('userloginId'))->first();
    //     }
    //     $res=$request->session()->get('cart');
    //     $cnt=0;
    //     if($res=="")
    //     {
    //         $cnt=0;
    //     }
    //     else
    //     {
    //         $cnt=count($res);  
    //     }

    //     $search = $request['search'] ?? "";
    //     if($search!= ""){
    //         $product = product::where('name', 'LIKE', "%$search%")->get();
    //     }
    //     else{
    //         $product = product::all();
    //     }
    //     return view('search',compact('category','data1','cnt','search'));
    // }
    
    //shop page
    public function product(Request $request)
    {   
        $category=category::get();
        $data1= array();
        if(Session::has('userloginId')){
            $data1 = user::where('id','=', Session::get('userloginId'))->first();
        }
        $res=$request->session()->get('cart');
        $cnt=0;
        if($res=="")
        {
            $cnt=0;
        }
        else
        {
            $cnt=count($res);  
        }
        //$product=product::get();

        $search = $request['search'] ?? "";
        if($search!= ""){
            $product = product::where('name', 'LIKE', "%$search%")->get();
        }
        else{
            $product = product::all();
        }
        return view('shop',compact('category','product','data1','cnt','search'));
    }

    public function subproduct(Request $request, $id)
    {
        $category=category::get();
        $data1= array();
        if(Session::has('userloginId')){
            $data1 = user::where('id','=', Session::get('userloginId'))->first();
        }
        $res=$request->session()->get('cart');
        $cnt=0;
        if($res=="")
        {
            $cnt=0;
        }
        else
        {
            $cnt=count($res);  
        }
        $subproduct=DB::table('products')->where('products.cid','=',$id)->get();
        return view('subproduct',compact('category','subproduct','data1','cnt'));
    }

    //detail page
    public function detail(Request $request,$id)
    {   
        $category=category::get();
        $data1= array();
        if(Session::has('userloginId')){
            $data1 = user::where('id','=', Session::get('userloginId'))->first();
        }
        $res=$request->session()->get('cart');
        $cnt=0;
        if($res=="")
        {
            $cnt=0;
        }
        else
        {
            $cnt=count($res);  
        }
        $detail=DB::table('products')->where('products.id','=',$id)->first();
        return view('detail',compact('category','data1','detail','cnt'));
    }

    //cart page
    public function Addtocart(Request $request,$id)
    { 
        $product=product::find($id);
        $cart=$request->session()->get('cart',[]);
        if(isset($cart[$id]))
        {   
            $request->session()->put('cart',$cart);
            echo "<script>alert('Already Product Added') </script>";
        }
        else
        {
            $cart[$id]=[
                'id'=>$id,
                'name'=>$product->name,
                'price'=>$product->price,
                'quantity'=>1,
                'image'=>$product->image,
                
            ];
            $request->session()->put('cart',$cart);
            echo "<script>alert('Product Added') 
            window.location.href='/shoppingcart';
            </script>";
        }
    }
    
    public function viewcart(Request $request)
    {
        $category=category::get();

        $data1= array();
        if(Session::has('userloginId')){
            $data1 = user::where('id','=', Session::get('userloginId'))->first();
        }

        $view=$request->session()->get('cart');
        $res=$request->session()->get('cart');
        $cnt=0;
        if($res=="")
        {
            $cnt=0;
        }
        else
        {
            $cnt=count($res);  
        }
        return view('shoppingcart',compact('category','data1','view','cnt'));
    }

    public function increaseQuantity($id, $quantity)
    {
        $product = product::get($id);
        $quantity = $product->$quantity + 1;
        product::update($id,$quantity);                
    }

    public function decreaseQuantity($id, $quantity)
    {
        $product = product::get($id);
        $quantity = $product->$quantity - 1;
        product::update($id,$quantity);        
    }

    public function remove(Request $request,$id)
    {
        $remove=$request->session()->get('cart');
        if(isset($remove[$id]))
        {
            unset($remove[$id]);
            session()->put('cart',$remove);
        }
        echo "<script>alert('Remove Product')
        window.location.href='/shoppingcart';</script>";
    }

    //checkout page
    public function index(Request $request)
    {   
        $category=category::get();
        $data1= array();
        if(Session::has('userloginId')){
            $data1 = user::where('id','=', Session::get('userloginId'))->first();
        }
        $res=$request->session()->get('cart');
        $cnt=0;
        if($res=="")
        {
            $cnt=0;
        }
        else
        {
            $cnt=count($res);  
        }
        $viewcart=$request->session()->get('cart');
        
        return view('checkout',compact('category','data1','cnt','viewcart'));
    }

    public function shipping(Request $request)
    {   
        // $data1= array();
        // if(Session::has('userloginId')){
        //     $data1 = user::where('id','=', Session::get('userloginId'))->first();
        // }
        // $uid=DB::table('users')->where('users.email','=',$data1)->select('users.id as uid')->get();

       // print_r($uid);
        
        $request->validate([
            'name'=>'required|max:25|string',
            'email'=>'required|email',
            'mobileno'=>'required|numeric|min:10',
            'address'=>'required',
            'country'=>'required',
            'city'=>'required',
            'state'=>'required',
            'pincode'=>'required'
        ]);
        $name=$request->get('name');
        $email=$request->get('email');
        $mobileno=$request->get('mobileno');
        $address=$request->get('address');
        $country=$request->get('country');
        $city=$request->get('city');
        $state=$request->get('state');
        $pincode=$request->get('pincode');

        $shipping=new shipping([
            'name'=>$name,
            'email'=>$email,
            'mobileno'=>$mobileno,
            'address'=>$address,
            'country'=>$country,
            'city'=>$city,
            'state'=>$state,
            'pincode'=>$pincode
        ]);
        $shipping->save();

        $name=$request->get('name');
        $email=$request->get('email');
        $mobileno=$request->get('mobileno');
        $address=$request->get('address');
        $country=$request->get('country');
        $city=$request->get('city');
        $state=$request->get('state');
        $pincode=$request->get('pincode');
        $payment=$request->get('paymentmode');

        $cart=$request->session()->get('cart');
        $userLoginId=session()->get('userloginId');

        $total=0;
        $productname=[];
        foreach($cart as $c)
        {
            $productname[]=[$c['name']];
            $qty=$c['quantity'];
            $price=$c['price'];
            $pid=$c['id'];
            $total += $c['price'] * $c['quantity'];

            //order table
            $order=new ordertable([
                'uid'=>$userLoginId,
                'pid'=>$pid,
                'price'=>$price,
                'quantity'=>$qty   
            ]);
            $order->save();
        
        }

        $productstock=product_stock::find($pid);
        $currentqty = $productstock -> stock;
        $updateqty = $currentqty - $qty;
        $productstock -> stock = $updateqty;
        $productstock->save();

        $pname=json_encode($productname);

        $checkout=new checkout([
            'name'=>$name,
            'email'=>$email,
            'mobileno'=>$mobileno,
            'address'=>$address,
            'country'=>$country,
            'city'=>$city,
            'state'=>$state,
            'pincode'=>$pincode,
            'productname'=>$pname,
            'totalbill'=>$total,
            'paymentmode'=>$payment
        ]);
        Session::pull('cart');

        $mailData = [
            'title' => "Mail from Eshopper",
            'body'=> "Thank You for shopping! 
                        Please Visit Again...",
         ];
         Mail::to($email)->send(new MailNotify($mailData));

        $checkout->save();
        echo "<script> alert('Your Order Is Placed...Please Check Your Mail')
        window.location.href='/index1';
        </script>";
    }

    //contact page
    public function contact(Request $request)
    {
        $category=category::get();
        $data1= array();
        if(Session::has('userloginId')){
            $data1 = user::where('id','=', Session::get('userloginId'))->first();
        }
        $res=$request->session()->get('cart');
        $cnt=0;
        if($res=="")
        {
            $cnt=0;
        }
        else
        {
            $cnt=count($res);  
        }
        return view('contact',compact('category','data1','cnt'));
    }

    public function usercontact(Request $request)
    {   
        $request->validate([
            'name'=>'required|max:25|string',
            'email'=>'required|email',
            'subject'=>'required',
            'message'=>'required',
        ]);
        $name=$request->get('name');
        $email=$request->get('email');
        $subject=$request->get('subject');
        $message=$request->get('message');

        $contact=new contact([
            'name'=>$name,
            'email'=>$email,
            'subject'=>$subject,
            'message'=>$message
        ]);
        $contact->save();
        echo "<script> alert('Data Inserted')
        window.location.href='/contact';
        </script>";
    }
}
