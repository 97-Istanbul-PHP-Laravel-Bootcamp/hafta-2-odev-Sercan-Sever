<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SalesController extends Controller
{
    public function index()
    {
        return view('admin.sales.salesList');
    }

    public function view()
    {
        return view('admin.sales.salesView');
    }
}
