@extends('layouts.datatables');

@section('content')
 {!! $dataTable->table() !!}
@endsection

@push('footer-scripts')
{!! $dataTable->scripts() !!}
@endpush