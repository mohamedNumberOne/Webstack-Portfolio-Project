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

                                <h1 class="text-lg text-center mt-2 mb-4 fs-2 ">
                                    <i class="fa-solid fa-comments"></i> | 
                                    Messages
                                </h1>

                                @php
                                    use Illuminate\Support\Str;
                                @endphp

                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <td> id </td>
                                            <td> Name </td>
                                            <td> email </td>
                                            <td> subject </td>
                                            <td> message </td>
                                            <td> about </td>
                                            <td> ip_user </td>
                                            <td> created_at </td>
                                            <td> updated_at </td>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        @foreach ($all_msg as $msg)
                                            <tr>
                                                <td> {{ $msg->id }}</td>
                                                <td> {{ $msg->name }} </td>
                                                <td> {{ $msg->email }} </td>
                                                <td> {{ $msg->subject }} </td>
                                                <td> {{ $msg->message }} </td>
                                                <td> {{ $msg->about }} </td>
                                                <td> {{ $msg->ip_user }} </td>
                                                <td> {{ $msg->created_at }} </td>
                                                <td> {{ $msg->updated_at }} </td>
                                            </tr>
                                        @endforeach
                                    </tbody>

                                </table>


                                <div class="row  ">


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
