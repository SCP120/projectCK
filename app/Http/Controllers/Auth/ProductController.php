<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Product;
use App\Models\InfoProduct;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $obj2=Product::paginate(12);
        $obj3=DB::select('select * from sanpham where id between 5 and 7');
        $obj4=DB::select('select * from sanpham where id between 8 and 10');
        $obj5=DB::select('select * from sanpham where id between 11 and 13');
        $category =DB::select('select * from danhmucsp');
        
        
        return view('product.index',compact('obj2','obj3','obj4','obj5','category'));
    }
    public function show_category($id){
        $category = DB::table('danhmucsp')->orderby('id','desc')->get();
        $category_by_id = DB::table('sanpham')->join('danhmucsp','sanpham.danhmuc_id','=',
            'danhmucsp.id')->where('sanpham.danhmuc_id','=',$id)->get();
        return view('pages.show_category')->with('category',$category)->with('category_by_id',$category_by_id);
        //$category_by_id de lay ra list cac san pham co id foreign cua thang danhmucsp
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
        //$obj1 = Product::paginate(3);
        $detail1=DB::select('select * from sanpham where id between 2 and 4');
        $detail3=DB::select('select * from sanpham where id between 5 and 7');
        $info1=InfoProduct::find($id);
        //$obj1=Detail::paginate(3);
        $detail2=Product::find($id);//detail la table chua cac san pham nha
        if(!empty($detail2)){
            return view('product.show',compact('detail2','detail1','detail3','info1'));
        }
        else{
            echo "<h3>Product's detail not found</h3>";
            
        }
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
