<?php

namespace App\DataTables;

use Yajra\Datatables\Datatables;
use Yajra\Datatables\Services\DataTable;
use DB;
use Illuminate\Database\Query\Builder as QueryBuilder;

class UsersDoctorDataTable extends DataTable
{
    /**
     * Display ajax response.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function ajax()
    {
        return $this->datatables
            ->queryBuilder($this->query())
            ->setTransformer(new \App\Transformers\UsersDoctorDataTableTransformer)
            ->make(true);
    }

    /**
     * Get the query object to be processed by dataTables.
     *
     * @return \Illuminate\Database\Eloquent\Builder|\Illuminate\Database\Query\Builder|\Illuminate\Support\Collection
     */
    public function query()
    {
        $query = DB::table('users')
                ->leftJoin('institutions', 'users.institution_id', '=', 'institutions.id')
                ->select($this->getDataColumns());

        return $this->applyScopes($query);
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\Datatables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
                    ->columns($this->getColumns())
                    ->ajax('');
    }

    protected function getDataColumns() {
        return array_column($this->getColumns(), 'name');
    }

    /**
     * Get columns.
     *
     * @return array
     */
    protected function getColumns()
    {
        return [
            ['data' => 'id',  'name' => 'users.id', 'title' => ''],
            ['data' => 'name',  'name' => 'users.name', 'title' => 'Nume'],
            ['data' => 'email',  'name' => 'users.email', 'title' => 'Email'],
            ['data' => 'cnp',  'name' => 'users.cnp', 'title' => 'CNP'],
            ['data' => 'institution',  'name' => 'institutions.name as institution', 'title' => 'Institution'],
            ['data' => 'created_at',  'name' => 'users.created_at', 'title' => 'Data adăugării'],
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'utilizatori_admin_' . time();
    }
}
