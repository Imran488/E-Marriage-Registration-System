<?php

namespace App\Models;

use App\Models\KaziForm;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class KaziForm extends Model
{
    use HasFactory;
    protected $table ="kazilist";
    protected $fillable=['name','email','password','confirmpassword','address'];
}
