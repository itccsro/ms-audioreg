<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\DataTables\UsersAdminDataTable;
use App\DataTables\Scopes\UsersAdminDataTableScope;

class UsersController extends Controller
{
    public function index()
    {

    }

    public function showAdminUsers(UsersAdminDataTable $dataTable) {
        return $dataTable->addScope(new UsersAdminDataTableScope())->render('admin.users.index');
    }
}
