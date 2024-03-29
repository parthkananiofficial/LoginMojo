<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Plan Detail') }}
        </h2>
    </x-slot>



    <!-- component -->
    <style>
        *:hover {
            transition: all 150ms ease-in;
        }
    </style>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- This example requires Tailwind CSS v2.0+ -->
            <div class="bg-white shadow overflow-hidden sm:rounded-lg">

                <div class="antialiased max-w-6xl mx-auto my-12 bg-white px-8">
                    <div class="relative block md:flex items-center">
                        <div class="w-full md:w-1/2 relative z-1 bg-gray-100 rounded shadow-lg overflow-hidden">
                            <div
                                class="text-lg font-medium text-green-500 uppercase p-8 text-center border-b border-gray-200 tracking-wide">
                                Plan Code : {{strtoupper($plan_name)}}</div>
                            <div class="block sm:flex md:block lg:flex items-center justify-center">
                                <div class="mt-8 sm:m-8 md:m-0 md:mt-8 lg:m-8 text-center">
                                    <div class="inline-flex items-center">
                                        <span class="text-xl mr-2"></span>
                                        <span class="text-3xl font-medium">{{$plan['verifications']}}</span>
                                    </div>
                                    <span class="block text-sm text-gray-600 mt-2">Verifications</span>
                                </div>
                                <span class="text-xl text-gray-600 ml-2">+</span>
                                <div class="mt-4 mb-8 sm:m-8 md:m-0 md:mt-4 md:mb-8 lg:m-8 text-center">
                                    <div class="inline-flex items-center">
                                        <span class="text-3xl font-medium">{{$plan['validity']}}</span>
                                        <span class="text-xl ml-2">{{$plan['validity'] === 1 ? "Month" :"Months"}}</span>
                                    </div>
                                    <span class="block text-sm text-gray-600 mt-2">Validity</span>
                                </div>
                                <span class="text-xl text-gray-600 ml-2">=</span>
                                <div class="mt-4 mb-8 sm:m-8 md:m-0 md:mt-4 md:mb-8 lg:m-8 text-center">
                                    <div class="inline-flex items-center">
                                        <span class="text-3xl font-medium">{{ $isIndian ? $plan['inr_price'] : $plan['usd_price']}}</span>
                                    </div>
                                    <span class="block text-sm text-gray-600 mt-2">{{ $isIndian ? 'INR' : 'USD'}}</span>
                                </div>
                            </div>
                            <div class="flex justify-center mt-3">
                                <ul>
                                    <li class="flex items-center">
                                        <div class="bg-green-200 rounded-full p-2 fill-current text-green-700">
                                            <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                class="icon-umbrella">
                                                <path class="primary"
                                                    d="M11 3.05V2a1 1 0 0 1 2 0v1.05A10 10 0 0 1 22 13c0 1.33-2 1.33-2 0a2 2 0 1 0-4 0c0 1.33-2 1.33-2 0a2 2 0 1 0-4 0c0 1.33-2 1.33-2 0a2 2 0 1 0-4 0c0 1.33-2 1.33-2 0a10 10 0 0 1 9-9.95z" />
                                                <path class="secondary"
                                                    d="M11 14a1 1 0 0 1 2 0v5a3 3 0 0 1-6 0 1 1 0 0 1 2 0 1 1 0 0 0 2 0v-5z" />
                                                </svg>
                                        </div>
                                        <span class="text-gray-700 text-lg ml-3">No setup, monthly, or hidden
                                            fees</span>
                                    </li>
                                    <li class="flex items-center mt-3">
                                        <div class="bg-green-200 rounded-full p-2 fill-current text-green-700">
                                            <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                class="icon-shopping-bag">
                                                <path class="primary"
                                                    d="M5 8h14a1 1 0 0 1 1 .92l1 12A1 1 0 0 1 20 22H4a1 1 0 0 1-1-1.08l1-12A1 1 0 0 1 5 8z" />
                                                <path class="secondary"
                                                    d="M9 10a1 1 0 0 1-2 0V7a5 5 0 1 1 10 0v3a1 1 0 0 1-2 0V7a3 3 0 0 0-6 0v3z" />
                                                </svg>
                                        </div>
                                        <span class="text-gray-700 text-lg ml-3">Pay only for what you use</span>
                                    </li>
                                    <li class="flex items-center mt-3">
                                        <div class="bg-green-200 rounded-full p-2 fill-current text-green-700">
                                            <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                class="icon-pie-chart">
                                                <path class="primary"
                                                    d="M14 13h6.78a1 1 0 0 1 .97 1.22A10 10 0 1 1 9.78 2.25a1 1 0 0 1 1.22.97V10a3 3 0 0 0 3 3z" />
                                                <path class="secondary"
                                                    d="M20.78 11H14a1 1 0 0 1-1-1V3.22a1 1 0 0 1 1.22-.97c3.74.85 6.68 3.79 7.53 7.53a1 1 0 0 1-.97 1.22z" />
                                                </svg>
                                        </div>
                                        <span class="text-gray-700 text-lg ml-3">Real-time reporting</span>
                                    </li>
                                </ul>
                            </div>
                            {{ $plan['paymentIntent']->button('Checkout',["class"=>"w-full block flex items-center justify-center bg-gray-200 hover:bg-gray-300 p-8 text-md font-semibold text-gray-800 uppercase mt-16"]) }}
                            {{-- <a class="block flex items-center justify-center bg-gray-200 hover:bg-gray-300 p-8 text-md font-semibold text-gray-800 uppercase mt-16"
                                href="#">
                                <span>Create account</span>
                                <span class="font-medium text-gray-700 ml-2">➔</span>
                            </a> --}}
                        </div>
                        <div class="w-full md:w-1/2 relative z-0 px-8 md:px-0 md:py-16">
                            <div
                                class="bg-blue-900 text-white rounded-b md:rounded-b-none md:rounded-r shadow-lg overflow-hidden">
                                <div
                                    class="text-lg font-medium uppercase p-8 text-center border-b border-blue-800 tracking-wide">
                                    Enterprise</div>
                                <div
                                    class="text-center text-sm sm:text-md max-w-sm mx-auto mt-8 text-blue-200 px-8 lg:px-0">
                                    We are offering everything needed to run an related to Mobile Number Verifications at scale. Get in touch for details.
                                </div>
                                <div class="mt-8 border border-blue-800 mx-8 lg:mx-16 flex flex-wrap">
                                    <div
                                        class="flex items-center justify-center w-1/2 text-center p-4 border-r border-b border-blue-800">
                                        Migration assistance</div>
                                    <div
                                        class="flex items-center justify-center w-1/2 text-center p-4 border-b border-blue-800">
                                        Volume discounts</div>
                                    <div
                                        class="flex items-center justify-center w-1/2 text-center p-4 border-r border-blue-800">
                                        Integration Support</div>
                                    <div class="flex items-center justify-center w-1/2 text-center p-4">Custom Development</div>
                                </div>
                                <a class="block flex items-center justify-center bg-blue-800 hover:bg-blue-700 p-8 text-md font-semibold text-gray-300 uppercase mt-8"
                                    href="https://api.whatsapp.com/send/phone=917405136746&text=Hello">
                                    <span>Contact sales</span>
                                    <span class="font-medium text-gray-300 ml-2">➔</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://js.stripe.com/v3/"></script>
</x-app-layout>
