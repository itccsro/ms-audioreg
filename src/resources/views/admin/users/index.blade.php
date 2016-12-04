@extends('layouts.datatables');

@section('main_container')
 {!! $dataTable->table() !!}
@endsection

@push('footer-scripts')
{!! $dataTable->scripts() !!}
@endpush