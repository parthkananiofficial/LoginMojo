<!-- This example requires Tailwind CSS v2.0+ -->
<div class="bg-gray-600">
    <div class="max-w-7xl mx-auto py-3 px-3 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between flex-wrap">
            <div class="w-0 flex-1 flex items-center">
                <span class="flex p-2 rounded-lg bg-gray-800">
                    <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </span>
                <p class="ml-3 font-medium text-white">
                    <div class="py-0 px-3 sm:px-6 lg:px-8 text-white">
                        <span class="md:inline">
                            <span class="text-sm">Credit</span><br> <span class="text-l">{{Auth::user()->credit}}</span>
                        </span>
                    </div>
                    <div class="py-0 px-3 sm:px-6 lg:px-8 text-white">
                        <span class="md:inline">
                            <span class="text-sm">Expired at</span><br> <span
                                class="text-l">{{Auth::user()->expired_at}}</span>
                        </span>
                    </div>

                    {{--
                    &nbsp;&nbsp;&nbsp;

                    <span class="md:inline">
                        Expired at : <span class="text-l">{{Auth::user()->expired_at}}</span>
                    </span> --}}
                </p>
            </div>
        </div>
    </div>
</div>
