<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class patient extends Model
{
    protected $fillable=['name','email','mobile','password','country'];
    protected $table = 'patient_reg';
}