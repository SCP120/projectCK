<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $customer=Customer::find($id);
        
        //tra ve giao dien cung record vua tim dc
        if(!empty($customer)){
            return view('customer.edit',compact('customer'));//va cung dung de tra ve view('book.edit');
        }
        else{
            echo "<p>customer not found</p>";
        }
    }
    
    
    public function update(Request $req, $id)
    {
        $obj_id=Customer::find($id);
        //neu $Id nay dc tim thay, no se gan lai cac gia tri name,author, title ,... cua $req tuong tu la cac name trong input thoi
        //bai nay don gian co vay thoi
        $obj_id->kh_id = $req->kh_id;
        $obj_id->tenkh = $req->tenkh;
        $obj_id->email = $req->email;
       
        $obj_id->sodienthoai = $req->sodienthoai;
        $obj_id->diachi = $req->diachi;
        $obj_id->gioitinh=$req->gioitinh;
        
        //phan code $result o duoi chi de hien thi them message cho dep bai thoi nha
        $result=$obj_id->save();
        if($result){    
            return redirect()->route('customer.edit',$id)->with('message',"Edit your infor successful...");
        }
        else{
            return redirect()->route('customer.edit',$id)->with('message',"Some problems have occured...");
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
