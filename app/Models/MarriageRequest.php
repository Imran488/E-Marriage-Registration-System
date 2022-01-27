<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MarriageRequest extends Model
{
    use HasFactory;
    protected $fillable=['marriagedate','name','nid','date','address','email','contactnumber','status'];
}
