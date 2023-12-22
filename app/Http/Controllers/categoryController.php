<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\category;
use App\Models\Admin;
use Session;


class categoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $category=category::get();
        $data= array();
        if(Session::has('loginId')){
            $data = Admin::where('id','=', Session::get('loginId'))->first();
        }
        return view('categorytable',compact('category','data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {   
        $data= array();
        if(Session::has('loginId')){
            $data = Admin::where('id','=', Session::get('loginId'))->first();
        }
        return view('categoryform',compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {   
        $request->validate([
            'name'=>'required',
            'image'=>'required'
        ]);
        $name=$request->get('name');
        $image=$request->file('image');
        $imagetemp=$image->getClientOriginalName();
        $image->move('admin/image',$imagetemp);

        $insert=new category([
            'name'=>$name,
            'image'=>$imagetemp
        ]);
        $insert->save();
        echo "<script> alert('Data Inserted')
        window.location.href='/category';
        </script>";
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $show=category::find($id);
        $data= array();
        if(Session::has('loginId')){
            $data = Admin::where('id','=', Session::get('loginId'))->first();
        }
        return view('show_category',compact('show','data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $edit=category::find($id);
        $data= array();
        if(Session::has('loginId')){
            $data = Admin::where('id','=', Session::get('loginId'))->first();
        }
        return view('edit_category',compact('edit','data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {   
        $request->validate([
            'name'=>'required',
            'image'=>'required'
        ]);
        $name=$request->get('name');
        $image=$request->file('image');
        $imagetemp=$image->getClientOriginalName();
        $image->move('admin/image',$imagetemp);

        $update=category::find($id);
        $update->name=$name;
        $update->image=$imagetemp;

        $update->update();
        echo "<script> alert('Updated')
        window.location.href='/category';
        </script>";
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $delete=category::find($id);
        $delete->delete();
        echo "<script> alert('Record Deleted')
        window.location.href='/category';
        </script>";
    }
    
}
