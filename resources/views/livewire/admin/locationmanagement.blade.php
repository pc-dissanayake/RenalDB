<div class="m-4 w-full">
    
{{--{{print_r($usercountall)}}
{{print_r($hospitallocations)}}  --}}



<div id="accordion-color" data-accordion="collapse" data-active-classes="bg-blue-100 dark:bg-gray-800 text-blue-600 dark:text-white">
  <h2 id="accordion-color-heading-1 m-">
    <button type="button" class="flex items-center justify-between w-full p-5 font-medium text-left text-gray-500 border border-b-0 border-gray-200 rounded-t-xl focus:ring-4 focus:ring-blue-200 dark:focus:ring-blue-800 dark:border-gray-700 dark:text-gray-400 hover:bg-blue-100 dark:hover:bg-gray-800" data-accordion-target="#accordion-color-body-1" aria-expanded="true" aria-controls="accordion-color-body-1">
      <span>Health Institute Locations</span>
      <svg data-accordion-icon class="w-6 h-6 rotate-180 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
    </button>
  </h2>
 
  <div id="accordion-color-body-1" class="show" aria-labelledby="accordion-color-heading-1">
    <div class="p-5 font-light border border-b-0 border-gray-200 dark:border-gray-700 dark:bg-gray-900">

<div class="overflow-x-auto relative shadow-md sm:rounded-lg">
          <label class="inline-flex relative items-center cursor-pointer">
  <span class="ml-3 text-sm font-medium text-gray-900 dark:text-gray-300"></span>
</label>
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="py-3 px-6">
                    Location name
                </th>
                <th scope="col" class="py-3 px-6">
                    Location ID / HIN
                </th>
                <th scope="col" class="py-3 px-6">
                    Patient ID Prefix
                </th>
                <th scope="col" class="py-3 px-6">
                    Users
                </th>
                <th scope="col" class="py-3 px-6">
                    <span class="sr-only">Edit</span>
                </th>
            </tr>
        </thead>
        <tbody>

            @foreach ($hospitallocations as $singlelocation )
                
           
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{$singlelocation->option}}
                </th>
                <td class="py-4 px-6"> 
                                        {{$singlelocation->valuesofthekey}}
                </td>
                <td class="py-4 px-6">
                                        {{$singlelocation->patientID_prefix}}
                </td>
                <td class="py-4 px-6 text-right"> {{$usercountall[$singlelocation->valuesofthekey]}}
                </td>
                <td class="py-4 px-6 text-right">
                    <button wire:click="clicktoshowmodel(1,'{{$singlelocation->valuesofthekey}}')" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</button>
                </td>
            </tr>
      
            @endforeach
        </tbody>
    </table>
       <button wire:click="clicktoshowmodel(0)" type="button" class="m-4 text-white bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-full text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Add New Location</button>

</div>

    </div>
  </div>
  
  <h2 id="accordion-color-heading-3">
    <button type="button" class="flex items-center justify-between w-full p-5 font-medium text-left text-gray-500 border border-gray-200 focus:ring-4 focus:ring-blue-200 dark:focus:ring-blue-800 dark:border-gray-700 dark:text-gray-400 hover:bg-blue-100 dark:hover:bg-gray-800" data-accordion-target="#accordion-color-body-3" aria-expanded="false" aria-controls="accordion-color-body-3">
      <span>           .</span>
      <svg data-accordion-icon class="w-6 h-6 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
    </button>
  </h2>
  <div id="accordion-color-body-3" class="hidden" aria-labelledby="accordion-color-heading-3">
    <div class="p-5 font-light border border-t-0 border-gray-200 dark:border-gray-700">

    </div>
  </div>
</div>

    @include('livewire.modals.model-admin-locationmanage');


</div>
