<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Part extends Model
{
    use HasFactory;
    protected $table='partners';
    protected $fillable=[
        'name',
    
        'sector',
        'address',
        'num_emp' ,
        'image',
        'id_city',


    ];
  public function city(){

    return $this->belongsTo(cities::class,'id_city','id');
  }
}
