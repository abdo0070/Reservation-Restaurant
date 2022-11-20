<x-Admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
        
    </x-slot>

    <div class="py-12">



      @if (session()->has('success'))
          
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Successfuly </strong>  {{ session()->get('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>

     @endif

     @if (session()->has('danger'))
         
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Danger </strong>  {{ session()->get('danger') }}
        <button type="button" class="btn-close" data-bs-dismiss="danger" aria-label="Close"></button>
      </div>

     @endif

     @if (session()->has('warning'))
         
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Warning </strong>  {{ session()->get('warning') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>

     @endif
   
     
      
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
       
         <div class="flex justify-end m-2 p-2">
            <script src="https://cdn.tailwindcss.com"></script>
            <link rel="stylesheet" href="https://cdn.tailgrids.com/tailgrids-fallback.css" />
            <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
            <a href="{{ route('admin.reservation.index') }}"
                class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 rounded-lg text-white">reservation</a>
        </div>
        


        <div class="mt-5  justify-end md:col-span-2 md:mt-0" style="width:1000px;">
            <form action="{{ route('admin.reservation.update' , $reservation->id)}}" method="POST" enctype="multipart/form-data">
          
                @csrf
                @method('PUT')

              <div class="shadow sm:overflow-hidden sm:rounded-md">
                <div class="space-y-6 bg-white px-4 py-5 sm:p-6">
                 
                  <input type="hidden" name="id" value={{$reservation->id}}>

                      <label for="company-website" class="block text-sm font-medium text-gray-700">First Name</label>
                      <div class="mt-1 flex rounded-md shadow-sm">
                        <input type="text" name="first_name" value ="{{$reservation->first_name}}" id="name" class="block w-full flex-1 rounded-none rounded-r-md border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"  @error('first_name') border-red-400 @enderror">
                      </div>

                      @error('first_name')
                      <div class="text-red-400">{{ $message }}</div>
                    @enderror

                     <label for="company-website" class="block text-sm font-medium text-gray-700">Second Name</label>
                      <div class="mt-1 flex rounded-md shadow-sm">
                        <input type="text" name="second_name" value ="{{$reservation->second_name}}" id="name" class="block w-full flex-1 rounded-none rounded-r-md border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"  @error('second_name') border-red-400 @enderror">
                      </div>

                      
                      @error('second_name')
                      <div class="text-red-400">{{ $message }}</div>
                    @enderror




                      <label for="company-website" class="block text-sm font-medium text-gray-700">Email</label>
                      <div class="mt-1 flex rounded-md shadow-sm">
                        <input type="email" name="email" value ="{{$reservation->email}}" id="name" class="block w-full flex-1 rounded-none rounded-r-md border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm @error('emal') border-red-400 @enderror">
                      </div>

                      @error('email')
                      <div class="text-red-400">{{ $message }}</div>
                    @enderror




                      <label for="company-website" class="block text-sm font-medium text-gray-700">guest number</label>
                      <div class="mt-1 flex rounded-md shadow-sm">
                        <input type="number" name="guest_number" value ="{{$reservation->guest_number}}" id="name" class="block w-full flex-1 rounded-none rounded-r-md border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"  @error('guest_number') border-red-400 @enderror">
                      </div>

                      @error('guest_number')
                      <div class="text-red-400">{{ $message }}</div>
                    @enderror


                      <label for="company-website" class="block text-sm font-medium text-gray-700">Phone Number</label>
                      <div class="mt-1 flex rounded-md shadow-sm">
                        <input type="tel" name="phone" id="name" value ="{{$reservation->phone}}" class="block w-full flex-1 rounded-none rounded-r-md border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm  @error('phone') border-red-400 @enderror ">
                      </div>

                      @error('phone')
                      <div class="text-red-400">{{ $message }}</div>
                    @enderror


                      <label for="company-website" class="block text-sm font-medium text-gray-700">Reservation Date</label>
                      <div class="mt-1 flex rounded-md shadow-sm">
                        <input type="date" name="res_date" id="name" value ="{{$reservation->res_date}}" class="block w-full flex-1 rounded-none rounded-r-md border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm  @error('res_date') border-red-400 @enderror">
                      </div>

                      @error('res_date')
                      <div class="text-red-400">{{ $message }}</div>
                    @enderror



                  
                      <label for="company-website" class="block text-sm font-medium text-gray-700">Table Number</label>
                      <div class="mt-1 flex rounded-md shadow-sm">
                        <select name="table_id"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 :bg-gray-700 :border-gray-600 :placeholder-gray-400 :text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            @foreach ($tables as $table)

                            <option value="{{$table->id}}">{{$table->name}}</option>
                                
                            @endforeach
                        </select>
                       </div>
         

                <div class="bg-gray-50 px-4 py-3 text-right sm:px-6">
                  <button type="submit" class="inline-flex justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Save</button>
                </div>
              </div>
            </form>
          </div>



        </div>
    </div>
</x-Admin-layout>
