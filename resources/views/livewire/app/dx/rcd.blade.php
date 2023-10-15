<div>

    <div class=" my-6  max-full p-6 bg-white border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700">
<h5 class="mb-2 text-lg lg:text-xl font-semibold tracking-tight text-gray-900 dark:text-white">Presenation</h5>
    <p class="mb-3 text-sm lg:text-base text-gray-700 dark:text-gray-400"> {{$diseasedetails->RCD_presentation ?? '' }}</p>
</div>
 <div class=" my-6  max-full p-6 bg-white border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700">
<h5 class="mb-2 text-lg lg:text-xl font-semibold tracking-tight text-gray-900 dark:text-white">Diagnosis</h5>
    <p class="mb-3 text-sm lg:text-base text-gray-700 dark:text-gray-400"> {{$diseasedetails->RCD_diagnosis ?? '' }}</p>
</div>

 <div class=" my-6  max-full p-6 bg-white border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700">
<h5 class="mb-2 text-lg lg:text-xl font-semibold tracking-tight text-gray-900 dark:text-white">Renal calculi</h5>
    <p class="mb-3 text-sm lg:text-base text-gray-700 dark:text-gray-400"> <span class="text-lg lg:text-xl">Side :</span> {{$diseasedetails->RCD_renal_calculi_side ?? '' }}</p>
    <p class="mb-3 text-sm lg:text-base text-gray-700 dark:text-gray-400"> <span class="text-lg lg:text-xl">Number of calculi :</span> {{$diseasedetails->RCD_renal_calculi_number?? '' }}</p>
    <p class="mb-3 text-sm lg:text-base text-gray-700 dark:text-gray-400"> <span class="text-lg lg:text-xl">Size of Calculi :</span> {{$diseasedetails->RCD_renal_calculi_sizes?? '' }}</p>
<p class="mb-3 text-sm lg:text-base text-gray-700 dark:text-gray-400"> <span class="text-lg lg:text-xl">Composition of Calculi :</span> {{$diseasedetails->RCD_renal_calculi_composition?? '' }}</p>
<p class="mb-3 text-sm lg:text-base text-gray-700 dark:text-gray-400"> <span class="text-lg lg:text-xl">Underlying structural defects :</span> {{$diseasedetails->RCD_renal_calculi_structuraldefects
?? '' }}</p>
</div>

 <div class=" my-6  max-full p-6 bg-white border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700">
<h5 class="mb-2 text-lg lg:text-xl font-semibold tracking-tight text-gray-900 dark:text-white">Risk factors</h5>

 @php
        if (is_array(json_decode($diseasedetails->RCD_riskfactors))==true ||  $diseasedetails->RCD_riskfactors ==null) {
           $vardata = json_decode($diseasedetails->RCD_riskfactors);
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

     <div class=" my-6  max-full p-6 bg-white border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700">
<h5 class="mb-2 text-lg lg:text-xl font-semibold tracking-tight text-gray-900 dark:text-white">Positive Investigations</h5>
    <p class="mb-3 text-sm lg:text-base text-gray-700 dark:text-gray-400"> <span class="text-lg lg:text-xl"></span> {{$diseasedetails->RCD_positiveinx ?? '' }}</p>
    <p class="mb-3 text-sm lg:text-base text-gray-700 dark:text-gray-400"> <span class="text-lg lg:text-xl">Urine Calcium / Creatinine ratio :</span> {{$diseasedetails->RCD_urine_calcium_creatinine?? '' }}</p>
    <p class="mb-3 text-sm lg:text-base text-gray-700 dark:text-gray-400"> <span class="text-lg lg:text-xl">Urine Uric acid / Creatinine ratio :</span> {{$diseasedetails->RCD_urine_uricacid_creatinine?? '' }}</p>
</div>

     <div class=" my-6  max-full p-6 bg-white border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700">
<h5 class="mb-2 text-lg lg:text-xl font-semibold tracking-tight text-gray-900 dark:text-white">Treatment</h5>
    <p class="mb-3 text-sm lg:text-base text-gray-700 dark:text-gray-400"> <span class="text-lg lg:text-xl"></span> {{$diseasedetails->RCD_treatment ?? '' }}</p>
    <p class="mb-3 text-sm lg:text-base text-gray-700 dark:text-gray-400"> <span class="text-lg lg:text-xl">Treatment Duration :</span> {{$diseasedetails->RCD_treatment_duration?? '' }}</p>
    @if ($diseasedetails->RCD_treatment_surgical!=null)
      <p class="mb-3 text-sm lg:text-base text-gray-700 dark:text-gray-400"> <span class="text-lg lg:text-xl">Surgical Intervenntions :</span> {{$diseasedetails->RCD_treatment_surgical ?? '' }}</p>  
    @endif
</div>



 <div class=" my-6  max-full p-6 bg-white border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700">
<h5 class="mb-2 text-lg lg:text-xl font-semibold tracking-tight text-gray-900 dark:text-white">Outcome</h5>
    <p class="mb-3 text-sm lg:text-base text-gray-700 dark:text-gray-400"> <span class="text-lg lg:text-xl"></span> {{$diseasedetails->RCD_outcome ?? '' }}</p>
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
