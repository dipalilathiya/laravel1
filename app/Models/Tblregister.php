<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tblregister extends Model
{
   protected $table ='tblregister';
   protected $primaryKey = 'id';
   public $incrementing =true;
   public $timestamps = true;
   public $fillable = ['id' ,'name','email','password'];   
}
