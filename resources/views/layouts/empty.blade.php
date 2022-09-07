<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>@yield('title') - {{ config('app.name') }}</title>
    <link rel="shortcut icon" href="{{ asset('icon-jambi.png') }}" type="image/x-icon">
    <style>
        @import url('https://rsms.me/inter/inter.css');

        :root {
            --tblr-font-sans-serif: Inter, -apple-system, BlinkMacSystemFont, San Francisco, Segoe UI, Roboto, Helvetica Neue, sans-serif !important;
        }
    </style>
    <!-- CSS files -->
    <link href="{{ mix('assets/css/app.css') }}" rel="stylesheet" />
</head>

<body class=" border-top-wide border-primary d-flex flex-column">
    <div class="page page-center">
        @yield('content')
    </div>
    <!-- Libs JS -->
    <!-- Tabler Core -->
    <script src="{{ mix('assets/js/app.js') }}" defer></script>
</body>

</html>
