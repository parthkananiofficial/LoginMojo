@include('includes.credits')
<div class="p-6 sm:px-20 bg-white border-b border-gray-200">
    <div class="mt-8 text-2xl">
        Requests Data
    </div>
    <div class="grid md:grid-cols-4 sm:grid-cols-2 gap-5 mt-5 items-center">
        <div class="shadow-lg rounded-2xl p-4 bg-white dark:bg-gray-800">
            <div class="flex items-center">
                <span class="rounded-xl relative p-2 bg-gray-200">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1" />
                    </svg>
                </span>
                <p class="text-md text-black dark:text-white ml-2">
                    Today
                </p>
            </div>
            <div class="flex flex-col justify-start">
                <p class="text-gray-700 dark:text-gray-100 text-4xl text-center font-bold my-4">
                    {{$dashboard_data['count_today']}}
                    <span class="text-sm">

                    </span>
                </p>
                <div class="flex justify-center <?= get_color($dashboard_data['hike_today']) ?> text-sm">
                    @php
                    get_arrow_svg($dashboard_data['hike_today']);
                    @endphp

                    <span class="ml-1">
                        {{$dashboard_data['hike_today']}}%
                    </span>
                    <span class="text-gray-400 ml-1">
                        vs Yesterday
                    </span>
                </div>
            </div>
        </div>

        <div class="shadow-lg rounded-2xl p-4 bg-white dark:bg-gray-800">
            <div class="flex items-center">
                <span class="rounded-xl relative p-2 bg-gray-200">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1" />
                    </svg>
                </span>
                <p class="text-md text-black dark:text-white ml-2">
                    This Week
                </p>
            </div>
            <div class="flex flex-col justify-start">
                <p class="text-gray-700 dark:text-gray-100 text-4xl text-center font-bold my-4">
                    {{$dashboard_data['count_week']}}
                    <span class="text-sm">

                    </span>
                </p>
                <div class="flex justify-center <?= get_color($dashboard_data['hike_week']) ?> text-sm">
                    @php
                    get_arrow_svg($dashboard_data['hike_week']);
                    @endphp
                    <span class="ml-1">
                        {{$dashboard_data['hike_week']}}%
                    </span>
                    <span class="text-gray-400 ml-1">
                        vs last week
                    </span>
                </div>
            </div>
        </div>

        <div class="shadow-lg rounded-2xl p-4 bg-white dark:bg-gray-800">
            <div class="flex items-center">
                <span class="rounded-xl relative p-2 bg-gray-200">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1" />
                    </svg>
                </span>
                <p class="text-md text-black dark:text-white ml-2">
                    This Month
                </p>
            </div>
            <div class="flex flex-col justify-start">
                <p class="text-gray-700 dark:text-gray-100 text-4xl text-center font-bold my-4">
                    {{$dashboard_data['count_month']}}
                    <span class="text-sm">

                    </span>
                </p>
                <div class="flex justify-center <?= get_color($dashboard_data['hike_month']) ?> text-sm">
                    @php
                    get_arrow_svg($dashboard_data['hike_month']);
                    @endphp
                    <span class="ml-1">
                        {{$dashboard_data['hike_month']}}%
                    </span>
                    <span class="text-gray-400 ml-1">
                        vs last month
                    </span>
                </div>
            </div>
        </div>
        <div class="shadow-lg rounded-2xl p-4 bg-white dark:bg-gray-800">
            <div class="flex items-center">
                <span class="rounded-xl relative p-2 bg-gray-200">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1" />
                    </svg>
                </span>
                <p class="text-md text-black dark:text-white ml-2">
                    This Year
                </p>
            </div>
            <div class="flex flex-col justify-start">
                <p class="text-gray-700 dark:text-gray-100 text-4xl text-center font-bold my-4">
                    {{$dashboard_data['count_year']}}
                    <span class="text-sm">

                    </span>
                </p>
                <div class="flex justify-center <?= get_color($dashboard_data['hike_year']) ?> text-sm">
                    @php
                    get_arrow_svg($dashboard_data['hike_year']);
                    @endphp
                    <span class="ml-1">
                        {{$dashboard_data['hike_year']}}%
                    </span>
                    <span class="text-gray-400 ml-1">
                        vs last year
                    </span>
                </div>
            </div>
        </div>

    </div>

    <div class="mt-6 text-gray-500">

    </div>
</div>

<div class="bg-gray-200 bg-opacity-25 grid grid-cols-1 md:grid-cols-2">
    <div class="p-6">
        <div class="flex items-center">
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                viewBox="0 0 24 24" class="w-8 h-8 text-gray-400">
                <path
                    d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253">
                </path>
            </svg>
            <div class="ml-4 text-lg text-gray-600 leading-7 font-semibold"><a
                    href="https://laravel.com/docs">Documentation</a></div>
        </div>

        <div class="ml-12">
            <div class="mt-2 text-sm text-gray-500">
                Refer wonderful documentation covering every aspect of the product. Whether you're new to the product or
                have previous experience, we recommend reading all of the documentation from beginning to end.
            </div>

            <a href="https://documenter.getpostman.com/view/15579858/TzK2YYo5">
                <div class="mt-3 flex items-center text-sm font-semibold text-indigo-700">
                    <div>API Documentation</div>
                    <div class="ml-1 text-indigo-500">
                        <svg viewBox="0 0 20 20" fill="currentColor" class="w-4 h-4">
                            <path fill-rule="evenodd"
                                d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </div>
                </div>
            </a>
        </div>
    </div>

    <div class="p-6 border-t border-gray-200 md:border-t-0 md:border-l">
        <div class="flex items-center">
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                viewBox="0 0 24 24" class="w-8 h-8 text-gray-400">
                <path
                    d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z">
                </path>
                <path d="M15 13a3 3 0 11-6 0 3 3 0 016 0z"></path>
            </svg>
            <div class="ml-4 text-lg text-gray-600 leading-7 font-semibold"><a href="https://documenter.getpostman.com/view/15579858/TzK2YYo5">Plugin &
                    Demos</a></div>
        </div>

        <div class="ml-12">
            <div class="mt-2 text-sm text-gray-500">
                We are developing the plugins for Wordpress, OpenCart so that you can integrate on the fly.
            </div>

            <a href="https://documenter.getpostman.com/view/15579858/TzK2YYo5">
                <div class="mt-3 flex items-center text-sm font-semibold text-indigo-700">
                    <div>Check Available Plugins</div>

                    <div class="ml-1 text-indigo-500">
                        <svg viewBox="0 0 20 20" fill="currentColor" class="w-4 h-4">
                            <path fill-rule="evenodd"
                                d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </div>
                </div>
            </a>
        </div>
    </div>
</div>

<?php
function get_arrow_svg($value)
{
    if($value > 0){
    ?>
<svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" />
</svg>
<?php
    }
    elseif($value < 0)
    {
        ?>
<svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 17h8m0 0V9m0 8l-8-8-4 4-6-6" />
</svg>
<?php
    }
}

function get_color($value)
{
    if($value > 0){
        echo "text-green-500";
    }
    elseif($value < 0)
    {
        echo "text-red-500";
    }
}
?>
