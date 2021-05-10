<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Available Plans') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                @include('includes.credits')


                <!-- This example requires Tailwind CSS v2.0+ -->
                <div class="relative bg-white overflow-hidden">
                    <div class="max-w-7xl mx-auto">
                        <div class="relative z-10 pb-8  sm:pb-16 md:pb-20 lg:max-w-2xl lg:w-full lg:pb-28 xl:pb-32">
                            <main
                                class="mt-10 mx-auto max-w-7xl px-4 sm:mt-12 sm:px-6 md:mt-16 lg:mt-20 lg:px-8 xl:mt-28">
                                <div class="sm:text-center lg:text-left">
                                    <h1
                                        class="text-4xl tracking-tight font-extrabold text-gray-900 sm:text-5xl md:text-6xl">
                                        <span class="block xl:inline">Introductory Offer</span>
                                        <span class="block text-gray-600 xl:inline">Don't loose it !</span>
                                    </h1>
                                    <p
                                        class="mt-3 text-base text-gray-500 sm:mt-5 sm:text-lg sm:max-w-xl sm:mx-auto md:mt-5 md:text-xl lg:mx-0">
                                        We are running a promotional offer for a limited period with a huge discount of
                                        as much as upto 90%.<br><br>
                                        Buy now and start giving a seamless login experience to your online customers.
                                    </p>
                                </div>
                            </main>
                        </div>
                    </div>
                    <div class="lg:absolute lg:inset-y-0 lg:right-0 lg:w-1/2">
                        <img class="h-56 w-full object-cover sm:h-72 md:h-96 lg:w-full lg:h-full"
                            src="{{asset('img/offer-banner.png')}}" alt="">
                    </div>
                </div>



                <!-- COMBO Pricing section Start -->
                <section class="text-gray-600 body-font overflow-hidden" id="combo">
                    <div class="container px-5 py-10 mx-auto">
                        <div class="flex flex-col text-left w-full mb-5">
                            <h1 class="sm:text-4xl text-3xl font-medium title-font mb-2 text-gray-900">Combo Packages
                            </h1>
                        </div>
                        <div class="flex flex-wrap -m-4">
                            <div class="p-4 xl:w-1/3 md:w-1/3">
                                <div
                                    class="h-full p-6 rounded-lg border-2 border-gray-300 flex flex-col relative overflow-hidden">
                                    <h2 class="text-sm tracking-widest title-font mb-1 font-medium">STARTER</h2>
                                    <h1
                                        class="text-5xl text-gray-900 leading-none flex items-center pb-4 mb-4 border-b border-gray-200">
                                        <span>${{$plans['comboPlan6']['usd_price']}}</span>
                                        <span class="text-lg ml-1 font-normal text-gray-500 line-through">$79</span>
                                    </h1>
                                    <p class="flex items-center text-gray-600 mb-2">
                                        <span
                                            class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-gray-400 text-white rounded-full flex-shrink-0">
                                            <svg fill="none" stroke="currentColor" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="2.5" class="w-3 h-3"
                                                viewBox="0 0 24 24">
                                                <path d="M20 6L9 17l-5-5"></path>
                                            </svg>
                                        </span>1,000 Verifications
                                    </p>
                                    <p class="flex items-center text-gray-600 mb-2">
                                        <span
                                            class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-gray-400 text-white rounded-full flex-shrink-0">
                                            <svg fill="none" stroke="currentColor" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="2.5" class="w-3 h-3"
                                                viewBox="0 0 24 24">
                                                <path d="M20 6L9 17l-5-5"></path>
                                            </svg>
                                        </span>1 Month Validity
                                    </p>
                                    <p class="flex items-center text-gray-600 mb-2">
                                        <span
                                            class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-gray-400 text-white rounded-full flex-shrink-0">
                                            <svg fill="none" stroke="currentColor" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="2.5" class="w-3 h-3"
                                                viewBox="0 0 24 24">
                                                <path d="M20 6L9 17l-5-5"></path>
                                            </svg>
                                        </span>Customisable Message Templates
                                    </p>
                                    <p class="flex items-center text-gray-600 mb-2">
                                        <span
                                            class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-gray-400 text-white rounded-full flex-shrink-0">
                                            <svg fill="none" stroke="currentColor" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="2.5" class="w-3 h-3"
                                                viewBox="0 0 24 24">
                                                <path d="M20 6L9 17l-5-5"></path>
                                            </svg>
                                        </span>Common phone number
                                    </p>
                                    <p class="flex items-center text-gray-600 mb-6">
                                        <span
                                            class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-gray-400 text-white rounded-full flex-shrink-0">
                                            <svg fill="none" stroke="currentColor" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="2.5" class="w-3 h-3"
                                                viewBox="0 0 24 24">
                                                <path d="M20 6L9 17l-5-5"></path>
                                            </svg>
                                        </span>Email Support
                                    </p>

                                    {{-- {{ $plans['comboPlan6']->button('Buy Now') }} --}}
                                    <a href="{{route('plan.show','comboPlan6')}}"
                                        class="flex items-center mt-auto text-white bg-gray-400 border-0 py-2 px-4 w-full focus:outline-none hover:bg-gray-500 rounded">Buy
                                        Now
                                        <svg fill="none" stroke="currentColor" stroke-linecap="round"
                                            stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-auto"
                                            viewBox="0 0 24 24">
                                            <path d="M5 12h14M12 5l7 7-7 7"></path>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                            <div class="p-4 xl:w-1/3 md:w-1/3">
                                <div
                                    class="h-full p-6 rounded-lg border-2 border-gray-500 flex flex-col relative overflow-hidden">
                                    <span
                                        class="bg-gray-800 text-white px-3 py-1 tracking-widest text-xs absolute right-0 top-0 rounded-bl">POPULAR</span>
                                    <h2 class="text-sm tracking-widest title-font mb-1 font-medium">PROFESIONAL</h2>
                                    <h1
                                        class="text-5xl text-gray-900 leading-none flex items-center pb-4 mb-4 border-b border-gray-200">
                                        <span>${{$plans['comboPlan19']['usd_price']}}</span>
                                        <span class="text-lg ml-1 font-normal text-gray-500 line-through">$299</span>
                                    </h1>
                                    <p class="flex items-center text-gray-600 mb-2">
                                        <span
                                            class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-gray-400 text-white rounded-full flex-shrink-0">
                                            <svg fill="none" stroke="currentColor" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="2.5" class="w-3 h-3"
                                                viewBox="0 0 24 24">
                                                <path d="M20 6L9 17l-5-5"></path>
                                            </svg>
                                        </span>5,000 Verifications
                                    </p>
                                    <p class="flex items-center text-gray-600 mb-2">
                                        <span
                                            class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-gray-400 text-white rounded-full flex-shrink-0">
                                            <svg fill="none" stroke="currentColor" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="2.5" class="w-3 h-3"
                                                viewBox="0 0 24 24">
                                                <path d="M20 6L9 17l-5-5"></path>
                                            </svg>
                                        </span>3 Months Validity
                                    </p>
                                    <p class="flex items-center text-gray-600 mb-2">
                                        <span
                                            class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-gray-400 text-white rounded-full flex-shrink-0">
                                            <svg fill="none" stroke="currentColor" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="2.5" class="w-3 h-3"
                                                viewBox="0 0 24 24">
                                                <path d="M20 6L9 17l-5-5"></path>
                                            </svg>
                                        </span>Customisable Message Templates
                                    </p>
                                    <p class="flex items-center text-gray-600 mb-2">
                                        <span
                                            class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-gray-400 text-white rounded-full flex-shrink-0">
                                            <svg fill="none" stroke="currentColor" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="2.5" class="w-3 h-3"
                                                viewBox="0 0 24 24">
                                                <path d="M20 6L9 17l-5-5"></path>
                                            </svg>
                                        </span>Common phone number
                                    </p>
                                    <p class="flex items-center text-gray-600 mb-6">
                                        <span
                                            class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-gray-400 text-white rounded-full flex-shrink-0">
                                            <svg fill="none" stroke="currentColor" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="2.5" class="w-3 h-3"
                                                viewBox="0 0 24 24">
                                                <path d="M20 6L9 17l-5-5"></path>
                                            </svg>
                                        </span>Email Support
                                    </p>

                                    {{-- {{ $plans['comboPlan19']->button('Buy Now') }} --}}
                                    <a href="{{route('plan.show','comboPlan19')}}"
                                        class="flex items-center mt-auto text-white bg-gray-800 border-0 py-2 px-4 w-full focus:outline-none hover:bg-gray-600 rounded">Buy
                                        Now
                                        <svg fill="none" stroke="currentColor" stroke-linecap="round"
                                            stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-auto"
                                            viewBox="0 0 24 24">
                                            <path d="M5 12h14M12 5l7 7-7 7"></path>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                            <div class="p-4 xl:w-1/3 md:w-1/3">
                                <div
                                    class="h-full p-6 rounded-lg border-2 border-gray-300 flex flex-col relative overflow-hidden">
                                    <h2 class="text-sm tracking-widest title-font mb-1 font-medium">BUSINESS</h2>
                                    <h1
                                        class="text-5xl text-gray-900 leading-none flex items-center pb-4 mb-4 border-b border-gray-200">
                                        <span class="text-lg ml-1 font-normal text-gray-500">For large businesses or
                                            those in
                                            regulated industries</span>
                                    </h1>
                                    <p class="flex items-center text-gray-600 mb-2">
                                        <span
                                            class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-gray-400 text-white rounded-full flex-shrink-0">
                                            <svg fill="none" stroke="currentColor" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="2.5" class="w-3 h-3"
                                                viewBox="0 0 24 24">
                                                <path d="M20 6L9 17l-5-5"></path>
                                            </svg>
                                        </span>Customisable Message Templates
                                    </p>
                                    <p class="flex items-center text-gray-600 mb-2">
                                        <span
                                            class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-gray-400 text-white rounded-full flex-shrink-0">
                                            <svg fill="none" stroke="currentColor" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="2.5" class="w-3 h-3"
                                                viewBox="0 0 24 24">
                                                <path d="M20 6L9 17l-5-5"></path>
                                            </svg>
                                        </span>Private phone number
                                    </p>
                                    <p class="flex items-center text-gray-600 mb-6">
                                        <span
                                            class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-gray-400 text-white rounded-full flex-shrink-0">
                                            <svg fill="none" stroke="currentColor" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="2.5" class="w-3 h-3"
                                                viewBox="0 0 24 24">
                                                <path d="M20 6L9 17l-5-5"></path>
                                            </svg>
                                        </span>Call Support 24x7
                                    </p>
                                    <a href="https://api.whatsapp.com/send?phone=917405136746&text=Hello"
                                        class="flex items-center mt-auto text-white bg-gray-400 border-0 py-2 px-4 w-full focus:outline-none hover:bg-gray-500 rounded">Contact
                                        Sales
                                        <svg fill="none" stroke="currentColor" stroke-linecap="round"
                                            stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-auto"
                                            viewBox="0 0 24 24">
                                            <path d="M5 12h14M12 5l7 7-7 7"></path>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- COMBO Pricing Table Section End -->


                <!-- Verification section Start -->
                <section class="text-gray-600 body-font overflow-hidden" id="verification">
                    <div class="container px-5 py-10 mx-auto">
                        <div class="flex flex-col text-left w-full mb-5">
                            <h1 class="sm:text-4xl text-3xl font-medium title-font mb-2 text-gray-900">Verification
                                TopUps</h1>
                        </div>
                        <div class="flex flex-wrap -m-4">
                            <div class="p-4 xl:w-1/3 md:w-1/3">
                                <div
                                    class="h-full p-6 rounded-lg border-2 border-gray-300 flex flex-col relative overflow-hidden">
                                    <h2 class="text-sm tracking-widest title-font mb-1 font-medium">SMALL PACK</h2>
                                    <h1
                                        class="text-5xl text-gray-900 leading-none flex items-center pb-4 mb-4 border-b border-gray-200">
                                        <span>${{$plans['verificationTopup1000']['usd_price']}}</span>
                                        <span class="text-lg ml-1 font-normal text-gray-500 line-through">$49</span>
                                    </h1>
                                    <p class="flex items-center text-gray-600 mb-2">
                                        <span
                                            class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-gray-400 text-white rounded-full flex-shrink-0">
                                            <svg fill="none" stroke="currentColor" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="2.5" class="w-3 h-3"
                                                viewBox="0 0 24 24">
                                                <path d="M20 6L9 17l-5-5"></path>
                                            </svg>
                                        </span>1,000 Verifications
                                    </p>
                                    {{-- {{ $plans['verificationTopup1000']->button('Buy Now') }} --}}

                                    <a href="{{route('plan.show','verificationTopup1000')}}"
                                        class="flex items-center mt-auto text-white bg-gray-400 border-0 py-2 px-4 w-full focus:outline-none hover:bg-gray-500 rounded">Buy
                                        Now
                                        <svg fill="none" stroke="currentColor" stroke-linecap="round"
                                            stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-auto"
                                            viewBox="0 0 24 24">
                                            <path d="M5 12h14M12 5l7 7-7 7"></path>
                                        </svg>
                                    </a>
                                </div>
                            </div>


                            <div class="p-4 xl:w-1/3 md:w-1/3">
                                <div
                                    class="h-full p-6 rounded-lg border-2 border-gray-300 flex flex-col relative overflow-hidden">
                                    <h2 class="text-sm tracking-widest title-font mb-1 font-medium">MEDIUM PACK</h2>
                                    <h1
                                        class="text-5xl text-gray-900 leading-none flex items-center pb-4 mb-4 border-b border-gray-200">
                                        <span>${{$plans['verificationTopup5000']['usd_price']}}</span>
                                        <span class="text-lg ml-1 font-normal text-gray-500 line-through">$199</span>
                                    </h1>
                                    <p class="flex items-center text-gray-600 mb-2">
                                        <span
                                            class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-gray-400 text-white rounded-full flex-shrink-0">
                                            <svg fill="none" stroke="currentColor" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="2.5" class="w-3 h-3"
                                                viewBox="0 0 24 24">
                                                <path d="M20 6L9 17l-5-5"></path>
                                            </svg>
                                        </span>5,000 Verifications
                                    </p>
                                    {{-- {{ $plans['verificationTopup5000']->button('Buy Now') }} --}}

                                    <a href="{{route('plan.show','verificationTopup5000')}}"
                                        class="flex items-center mt-auto text-white bg-gray-400 border-0 py-2 px-4 w-full focus:outline-none hover:bg-gray-500 rounded">Buy
                                        Now
                                        <svg fill="none" stroke="currentColor" stroke-linecap="round"
                                            stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-auto"
                                            viewBox="0 0 24 24">
                                            <path d="M5 12h14M12 5l7 7-7 7"></path>
                                        </svg>
                                    </a>
                                </div>
                            </div>

                            <div class="p-4 xl:w-1/3 md:w-1/3">
                                <div
                                    class="h-full p-6 rounded-lg border-2 border-gray-500 flex flex-col relative overflow-hidden">
                                    <span
                                        class="bg-gray-800 text-white px-3 py-1 tracking-widest text-xs absolute right-0 top-0 rounded-bl">POPULAR</span>
                                    <h2 class="text-sm tracking-widest title-font mb-1 font-medium">LARGE PACK</h2>
                                    <h1
                                        class="text-5xl text-gray-900 leading-none flex items-center pb-4 mb-4 border-b border-gray-200">
                                        <span>${{$plans['verificationTopup10000']['usd_price']}}</span>
                                        <span class="text-lg ml-1 font-normal text-gray-500 line-through">$299</span>
                                    </h1>
                                    <p class="flex items-center text-gray-600 mb-2">
                                        <span
                                            class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-gray-400 text-white rounded-full flex-shrink-0">
                                            <svg fill="none" stroke="currentColor" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="2.5" class="w-3 h-3"
                                                viewBox="0 0 24 24">
                                                <path d="M20 6L9 17l-5-5"></path>
                                            </svg>
                                        </span>10,000 Verifications
                                    </p>
                                    {{-- {{ $plans['verificationTopup10000']->button('Buy Now') }} --}}
                                    <a href="{{route('plan.show','verificationTopup10000')}}"
                                        class="flex items-center mt-auto text-white bg-gray-800 border-0 py-2 px-4 w-full focus:outline-none hover:bg-gray-600 rounded">Buy
                                        Now
                                        <svg fill="none" stroke="currentColor" stroke-linecap="round"
                                            stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-auto"
                                            viewBox="0 0 24 24">
                                            <path d="M5 12h14M12 5l7 7-7 7"></path>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Verification Table Section End -->

                <!-- Validity section Start -->
                <section class="text-gray-600 body-font overflow-hidden" id="validity">
                    <div class="container px-5 py-10 mx-auto">
                        <div class="flex flex-col text-left w-full mb-5">
                            <h1 class="sm:text-4xl text-3xl font-medium title-font mb-2 text-gray-900">Validity TopUps
                            </h1>
                        </div>
                        <div class="flex flex-wrap -m-4">
                            <div class="p-4 xl:w-1/3 md:w-1/3">
                                <div
                                    class="h-full p-6 rounded-lg border-2 border-gray-300 flex flex-col relative overflow-hidden">
                                    <h2 class="text-sm tracking-widest title-font mb-1 font-medium">SHORT TERM</h2>
                                    <h1
                                        class="text-5xl text-gray-900 leading-none flex items-center pb-4 mb-4 border-b border-gray-200">
                                        <span>${{$plans['validityTopup1Month']['usd_price']}}</span>
                                        <span class="text-lg ml-1 font-normal text-gray-500 line-through">$39</span>
                                    </h1>
                                    <p class="flex items-center text-gray-600 mb-2">
                                        <span
                                            class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-gray-400 text-white rounded-full flex-shrink-0">
                                            <svg fill="none" stroke="currentColor" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="2.5" class="w-3 h-3"
                                                viewBox="0 0 24 24">
                                                <path d="M20 6L9 17l-5-5"></path>
                                            </svg>
                                        </span>{{$plans['validityTopup1Month']['validity']}} Month Validity
                                    </p>
                                    {{-- {{ $plans['validityTopup1Month']->button('Buy Now') }} --}}
                                    <a href="{{route('plan.show','validityTopup1Month')}}"
                                        class="flex items-center mt-auto text-white bg-gray-400 border-0 py-2 px-4 w-full focus:outline-none hover:bg-gray-500 rounded">Buy
                                        Now
                                        <svg fill="none" stroke="currentColor" stroke-linecap="round"
                                            stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-auto"
                                            viewBox="0 0 24 24">
                                            <path d="M5 12h14M12 5l7 7-7 7"></path>
                                        </svg>
                                    </a>
                                </div>
                            </div>

                            <div class="p-4 xl:w-1/3 md:w-1/3">
                                <div
                                    class="h-full p-6 rounded-lg border-2 border-gray-500 flex flex-col relative overflow-hidden">
                                    <span
                                        class="bg-gray-800 text-white px-3 py-1 tracking-widest text-xs absolute right-0 top-0 rounded-bl">POPULAR</span>
                                    <h2 class="text-sm tracking-widest title-font mb-1 font-medium">MEDIUM TERM</h2>
                                    <h1
                                        class="text-5xl text-gray-900 leading-none flex items-center pb-4 mb-4 border-b border-gray-200">
                                        <span>${{$plans['validityTopup3Months']['usd_price']}}</span>
                                        <span class="text-lg ml-1 font-normal text-gray-500 line-through">$149</span>
                                    </h1>
                                    <p class="flex items-center text-gray-600 mb-2">
                                        <span
                                            class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-gray-400 text-white rounded-full flex-shrink-0">
                                            <svg fill="none" stroke="currentColor" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="2.5" class="w-3 h-3"
                                                viewBox="0 0 24 24">
                                                <path d="M20 6L9 17l-5-5"></path>
                                            </svg>
                                        </span>{{$plans['validityTopup3Months']['validity']}} Months Validity
                                    </p>


                                    <a href="{{route('plan.show','validityTopup3Months')}}"
                                        class="flex items-center mt-auto text-white bg-gray-800 border-0 py-2 px-4 w-full focus:outline-none hover:bg-gray-600 rounded">Buy
                                        Now
                                        <svg fill="none" stroke="currentColor" stroke-linecap="round"
                                            stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-auto"
                                            viewBox="0 0 24 24">
                                            <path d="M5 12h14M12 5l7 7-7 7"></path>
                                        </svg>
                                    </a>
                                </div>
                            </div>

                            <div class="p-4 xl:w-1/3 md:w-1/3">
                                <div
                                    class="h-full p-6 rounded-lg border-2 border-gray-300 flex flex-col relative overflow-hidden">
                                    <h2 class="text-sm tracking-widest title-font mb-1 font-medium">LONG TERM</h2>
                                    <h1
                                        class="text-5xl text-gray-900 leading-none flex items-center pb-4 mb-4 border-b border-gray-200">
                                        <span>${{$plans['validityTopup6Months']['usd_price']}}</span>
                                        <span class="text-lg ml-1 font-normal text-gray-500 line-through">$299</span>
                                    </h1>
                                    <p class="flex items-center text-gray-600 mb-2">
                                        <span
                                            class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-gray-400 text-white rounded-full flex-shrink-0">
                                            <svg fill="none" stroke="currentColor" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="2.5" class="w-3 h-3"
                                                viewBox="0 0 24 24">
                                                <path d="M20 6L9 17l-5-5"></path>
                                            </svg>
                                        </span>{{$plans['validityTopup6Months']['validity']}} Months Validity
                                    </p>
                                    {{-- {{ $plans['validityTopup6Months']->button('Buy Now',['class' => 'flex items-center mt-auto text-white bg-gray-400 border-0 py-2 px-4 w-full focus:outline-none hover:bg-gray-500 rounded']) }}
                                    --}}

                                    <a href="{{route('plan.show','validityTopup6Months')}}"
                                        class="flex items-center mt-auto text-white bg-gray-400 border-0 py-2 px-4 w-full focus:outline-none hover:bg-gray-500 rounded">Buy
                                        Now
                                        <svg fill="none" stroke="currentColor" stroke-linecap="round"
                                            stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-auto"
                                            viewBox="0 0 24 24">
                                            <path d="M5 12h14M12 5l7 7-7 7"></path>
                                        </svg>
                                    </a>
                                </div>
                            </div>


                        </div>
                    </div>
                </section>
                <!-- Validity Table Section End -->
            </div>
        </div>
    </div>
</x-app-layout>
