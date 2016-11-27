@if(Auth::user()->isAdmin())
    <li role="presentation" @if(Request::is('patients')) class="active" @endif><a href="{{ route('patients') }}">Search patient</a></li>
@endif

@if(Auth::user()->isDoctor())
    <li role="presentation" class="active"><a href="#">Uploads</a></li>
@endif