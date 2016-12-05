<!DOCTYPE html>
<html lang="ro">
<head>
    @include('partials.master-head')
</head>
<body class="nav-md">

    <div class="container body">
        <div class="main_container">

            @include('partials/client-sidebar')

            @include('partials/client-topbar')

            <div class="right_col" role="main">
                @yield('main_container')
            </div>

            @include('partials/master-footer')

        </div>
    </div>

    @include('partials.master-scripts')
</body>
</html>
