<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{
    public function AdminDashboard(){
        return view('backend.dashboard.dashboard',['products'=>Product::all()]);
    }
}
