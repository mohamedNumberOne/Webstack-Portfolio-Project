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
                                                <i class="fa-solid fa-file-code"></i> | {{ $project->project_name }}
                                            </h1>
                                            <hr>
                                            <p class="mt-4 ">
                                                <i class="fa-solid fa-circle-info"></i> |
                                                {{ $project->project_details }}
                                            </p>

                                            <p class="text-start  ">
                                                <i class="fa-solid fa-calendar-days"></i> {{ $project->created_at }}

                                            </p>
                                        </div>
                                        <div class="col-md-5 mb-4">

                                            <img src="{{ asset('storage/' . $project->project_photo) }}" alt="img"
                                                class="w-100">

                                        </div>
                                    </div>
                                    <hr>

                                    <div class="   mt-5 ">
                                        <h2 class="h2"> <i class="fa-solid fa-comments"></i> | Comments </h2>

                                        @if ( session() -> has('success')  )
                                          <div class="alert alert-success">  {{  session("success")  }} </div>
                                        @endif

                                        <div class="container   text-start">
                                            <ul class="list-group">
                                                <li class="list-group-item active" aria-current="true">
                                                    All Comments :
                                                </li>
                                                @foreach ($users as $user)
                                                    <li class="list-group-item">
                                                        <i class="fa-regular fa-comment"></i>
                                                        <span class="badge rounded-pill text-bg-primary ">
                                                            {{ $user->pivot->created_at->format('Y-m-d') }}
                                                        </span>
                                                        
                                                        <span class=" badge bg-success rounded-pill " > {{ $user->name }} </span> : {{ $user->pivot->comment }}
                                                    </li>
                                                @endforeach

                                            </ul>

                                            <form action="{{ route('add_comment' , $project-> id ) }}"  method="post" >
                                                @csrf 
                                                <textarea name="comment" class="form-control mt-4 mb-4" cols="30" rows="10"
                                                 placeholder="add comment..."></textarea>

                                                <input type="submit" value="add comment" class="btn btn-primary "  name="submit" >

                                            </form>

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
