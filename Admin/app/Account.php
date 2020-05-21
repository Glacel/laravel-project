<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = [
        'firstname','lastname', 'email','username','password','birthdayDate', 'birthdayMonth','birthdayYear','contactnumber','streetaddress','cityaddress','provinceaddress','usertype','status',
    ];
}
