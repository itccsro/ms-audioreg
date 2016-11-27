@if(Auth::user()->isAdmin())
    <li role="presentation" class="{{ active('patients') }}"><a href="{{ route('patients') }}">Cauta pacient</a></li>
@endif

@if(Auth::user()->isDoctor())
    <li role="presentation" class="{{ active('uploads') }}"><a href="{{ route('uploads') }}">Fisiere urcate</a></li>
@endif