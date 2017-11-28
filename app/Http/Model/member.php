<?php

namespace App\Http\Model;

use Illuminate\DataBase\Eloquent\Model;

class member extends Model
{
    protected $table='members';
    protected $primaryKey='user_id';
    public $timestamps=false;
}