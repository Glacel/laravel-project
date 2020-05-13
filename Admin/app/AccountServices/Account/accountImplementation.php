<?php

namespace App\AccountServices\Account;

use App\AccountServices\Account\accountImplementation;
use App\Account;

class accountImplementation implements accountInterface{
    protected $accountlist;

    function __construct(Account $account) {
        $this->accountlist = $account;
    }
    public function getAccount()
    {
         return $this->accountlist->all();

    }
}