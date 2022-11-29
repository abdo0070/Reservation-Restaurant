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
         
      <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>Warning </strong>  {{ session()->get('warning') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>

     @endif
   

      
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
       
         <div class="flex justify-end m-2 p-2">
            <script src="https://cdn.tailwindcss.com"></script>
            <link rel="stylesheet" href="https://cdn.tailgrids.com/tailgrids-fallback.css" />
            <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
            <a href="{{ route('admin.table.index') }}"
                class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 rounded-lg text-white">table list</a>
        </div>
        


        <div class="mt-5  justify-end md:col-span-2 md:mt-0" style="width:1000px;">
            <form action="{{route('admin.table.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
              <div class="shadow sm:overflow-hidden sm:rounded-md">
                <div class="space-y-6 bg-white px-4 py-5 sm:p-6">
                 

                      <label for="company-website" class="block text-sm font-medium text-gray-700">Table Name</label>
                      <div class="mt-1 flex rounded-md shadow-sm">
                        <input type="text" name="name" id="name" class="block w-full flex-1 rounded-none rounded-r-md border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm   @error('name') border-red-400 @enderror" placeholder="">
                      </div>
                      @error('name')
                         <div class="text-red-400">{{ $message }}</div>
                       @enderror



                      <label for="company-website" class="block text-sm font-medium text-gray-700">Guest Number</label>
                      <div class="mt-1 flex rounded-md shadow-sm">
                        <input type="number" name="guest_number" id="name" class="block w-full flex-1 rounded-none rounded-r-md border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm @error('guest_number') border-red-400 @enderror">
                      </div>
                      @error('guest_number')
                      <div class="text-red-400" >{{ $message }}</div>
                    @enderror



                      <label for="company-website" class="block text-sm font-medium text-gray-700">Location</label>
                      <div class="mt-1 flex rounded-md shadow-sm">
                        <input type="text" name="location" id="name" class="block w-full flex-1 rounded-none rounded-r-md border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm @error('location') border-red-400 @enderror">
                      </div>
                      @error('location')
                      <div class="text-red-400" >{{ $message }}</div>
                    @enderror


                   
                    <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 white:text-white">Select an option</label>
                        <select id="status" name="status" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 white:bg-gray-700 white:border-gray-600 white:placeholder-gray-400 white:text-white ">
                           <option value="available">Available</option>
                           <option value="busy">Busy</option>
                        </select>

                        @error('status')
                        <div class="text-red-400" >{{ $message }}</div>
                      @enderror

                <div class="bg-gray-50 px-4 py-3 text-right sm:px-6">
                  <button type="submit" class="inline-flex justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Save</button>
                </div>
              </div>
            </form>
          </div>



        </div>
    </div>
</x-Admin-layout>
