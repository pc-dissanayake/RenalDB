<div class="fixed z-50 inset-0 overflow-y-auto ease-out duration-400 
@if($showthemodal==0)
   hidden
@endif
">

{{-- {{print_r($hospitallist)}} --}}
  <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
      
    <div class="fixed inset-0 transition-opacity">
      <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
    </div>
  
    <!-- This element is to trick the browser into centering the modal contents. -->
    <span class="hidden sm:inline-block sm:align-middle sm:h-screen"></span>​
  
    <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full" role="dialog" aria-modal="true" aria-labelledby="modal-headline">
 <div class="space-y-6 p-4 mx-4 my-6" action="#">
        <h5 class="text-xl font-medium text-gray-900 dark:text-white">Edit User</h5>
        <div>
            <label for="username" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">User Name</label>
            <input wire:model="user.name" type="text" name="username" id="username" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" >
        </div>
 <div>
            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
            <input wire:model="user.email" type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"  >
        </div>
 <div>
            <label for="hospital" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Hospital</label>
            <select type="text" name="hospital" id="hospital" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" wire:model="user.hospital">
            @foreach($hospitallist as $singleone)
            <option value="{{$singleone->valuesofthekey}}">{{$singleone->option}}</option>
            @endforeach 

              
            </select>
        </div>
 <div>
            <label for="JobTitle" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Job Title</label>
            <select type="text" name="JobTitle" id="JobTitle" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" wire:model="user.job_title" >
            @foreach($jobtitlelist as $singleone)
            <option value="{{$singleone->option}}">{{$singleone->option}}</option>
            @endforeach 
{{$jobtitlelist}}
            </select>
        </div>

         <div>
            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Telephone</label>
            <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"  wire:model="user.telephone" >
        </div>

        <div>
<label class="inline-flex relative items-center cursor-pointer">
  <input type="checkbox" value="" class="sr-only peer"   wire:model="user.active_user" >
  <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600"></div>
  <span class="ml-3 text-sm font-medium text-gray-900 dark:text-gray-300">Active</span>
</label>
        </div>        <div>
<label class="inline-flex relative items-center cursor-pointer">
  <input type="checkbox" value="" class="sr-only peer"   wire:model="user.access_to_create" >
  <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600"></div>
  <span class="ml-3 text-sm font-medium text-gray-900 dark:text-gray-300">Access To Create</span>
</label>
        </div>
 <div>
<label class="inline-flex relative items-center cursor-pointer" >
  <input type="checkbox" value="" class="sr-only peer"   wire:model="user.access_to_localsearch">
  <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600"></div>
  <span class="ml-3 text-sm font-medium text-gray-900 dark:text-gray-300">Local User Access</span>
</label>
        </div>
 <div>
<label class="inline-flex relative items-center cursor-pointer"  >
  <input type="checkbox" value="" class="sr-only peer"  wire:model="user.access_to_globalsearch">
  <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600"></div>
  <span class="ml-3 text-sm font-medium text-gray-900 dark:text-gray-300">Global User Access</span>
</label>
        </div>
 <div>
<label class="inline-flex relative items-center cursor-pointer"   >
  <input type="checkbox" value="" class="sr-only peer" wire:model="user.access_to_edit">
  <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600"></div>
  <span class="ml-3 text-sm font-medium text-gray-900 dark:text-gray-300">Edit Access </span>
</label>
        </div>
 <div>
            <label for="JobTitle" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">User Level</label>
            <select type="text" name="JobTitle" id="JobTitle" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" wire:model="user.user_level" >
<option value="SuperAdmin">SuperAdmin</option>
<option value="GroupAdmin">GroupAdmin</option>
<option value="User">User</option>

            </select>
        </div>


        <button wire:click="save()" type="button " class="w-full text-white bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:outline-none focus:ring-purple-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-purple-600 dark:hover:bg-purple-700 dark:focus:ring-purple-800">Save</button>
        <button  wire:click="$set('showthemodal', 0)" type="button" class="w-full text-white bg-gray-700 hover:bg-gray-800 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-gray-600 dark:hover:bg-gray-700 dark:focus:ring-gray-800">Close</button>
      
    </div>
      </div>
        
    </div>
  </div>
</div>