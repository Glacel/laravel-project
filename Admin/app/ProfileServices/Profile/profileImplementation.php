<?php

namespace App\ProfileServices\Profile;

use App\ProfileServices\Profile\profileImplementation;
use App\Profile;

class profileImplementation implements profileInterface{
    protected $userprofile;

    function __construct(Profile $profile) {
        $this->userprofile = $profile;
    }
    public function getUserProfile()
    {
         return $this->userprofile->all();

    }
}