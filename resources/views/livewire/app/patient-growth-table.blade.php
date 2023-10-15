<div class="
@if ($show_view !== 'Table')
hidden
@endif

">

<h2 class=" text-lg lg:text-2xl text-center font-extrabold dark:text-white inline-block w-full p-2 rounded-tl-lg bg-gray-50 hover:bg-gray-100 focus:outline-none dark:bg-gray-700 dark:hover:bg-gray-600  ">
    {{$patientIDfromURL}}
</h2>
<h2 class=" text-base lg:text-xl text-center font-extrabold dark:text-white inline-block w-full p-2 rounded-tl-lg bg-gray-50 hover:bg-gray-100 focus:outline-none dark:bg-gray-700 dark:hover:bg-gray-600  ">
   Birthday: {{$patient_birthday}}
</h2>

<div class="mt-4 overflow-y-scroll relative shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">

        <tbody>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700
             hover:bg-gray-50 dark:hover:bg-gray-600">
                <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                   Parameter Date
                </th>
                <td class="py-4 px-6">
                    Age on Date
                </td>
                <td class="py-4 px-6">
                    Height
                </td>
                <td class="py-4 px-6">
                   Weight
                </td>
                <td class="py-4 px-6">
                 </td>
            </tr>
            @foreach ($patientparameterswithtrashed as $singleparameter)
            <tr class="
             @if ($singleparameter->deleted_at == Null)
             bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600
            @else
             bg-red-50 border-b dark:bg-red-800 dark:border-red-700 hover:bg-red-100 dark:hover:bg-red-600
            @endif
            ">
                <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white
                             @if ($singleparameter->deleted_at !== Null)
line-through
            @endif
                ">
            {{ $singleparameter->date_of_parameters}}
                </th>
                <td class="py-4 px-6
                
                
                
                ">
            {{
                \Carbon\Carbon::createFromDate($patient_birthday)->diff(\Carbon\Carbon::createFromDate($singleparameter->date_of_parameters))->format('%y years, %m 
                    months')
            }}

                </td>
                <td class="py-4 px-6">
            {{ $singleparameter->patient_height}} cm

                </td>
                <td class="py-4 px-6">
            {{ $singleparameter->patient_weight}} kg

                </td>
                <td class="py-4 px-6">
 @if(Auth::user()->access_to_edit == 1) 


                    <button data-tooltip-target="tooltip-Edit" wire:click="modelforparams('edit', {{$singleparameter->id}} )"  class="font-medium text-blue-600 dark:text-blue-500 hover:underline">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
  <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
</svg>
</button>






 <button data-tooltip-target="tooltip-Archive"  wire:click="softarchive({{$singleparameter->id}})"  class="font-medium text-orange-600 dark:text-orange-500 hover:underline">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="ml-2 w-4 h-4">
  <path stroke-linecap="round" stroke-linejoin="round" d="M20.25 7.5l-.625 10.632a2.25 2.25 0 01-2.247 2.118H6.622a2.25 2.25 0 01-2.247-2.118L3.75 7.5m6 4.125l2.25 2.25m0 0l2.25 2.25M12 13.875l2.25-2.25M12 13.875l-2.25 2.25M3.375 7.5h17.25c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125z" />
</svg>
<div id="tooltip-Edit" role="tooltip" class="inline-block absolute invisible z-10 py-2 px-3 text-sm font-medium text-white bg-gray-900 rounded-lg shadow-sm opacity-0 transition-opacity duration-300 tooltip dark:bg-gray-700">
    Edit
    <div class="tooltip-arrow" data-popper-arrow></div>
</div>

<div id="tooltip-Archive" role="tooltip" class="inline-block absolute invisible z-10 py-2 px-3 text-sm font-medium text-white bg-gray-900 rounded-lg shadow-sm opacity-0 transition-opacity duration-300 tooltip dark:bg-gray-700">
    Archive
    <div class="tooltip-arrow" data-popper-arrow></div>
</div>


</button>



@endif

                </td>
            </tr>
            @endforeach
           
        </tbody>
    </table>
</div>




</div>