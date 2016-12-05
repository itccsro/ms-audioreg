<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\DataTables\UsersAdminDataTable;
use App\DataTables\UsersDoctorDataTable;
use App\DataTables\Scopes\UsersTypeDataTableScope;

class UsersController extends Controller
{
    public function index()
    {

    }

    public function showDoctorUsers(UsersDoctorDataTable $dataTable) {
        return $dataTable->addScope(new UsersTypeDataTableScope(\App\Role::DOCTOR))
                         ->render('admin.users.index', ['users_type' => 'Medici']);
    }

    public function showAdminUsers(UsersAdminDataTable $dataTable) {
        return $dataTable->addScope(new UsersTypeDataTableScope(\App\Role::ADMIN))
                         ->render('admin.users.index', ['users_type' => 'Aministratori']);
    }
}
