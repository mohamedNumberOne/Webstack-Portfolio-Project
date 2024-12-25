<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h1 class="h1"> Welcome {{ Auth::user()->name }} <i class="fa-solid fa-user"></i> </h1>
                  
                    <p>
                       <div class="mb-3" > {{ __("You're logged in!") }} </div> 
                       <div class="mb-3" > <i class="fa-solid fa-envelope"></i> {{ Auth::user()->email }}   </div>
                      <div class="mb-3" >  <i class="fa-solid fa-users"></i> {{ Auth::user()->role }}  </div>
                    </p>
                </div>
            </div>
        </div>
    </div>


</x-app-layout>
