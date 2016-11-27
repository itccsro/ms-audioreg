@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">Fișierele mele</div>

            <table class="table">
                <tr>
                    <th>Identificator</th>
                    <th>Nume fișier</th>
                    <th>Data adăugării</th>
                </tr>
                @foreach ($uploads as $upload)
                    <tr>
                        <td>{{ $upload->id }}</td>
                        <td>{{ $upload->original_name }}</td>
                        <td>{{ $upload->created_at->format('d.m.Y H:i') }}</td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>
@endsection