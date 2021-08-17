<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DanhMucController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id){
        $category = DB::table('danhmucsp')->select('danhmucsp.*')->where('danhmucsp.id','=',$id)->get();
        $category2 =DB::select('select * from danhmucsp');
      //dd($category);
        
        $category_by_id = DB::table('sanpham')->join('danhmucsp','sanpham.danhmuc_id','=',
            'danhmucsp.id')->select('sanpham.*')->where('sanpham.danhmuc_id','=',$id)->paginate(12);
       
        return view('category.show', compact('category','category_by_id','category2'));
        //$category_by_id de lay ra list cac san pham co id foreign cua thang danhmucsp
    }
}
