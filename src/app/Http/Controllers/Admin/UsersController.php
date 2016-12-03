<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\DataTables\UsersAdminDataTable;

class UsersController extends Controller
{
    public function index()
    {

    }

    public function showAdminUsers(UsersAdminDataTable $dataTable) {
        return $dataTable->render('admin.users.index');
    }
}
