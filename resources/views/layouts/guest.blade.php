<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>GUEST {{ config('app.name', 'Laravel') }}</title>
        <link rel="shortcut icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Vite CSS -->
        @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    </head>

    <body class="font-sans antialiased text-gray-900">
        <!-- Custom Styles -->
        <style>
            .cascading-right {
                margin-right: -50px;
            }

            @media (max-width: 991.98px) {
                .cascading-right {
                    margin-right: 0;
                }
            }

            .container {
                height: 100%;
                align-content: center;
            }
        </style>

        <div class="container py-4 mx-auto">
            <div class="d-flex align-items-center">
                <!-- Left Column: Card -->
                <div class="mb-5 flex-grow-1">
                    <div class="card cascading-right bg-body-tertiary" style="backdrop-filter: blur(30px);">
                        <div class="p-5 text-center card-body shadow-5">
                            {{ $slot }}
                        </div>
                    </div>
                </div>
                <!-- Right Column: Image -->
                <div class="mb-5 flex-grow-1 bg-primary d-flex justify-content-center">
                    <img src="{{ asset('images/004.jpg') }}" class="rounded-4 shadow-4 w-100" alt="" />
                </div>
            </div>
        </div>

    </body>

</html>
