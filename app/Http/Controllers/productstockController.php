<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;
use App\Models\Admin;
use App\Models\inward;
use App\Models\product_stock;
use Session;
use DB;

class productstockController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $stock = DB::table('product_stocks')
                ->join('products','product_stocks.pid','=','products.id')
                ->get();
        $data= array();
        if(Session::has('loginId')){
            $data = Admin::where('id','=', Session::get('loginId'))->first();
        }
        return view('stocktable',compact('stock','data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $product=product::get();
        $data= array();
        if(Session::has('loginId')){
            $data = Admin::where('id','=', Session::get('loginId'))->first();
        }
        return view('stockform',compact('product','data'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $pid=$request->get('pid');
        $stock=$request->get('stock');

        $insert=new product_stock([
            'pid'=>$pid,
            'stock'=>$stock
        ]);
        $insert->save();
        echo "<script> alert('Data Inserted')
        window.location.href='/stock';
        </script>";
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $edit=product_stock::find($id);
        $data= array();
        if(Session::has('loginId')){
            $data = Admin::where('id','=', Session::get('loginId'))->first();
        }
        return view('edit_stock',compact('edit','data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $pid=$request->get('pid');
        $stock=$request->get('stock');

        $update=product_stock::find($id);
        $update->pid=$pid;
        $update->stock=$stock;

        $update->update();
            echo "<script> alert('Updated')
            window.location.href='/stock';
            </script>";
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
