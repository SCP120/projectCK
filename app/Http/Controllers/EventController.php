<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $event=DB::select('select * from sukien where id != 2');
        $event2=DB::select('select * from sukien where id = 2');
        
        return view('event.index',compact('event','event2'));
    }
    public function searchEvent(Request $request){
        $event=DB::select('select * from sukien where id != 2');
        $event2=DB::select('select * from sukien where id = 2');
        $keywords = $request->keywords_submit;
        $category =DB::select('select * from danhmucsp');
        $search = DB::table('sanpham')->where('tendaydu','like','%'.$keywords.'%')->get();
        return view('event.searchEvent')->with('search',$search)->with('category',$category)->with('event',$event)->with('event2',$event2);
        
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
