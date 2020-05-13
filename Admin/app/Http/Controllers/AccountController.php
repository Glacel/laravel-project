<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AccountServices\Account\accountInterface;

class AccountController extends Controller
{
    protected $usersaccount;
    public function __construct(accountInterface $accountinterface) {
        $this->usersaccount = $accountinterface;
    }

    function index()
    {
       $data = $this->usersaccount->getAccount();
        return view('admin.dashboard', ['data'=>$data]);
    }
}
