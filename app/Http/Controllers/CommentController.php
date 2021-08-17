<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Product;
use App\Models\InfoProduct;
use App\Models\Comment;


class CommentController extends Controller
{
    public function send_comment(Request $request)
    {
       /* $validated=$request->validate([
            
            "tennhanxet"=>"required",
            "thongtinnhanxet"=>["required","max:500"]
        ],[
            "tennhanxet.required"=>"Name field must not be left",
            "thongtinnhanxet.required"=>"comment field must not be left",
            
            "thongtinnhanxet.max"=>"your comment is too long, please make it shorter & hope your comment still fullmeaning"
        ]);
        */
        //lam phuc tap hoa van de qua
        $sp_id = $request->sp_id;
        $tennhanxet = $request->tennhanxet;
        $thongtinnhanxet = $request->thongtinnhanxet;
        
        $comment = new Comment;
        $comment->tennhanxet = $tennhanxet;
        $comment->thongtinnhanxet = $thongtinnhanxet;
        $comment->sp_id = $sp_id;
        
        
        $comment->save();
    }
    
    public function load_comment(Request $request)
    {
        
        $sp_id = $request->sp_id;
        $comment = Comment::where('sp_id',$sp_id)->get();
        $output = '';
        foreach($comment as $key => $comm)
        {
            $output.= '
            <div class="d-flex justify-content-center">
            <div style="border: 2px solid #00cc00;width:70%; background-color: #F0F0E9; border-radius:8px;">
            
                <p class="py-2"><b>&nbsp;&nbsp;&nbsp;User</b> : <i style="color:green">@'.$comm->tennhanxet.'</i></p>
                <p class="pb-3"><b>&nbsp;&nbsp;&nbsp;Comment</b> : 
                <i>'.$comm->thongtinnhanxet.'</i>
                </p>
            
            </div>
        <p>&nbsp;</p>
            </div>
<p>&nbsp;</p>
            ';
        }
        
        echo $output;
    }
    
}
