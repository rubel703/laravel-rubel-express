<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WidgetsController extends Controller
{
    public function widgets(){
        return view('backend.widget.widget');
    }
}
