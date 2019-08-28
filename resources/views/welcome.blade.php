<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->

        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link href="https://fonts.googleapis.com/css?family=Exo&display=swap" rel="stylesheet">
        <style>
            body{
                font-family: 'Exo', sans-serif;
            }
        </style>
    </head>
    <body class="p-4">
        <div class="container mx-auto">
            <header class="text-center p-10">
                <h1 class="text-gray-700 uppercase mb-2 font-extrabold leading-tight text-lg">Pricing</h1>
                <p class="text-gray-600">Choose one, that suits ya!</p>
            </header>
            <div class="flex flex-wrap justify-center items-center">
                {{-- Sinlgeton --}}
                @include('plan',
                    [
                        'name'=>'Monthly',
                        'price'=>15
                    ]
                )
                @include('plan',
                    [
                        'name'=>'Yearly',
                        'price'=>30
                    ]
                )
                @include('plan',
                    [
                        'name'=>'Forever',
                        'price'=>300
                    ]
                )

            </div>
        </div>
    </body>
</html>
