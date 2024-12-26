<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased">
    <div class="min-h-screen bg-gray-100 dark:bg-gray-900">
        @include('layouts.navigation')



        <!-- Page Content -->
        <main>

            <div class="py-12">

                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">


                        <div class="p-6 text-gray-900 dark:text-gray-100">

                            <div>


                                <div class="container text-center">

                                    <div class="row">
                                        <div class="col-md-7  ">
                                            <h1 class="h1 mb-3">
                                                <i class="fa-solid fa-file-code"></i>   {{ $product->product_name }} | 
                                                <span class="badge bg-primary p-1"> {{ $product-> price }} $ </span>
                                            </h1>
                                            <hr>
                                            <p class="mt-4 ">
                                                <i class="fa-solid fa-circle-info"></i> |
                                                {{ $product->product_details }}
                                            </p>

                                            <p class="text-start  ">
                                                <i class="fa-solid fa-calendar-days"></i> {{ $product->created_at ->format('Y/m/d') }}

                                            </p>
                                        </div>
                                        <div class="col-md-5 mb-4">

                                            <img src="{{ asset('storage/' . $product->product_photo) }}" alt="img"
                                                class="w-100">

                                        </div>
                                    </div>

                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>



</body>

</html>
