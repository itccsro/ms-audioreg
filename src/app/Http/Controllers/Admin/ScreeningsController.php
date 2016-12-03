<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class ScreeningsController extends Controller
{
    public function index()
    {
        return view('admin.screenings.index');
    }

    public function show()
    {
    }
}
