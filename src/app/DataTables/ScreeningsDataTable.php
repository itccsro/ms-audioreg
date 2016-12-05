<?php

namespace App\DataTables;

use Yajra\Datatables\Services\DataTable;
use DB;
use Illuminate\Database\Query\Builder as QueryBuilder;

class ScreeningsDataTable extends DataTable
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
            ->setTransformer(new \App\Transformers\ScreeningsDataTableTransformer)
            ->make(true);
    }

    /**
     * Get the query object to be processed by dataTables.
     *
     * @return \Illuminate\Database\Eloquent\Builder|\Illuminate\Database\Query\Builder|\Illuminate\Support\Collection
     */
    public function query()
    {
        $query = DB::table('screening_tests')
            ->leftJoin('screenings', 'screening_tests.screening_id', '=', 'screenings.id')
            ->leftJoin('uploads', 'screenings.upload_id', '=', 'uploads.id')
            ->leftJoin('users', 'uploads.user_id', '=', 'users.id')
            ->leftJoin('institutions', 'users.institution_id', '=', 'institutions.id')
            ->select($this->getDataColumns());

        return $this->applyScopes($query);
    }

    protected function getDataColumns() {
        return array_column($this->getColumns(), 'name');
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

    /**
     * Get columns.
     *
     * @return array
     */
    protected function getColumns()
    {
        return [
            ['data' => 'id',  'name' => 'screening_tests.id', 'title' => ''],
            ['data' => 'cnp',  'name' => 'screenings.cnp', 'title' => 'CNP'],
            ['data' => 'first_name',  'name' => 'screenings.first_name', 'title' => 'Prenume'],
            ['data' => 'last_name',  'name' => 'screenings.last_name', 'title' => 'Nume'],
            ['data' => 'birthdate',  'name' => 'screenings.birthdate', 'title' => 'Data Nașterii'],
            ['data' => 'gender',  'name' => 'screenings.gender', 'title' => 'Sexul'],
            ['data' => 'institution',  'name' => 'institutions.name as institution', 'title' => 'Instituția'],
            ['data' => 'doctor',  'name' => 'users.name as doctor', 'title' => 'Medic'],
            ['data' => 'left_result',  'name' => 'screening_tests.left_result', 'title' => 'Rezultat stânga'],
            ['data' => 'right_result',  'name' => 'screening_tests.right_result', 'title' => 'Rezultat dreapta'],
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'screenings_' . time();
    }
}
