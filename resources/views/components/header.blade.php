<header class="flex flex-col sm:flex-row justify-between py-6 relativ">
    <div class="text-3xl text-gray-800 font-bold hover:text-gray-800">
        <a href="/">BDITFirm</a>
    </div>
    {{-- <img class="text-1xl font-bold uppercase text-purple-100" src="https://upload.wikimedia.org/wikipedia/commons/1/19/Digital_Marketing_logo.png" width="50" height="10"></img> --}}
    <nav class="hidden md:flex text-lg">
        <a class="text-gray-800 hover:text-purple-300 py-3 px-6 cursor-pointer" id="home">Home</a>
        <a class="text-gray-800 hover:text-purple-300 py-3 px-6 cursor-pointer" id="services">Services</a>
        <a class="text-gray-800 hover:text-purple-300 py-3 px-6 cursor-pointer" id="about">About</a>
        <a class="text-gray-800 hover:text-purple-300 py-3 px-6 cursor-pointer" id="contact">Contact</a>
        @if (Route::has('login'))
            @auth
                <a href="{{ url('/dashboard') }}" class="bg-purple-200 hover:bg-purple-300 rounded-full uppercase text-purple-700 py-3 px-6">Dashboard</a>
            @else
                <a href="{{ route('login') }}" class="bg-purple-200 hover:bg-purple-300 rounded-full uppercase text-purple-700 py-3 px-6">Login</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="bg-purple-200 hover:bg-purple-300 rounded-full uppercase text-purple-700 py-3 px-6">Sign Up</a>
                @endif
            @endauth
        @endif
    </nav>
    <div id="mySidepanel" class="sidepanel">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
        <a class="cursor-pointer" id="home">Home</a>
        <a class="cursor-pointer" id="services-mob">Services</a>
        <a class="cursor-pointer" id="about-mob">About</a>
        <a class="cursor-pointer" id="contact-mob">Contact</a>
    </div>

    <button class="flex md:hidden flex-col absolute rounded focus:outline-none focus:ring-2 focus:ring-purple-600 focus:ring-opacity-50 top-4 right-2 p-3" onclick="openNav()">
        <svg class="h-5 w-5" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <title>Menu</title>
            <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/>
        </svg>
    </button>
</header>