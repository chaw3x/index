<!DOCTYPE html>
  <html lang="es">
    <head>
        <meta charset="utf-8">
        <!-- Preconnect for faster external resource fetching -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link rel="preconnect" href="https://www.google.com">

        <!-- Google Icon Font (preload for critical icons) -->
        <link rel="preload" as="style" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

        <!-- Materialize CSS (critical CSS first) -->
        <link rel="preload" as="style" href="{{ asset('css/materialize.min.css') }}">
        <link type="text/css" rel="stylesheet" href="{{ asset('css/materialize.min.css') }}" media="screen,projection">

        <!-- Master CSS (defer non-critical) -->
        <link rel="stylesheet" href="{{ asset('css/master.min.css') }}?v={{ env('VERSION_PUBLIC') }}" media="print" onload="this.media='all'">

        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title>Ing. Frank Catamo</title>
        <meta name="description" content="Portafolio personal y profesional de Frank Catamo.">
        <link rel="shortcut icon" href="{{ asset('images/icon.ico') }}?v={{ env('VERSION_PUBLIC') }}" type="image/x-icon">
        <link rel="icon" href="{{ asset('images/logo.png') }}?v={{ env('VERSION_PUBLIC') }}" type="image/png">

        <!-- Defer reCAPTCHA script -->
        <script src="https://www.google.com/recaptcha/api.js?render=6Ldm8a4qAAAAAE_Cw_bnj3F7vMub8EjGoDgeE7g7" defer></script>


        <!-- Google tag (gtag.js) -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-BJBGN0GCJ1"></script>
        <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-BJBGN0GCJ1');
        </script>
    </head>
    <body>
