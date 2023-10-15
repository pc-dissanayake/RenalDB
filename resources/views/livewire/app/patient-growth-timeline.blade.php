<section class="bg-white dark:bg-gray-900">

   
<ol class="relative border-l border-gray-200 dark:border-gray-700">                  
    <li class="mb-10 ml-4">
        <div class="absolute w-3 h-3 bg-gray-200 rounded-full mt-1.5 -left-1.5 border border-white dark:border-gray-900 dark:bg-gray-700"></div>
        <time class="mb-1 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">February 2022</time>
        <h3 class="text-lg font-normal text-gray-900 dark:text-white">Birthday : {{$patient_birthday}}</h3>
        <p class="mb-4 text-base font-normal text-gray-500 dark:text-gray-400"></p>
    </li>

            @foreach ($patientparameters as $singleparameter)


    <li class="mb-10 ml-4">
        <div class="absolute w-3 h-3 bg-gray-200 rounded-full mt-1.5 -left-1.5 border border-white dark:border-gray-900 dark:bg-gray-700"></div>
        <time class="mb-1 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">
            {{ $singleparameter->date_of_parameters}}
</time>
        <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
            {{
                \Carbon\Carbon::createFromDate($patient_birthday)->diff(\Carbon\Carbon::createFromDate($singleparameter->date_of_parameters))->format('%y years, %m 
                    months')
            }}
        </h3>
<div class="text-base font-normal text-gray-500 dark:text-gray-400 inline-flex items-center block">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
  <path stroke-linecap="round" stroke-linejoin="round" d="M3 4.5h14.25M3 9h9.75M3 13.5h5.25m5.25-.75L17.25 9m0 0L21 12.75M17.25 9v12" />
</svg>    
<p>
Height  :                 {{ $singleparameter->patient_height}} cm
</p></div>

<div class="text-base font-normal text-gray-500 dark:text-gray-400 inline-flex items-center">
       <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
  <path stroke-linecap="round" stroke-linejoin="round" d="M9 8.25H7.5a2.25 2.25 0 00-2.25 2.25v9a2.25 2.25 0 002.25 2.25h9a2.25 2.25 0 002.25-2.25v-9a2.25 2.25 0 00-2.25-2.25H15M9 12l3 3m0 0l3-3m-3 3V2.25" />
</svg><p>
Weight  :      {{ $singleparameter->patient_weight}} kg
</p></div>





    </li>


    @endforeach
    
</ol>
 


</section>