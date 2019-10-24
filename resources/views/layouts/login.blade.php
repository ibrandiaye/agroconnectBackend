<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">

        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ config('app.name', 'Agroconnect') }}</title>
        <meta content="Agroconnect" name="description" />
        <meta content="Agroconnect" name="author" />
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <link href="/asset/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="/asset/css/metismenu.min.css" rel="stylesheet" type="text/css">
        <link href="/asset/css/icons.css" rel="stylesheet" type="text/css">
        <link href="/asset/css/style.css" rel="stylesheet" type="text/css">
        <script src="/asset/js/jquery.min.js"></script>

    </head>

    <body>
        @yield('content')

        <!-- jQuery  -->

        <script src="/asset/js/bootstrap.bundle.min.js"></script>
        <script src="/asset/js/metismenu.min.js"></script>
        <script src="/asset/js/jquery.slimscroll.js"></script>
        <script src="/asset/js/waves.min.js"></script>

        <!-- App js -->
        <script src="/asset/js/app.js"></script>

    </body>

</html>