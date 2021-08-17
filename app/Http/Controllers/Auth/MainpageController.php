<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class MainpageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category =DB::select('select * from danhmucsp');
        
        
        $dtmain = DB::table('sanpham')
        ->whereIn('id', [2, 8, 15])
        ->get();
        $apps = DB::table('sanpham')
        ->whereIn('id', [25, 26, 27])
        ->get();
        $apps2 = DB::table('sanpham')
        ->whereIn('id', [20, 21, 22])
        ->get();
        return view('mainpage.index',compact('category','dtmain','apps','apps2'));
    }
    public function search(Request $request){
        $keywords = $request->keywords_submit;
        $category =DB::select('select * from danhmucsp');
        $search = DB::table('sanpham')->where('tendaydu','like','%'.$keywords.'%')->get();
        return view('mainpage.search')->with('search',$search)->with('category',$category);
        
    }
    
    
    public function show2(){
      
        $category =DB::select('select * from danhmucsp');
        $category_by_id2 = DB::table('sanpham')->join('danhmucsp','sanpham.danhmuc_id','=',
            'danhmucsp.id')->select('sanpham.*')->where('sanpham.danhmuc_id','<',7)->paginate(12);
        return view('mainpage.show2',['category_by_id2'=>$category_by_id2],['category'=>$category]);
    }
    public function showprice1(){
        $category =DB::select('select * from danhmucsp');
        $category_price1= DB::table('sanpham')->select('sanpham.*')->where('sanpham.price','<',100)->paginate(12);
        return view('mainpage.showprice1',['category_price1'=>$category_price1],['category'=>$category]);
    }
    public function showprice2(){
        $category =DB::select('select * from danhmucsp');
        $category_price2= DB::table('sanpham')->select('sanpham.*')->where('sanpham.price','>=',100)->where('sanpham.price','<',200)->paginate(12);
        return view('mainpage.showprice2',['category_price2'=>$category_price2],['category'=>$category]);
    }
    public function showprice3(){
        $category =DB::select('select * from danhmucsp');
        $category_price3= DB::table('sanpham')->select('sanpham.*')->where('sanpham.price','>=',200)->where('sanpham.price','<',300)->paginate(12);
        return view('mainpage.showprice3',['category_price3'=>$category_price3],['category'=>$category]);
    }
    public function showprice4(){
        $category =DB::select('select * from danhmucsp');
        $category_price4= DB::table('sanpham')->select('sanpham.*')->where('sanpham.price','>=',300)->where('sanpham.price','<',400)->paginate(12);
        return view('mainpage.showprice4',['category_price4'=>$category_price4],['category'=>$category]);
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
