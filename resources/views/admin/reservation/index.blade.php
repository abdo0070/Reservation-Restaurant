<x-Admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <script src="https://cdn.tailwindcss.com"></script>
                <link rel="stylesheet" href="https://cdn.tailgrids.com/tailgrids-fallback.css" />
                <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
                
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
                                           Table
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
                                           Data
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
                                           Transfer
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
                                           Register
                                        </th>
                                     </tr>
                                  </thead>
                                  <tbody>
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
                                           .com
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
                                           1 Year
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
                                           $75.00
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
                                           $5.00
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
                                           $10.00
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
                                              href="javascript:void(0)"
                                              class="
                                              border border-primary
                                              py-2
                                              px-6
                                              text-primary
                                              inline-block
                                              rounded
                                              hover:bg-primary hover:text-white
                                              "
                                              >
                                           Sign Up
                                           </a>
                                        </td>
                                     </tr>
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
                                           .com
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
                                           1 Year
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
                                           $75.00
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
                                           $5.00
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
                                           $10.00
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
                                              href="javascript:void(0)"
                                              class="
                                              border border-primary
                                              py-2
                                              px-6
                                              text-primary
                                              inline-block
                                              rounded
                                              hover:bg-primary hover:text-white
                                              "
                                              >
                                           Sign Up
                                           </a>
                                        </td>
                                     </tr>
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
                                           .com
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
                                           1 Year
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
                                           $75.00
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
                                           $5.00
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
                                           $10.00
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
                                              href="javascript:void(0)"
                                              class="
                                              border border-primary
                                              py-2
                                              px-6
                                              text-primary
                                              inline-block
                                              rounded
                                              hover:bg-primary hover:text-white
                                              "
                                              >
                                           Sign Up
                                           </a>
                                        </td>
                                     </tr>
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
