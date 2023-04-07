<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body>
    <nav class="bg-[#1A1A1A]">
        <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
            <div class="relative flex h-16 items-center justify-between">
                <img class="w-[100px] h-[60px] ml-[-97px] " src="{{url('asset/logo.png')}}" alt="">
                <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">

                </div>
                <div class="flex flex-1 items-center justify-center ">

                    <div class="flex flex-shrink-0 items-center">
                    </div>
                    <div class="hidden sm:ml-6 sm:block">
                        <div class="flex space-x-4">
                            <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                            <a href="#" class="hover:bg-gray-700 text-[#E8CA77] rounded-md px-3 py-2 text-sm font-medium" aria-current="page">Home</a>

                            <a href="#" class="text-[#E8CA77] hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">Product</a>

                            <a href="#" class="text-[#E8CA77] hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">Articles</a>

                            <a href="#" class="text-[#E8CA77] hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">Recipe</a>

                            <a href="#" class="text-[#E8CA77] hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">Contact Us</a>

                            <a href="#" class="text-[#E8CA77] hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">My Order</a>
                        </div>
                    </div>
                </div>
                @auth
                <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
                    <!-- Profile dropdown -->
                    <div class="relative ml-3">
                        <div>
                            <button type="button" class="flex rounded-full bg-gray-800 text-sm focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800" id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                                <span class="sr-only">Open user menu</span>
                                <img class="h-8 w-8 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                            </button>

                        </div>
                        <!--
                  Dropdown menu, show/hide based on menu state.

                  Entering: "transition ease-out duration-100"
                    From: "transform opacity-0 scale-95"
                    To: "transform opacity-100 scale-100"
                  Leaving: "transition ease-in duration-75"
                    From: "transform opacity-100 scale-100"
                    To: "transform opacity-0 scale-95"
                -->

                    </div>
                    <div class="group">
                        <a href="#" class="text-gray-300 text-white rounded-md px-3 py-2 text-sm font-medium" aria-current="page">{{ Auth::user()->email }}</a>
                        <div class="group-hover:block hidden w-[100px] h-[60px] bg-white shadow-lg absolute mt-[5px]">
                            <button class="border-b border-black w-full flex items-center justify-center">Profile</button>
                            <form action="{{ route('logout') }}" method="post">
                                @csrf
                                <button class="w-full" type="submit">
                                    Logout
                                </button>
                            </form>
                        </div>
                    </div>
                    @else
                    <div class="relative ml-3">
                        <div>
                            <button type="button" class="flex rounded-full text-sm focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800" id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                                <span class="sr-only">Open user menu</span>
                                <img class="h-8 w-8 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">

                                <h1 class="text-[#E8CA77] font-bold pl-[15px] pt-[5px]">Profile</h1>

                            </button>
                        </div>

                    </div>

                    @endauth
                </div>
            </div>
        </div>

        <!-- Mobile menu, show/hide based on menu state. -->
        <div class="sm:hidden" id="mobile-menu">
            <div class="space-y-1 px-2 pt-2 pb-3">
                <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                <a href="#" class="bg-gray-900 text-white block rounded-md px-3 py-2 text-base font-medium" aria-current="page">Dashboard</a>

                <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white block rounded-md px-3 py-2 text-base font-medium">Team</a>

                <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white block rounded-md px-3 py-2 text-base font-medium">Projects</a>

                <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white block rounded-md px-3 py-2 text-base font-medium">Calendar</a>
            </div>
        </div>
    </nav>


    <div class="hero h-[280px]  w-[1374px] mx-auto mt-[32px] bg-gradient" style="background-image: url(asset/bg.jpeg);">
        <div class="flex flex-col items-center">
            <h1 class="font-bold text-white text-[64px] mt-[38px]">Today's Favorite</h1>
            <div class="border-[4px] w-[229px] h-[58px] mt-[35px]">
                <h1 class="text-white text-center text-[32px]">Learn More</h1>
            </div>
        </div>
    </div>

    <div class="flex flex-col items-center">
        <h1 class="font-bold text-[#e7b10a] text-[48px] mt-[38px]">Featured Product</h1>
    </div>

    <div class="flex justify-center">
        <div>
            <div class="shadow-2xl w-[291px] h-[444px] m-[30px] ">
                <img class="" src="{{url('asset/dummy.png')}}" alt="">
                <h1 class="font-bold pl-[21px] pt-[41px] font-poppins">JASA MASAK</h1>
                <p class="pl-[21px] font-poppins">Langsung dimasak tanpa ribet.</p>
                <h2 class="font-bold text-center text-[22px] font-poppins">Rp.5000</h2>
                <button class="bg-[#E7B10A] font-bold w-[260px] h-[48px] text-white text-[24px] rounded-[10px] ml-[15px] mt-[2px]">Detail</button>
            </div>
        </div>

        <div>
            <div class="shadow-2xl w-[291px] h-[444px] m-[30px] ">
                <img class="" src="{{url('asset/dummy.png')}}" alt="">
                <h1 class="font-bold pl-[21px] pt-[41px] font-poppins">Paket Sayur Sop</h1>
                <p class="pl-[21px] font-poppins">Isi A, isi B, isi C </p>
                <h2 class="font-bold text-center text-[22px] font-poppins">Rp 13.500</h2>
                <button class="bg-[#E7B10A] font-bold w-[260px] h-[48px] text-white text-[24px] rounded-[10px] ml-[15px] mt-[2px]">Detail</button>
            </div>
        </div>

        <div>
            <div class="shadow-2xl w-[291px] h-[444px] m-[30px] ">
                <img class="" src="{{url('asset/dummy.png')}}" alt="">
                <h1 class="font-bold pl-[21px] pt-[41px] font-poppins">Paket Sayur Sop</h1>
                <p class="pl-[21px] font-poppins">Isi A, isi B, isi C </p>
                <h2 class="font-bold text-center text-[22px] font-poppins">Rp 13.500</h2>
                <button class="bg-[#E7B10A] font-bold w-[260px] h-[48px] text-white text-[24px] rounded-[10px] ml-[15px] mt-[2px]">Detail</button>
            </div>
        </div>

        <div>
            <div class="shadow-2xl w-[291px] h-[444px] m-[30px] ">
                <img class="" src="{{url('asset/dummy.png')}}" alt="">
                <h1 class="font-bold pl-[21px] pt-[41px] font-poppins">Paket Sayur Sop</h1>
                <p class="pl-[21px] font-poppins">Isi A, isi B, isi C </p>
                <h2 class="font-bold text-center text-[22px] font-poppins">Rp 13.500</h2>
                <button class="bg-[#E7B10A] font-bold w-[260px] h-[48px] text-white text-[24px] rounded-[10px] ml-[15px] mt-[2px]">Detail</button>
            </div>
        </div>






    </div>

    <div class="flex flex-col items-center">
        <h1 class="font-bold text-[#e7b10a] text-[48px] mt-[38px]">Product</h1>
    </div>

    <div class="flex justify-center">
        <div>
            <div class="shadow-2xl w-[291px] h-[444px] m-[30px] ">
                <img class="" src="{{url('asset/dummy.png')}}" alt="">
                <h1 class="font-bold pl-[21px] pt-[41px] font-poppins">Paket Sayur Sop</h1>
                <p class="pl-[21px] font-poppins">Isi A, isi B, isi C </p>
                <h2 class="font-bold text-center text-[22px] font-poppins">Rp 13.500</h2>
                <button class="bg-[#E7B10A] font-bold w-[260px] h-[48px] text-white text-[24px] rounded-[10px] ml-[15px] mt-[2px]">Detail</button>
            </div>
        </div>

        <div>
            <div class="shadow-2xl w-[291px] h-[444px] m-[30px] ">
                <img class="" src="{{url('asset/dummy.png')}}" alt="">
                <h1 class="font-bold pl-[21px] pt-[41px] font-poppins">Paket Sayur Sop</h1>
                <p class="pl-[21px] font-poppins">Isi A, isi B, isi C </p>
                <h2 class="font-bold text-center text-[22px] font-poppins">Rp 13.500</h2>
                <button class="bg-[#E7B10A] font-bold w-[260px] h-[48px] text-white text-[24px] rounded-[10px] ml-[15px] mt-[2px]">Detail</button>
            </div>
        </div>

        <div>
            <div class="shadow-2xl w-[291px] h-[444px] m-[30px] ">
                <img class="" src="{{url('asset/dummy.png')}}" alt="">
                <h1 class="font-bold pl-[21px] pt-[41px] font-poppins">Paket Sayur Sop</h1>
                <p class="pl-[21px] font-poppins">Isi A, isi B, isi C </p>
                <h2 class="font-bold text-center text-[22px] font-poppins">Rp 13.500</h2>
                <button class="bg-[#E7B10A] font-bold w-[260px] h-[48px] text-white text-[24px] rounded-[10px] ml-[15px] mt-[2px]">Detail</button>
            </div>
        </div>

        <div>
            <div class="shadow-2xl w-[291px] h-[444px] m-[30px] ">
                <img class="" src="{{url('asset/dummy.png')}}" alt="">
                <h1 class="font-bold pl-[21px] pt-[41px] font-poppins">Paket Sayur Sop</h1>
                <p class="pl-[21px] font-poppins">Isi A, isi B, isi C </p>
                <h2 class="font-bold text-center text-[22px] font-poppins">Rp 13.500</h2>
                <button class="bg-[#E7B10A] font-bold w-[260px] h-[48px] text-white text-[24px] rounded-[10px] ml-[15px] mt-[2px]">Detail</button>
            </div>
        </div>
    </div>
    <div class="flex flex-col items-center">
        <div class="border-[4px] w-[436px] h-[58px] mt-[35px] border-[#E7B10A] rounded-[16px]">
            <h1 class="font-bold text-[#E7B10A] text-center text-[32px]">Load More</h1>
        </div>
    </div>



    
</body>
</html>
