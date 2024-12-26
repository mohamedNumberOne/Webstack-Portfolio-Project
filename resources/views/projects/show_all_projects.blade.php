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

                                <h1 class="text-lg text-center mt-2 mb-2 fs-2 "> Our Works </h1>

                                @php
                                    use Illuminate\Support\Str;
                                @endphp


                                <div class="row  ">
                                    @foreach ($all_projects as $project)
                                        <div class="card m-3 p-0" style="width:350px;">
                                            <img src="{{ asset('storage/' . $project->project_photo) }}"
                                                class="card-img-top" alt="photo" width="100%"   style="height: 200px"  >
                                            <div class="card-body">
                                                <h6 class="card-title ">
                                                    <i class="fa-solid fa-file-code"></i> {{ $project->project_name }}
                                                </h6>
                                                <hr class="mt-2 mb-1">

                                                <p class="card-text mt-1 mb-1">
                                                    {{ Str::limit($project->project_details, 50) }}
                                                </p>

                                                <span class="btn btn-secondary text-sm  mt-2   ">
                                                    <p> <i class="fa-solid fa-calendar-days"></i>
                                                        {{ $project->created_at->format('Y-m-d') }} </p>
                                                </span>

                                                <a href="{{ route('display_project', $project->id) }}"
                                                    class="btn btn-primary   mt-2 ">
                                                    <p> <i class="fa-solid fa-circle-info"></i> View More ... </p>
                                                </a>
                                                @if (auth()->user()->role == 'admin')
                                                    <form action="{{ route('delete_project', $project->id) }}" method="post" >
                                                        @csrf
                                                        <button type="submit" value="delete" class="btn btn-danger mt-2 p-1 text-white">
                                                            Delete
                                                        </button>
                                                    </form>
                                                @endif

                                            </div>
                                        </div>
                                    @endforeach

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
