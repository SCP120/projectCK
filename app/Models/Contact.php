<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    protected $table = 'gopy';
    // khai báo các cột trong bảng có thể được save, create thông qua model
    protected $fillable = ['tenkhachhang','email','noidung'];
    public $timestamps = false;
    //khi nao co table users thi se goi den function co ham belongTo de truyen foreign key...
    
}
