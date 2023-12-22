<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;
use App\Models\Admin;
use App\Models\inward;
use App\Models\product_stock;
use Session;
use DB;


class inwardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //$inward=inward::get();
        $inward = DB::table('inwards')
                ->join('products','inwards.pid','=','products.id')
                ->get();
        $data= array();
        if(Session::has('loginId')){
            $data = Admin::where('id','=', Session::get('loginId'))->first();
        }
        return view('inwardtable',compact('inward','data'));
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
        return view('inwardform',compact('product','data'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $pid=$request->get('pid');
        $stock=$request->get('stock');
        $date=$request->get('date');

        $productstock=product_stock::find($pid);
        $currentqty = $productstock -> stock;
        $updateqty = $currentqty + $stock;
        $productstock -> stock = $updateqty;
        $productstock->save();

        $insert=new inward([
            'pid'=>$pid,
            'stock'=>$stock,
            'date'=>$date,
        ]);
        $insert->save();
        echo "<script> alert('Data Inserted')
        window.location.href='/inward';
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
        $edit=inward::find($id);
        $data= array();
        if(Session::has('loginId')){
            $data = Admin::where('id','=', Session::get('loginId'))->first();
        }
        return view('edit_inward',compact('edit','data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $pid=$request->get('pid');
        $stock=$request->get('stock');
        $date=$request->get('date');

        $update=inward::find($id);
        $update->pid=$pid;
        $update->stock=$stock;
        $update->date=$date;

        $update->update();
        echo "<script> alert('Updated')
        window.location.href='/inward';
        </script>";
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $delete=inward::find($id);
        $delete->delete();
        echo "<script> alert('Record Deleted')
        window.location.href='/inward';
        </script>";
    }
}
