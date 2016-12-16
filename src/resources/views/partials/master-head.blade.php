<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">

<title>{{ config('app.name') }}</title>

<!-- Styles -->
<!-- Bootstrap -->
<link href="{{ asset("css/bootstrap.min.css") }}" rel="stylesheet">

<!-- Font Awesome -->
<link href="{{ asset("css/font-awesome.min.css") }}" rel="stylesheet">

<link rel="stylesheet" href="{{asset('css/iCheck-green.css')}}" />

<link href="{{ asset("css/bootstrap-progressbar.min.css") }}" rel="stylesheet">
<link href="{{ asset("css/jquery-jvectormap.css") }}" rel="stylesheet">

@stack('styles')

<!-- Custom Theme Style -->
<link href="{{ asset("css/gentelella.min.css") }}" rel="stylesheet">

<!-- Scripts -->
<script>
    window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
    ]); ?>
</script>
