<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('master.admin');
    }
    public function indexDetail()
    {
        return view('master.detailAdmin');
    }
}
