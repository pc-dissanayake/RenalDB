<div>

    <div class=" my-6  max-full p-6 bg-white border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700">
<h5 class="mb-2 text-lg lg:text-xl font-semibold tracking-tight text-gray-900 dark:text-white">UTI Type</h5>
    <p class="mb-3 text-sm lg:text-base text-gray-700 dark:text-gray-400"> {{$diseasedetails->UTI_type?? '' }}</p>
</div>

 <div class=" my-6  max-full p-6 bg-white border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700">
<h5 class="mb-2 text-lg lg:text-xl font-semibold tracking-tight text-gray-900 dark:text-white">Frequency</h5>
    <p class="mb-3 text-sm lg:text-base text-gray-700 dark:text-gray-400"> <span class="text-lg lg:text-xl">Total number of UTI’s :</span> {{$diseasedetails->UTI_total_number?? '' }}</p>
    <p class="mb-3 text-sm lg:text-base text-gray-700 dark:text-gray-400"> <span class="text-lg lg:text-xl">Number of hospital admissions :</span> {{$diseasedetails->UTI_totaladmissions?? '' }}</p>
    <p class="mb-3 text-sm lg:text-base text-gray-700 dark:text-gray-400"> <span class="text-lg lg:text-xl">Number of UTI’s per last year :</span> {{$diseasedetails->UTI_numberlastyear?? '' }}</p>
</div>

 <div class=" my-6  max-full p-6 bg-white border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700">
<h5 class="mb-2 text-lg lg:text-xl font-semibold tracking-tight text-gray-900 dark:text-white">Organisms causing UTI’s</h5>
    <p class="mb-3 text-sm lg:text-base text-gray-700 dark:text-gray-400"> <span class="text-lg lg:text-xl"></span> {{$diseasedetails->UTI_organisms?? '' }}</p>
</div>

 <div class=" my-6  max-full p-6 bg-white border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700">
<h5 class="mb-2 text-lg lg:text-xl font-semibold tracking-tight text-gray-900 dark:text-white">Underlying structural abnormality</h5>
 @php
        if (is_array(json_decode($diseasedetails->UTI_structureabnormalities))==true ||  $diseasedetails->UTI_structureabnormalities ==null ) {
           $vardata = json_decode($diseasedetails->UTI_structureabnormalities);
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
<h5 class="mb-2 text-lg lg:text-xl font-semibold tracking-tight text-gray-900 dark:text-white">Risk factors</h5>
 @php
        if (is_array(json_decode($diseasedetails->UTI_riskfactors))==true  ||  $diseasedetails->UTI_riskfactors ==null ) {
           $vardata = json_decode($diseasedetails->UTI_riskfactors);
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
<h5 class="mb-2 text-lg lg:text-xl font-semibold tracking-tight text-gray-900 dark:text-white">Imaging and defects</h5>
   @php
        if (is_array(json_decode($diseasedetails->UTI_imaging_and_defects))==true  ||  $diseasedetails->UTI_imaging_and_defects ==null ) {
           $vardata = json_decode($diseasedetails->UTI_imaging_and_defects);
           echo('<ul class="space-y-1 max-w-md list-disc list-inside text-gray-500 dark:text-gray-400">');
           foreach ($vardata as $key => $value) {
           echo(' <li>');
           echo($value);
           echo('</>');
           }
       echo('</ul>');
        }
        @endphp
        </div><div class=" my-6  max-full p-6 bg-white border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700">
<h5 class="mb-2 text-lg lg:text-xl font-semibold tracking-tight text-gray-900 dark:text-white">Surgical interventions</h5>
  @php
        if (is_array(json_decode($diseasedetails->UTI_Surgical_interventions))==true  ||  $diseasedetails->UTI_Surgical_interventions ==null ) {
           $vardata = json_decode($diseasedetails->UTI_Surgical_interventions);
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
<h5 class="mb-2 text-lg lg:text-xl font-semibold tracking-tight text-gray-900 dark:text-white">Prophylaxis</h5>
    <p class="mb-3 text-sm lg:text-base text-gray-700 dark:text-gray-400"> <span class="text-lg lg:text-xl">Drug :</span> {{$diseasedetails->UTI_Prophylaxis_drug?? '' }}</p>
    <p class="mb-3 text-sm lg:text-base text-gray-700 dark:text-gray-400"> <span class="text-lg lg:text-xl">Duration :</span> {{$diseasedetails->UTI_Prophylaxis_duration?? '' }}</p>
    <p class="mb-3 text-sm lg:text-base text-gray-700 dark:text-gray-400"> <span class="text-lg lg:text-xl">Reduced frequency after Prophylaxis :</span> {{$diseasedetails->UTI_Prophylaxis_reduced_frequency?? '' }}</p>
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
