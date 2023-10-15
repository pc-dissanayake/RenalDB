<div class="p-6 sm:px-20 bg-white border-b border-gray-200">
    <div>
        <x-jet-application-logo class="block h-12 w-auto" />
    </div>
    <div class="my-4 text-2xl text-center ">
        Welcome to the Renal Database !
    </div>   
   <div class="py-2 mx-auto max-w-screen-xl lg:py-6 lg:px-4 ">
    <h4 class="text-xl text-center">Current Statistics</h4>
<section class="bg-white dark:bg-gray-900" >
  <div class="max-w-screen-xl px-4 py-8 mx-auto text-center lg:py-16 lg:px-6 flex justify-center">
      <dl class="grid max-w-screen-md gap-8 mx-auto text-gray-900 sm:grid-cols-3 dark:text-white">
          <div class="flex flex-col items-center justify-center bg-slate-300 p-4 rounded-lg hover:scale-105">
              <dt class="mb-2 text-3xl md:text-4xl font-extrabold">{{$countpatients}}+</dt>
              <dd class="font-light text-gray-500 dark:text-gray-400">Patients Registered</dd>
          </div>
          @if(auth()->user()->user_level=="SuperAdmin" || auth()->user()->user_level=="GroupAdmin")
          <div class="flex flex-col items-center justify-center bg-slate-300 p-4 rounded-lg hover:scale-105 ">
              <dt class="mb-2 text-3xl md:text-4xl font-extrabold">{{$countusers}}</dt>
              <dd class="font-light text-gray-500 dark:text-gray-400">Contributors</dd>
          </div>
          @endif
          <div class="flex flex-col items-center justify-center bg-slate-300 p-4 rounded-lg hover:scale-105">
              <dt class="mb-2 text-3xl md:text-4xl font-extrabold">{{$countplaces}}</dt>
              <dd class="font-light text-gray-500 dark:text-gray-400">Total Hopitals and Units</dd>
          </div>
      </dl>
  </div>
</section>
   </div>

 <hr class="my-4 mx-auto w-48 h-1 bg-gray-100 rounded border-0 md:my-6 dark:bg-gray-700">
   <div class="p-4 mx-auto max-w-screen-xl ">
    <div class=" ">

        
<div class="flex flex-col lg:flex-row block w-100 p-6 bg-white border border-gray-200 rounded-lg shadow-md hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">

        <a href="{{ route('add_new') }}"type="button" class="flex flex-row justify-center items-center text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700"> <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-12 h-12">
  <path stroke-linecap="round" stroke-linejoin="round" d="M19 7.5v3m0 0v3m0-3h3m-3 0h-3m-2.25-4.125a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zM4 19.235v-.11a6.375 6.375 0 0112.75 0v.109A12.318 12.318 0 0110.374 21c-2.331 0-4.512-.645-6.374-1.766z" />
</svg>        Add New Patient
</a>
        <a href="{{ route('patient_dashboard') }}"type="button" class="flex flex-row justify-center items-center text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-12 h-12">
  <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
  <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
</svg>         View Patients
        </a>
            <a href="{{ route('knowledgebase') }}"type="button" class="flex flex-row justify-center items-center text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-12 h-12">
  <path stroke-linecap="round" stroke-linejoin="round" d="M4.26 10.147a60.436 60.436 0 00-.491 6.347A48.627 48.627 0 0112 20.904a48.627 48.627 0 018.232-4.41 60.46 60.46 0 00-.491-6.347m-15.482 0a50.57 50.57 0 00-2.658-.813A59.905 59.905 0 0112 3.493a59.902 59.902 0 0110.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.697 50.697 0 0112 13.489a50.702 50.702 0 017.74-3.342M6.75 15a.75.75 0 100-1.5.75.75 0 000 1.5zm0 0v-3.675A55.378 55.378 0 0112 8.443m-7.007 11.55A5.981 5.981 0 006.75 15.75v-1.5" />
</svg>         Knowledgebase
        </a> </a>
            <a href="{{ route('contact') }}"type="button" class="flex flex-row justify-center items-center text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-12 h-12">
  <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12.76c0 1.6 1.123 2.994 2.707 3.227 1.087.16 2.185.283 3.293.369V21l4.076-4.076a1.526 1.526 0 011.037-.443 48.282 48.282 0 005.68-.494c1.584-.233 2.707-1.626 2.707-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0012 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018z" />
</svg>
      Conatact
        </a>
</div>

 </div> 

 <hr class="my-4 mx-auto w-48 h-1 bg-gray-100 rounded border-0 md:my-10 dark:bg-gray-700">

    <div class="flex justify-center">
        <div class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700">
    <div class="flex flex-col items-center pb-10 my-10">
        <img class="w-24 h-24 mb-3 rounded-full shadow-lg" src="{{ auth()->user()->profile_photo_url }}" alt="{{ auth()->user()->name }}" />
        <h5 class="mb-1 text-xl font-medium text-gray-900 dark:text-white">Dr. {{auth()->user()->name}}</h5>
        <span class="text-sm text-gray-500 dark:text-gray-400">{{$institutionslist[auth()->user()->hospital]}}</span>
        <span class="text-sm text-gray-500 dark:text-gray-400">+94{{auth()->user()->telephone}}</span>
        <div class="flex mt-4 space-x-3 md:mt-6">
            <a href="{{ route('profile.show')}}"  class="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Your Profile</a>
        </div>
    </div>
</div>
</div>

</div>
</div>
