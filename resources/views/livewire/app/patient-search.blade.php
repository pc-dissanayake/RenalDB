<div>
       <div class="py-12 m-4">

<div>
    <!-- component -->

    <div class="flex z-40 my-2">
        <label for="search-dropdown" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white"></label>
        <button id="dropdown-button" data-dropdown-toggle="dropdown" class="flex-shrink-0 z-40 inline-flex items-center py-2.5 px-4 text-sm font-medium text-center text-gray-900 bg-gray-100 border border-gray-300 dark:border-gray-700 dark:text-white rounded-l-lg hover:bg-gray-200 focus:ring-4 focus:outline-none focus:ring-gray-300 dark:bg-gray-600 dark:hover:bg-gray-700 dark:focus:ring-gray-800
              @if (session()->has('errorterms'))
            border-2 border-red-600 
            @endif 
        " type="button">Search Terms : {{$searchType}}<svg aria-hidden="true" class="w-4 h-4 ml-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg></button>
        <div id="dropdown" class="z-40 hidden bg-white divide-y divide-gray-100 rounded shadow w-44 dark:bg-gray-700">
            <ul class="py-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdown-button">
          
            <li>
                <a wire:click="$set('searchType', 'ID')"  href="#"  class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Patient-ID / Clinic ID/ OPD ID / PHN</a>
            </li>
            <li>
                <a wire:click="$set('searchType', 'Diagnosis')"  href="#"  class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Primary Diagnosis</a>
            </li>
            <li>
                <a wire:click="$set('searchType', 'Age')" href="#"  class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Age in years</a>
            </li>
            <li>
                <a wire:click="$set('searchType', 'Gender')"  href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Gender</a>
            </li>
            <li>
                <a wire:click="$set('searchType', 'Institution')"  href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Institution</a>
            </li>
            <li>
                <a wire:click="$set('searchType', 'District')"  href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">District</a>
            </li> 
            </ul>
        </div>
        <div class="relative w-full">
            <input wire:click="clickedsearchtext()" wire:keydown.enter="searchThemAll()" wire:model="searchTerm" type="search" id="search-dropdown" class="block p-2.5 w-full z-50 text-sm text-gray-900 bg-gray-50 rounded-r-lg border-l-gray-100 border-l-2 border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:border-blue-500
             @if (session()->has('errorserchstring'))
            border-2 border-red-600 
            @endif 
            " placeholder="Search" required>
            <button wire:click="searchThemAll()" type="button" class="absolute top-0 right-0 p-2.5 text-sm font-medium text-white bg-blue-700 rounded-r-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"><svg aria-hidden="true" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg></button>
        </div>
                    
    </div>
    <div class="relative shadow bg-white top-1 z-20 w-full lef-0 rounded max-h-select overflow-y-auto 
     @if ($showautocomplete==1)  
           @else 
    hidden
    @endif
    ">
                    <div class="flex flex-col w-full z-50">
@foreach ($autocompletelist as $Singlelist)
                    <div class="cursor-pointer w-full border-gray-100 rounded-t border-b hover:bg-teal-100 py-2">
                            <div class="flex w-full items-center p-2 pl-2 border-transparent border-l-2 relative hover:border-teal-100">
                                <div class="w-6 flex flex-col items-center">
                                </div>
                                <div class="w-full items-center flex">
                                    <a wire:click="autolistonindividualitemclick('{{$Singlelist['searchcriteria']}}')" class="mx-2 -mt-1 ">{{$Singlelist['text']}}
                                    </a>
                                </div>
                            </div>
                        </div>
@endforeach
  
                    </div>
                </div>

              @if (session()->has('showerrormessage'))
<div id="alert-2" class="flex p-4 my-8 bg-red-100 rounded-lg dark:bg-red-200" role="alert" >
  <svg aria-hidden="true" class="flex-shrink-0 w-5 h-5 text-red-700 dark:text-red-800" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
  <span class="sr-only">Info</span>
  <div class="ml-3 text-sm font-medium text-red-700 dark:text-red-800">
{{session('showerrormessage')}}  </div>
  <button wire:click="" type="button" class="ml-auto -mx-1.5 -my-1.5 bg-red-100 text-red-500 rounded-lg focus:ring-2 focus:ring-red-400 p-1.5 hover:bg-red-200 inline-flex h-8 w-8 dark:bg-red-200 dark:text-red-600 dark:hover:bg-red-300" data-dismiss-target="#alert-2" aria-label="Close">
    <span class="sr-only">Close</span>
    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
  </button>
</div>
    @endif




    </div>
                                    </a>
                                                             @if ($showresults==1 && count($tabledata) <= 0)
                    <div class="w-full flex p-4 mb-4 text-sm text-red-700 bg-red-100 rounded-lg dark:bg-red-200 dark:text-red-800" role="alert">
  <svg aria-hidden="true" class="flex-shrink-0 inline w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
  <span class="sr-only">Info</span>
  <div>
    <span class="font-medium">No Record found!</span>
  </div>
</div>         
    @endif
           <div class="m-4 z-20     @if ($showresults==1 && count($tabledata) > 0)  
           @else 
    hidden
    @endif " id="resultsheet">
            <h3 class="text-center text-xl mb-8">{{$entriestext}}</h3>
        <div class="w-11/12 mx-2 md:mx-6  sm:px-4 lg:px-4 flex justify-center">

<div class="min-w-full relative shadow-md sm:rounded-lg overflow-x-auto">
    <table class="w-full table-auto	text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">

            <tr>
                @if(auth()->user()->user_level=="SuperAdmin" || auth()->user()->user_level=="GroupAdmin")
                <th scope="col" class="py-3 px-6">
                    Institution Location
                </th>
                @endif
                <th scope="col" class="py-3 px-6">
                    Patient ID
                </th>
                <th scope="col" class="py-3 px-6">
                    Age / Gender
                </th>
                <th scope="col" class="py-3 px-6">
                    Primary Diagnosis
                </th>
                <th scope="col" class="py-3 px-6">
                    District	                
                </th>
                 <th scope="col" class="py-3 px-6">
                    <span class="sr-only">Edit</span>
                </th>
            </tr>
        </thead>
        <tbody>
                        @if (count($tabledata) <= 0)
   <tr class="bg-white dark:bg-gray-800 hover:bg-gray-50 dark:hover:bg-gray-600">
                    <div class="w-full flex p-4 mb-4 text-sm text-red-700 bg-red-100 rounded-lg dark:bg-red-200 dark:text-red-800" role="alert">
  <svg aria-hidden="true" class="flex-shrink-0 inline w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
  <span class="sr-only">Info</span>
  <div>
    <span class="font-medium">Zero Results returned!</span>
  </div>
</div>
            
                
            </tr>
    @endif

            @foreach ($tabledata as $singlerowdata)
            <tr class="
            @if($singlerowdata->patient_gender == 'Female')
            bg-[#FFEBF3] hover:bg-[#FFEFF5]
            @elseif($singlerowdata->patient_gender == 'Male')
            bg-[#C7DCFF] hover:bg-[#CFE1FF]
            @endif
            border-b dark:bg-gray-800 dark:border-gray-700  dark:hover:bg-gray-600">
                @if(auth()->user()->user_level=="SuperAdmin" || auth()->user()->user_level=="GroupAdmin")
                <th scope="col" class="py-3 px-6 text-black">
                    {{$institutionslist2[$singlerowdata->healthInstitution_Number]}}
                   
                </th>
                @endif
                <th scope="col" class="py-3 px-6">
                     <a href="{{ route('patient_management', ['pid' => $singlerowdata->patient_id]) }}" class="font-medium text-blue-800 dark:text-blue-500 hover:underline">{{$singlerowdata->patient_id}}</a>
                </th>
                <td class="py-4 px-6  text-black">

                    {{\Carbon\Carbon::createFromDate($singlerowdata->patient_birthday)->diff(\Carbon\Carbon::now())->format('%y years, %m months')}};
                     @if ($singlerowdata->patient_gender == 'Female')
                    <i class="fa-solid fa-venus"></i>
                        @endif
                        @if($singlerowdata->patient_gender == 'Male')
                        <i class="fa-solid fa-mars"></i>
                        @endif
                </td>
                <td class="py-4 px-6 text-black">


                     {{$diseasesshort[$singlerowdata->patient_primary_diagnosis]}}
                </td>
                <td class="py-4 px-6 text-black">
                     {{$singlerowdata->patient_geographics_district}}
                </td>
                <td class="py-4 px-6 text-right">
                    <a href="{{ route('patient_management', ['pid' => $singlerowdata->patient_id]) }}" class="font-medium text-blue-700 dark:text-blue-500 hover:underline">View Profile</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>


</div>
</div>
</div>
