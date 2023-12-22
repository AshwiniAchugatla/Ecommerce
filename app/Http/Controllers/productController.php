<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\category;
use App\Models\product;
use App\Models\Admin;
use DB;
use Session;



class productController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   
        $product=product::simplePaginate(10);
        // $product = DB::table('products')
        //         ->join('categories','products.cid','=','categories.id')
        //         ->get();
        $data= array();
        if(Session::has('loginId')){
            $data = Admin::where('id','=', Session::get('loginId'))->first();
        }
        return view('producttable',compact('product','data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $product=category::get();
        $data= array();
        if(Session::has('loginId')){
            $data = Admin::where('id','=', Session::get('loginId'))->first();
        }
        return view('productform',compact('product','data'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {   
        $request->validate([
            'cid'=>'required',
            'name'=>'required',
            'image'=>'required',
            'description'=>'required',
            'price'=>'required'
        ]);
        $cid=$request->get('cid');
        $name=$request->get('name');

        $filename = [];
        foreach($request->file('image') as $image)
        {
            $imgname = $image->getClientOriginalName();
            $image->move(public_path().'/admin/image/',$imgname);
            $filename[] = $imgname;
        }
        $images = json_encode($filename);
        
        $description=$request->get('description');
        $price=$request->get('price');

        $insert=new product([
            'cid'=>$cid,
            'name'=>$name,
            'image'=>$images,
            'description'=>$description,
            'price'=>$price
        ]);
        $insert->save();
        echo "<script> alert('Data Inserted')
        window.location.href='/product';
        </script>";
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $category=category::get();
        $show=product::find($id);
        $data= array();
        if(Session::has('loginId')){
            $data = Admin::where('id','=', Session::get('loginId'))->first();
        }
        return view('show_product',compact('show','category','data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $edit=product::find($id);
        $data= array();
        if(Session::has('loginId')){
            $data = Admin::where('id','=', Session::get('loginId'))->first();
        }
        return view('edit_product',compact('edit','data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {   

        $request->validate([
            'cid'=>'required',
            'name'=>'required',
            'image'=>'required',
            'description'=>'required',
            'price'=>'required'
        ]);
        $cid=$request->get('cid');
        $name=$request->get('name');
        $description=$request->get('description');
        $price=$request->get('price');
        $image=$request->file('image');
        if($image!="")
        {
            $filename = [];
            foreach($request->file('image') as $image)
            {
                $imgname = $image->getClientOriginalName();
                $image->move(public_path().'/admin/image/',$imgname);
                $filename[] = $imgname;
            }
        $images = json_encode($filename);
            $update=product::find($id);
            $update->cid=$cid;
            $update->name=$name;
            $update->description=$description;
            $update->price=$price;
            $update->image=$images;

            $update->update();
            echo "<script> alert('Updated')
            window.location.href='/product';
            </script>";
        }
        else
        {
            $update=product::find($id);
            $update->cid=$cid;
            $update->name=$name;
            $update->description=$description;
            $update->price=$price;

            $update->update();
            echo "<script> alert('Updated')
            window.location.href='/product';
            </script>";
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $delete=product::find($id);
        $delete->delete();
        echo "<script> alert('Record Deleted')
        window.location.href='/product';
        </script>";
    }
}
