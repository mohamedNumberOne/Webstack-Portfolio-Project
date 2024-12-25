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

                        <h1 class="text-lg text-center mt-5 mb-5 fs-2 ">
                            <i class="fa-solid fa-file-code"></i>
                            Add Project
                        </h1>

                        <div class="p-6 text-gray-900 dark:text-gray-100">
                            <div>



                                @if (session()->has('project_added'))
                                    <div class="alert alert-success text-center">
                                        {{ session('project_added') }}
                                    </div>
                                @endif




                                <form action="{{ route('store_project') }}" method="post"
                                    class="row g-3 needs-validation" enctype="multipart/form-data" novalidate>

                                    @csrf

                                    <div class="col-md-6">
                                        <label for="pro_name" class="form-label">project name</label>
                                        <input type="text" class="form-control" id="pro_name" name="project_name"
                                            aria-describedby="pro_name" required>
                                        @error('project_name')
                                            <span style="color: red;">{{ $message }}</span>
                                        @enderror
                                    </div>



                                    <div class="col-md-6 position-relative">
                                        <label for="photo" class="form-label">project Photo</label>
                                        <div class="input-group has-validation">
                                            <input type="file" class="form-control" id="photo" name="photo"
                                                aria-label="file example" required>
                                        </div>
                                        @error('photo')
                                            <span style="color: red;">{{ $message }}</span>
                                        @enderror
                                    </div>


                                    <div class="col-md-12 position-relative">
                                        <label for="details" class="form-label">Details</label>
                                        <textarea class="form-control" id="details" name="details" required></textarea>
                                        @error('details')
                                            <span style="color: red;">{{ $message }}</span>
                                        @enderror
                                    </div>


                                    <div class="col-12">
                                        <button class="btn btn-primary" name="add" type="submit">Add
                                            project</button>
                                    </div>

                                </form>


                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>

    <script>
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        // (() => {
        //   'use strict'

        //   // Fetch all the forms we want to apply custom Bootstrap validation styles to
        //   const forms = document.querySelectorAll('.needs-validation')

        //   // Loop over them and prevent submission
        //   Array.from(forms).forEach(form => {
        //     form.addEventListener('submit', event => {
        //       if (!form.checkValidity()) {
        //         event.preventDefault()
        //         event.stopPropagation()
        //       }

        //       form.classList.add('was-validated')
        //     }, false)
        //   })
        // })()
    </script>
</body>

</html>
