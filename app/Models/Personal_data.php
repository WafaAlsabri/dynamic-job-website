<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personal_data extends Model
{
    use HasFactory;
    protected $table='personal_infos';
    protected $fillable=[
        'name',
    
        'email',
        'address',
        'profile' ,

    ];
}
