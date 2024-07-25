<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>GUEST {{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Vite CSS -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body class="font-sans text-gray-900 antialiased">
    <!-- Section: Design Block -->
    <section class="text-lg-start text-center">
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
                max-height: 100vh;
            }
        </style>

        <!-- Jumbotron -->
        <div class="container py-4 mx-auto">
            <div class="row g-0 align-items-center">
                <div class="col-lg-6 mb-lg-0 mb-5">
                    <div class="card cascading-right bg-body-tertiary" style="backdrop-filter: blur(30px);">
                        <div class="card-body shadow-5 p-5 text-center">
                            {{ $slot }}
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mb-lg-0 mb-5">
                    <img src="{{ asset('images/004.jpg') }}" class="rounded-4 shadow-4" alt="" style="height: 42rem"/>
                </div>
            </div>
        </div>
    </section>
</body>

</html>
