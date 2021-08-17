<?php

namespace App\Http\Controllers;

use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CartController extends Controller
{
    //
    public function save_cart(Request $request)
    {
        $product_id = $request->product_id_hidden;
        $product_info = DB::table('sanpham')->where('id', $product_id)->first();
        $data['id'] = $product_info->id;
        $data['qty'] = '1';
        $data['name'] = $product_info->tendaydu;
        $data['weight'] = '123';
        $data['price'] = $product_info->price;
        $data['options']['image'] = $product_info->anhdaidien;
        Cart::add($data);
        return Redirect('/checkout');
        
    }
    public function checkout()
    {
        $category = DB::table('danhmucsp')->orderby('id','desc')->get();
        
        return view('pages.checkout')->with('category',$category);
    }
    public function delete_cart($rowId){
        Cart::remove($rowId);
        return Redirect('/checkout');
    }
    public function update_cart_quantity(Request $request){
        $rowId = $request->cart_rowId;
        $quantity = $request->cart_quantity;
        Cart::update($rowId,$quantity);
        return Redirect('/checkout');
    }
    
}
