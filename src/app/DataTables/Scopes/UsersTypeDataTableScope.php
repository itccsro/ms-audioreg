<?php

namespace App\DataTables\Scopes;

use Yajra\Datatables\Contracts\DataTableScopeContract;

class UsersTypeDataTableScope implements DataTableScopeContract
{

    protected $UserTypeScope;

    public function __construct($UserType)
    {
        $this->UserTypeScope = $UserType;
    }

    /**
     * Apply a query scope.
     *
     * @param \Illuminate\Database\Query\Builder|\Illuminate\Database\Eloquent\Builder $query
     * @return mixed
     */
    public function apply($query)
    {
        return $query->where('role', $this->UserTypeScope);
    }
}
