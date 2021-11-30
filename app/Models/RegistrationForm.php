<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\RegistrationForm;

class RegistrationForm extends Model
{
    use HasFactory;
    protected $fillable=['fullnameh','religion','imageh','signatureh','date','passportnumber','age','txtroomh','txtroadh','district','txtcityh','txtpincodeh','fullnamew','religionw','datew','passportnumberw','imagew','signaturew','agew','txtroomw','txtroadw','districtw','txtcityw','txtpincodew','witnessname1','witnessaddress1','witnessname2','witnessaddress2','witnessname3','witnessaddress3'];
}
