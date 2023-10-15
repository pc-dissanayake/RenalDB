<div>
<div>
    @php
        //print_r($diseasedetails);
    @endphp

    <div class=" my-4  max-full p-2 bg-white border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700">
    <a >
        <h5 class="mb-2 text-lg lg:text-2xl font-semibold tracking-tight text-gray-900 dark:text-white">Diagnosis</h5>
    </a>
 @php
        if (is_array(json_decode($diseasedetails->SLE_diagnosis))==true ||  $diseasedetails->SLE_diagnosis ==null) {
           $vardata = json_decode($diseasedetails->SLE_diagnosis);
           echo('<ul class="space-y-1 max-w-md list-disc list-inside text-gray-500 dark:text-gray-400">');
           foreach ($vardata as $key => $value) {
           echo(' <li>');
           echo($value);
           echo('</>');
           }
       echo('</ul>');
        }
        @endphp
</div>

<div class=" my-4  max-full p-2 bg-white border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700">
    <a >
        <h5 class="mb-2 text-lg lg:text-2xl font-semibold tracking-tight text-gray-900 dark:text-white">Drugs</h5>
    </a>
     @php
        if (is_array(json_decode($diseasedetails->SLE_drugsused))==true ||  $diseasedetails->UTI_structureabnormalities ==null) {
           $vardata = json_decode($diseasedetails->SLE_drugsused);
           echo('<ul class="space-y-1 max-w-md list-disc list-inside text-gray-500 dark:text-gray-400">');
           foreach ($vardata as $key => $value) {
           echo(' <li>');
           echo($value);
           echo('</>');
           }
       echo('</ul>');
        }
        @endphp
</div>
<div class=" my-4  max-full p-2 bg-white border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700">
    <a >
        <h5 class="mb-2 text-lg lg:text-2xl font-semibold tracking-tight text-gray-900 dark:text-white">Last Serum Creatinine</h5>
    </a>
    <p class="mb-2 text-sm lg:text-base text-gray-700 dark:text-gray-400"> {{$diseasedetails->SLE_last_secreat?? '' }}
       
    </p>
</div><div class=" my-4  max-full p-2 bg-white border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700">
    <a >
        <h5 class="mb-2 text-lg lg:text-2xl font-semibold tracking-tight text-gray-900 dark:text-white">EGFR</h5>
    </a>
    <p class="mb-2 text-sm lg:text-base text-gray-700 dark:text-gray-400"> {{$diseasedetails->SLE_last_egfr?? '' }}
       
    </p>
</div><div class=" my-4  max-full p-2 bg-white border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700">
    <a >
        <h5 class="mb-2 text-lg lg:text-2xl font-semibold tracking-tight text-gray-900 dark:text-white">CKD Stage</h5>
    </a>
    <p class="mb-2 text-sm lg:text-base text-gray-700 dark:text-gray-400"> {{$diseasedetails->SLE_ckd?? '' }}
       
    </p>
</div><div class=" my-4  max-full p-2 bg-white border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700">
    <a >
        <h5 class="mb-2 text-lg lg:text-2xl font-semibold tracking-tight text-gray-900 dark:text-white">Renal Biopsy</h5>
    </a>
    <p class="mb-2 text-sm lg:text-base text-gray-700 dark:text-gray-400"> {{$diseasedetails->SLE_biopsy?? '' }}
       
    </p>
</div>
 <div class=" my-6  max-full p-6 bg-white border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700">
<h5 class="mb-2 text-lg lg:text-xl font-semibold tracking-tight text-gray-900 dark:text-white">Notes</h5>
    <p class="mb-3 text-sm lg:text-base text-gray-700 dark:text-gray-400"> <span class="text-lg lg:text-xl"></span> {{$diseasedetails->notes ?? '' }}</p>
</div>

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
