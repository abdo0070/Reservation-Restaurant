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
         <a href="{{route('admin.reservation.create')}}"
             class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 rounded-lg text-white">New Reservation</a>
     </div>

         <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">

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
                                           Table no.
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
                                           Guest Number
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
                                           Reservation Date
                                        </th>
                                    
                                        
                                     </tr>
                                  </thead>
                                  <tbody>




                                    @foreach ($reservations as $reservation)
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
                                          {{$reservation->first_name}}
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
                                          {{$reservation->table->name}}
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
                                          {{$reservation->email}}
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
                                          {{$reservation->guest_number}}
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
                                          {{$reservation->res_date}}
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
