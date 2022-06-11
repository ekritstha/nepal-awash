<!DOCTYPE html>
<html lang="en">

<head>
    @yield('title')
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    @include('frontend.partial.meta')

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('static/logo.jpg') }}" />

    @include('frontend.partial.css')
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

</head>

<body>

    <div id="preloder">
        <div class="loader"></div>
    </div>
    @include('frontend.partial.header')
    @yield('breadcrumb')
    @yield('main-content')

    @include('frontend.partial.footer')
    @include('frontend.partial.script')

</body>

</html>
