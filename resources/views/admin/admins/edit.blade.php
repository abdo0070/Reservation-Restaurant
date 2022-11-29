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
            <a href="{{ route('admin.list') }}"
                class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 rounded-lg text-white">Admin list</a>
        </div>
        


        <div class="mt-5  justify-end md:col-span-2 md:mt-0" style="width:1000px;">
            <form action="{{route('admin.update')}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
              <div class="shadow sm:overflow-hidden sm:rounded-md">
                <div class="space-y-6 bg-white px-4 py-5 sm:p-6">
                 



                    <input type="hidden" name="id" value="{{$admin->id}}" id="name" class="block w-full flex-1 rounded-none rounded-r-md border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm   @error('name') border-red-400 @enderror" placeholder="">

                
                      <label for="company-website" class="block text-sm font-medium text-gray-700">Name</label>
                      <div class="mt-1 flex rounded-md shadow-sm">
                        
                        <input type="text" name="name" value="{{$admin->name}}" id="name" class="block w-full flex-1 rounded-none rounded-r-md border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm   @error('name') border-red-400 @enderror" placeholder="">
                      </div>
                      @error('name')
                         <div class="text-red-400">{{ $message }}</div>
                       @enderror

                      <label for="company-website" class="block text-sm font-medium text-gray-700">new Password</label>
                      <div class="mt-1 flex rounded-md shadow-sm">
                        <input type="password"  name="password" id="password" class="block w-full flex-1 rounded-none rounded-r-md border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm   @error('name') border-red-400 @enderror" placeholder="">
                      </div>
                      @error('password')
                         <div class="text-red-400">{{ $message }}</div>
                       @enderror



                    <label for="company-website" class="block text-sm font-medium text-gray-700">email</label>
                    <div class="mt-1 flex rounded-md shadow-sm">
                      <input type="email" name="email" value="{{$admin->email}}" id="name" class="block w-full flex-1 rounded-none rounded-r-md border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm @error('email') border-red-400 @enderror">
                    </div>
                    @error('email')
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
