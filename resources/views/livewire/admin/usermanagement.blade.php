<div class="m-4">


<div class="overflow-x-auto relative shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="py-3 px-6">
                    User Name
                </th>
                <th scope="col" class="py-3 px-6">
                    Email
                </th>
                <th scope="col" class="py-3 px-6">
                    Job Title
                </th>
                <th scope="col" class="py-3 px-6">
                    Telephone Number
                </th>
                <th scope="col" class="py-3 px-6">
                    Location
                </th>
                <th scope="col" class="py-3 px-6">
                    User Level
                </th>
                <th scope="col" class="py-3 px-6">
                    Status
                </th>
                <th scope="col" class="py-3 px-6">
                    <span class="sr-only">Edit</span>
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($allusers as $oneuser )
               
           
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{$oneuser->name}}
                </th>
                <td class="py-4 px-6">
                    {{$oneuser->email}}
                </td>
                <td class="py-4 px-6">
                    {{$oneuser->job_title }}
                </td>
                <td class="py-4 px-6">
                    {{$oneuser->telephone }}
                </td>
                <td class="py-4 px-6">
                    {{
                    App\Models\User::where("id", "=", $oneuser->id)->first()->hospitalname->option}}
                </td>
                <td class="py-4 px-6">
            {{$oneuser->user_level}}

                </td>
                <td class="py-4 px-6">
     @if ($oneuser->active_user) 
     <span class="bg-green-100 text-green-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-green-900 dark:text-green-300">Active</span>
@else
<span class="bg-red-100 text-red-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-red-900 dark:text-red-300">Deactive</span>

     @endif               
             </td>
                <td class="py-4 px-6 text-right">
                    @if (auth()->user()->id !==  $oneuser->id)
                    @if  ($oneuser->id==1 || $oneuser->id == 2)
                    @else
                    <button wire:click="showmodeltoedit('{{$oneuser->id}}') class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                    @endif
                    @endif
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
<div class="flex my-4 p-4 text-sm text-gray-700 border border-gray-200 rounded-lg bg-gray-50 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-700" role="alert">
  <svg aria-hidden="true" class="flex-shrink-0 inline w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
  <span class="sr-only">Info</span>
  <div>
    <span class="font-medium">Note!</span> Users must register by using the registation page and password reset can be done at from default page.
  </div>
</div>

    @include('livewire.modals.model-admin-usermng');
</div>
