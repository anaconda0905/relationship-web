<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <title>Relationshipstatusfinder | @yield('title')</title>
    <link rel="icon" href="{{ URL::asset('/images/favicon.png') }}" type="image/x-icon" />
    <!-- Bootstrap -->
    <link href="{{ URL::asset('/backend/vendors/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{ URL::asset('/backend/vendors/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/5.0.7/sweetalert2.min.css" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="{{ URL::asset('/backend/build/css/custom.css') }}" rel="stylesheet">
    <!-- Datatables -->
    <link rel="stylesheet"
        href="{{ URL::asset('/backend/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">
    <link rel="stylesheet"
        href="{{ URL::asset('/backend/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css') }}">
    @yield('style')
</head>

<body class="nav-md">
    <div class="container body">
        <div class="main_container">