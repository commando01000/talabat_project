<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DriverController extends Controller
{
    public function create()
    {
        return view('Frontend.become-a-driver.index');
    }
}
