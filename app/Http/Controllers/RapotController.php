<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RapotController extends Controller
{
    public function index()
    {
        return view('master.rapot');
    }
}
