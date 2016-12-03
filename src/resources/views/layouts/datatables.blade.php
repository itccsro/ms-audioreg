@extends('layouts.master')

@push('styles')
    <link rel="stylesheet" href="{{asset('libraries/DataTables/datatables.min.css')}}" />
@endpush

@push('footer-scripts')
    <script type="text/javascript" charset="utf8" src="{{asset('libraries/DataTables/datatables.min.js')}}"></script>
@endpush