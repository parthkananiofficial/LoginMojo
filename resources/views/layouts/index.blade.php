<x-guest-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Config') }}
        </h2>
    </x-slot>
    <!-- Header Area wrapper Starts -->
    <header id="header-wrap" class="relative">
        @include('includes.header')
    </header>
    <!-- Header Area wrapper End -->
    @yield('content')
    <!-- Footer Section Start -->
    <footer id="footer" class="bg-black py-16">
        @include('includes.footer')
    </footer>
    <!-- Footer Section End -->
    <!-- Go to Top Link -->
    <a href="#"
        class="back-to-top w-10 h-10 fixed bottom-0 right-0 mb-5 mr-5 flex items-center justify-center rounded-full bg-gray-600 text-white text-lg z-20 duration-300 hover:bg-gray-400">
        <i class="lni lni-arrow-up"></i>
    </a>

</x-guest-layout>
