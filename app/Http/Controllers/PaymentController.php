<?php

namespace App\Http\Controllers;

use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class PaymentController extends Controller
{
    //
    public function payment()
    {
        $category = DB::table('danhmucsp')->orderby('id', 'desc')->get();
        return view('pages.payment')->with('category', $category);
    }
    public function payment_info(Request $request)
    {
        $data = array();
        $data['tennguoinhan'] = $request->tennguoinhan;
        $data['email'] = $request->email;
        $data['sodienthoai'] = $request->sodienthoai;
        $data['diachidonhang'] = $request->diachidonhang;
        $shipping_id = DB::table('giaohang')->insertGetId($data);
        Session::put('shipping', $shipping_id);
        return Redirect('/payment');
    }
    public function order1(Request $request)
    {
        //cash on delivery
        $data = array();
        $data['phuongthuc'] = $request->options;
        $data['trangthai'] = 'Pending';
        $payment_id = DB::table('thanhtoan')->insertGetId($data);
        
        //donhang
        $order_data = array();
        $order_data['khachhang_id'] = Session::get('id');
        $order_data['giaohang_id'] = Session::get('shipping');
        $order_data['thanhtoan_id'] = $payment_id;
        $order_data['tongtien'] = Cart::total();
        $order_data['trangthai'] = 'Pending';
        $order_id = DB::table('donhang')->insertGetId($order_data);
        
        //donhang_chitiet
        $content = Cart::content();
        foreach ($content as $value) {
            $order_details_data = array();
            $order_details_data['dh_id'] = $order_id;
            $order_details_data['sp_id'] = $value->id;
            $order_details_data['tensanpham'] = $value->name;
            $order_details_data['sotien'] = $value->price;
            $order_details_data['soluong'] = $value->qty;
            DB::table('donhang_chitiet')->insert($order_details_data);
        }
        /*
         if($data['phuongthuc']='Cash on delivery'){
         echo 'ATM';
         }elseif($data['phuongthuc']='Debit/Credit Card'){
         echo 'Card';
         }elseif($data['phuongthuc']='Paypal'){
         echo 'Paypal';
         }
         */
        if ($data['phuongthuc'] = 'Cash on delivery') {
            Cart::destroy();
            $category = DB::table('danhmucsp')->orderby('id', 'desc')->get();
            return view('pages.cod')->with('category', $category);
        }
    }
    public function order2(Request $request)
    {
        //credit/debit card
        $data = array();
        $data['phuongthuc'] = $request->options;
        $data['trangthai'] = 'Pending';
        $payment_id = DB::table('thanhtoan')->insertGetId($data);
        return Redirect('/payment');
    }
    public function order3(Request $request)
    {
        //paypal
        $data = array();
        $data['phuongthuc'] = $request->options;
        $data['trangthai'] = 'Pending';
        $payment_id = DB::table('thanhtoan')->insertGetId($data);
        return Redirect('/payment');
    }
}
