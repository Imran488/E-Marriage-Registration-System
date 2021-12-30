<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DevorceRequest extends Model
{
    use HasFactory;
    protected $fillable=['mid','name','address','email','contactnumber'];
}