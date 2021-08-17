<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pass;

class PasswordController extends Controller
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
        $password=Pass::find($id);
        
        //tra ve giao dien cung record vua tim dc
        if(!empty($password)){
            return view('password.edit',compact('password'));//va cung dung de tra ve view('book.edit');
        }
        else{
            echo "<p>password not found</p>";
        }
    }
    
    public function update(Request $req, $id)
    {
       
        $obj_id=Pass::find($id);
        $obj_id->matkhau=$req->matkhau;
        //neu $Id nay dc tim thay, no se gan lai cac gia tri name,author, title ,... cua $req tuong tu la cac name trong input thoi
        //bai nay don gian co vay thoi
        $result=$obj_id->save();
        
        if($result){
            return redirect()->route('password2.edit')->with('message',"Now write your new password...");
        }
        else{
            return redirect()->route('customer.edit',$id)->with('message',"Not match with your current password...");
        }
    }
    
    public function destroy($id)
    {
        //
    }
}
