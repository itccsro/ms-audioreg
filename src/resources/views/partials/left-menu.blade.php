@if(Auth::user()->isAdmin())
    <li role="presentation" @if() class="active" @endif><a href="{{ route('patients') }}">Search patient</a></li>
@endif

@if(Auth::user()->isDoctor())
    <li role="presentation" class="active"><a href="{{ route('uploads') }}">Uploads</a></li>
@endif