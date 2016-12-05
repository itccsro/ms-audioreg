<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\ScreeningsDataTable;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class ScreeningsController extends Controller
{
    public function index(ScreeningsDataTable $dataTable)
    {
        return $dataTable->render('admin.screenings.index');
    }

    public function show()
    {
    }
}
