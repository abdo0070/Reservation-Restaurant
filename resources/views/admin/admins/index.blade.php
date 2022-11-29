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
          <a href="{{ route('admin.create') }}"
              class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 rounded-lg text-white">New admin</a>
      </div>

          <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">


                <!-- ====== Table Section Start -->
                <section class="bg-white py-20 lg:py-[120px]">
                   <div class="container">
                      <div class="flex flex-wrap -mx-4">
                         <div class="w-full px-4">
                            <div class="max-w-full overflow-x-auto">
                               <table class="table-auto w-full">
                                  <thead>
                                     <tr class="bg-primary text-center">
                                        <th
                                           class="
                                           w-1/6
                                           min-w-[160px]
                                           text-lg
                                           font-semibold
                                           text-white
                                           py-4
                                           lg:py-7
                                           px-3
                                           lg:px-4
                                           border-l border-transparent
                                           "
                                           >
                                           Name
                                        </th>
                                        <th
                                           class="
                                           w-1/6
                                           min-w-[160px]
                                           text-lg
                                           font-semibold
                                           text-white
                                           py-4
                                           lg:py-7
                                           px-3
                                           lg:px-4
                                           "
                                           >
                                           Email
                                        </th>
                                      
                                        <th
                                        class="
                                        w-1/6
                                        min-w-[160px]
                                        text-lg
                                        font-semibold
                                        text-white
                                        py-4
                                        lg:py-7
                                        px-3
                                        lg:px-4
                                        "
                                        >
                                        Created at                                   
                                     </th>

                                        <th
                                           class="
                                           w-1/6
                                           min-w-[160px]
                                           text-lg
                                           font-semibold
                                           text-white
                                           py-4
                                           lg:py-7
                                           px-3
                                           lg:px-4
                                           "
                                           >
                                           Last Update                                   
                                        </th>
                                 
                                        <th
                                           class="
                                           w-1/6
                                           min-w-[160px]
                                           text-lg
                                           font-semibold
                                           text-white
                                           py-4
                                           lg:py-7
                                           px-3
                                           lg:px-4
                                           border-r border-transparent
                                           "
                                           >
                                           Edit
                                        </th>
                                     </tr>
                                  </thead>
                                  <tbody>
                                    @foreach ($admins as $admin)

                                     <tr>
                                        <td
                                           class="
                                           text-center text-dark
                                           font-medium
                                           text-base
                                           py-5
                                           px-2
                                           bg-[#F3F6FF]
                                           border-b border-l border-[#E8E8E8]
                                           "
                                           >
                                           {{$admin->name}}
                                        </td>
                                        <td
                                           class="
                                           text-center text-dark
                                           font-medium
                                           text-base
                                           py-5
                                           px-2
                                           bg-white
                                           border-b border-[#E8E8E8]
                                           "
                                           >
                                           {{$admin->email}}
                                        </td>
                                        <td
                                           class="
                                           text-center text-dark
                                           font-medium
                                           text-base
                                           py-5
                                           px-2
                                           bg-[#F3F6FF]
                                           border-b border-[#E8E8E8]
                                           "
                                           >
                                           {{$admin->updated_at}}
                                        </td>

                                        <td
                                           class="
                                           text-center text-dark
                                           font-medium
                                           text-base
                                           py-5
                                           px-2
                                           bg-[#F3F6FF]
                                           border-b border-[#E8E8E8]
                                           "
                                           >
                                           {{$admin->created_at}}
                                        </td>
                                   
                            
                                        <td
                                           class="
                                           text-center text-dark
                                           font-medium
                                           text-base
                                           py-5
                                           px-2
                                           bg-white
                                           border-b border-r border-[#E8E8E8]
                                           "
                                           >

                                             <a 
                                             href="{{ route('admin.edit', $admin->id) }}"
                                             class="
                                             border border-primary
                                             py-2
                                             px-15
                                             m-2
                                             text-primary
                                             inline-block
                                             rounded
                                             hover:bg-primary hover:text-white
                                             "
                                             >Update</a>
                                             
                                          </form>

                                          <form action="{{ route('admin.destroy', $admin->id) }}" method="POST">
                                             @csrf
                                             @method('DELETE')
                                             <button type="text" type="submit" 
                                             class="
                                             border border-primary
                                             py-2
                                             px-15
                                             m-2
                                             
                                             text-primary
                                             inline-block
                                             rounded
                                             hover:bg-primary hover:text-white
                                             "
                                             >Delete</button>
                                        </td>
                                     </tr>
                                     @endforeach
                                   
                                  </tbody>
                               </table>
                            </div>
                         </div>
                      </div>
                   </div>
                </section>
                <!-- ====== Table Section End -->
            </div>
        </div>
    </div>
</x-Admin-layout>
