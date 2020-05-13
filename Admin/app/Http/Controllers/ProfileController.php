<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ProfileServices\Profile\profileInterface;
class ProfileController extends Controller
{
    protected $profile;
    public function __construct(profileInterface $profileinterface) {
        $this->profile = $profileinterface;
    }

    function index()
    {
       $data = $this->profile->getUserProfile();
        return view('userprofile', ['data'=>$data]);
    }
}
