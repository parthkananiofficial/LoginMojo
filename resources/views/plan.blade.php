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
                                        <span>$99</span>
                                        <span class="text-lg ml-1 font-normal text-gray-500">Only</span>
                                    </h1>
                                    <p class="flex items-center text-gray-600 mb-2">
                                        <span
                                            class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-gray-400 text-white rounded-full flex-shrink-0">
                                            <svg fill="none" stroke="currentColor" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="2.5" class="w-3 h-3"
                                                viewBox="0 0 24 24">
                                                <path d="M20 6L9 17l-5-5"></path>
                                            </svg>
                                        </span>2,000 Verifications
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

                                    {{-- {{ $plans['comboPlan99']->button('Buy Now') }} --}}
                                    <a href="{{route('plan.show','comboPlan99')}}"
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
                                        <span>$199</span>
                                        <span class="text-lg ml-1 font-normal text-gray-500 line-through">399</span>
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

                                    {{-- {{ $plans['comboPlan199']->button('Buy Now') }} --}}
                                    <a href="{{route('plan.show','comboPlan199')}}"
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
                                        </span>10,000+ Verification
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
                                        <span>$49</span>
                                        <span class="text-lg ml-1 font-normal text-gray-500">Only</span>
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
                                        <span>$99</span>
                                        <span class="text-lg ml-1 font-normal text-gray-500 line-through">199</span>
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
                                        <span>$169</span>
                                        <span class="text-lg ml-1 font-normal text-gray-500 line-through">299</span>
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
                                        <span>$29</span>
                                        <span class="text-lg ml-1 font-normal text-gray-500">Only</span>
                                    </h1>
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
                                        <span>$99</span>
                                        <span class="text-lg ml-1 font-normal text-gray-500 line-through">149</span>
                                    </h1>
                                    <p class="flex items-center text-gray-600 mb-2">
                                        <span
                                            class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-gray-400 text-white rounded-full flex-shrink-0">
                                            <svg fill="none" stroke="currentColor" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="2.5" class="w-3 h-3"
                                                viewBox="0 0 24 24">
                                                <path d="M20 6L9 17l-5-5"></path>
                                            </svg>
                                        </span>6 Months Validity
                                    </p>


                                    <a href="{{route('plan.show','validityTopup6Months')}}"
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
                                        <span>$169</span>
                                        <span class="text-lg ml-1 font-normal text-gray-500 line-through">299</span>
                                    </h1>
                                    <p class="flex items-center text-gray-600 mb-2">
                                        <span
                                            class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-gray-400 text-white rounded-full flex-shrink-0">
                                            <svg fill="none" stroke="currentColor" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="2.5" class="w-3 h-3"
                                                viewBox="0 0 24 24">
                                                <path d="M20 6L9 17l-5-5"></path>
                                            </svg>
                                        </span>12 Months Validity
                                    </p>
                                    {{-- {{ $plans['validityTopup12Months']->button('Buy Now',['class' => 'flex items-center mt-auto text-white bg-gray-400 border-0 py-2 px-4 w-full focus:outline-none hover:bg-gray-500 rounded']) }}
                                    --}}

                                    <a href="{{route('plan.show','validityTopup12Months')}}"
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
