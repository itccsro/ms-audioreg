@extends('layouts.datatables')

@section('main_container')
<div class="page-title">
    <div class="title_left">
        <h3>Utilizatori</h3>
    </div>
</div>
<div class="clearfix"></div>
<div class="row">
    {!! $dataTable->table() !!}
</div>
@endsection

@push('footer-scripts')
{!! $dataTable->scripts() !!}
@endpush