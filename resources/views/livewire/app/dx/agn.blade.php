<div>
    @php
       // print_r($diseasedetails);
    @endphp
    
<div class=" my-4  max-full p-2 bg-white border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700">
    <a >
        <h5 class="mb-2 text-lg lg:text-2xl font-semibold tracking-tight text-gray-900 dark:text-white">Preceding History</h5>
    </a>
    <p class="mb-2 text-sm lg:text-base text-gray-700 dark:text-gray-400"> {{$diseasedetails->AGN_history?? '' }}
       
    </p>
</div>
<div class=" my-4  max-full p-2 bg-white border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700">
    <a >
        <h5 class="mb-2 text-lg lg:text-2xl font-semibold tracking-tight text-gray-900 dark:text-white">ASOT Titre</h5>
    </a>
    <p class="mb-2 text-sm lg:text-base text-gray-700 dark:text-gray-400"> {{$diseasedetails->AGN_asot?? '' }}
       
    </p>
</div>
<div class=" my-4  max-full p-2 bg-white border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700">
    <a >
        <h5 class="mb-2 text-lg lg:text-2xl font-semibold tracking-tight text-gray-900 dark:text-white">Highest Serum Creatinine</h5>
    </a>
    <p class="mb-2 text-sm lg:text-base text-gray-700 dark:text-gray-400"> {{$diseasedetails->AGN_high_secreat?? '' }}
       
    </p>
</div><div class=" my-4  max-full p-2 bg-white border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700">
    <a >
        <h5 class="mb-2 text-lg lg:text-2xl font-semibold tracking-tight text-gray-900 dark:text-white">GFR</h5>
    </a>
    <p class="mb-2 text-sm lg:text-base text-gray-700 dark:text-gray-400"> {{$diseasedetails->AGN_gfr?? '' }}
       
    </p>
</div>
<div class=" my-4  max-full p-2 bg-white border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700">
    <a >
        <h5 class="mb-2 text-lg lg:text-2xl font-semibold tracking-tight text-gray-900 dark:text-white">Microscopic Haematauria</h5>
    </a>
    <p class="mb-2 text-sm lg:text-base text-gray-700 dark:text-gray-400"> {{$diseasedetails->AGN_micro_heamat?? '' }}
       
    </p>
</div>
<div class=" my-4  max-full p-2 bg-white border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700">
    <a >
        <h5 class="mb-2 text-lg lg:text-2xl font-semibold tracking-tight text-gray-900 dark:text-white">Macroscopic Haematauria</h5>
    </a>
    <p class="mb-2 text-sm lg:text-base text-gray-700 dark:text-gray-400"> {{$diseasedetails->AGN_macro_heamat?? '' }}
       
    </p>
</div>
<div class=" my-4  max-full p-2 bg-white border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700">
    <a >
        <h5 class="mb-2 text-lg lg:text-2xl font-semibold tracking-tight text-gray-900 dark:text-white">C3</h5>
    </a>
    <p class="mb-2 text-sm lg:text-base text-gray-700 dark:text-gray-400"> {{$diseasedetails->AGN_c3?? '' }}
       
    </p>
</div>
<div class=" my-4  max-full p-2 bg-white border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700">
    <a >
        <h5 class="mb-2 text-lg lg:text-2xl font-semibold tracking-tight text-gray-900 dark:text-white">C4</h5>
    </a>
    <p class="mb-2 text-sm lg:text-base text-gray-700 dark:text-gray-400"> {{$diseasedetails->AGN_c4?? '' }}
       
    </p>
</div>
<div class=" my-4  max-full p-2 bg-white border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700">
    <a >
        <h5 class="mb-2 text-lg lg:text-2xl font-semibold tracking-tight text-gray-900 dark:text-white">Blood Preasure</h5>
    </a>
    <p class="mb-2 text-sm lg:text-base text-gray-700 dark:text-gray-400"> {{$diseasedetails->AGN_bp?? '' }}
       
    </p>
</div>
<div class=" my-4  max-full p-2 bg-white border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700">
    <a >
        <h5 class="mb-2 text-lg lg:text-2xl font-semibold tracking-tight text-gray-900 dark:text-white">UOP</h5>
    </a>
    <p class="mb-2 text-sm lg:text-base text-gray-700 dark:text-gray-400"> {{$diseasedetails->AGN_uop?? '' }}
       
    </p>
</div>
<div class=" my-4  max-full p-2 bg-white border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700">
    <a >
        <h5 class="mb-2 text-lg lg:text-2xl font-semibold tracking-tight text-gray-900 dark:text-white">Preceding History</h5>
    </a>
    <p class="mb-2 text-sm lg:text-base text-gray-700 dark:text-gray-400"> {{$diseasedetails->AGN_history?? '' }}
       
    </p>
</div>
<div class=" my-4  max-full p-2 bg-white border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700">
    <a >
        <h5 class="mb-2 text-lg lg:text-2xl font-semibold tracking-tight text-gray-900 dark:text-white">Maximum Protenuria</h5>
    </a>
    <p class="mb-2 text-sm lg:text-base text-gray-700 dark:text-gray-400"> {{$diseasedetails->AGN_max_proten?? '' }}
       
    </p>
</div>

 <div class=" my-6  max-full p-6 bg-white border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700">
<h5 class="mb-2 text-lg lg:text-xl font-semibold tracking-tight text-gray-900 dark:text-white">Notes</h5>
    <p class="mb-3 text-sm lg:text-base text-gray-700 dark:text-gray-400"> <span class="text-lg lg:text-xl"></span> {{$diseasedetails->notes ?? '' }}</p>
</div>
    <div class="flex justify-end mt-4">
                <a data-tooltip-target="tooltip-light" data-tooltip-style="light" type="button" class="text-base text-blue-600 dark:text-blue-500 hover:underline">
                    Updated {{\Carbon\Carbon::createFromTimeStamp(strtotime($diseasedetails->created_at))->diffForHumans() ?? '' }}  </a>
<div id="tooltip-light" role="tooltip" class="inline-block absolute invisible z-10 py-2 px-3 text-sm font-medium text-gray-900 bg-white rounded-lg border border-gray-200 shadow-sm opacity-0 tooltip">
   Updated on :   {{$diseasedetails->created_at ?? '' }}             
   @if(auth()->user()->user_level=="SuperAdmin" || auth()->user()->user_level=="GroupAdmin")
 by user ID of : {{$diseasedetails->created_user ?? '' }}
 @endif
</div>
    <div class="tooltip-arrow" data-popper-arrow></div>
</div>
</div>
