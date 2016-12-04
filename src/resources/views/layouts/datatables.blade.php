@extends('layouts.master')

@push('styles')
    <link rel="stylesheet" href="{{asset('css/datatables.css')}}" />
@endpush

@push('footer-scripts')
    <script type="text/javascript" charset="utf8" src="{{asset('js/datatables.js')}}"></script>
@endpush