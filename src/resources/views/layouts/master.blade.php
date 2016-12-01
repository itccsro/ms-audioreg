<!DOCTYPE html>
<html lang="en">
<head>
    @include('partials.master-head')
</head>
<body>
    <div id="app">

        @include('partials.master-nav')

        <div class="container">
            @yield('content')
        </div>
    </div>

    @include('partials.master-scripts')
</body>
</html>
