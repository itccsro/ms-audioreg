@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
            <div class="panel-heading">Încărcare fișier screening</div>
            <div class="panel-body">
                <form class="form-horizontal" enctype="multipart/form-data" role="form"
                      method="POST" action="{{ url('/uploads') }}">
                    {{ csrf_field() }}

                    <div class="form-group{{ $errors->has('screenings') ? ' has-error' : '' }}">
                        <label for="email" class="col-md-4 control-label">Selectează fișierul XML</label>

                        <div class="col-md-6">
                            <input id="screenings" type="file" class="form-control" name="screenings" value="" required autofocus>

                            @if ($errors->has('screenings'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('screenings') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-8 col-md-offset-4">
                            <button type="submit" class="btn btn-primary">
                                Trimite
                            </button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="panel panel-body text-center">
                <span class="glyphicon glyphicon-info-sign"></span>
                <span>
                    Ultimul fișier a fost încărcat în data de 29 decembrie 2016.
                    Vezi <a href="{{ route('uploads') }}">aici</a> toate fișierele încărcate.
                </span>
            </div>
        </div>
    </div>
</div>
@endsection
