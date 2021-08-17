<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InfoProduct extends Model
{
    use HasFactory;
    protected $table = 'thongtin';
    protected $fillable = ['tieude', 'quyenloi1', 'quyenloi2', 'quyenloi3', 'quyenloi4', 'baohanh','thongso1','thongso2','thongso3','thongso4','thongso5'];
    public $timestamps = false;
    //khi nao co table users thi se goi den function co ham belongTo de truyen foreign key...
}
