<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class CheckoutController extends Controller
{
    //
    public function add_customer(Request $request)
    {
        $data = array();
        $data['tenkh'] = $request->tenkh;
        $data['email'] = $request->email;
        $data['matkhau'] = $request->matkhau;
        $data['sodienthoai'] = $request->sodienthoai;
        $data['diachi'] = $request->diachi;
        
        $customer_id = DB::table('khachhang')->insertGetId($data);
        Session::put('id', $customer_id);
        Session::put('Name', $request->tenkh);
        return Redirect('/mainpage');
    }
    public function checkout()
    {
    }
    public function logout()
    {
        Session::flush();
        return Redirect('/mainpage');
    }
    public function login_customer(Request $request)
    {
        $email = $request->email;
        //$password = md5($request->email);
        $password = $request->matkhau;
        $result = DB::table('khachhang')->where('email', $email)->where('matkhau', $password)->first();
        if ($result) {
            Session::put('id', $result->id);
            Session::put('tenkh', $result->tenkh);
            return Redirect('/mainpage');
        }
        return Redirect('/mainpage');
    }
    
}
