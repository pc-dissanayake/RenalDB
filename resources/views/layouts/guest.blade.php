<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Renal DB') }}</title>
        <link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.4/dist/flowbite.min.css" />

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/js/all.min.js" integrity="sha512-rpLlll167T5LJHwp0waJCh3ZRf7pO6IT1+LZOhAyP6phAirwchClbTZV3iqL3BMrVxIYRbzGTpli4rfxsCK6Vw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body>
        <div class="font-sans text-gray-900 antialiased">
            <header>
  <nav class="bg-white border-gray-200 px-4 lg:px-6 py-2.5 dark:bg-gray-800 fixed">
    @if (Route::has('login'))
                <div class="bg-white fixed right-0 px-6 py-4 ">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="inline-flex items-center justify-center px-5 py-3 text-base font-medium text-center text-gray-900 border bg-white border-gray-300 rounded-lg hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 dark:text-white dark:border-gray-700 dark:hover:bg-gray-700 dark:focus:ring-gray-800">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="inline-flex items-center justify-center px-5 py-3 text-base font-medium text-center text-gray-900 border bg-white border-gray-300 rounded-lg hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 dark:text-white dark:border-gray-700 dark:hover:bg-gray-700 dark:focus:ring-gray-800">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="inline-flex items-center justify-center px-5 py-3 text-base font-medium text-center bg-white text-gray-900 border border-gray-300 rounded-lg hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 dark:text-white dark:border-gray-700 dark:hover:bg-gray-700 dark:focus:ring-gray-800">Register</a>
                        @endif
                    @endauth
                </div>
    @endif


              
              
      <div class="flex flex-wrap justify-between items-center bg-white">
          <div class="flex justify-start items-center bg-white">
              <a href="/" class="flex mr-4">
                <img src="{{ asset('https://img.pcdissanayake.com/var/albums/logo_renaldb-lk.png') }}" class="mr-3 h-16" alt="Renal Database Logo" />
                <span class="bg-white self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Renal Database</span>
              </a>

            </div>
            
            
                            <a class="p-2 mr-1 text-gray-500 rounded-lg hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-700 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600">
              </a>
      </div>
  </nav>
</header>

            {{ $slot }}
            <footer class="p-4 bg-white md:p-8 lg:p-10 dark:bg-gray-800">
  <div class="mx-auto max-w-screen-xl text-center">
      <a href="#" class="flex justify-center items-center text-2xl font-semibold text-gray-900 dark:text-white">
                     <img src="{{ asset('img/logo3.png') }}" class="mr-3 h-24" alt="Renal Database Logo" />

          Renal Database    
      </a>
      <p class="my-6 text-gray-500 dark:text-gray-400">Digitalizing the Paediatric renal patients for a better future.</p>
      <ul class="flex flex-wrap justify-center items-center mb-6 text-gray-900 dark:text-white">
          <li>
              <a href="#about" class="mr-4 hover:underline md:mr-6 ">About</a>
          </li>
          <li>
              <a href="#faq" class="mr-4 hover:underline md:mr-6">FAQs</a>
          </li>
          <li>
              <a href="/contact" class="mr-4 hover:underline md:mr-6">Contact</a>
          </li>
      </ul>
      <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2021-2022 . All Rights Reserved. Sri Lanka College of Paediatrics. Developed by <a href="https://pcdissanayake.com/" class="hover:underline">Dr. Prasanjith</a> with ❤ </span>
  </div>
</footer>
        </div>
                <script src="https://unpkg.com/flowbite@1.5.4/dist/flowbite.js"></script>

    </body>
</html>
