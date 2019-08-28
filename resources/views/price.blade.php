<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>TailwindCss</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Exo&display=swap" rel="stylesheet">
    <style>
        body{
            font-family: 'Exo', sans-serif;
        }
    </style>
</head>
<body class="p-6">

<div class="container mx-auto">
    <header class="text-center my-8">
        <h1 class="text-gray-600 font-extrabold text-3xl">PRCING</h1>
        <span class="text-gray-500">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</span>
    </header>
    <div class="flex flex-wrap justify-center">
        @include('single',['name'=>'Monthly','amount'=>15])
        @include('single',['name'=>'Yearly','amount'=>120])
        @include('single',['name'=>'Forever','amount'=>420])
    </div>
</div>
</body>
</html>
