<header class="bg-transparent absolute top-0 left-0 w-full flex items-center z-10">
 
    <div class="container">
        <div class="flex items-center justify-between relative bg-[#A7D1DD] shadow-xl">
            <div class="px-4">
                <a href="#home" class="font-bold text-lg text-primary block py-1">  
                    
                    <!-- if user is logged in, show user name -->
                    @auth
                    <img src="{{ asset('image/logo.png') }}" alt="logo" class="w-20">
                    <!-- {{ Auth::user()->name }} -->
                    @else
                    <img src="{{ asset('image/logo.png') }}" alt="logo" class="w-20">
                    @endauth  
                </a>
 
            </div>
            <div class="flex items-center px-4 ">
                <button id="hamburger" name="hamburger" type="button" class="block absolute right-4 lg:hidden ">
                    <span class="hamburger-line transition duration-300 ease-in-out origin-top-left"></span>
                    <span class="hamburger-line transition duration-300 ease-in-out"></span>
                    <span class="hamburger-line transition duration-300 ease-in-out origin-bottom-left"></span>
                </button>
 
                <nav id="nav-menu" class="hidden absolute py-5 bg-white shadow-lg rounded-lg max-w-[250px] w-full right-4 top-full lg:block lg:static lg:bg-transparent lg:max-w-full lg:shadow-none lg:rounded-none  ">
                    <ul class="block lg:flex ">
 
                        @auth
                        <li class="group">
                            <a href="/pickup" class="text-base text-black py-2 mx-8 flex group-hover:text-primary ">Pickup</a>
                        </li>
                        <li class="group">
                            <a href="/pricelist" class="text-base text-black py-2 mx-8 flex group-hover:text-primary">Pricelist</a>
                        </li>
                        <li class="group">
                            <a href="/register" class="text-base text-black py-2 mx-8 flex group-hover:text-primary">Register</a>
                        </li>
                        <li class="group">
                            <a href="/pickuptime" class="text-base text-black py-2 mx-8 flex group-hover:text-primary">Jadwal Pickup</a>
                        </li>
                        <li class="group">
                            <a href="/exchange" class="text-base text-black py-2 mx-8 flex group-hover:text-primary">Exchange</a>
                        </li>
                        <li class="group">
                            <a href="/aboutus" class="text-base text-black py-2 mx-8 flex group-hover:text-primary pr-20">About Us</a>
                        </li>

                        <li class="group">
                            <a href="/myprofile" class="text-base text-black py-2 mx-8 flex group-hover:text-primary">My Profile  <img src="{{ asset('image/profile.jpg') }}" class=" object-contain h-5 w-5 "></img></a>
                        </li>


                        @else
                        <li class="group">
                            <a href="/login" class="text-base text-black py-2 mx-8 flex group-hover:text-primary">Login</a>
                        </li>
                        <li class="group">
                            <a href="/register" class="text-base text-black py-2 mx-8 flex group-hover:text-primary">Register</a>
                        </li>
                        @endauth
                        
                        
                    </ul>
                </nav>
 
            </div>
        </div>
    </div>
 
    </div>
 
</header>
 