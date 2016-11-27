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
                    <th>Rezultat încărcare</th>
                    <th>Data adăugării</th>
                </tr>
                @foreach ($uploads as $upload)
                    <tr>
                        <td>{{ $upload->id }}</td>
                        <td>{{ $upload->original_name }}</td>
                        <td>
                            Pacienți salvați:
                            <strong>{{ $upload->valid_patients }}</strong><br>

                            Pacienți ignorați:
                            <strong>{{ $upload->ignored_patients }}</strong><br>

                            Teste salvate:
                            <strong>{{ $upload->valid_tests }}</strong><br>

                            Teste ignorate:
                            <strong>{{ $upload->ignored_tests }}</strong>
                        </td>
                        <td>{{ $upload->created_at->format('d.m.Y H:i') }}</td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>
@endsection