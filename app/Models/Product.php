<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'sanpham';
    protected $fillable = ['sp_id', 'tendaydu', 'nguoiban_id', 'price', 'xuatxu_id', 'danhmuc_id','mota','trangthai','anhdaidien'];
    public $timestamps = false;
    //khi nao co table users thi se goi den function co ham belongTo de truyen foreign key...
}
