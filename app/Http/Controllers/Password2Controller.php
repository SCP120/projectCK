<?php

namespace App\Http\Controllers;

use App\Models\Pass;
use Illuminate\Http\Request;

class Password2Controller extends Controller
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
        $password2=Pass::find($id);
        
        //tra ve giao dien cung record vua tim dc
        if(!empty($password2)){
            return view('password2.edit',compact('password2'));//va cung dung de tra ve view('book.edit');
        }
        else{
            echo "<p>password not found</p>";
        }
    }
    
    public function update(Request $req, $id)
    {
        $obj_id=Pass::find($id);
        //neu $Id nay dc tim thay, no se gan lai cac gia tri name,author, title ,... cua $req tuong tu la cac name trong input thoi
        //bai nay don gian co vay thoi
        $obj_id->matkhau = $req->matkhau;
        
        
        //phan code $result o duoi chi de hien thi them message cho dep bai thoi nha
        $result=$obj_id->save();
        if($result){
            return redirect()->route('customer.edit',$id)->with('message',"Edit your password successful...");
        }
        else{
            return redirect()->route('password2.edit',$id)->with('message',"Some problems have occured...");
        }
        
    }
    public function destroy($id)
    {
        //
    }
}
