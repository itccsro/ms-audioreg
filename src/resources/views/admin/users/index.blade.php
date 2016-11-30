@extends('layouts.app')

@section('content')
 @if(!empty($text))
  <div class="container">{!! $text !!}</div>
 @endif
 <div class="container">
  <style>
   #example_grid1 td {
    white-space: nowrap;
   }
  </style>
  <?= $grid ?>
 </div>
@stop