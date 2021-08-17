<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    public $timestamps = false;
    protected $fillable = ['tennhanxet','thongtinnhanxet','sp_id'];
    protected $table = 'nhanxet';
    protected $primaryKey = 'id';
    
}

