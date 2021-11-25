<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\RegistrationForm;

class RegistrationForm extends Model
{
    use HasFactory;
    protected $fillable=['fullnameh','religion','image','date','passportnumber','age','txtroomh','txtroadh','district','txtcityh','txtpincodeh','fullnamew','religionw','datew','passportnumberw','imagew', 'agew', 'txtroomw', 'txtroadw','districtw','txtcityw','txtpincodew'];
}
