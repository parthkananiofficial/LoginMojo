@include('includes.credits')
<div class="p-6 sm:px-20 bg-white border-b border-gray-200">
    <div class="mt-8 text-2xl">
        User Verification Analysis
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


    <?php
$true_status = '<div class="flex-shrink-0 w-10 h-10 rounded-full bg-green-500 inline-flex items-center justify-center text-white relative z-10">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                                <path d="M22 11.08V12a10 10 0 11-5.93-9.14"></path>
                                <path d="M22 4L12 14.01l-3-3"></path>
                            </svg>
                        </div>';
$false_status = '<div class="flex-shrink-0 w-10 h-10 rounded-full bg-yellow-500 inline-flex items-center justify-center text-white relative z-10">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                </svg>
                </div>';

?>


    <section class="text-gray-600 body-font">
        <div class="container px-5 py-24 mx-auto">
            <div class="flex flex-wrap -m-4">
                <div class="p-4 md:w-1/2">
                    <div class="h-full border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden">
                        <div class="p-6">
                        <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">ACCOUNT HEALTH STATUS</h2>
                            <h1 class="title-font text-lg font-medium text-gray-900 mb-6">Mandatory Checklist to keep your account active</h1>
                            <div class="flex-wrap w-full">
                                <div class="flex relative pb-12">
                                    <div class="h-full w-10 absolute inset-0 flex items-center justify-center">
                                        <div class="h-full w-1 bg-gray-200 pointer-events-none"></div>
                                    </div>
                                    {!! $checklists['credit_status'] ? $true_status : $false_status !!}
                                    <div class="flex-grow pl-4">
                                        <h2 class="font-medium title-font text-sm text-gray-900 mb-1 tracking-wider">
                                            Verification
                                            CREDIT</h2>
                                        <p class="leading-relaxed">Balance : {{$checklists['credit']}}</p>
                                    </div>
                                </div>
                                <div class="flex relative pb-12">
                                    <div class="h-full w-10 absolute inset-0 flex items-center justify-center">
                                        <div class="h-full w-1 bg-gray-200 pointer-events-none"></div>
                                    </div>
                                    {!! $checklists['validity_status'] ? $true_status : $false_status !!}

                                    <div class="flex-grow pl-4">
                                        <h2 class="font-medium title-font text-sm text-gray-900 mb-1 tracking-wider">
                                            Balance Validity</h2>
                                        <p class="leading-relaxed">Upto {{$checklists['validity']}}</p>
                                    </div>
                                </div>

                                <div class="flex relative pb-12">
                                    <div class="h-full w-10 absolute inset-0 flex items-center justify-center">
                                        <div class="h-full w-1 bg-gray-200 pointer-events-none"></div>
                                    </div>
                                    {!! $checklists['api_status'] ? $true_status : $false_status !!}

                                    <div class="flex-grow pl-4">
                                        <h2 class="font-medium title-font text-sm text-gray-900 mb-1 tracking-wider">API
                                            Token</h2>
                                        <p class="flex leading-relaxed">
                                            @if ($checklists['api_status'])
                                            <span>Generated</span>
                                            @else
                                            <span>Click here to Generate</span>
                                            <a href="{{route('api-tokens.index')}}">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                                    viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                                                </svg>
                                            </a>
                                            @endif
                                        </p>
                                    </div>
                                </div>


                                <div class="flex relative">
                                    {!! $checklists['webhook_status'] ? $true_status : $false_status !!}
                                    <div class="flex-grow pl-4">
                                        <h2 class="font-medium title-font text-sm text-gray-900 mb-1 tracking-wider">
                                            Webhook</h2>
                                        <p class="flex leading-relaxed">
                                            @if ($checklists['webhook_status'])
                                            Configured
                                            @else
                                            <span>Click here to Setup</span>
                                            <a href="{{route('userwebhook.index')}}">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                                    viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                                                </svg>
                                            </a>
                                            @endif
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="p-4 md:w-1/2">
                    <div class="h-full border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden">
                        <div class="p-6">
                            <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">RECENT
                                REQUESTS STATUS</h2>
                            <h1 class="title-font text-lg font-medium text-gray-900 mb-3"></h1>
                            <div class="flex-wrap w-full">
                                @if(count($session_tokens)==0)
                                Data not available
                                @endif
                                @foreach ($session_tokens as $session_token_key => $session_token)
                                <div class="flex relative pb-12">
                                    @if (!$loop->last)
                                    <div class="h-full w-10 absolute inset-0 flex items-center justify-center">
                                        <div class="h-full w-1 bg-gray-200 pointer-events-none"></div>
                                    </div>
                                    @endif
                                    {!! isset($session_token->mobile) ? $true_status : $false_status !!}
                                    <div class="flex-grow pl-4">
                                        <h2 class="font-medium title-font text-sm text-gray-900 mb-1 tracking-wider">
                                            Session</h2>
                                        <p class="leading-relaxed">{{$session_token->website_session}}</p>
                                        @if(isset($session_token->mobile))
                                        <p class="leading-relaxed">{{$session_token->name}} ( {{$session_token->mobile}}
                                            )</p>
                                        @endif
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>

@include('includes.help')

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
