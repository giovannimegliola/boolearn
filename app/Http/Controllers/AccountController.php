<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Account;

class AccountController extends Controller
{
    public function index()
    {

        return view('login.index');
    }

    public function show()
    {
        return view('login.show');
    }
}
