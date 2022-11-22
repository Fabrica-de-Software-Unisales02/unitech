<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Unitech</title>
    <link rel="icon" href="favicon-original.ico" type="image/x-icon" />
    <link rel="shortcut icon" href="favicon-original.ico" type="image/x-icon" />

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Gemunu+Libre:wght@500&family=Russo+One&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>

<body class="">
    <!-- Avisos em Geral -->
    <div class="toast-container position-fixed bottom-0 right-0 p-3">
    </div>
    <br>
    <!-- Loader -->
    <div class="loader top-50 start-50 translate-middle w-100 h-100 justify-content-center align-items-center d-none">
    <div class="lds-ellipsis"><div></div><div></div><div></div><div></div></div>
    <br>
    </div>
