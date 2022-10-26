<x-Admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
        
    </x-slot>

    <div class="py-12">
      
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
       
         <div class="flex justify-end m-2 p-2">
            <script src="https://cdn.tailwindcss.com"></script>
            <link rel="stylesheet" href="https://cdn.tailgrids.com/tailgrids-fallback.css" />
            <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
            <a href="{{ route('admin.menu.index') }}"
                class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 rounded-lg text-white">Menu</a>
        </div>
        


        <div class="mt-5  justify-end md:col-span-2 md:mt-0" style="width:1000px;">
            <form action="{{route('admin.menu.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
              <div class="shadow sm:overflow-hidden sm:rounded-md">
                <div class="space-y-6 bg-white px-4 py-5 sm:p-6">
                 
                      <label for="company-website" class="block text-sm font-medium text-gray-700">Name</label>
                      <div class="mt-1 flex rounded-md shadow-sm">
                        <input type="text" name="name" value ="{{$menu->name}}" id="name" class="block w-full flex-1 rounded-none rounded-r-md border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" placeholder="Abdalla Mmdouh">
                      </div>
                 
      
                    <label for="about" class="block text-sm font-medium text-gray-700">Description</label>
                    <div class="mt-1">
                      <textarea id="description" name="description" rows="3" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">{{$menu->description}}</textarea>
                    </div>
                    <p class="mt-2 text-sm text-gray-500">Brief description for your profile. URLs are hyperlinked.</p>
         
      
               
      
                  <div>
                    <label class="block text-sm font-medium text-gray-700">Image</label>
                    <div class="mt-1 flex justify-center rounded-md border-2 border-dashed border-gray-300 px-6 pt-5 pb-6">
                      <div class="space-y-1 text-center">
                        <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true">
                          <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        <div class="flex text-sm text-gray-600">
                          <label for="image" class="relative cursor-pointer rounded-md bg-white font-medium text-indigo-600 focus-within:outline-none focus-within:ring-2 focus-within:ring-indigo-500 focus-within:ring-offset-2 hover:text-indigo-500">
                            <span>Upload a Image</span>
                            <input id="image" name="image" type="file" class="sr-only">
                          </label>
                          <p class="pl-1">or drag and drop</p>
                        </div>
                        <p class="text-xs text-gray-500">PNG, JPG, GIF up to 10MB</p>
                      </div>
                    </div>
                  </div>
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
