<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Webhook Logs') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            @if(count($webhooks_logs) >0)

            <!-- Manage Webhooks -->
            <div class="mt-10 sm:mt-0">
                <!-- Webhook List -->
                <div class="space-y-6" x-data="{selected:null}">
                    <ul class="shadow-box">

                        @foreach ($webhooks_logs as $webhooks_log)
                        <li class="relative border-b border-gray-200 bg-white rounded">
                            <button type="button" class="w-full px-8 py-6 text-left"
                                @click="selected !== {{$webhooks_log->id}} ? selected = {{$webhooks_log->id}} : selected = null">
                                <div class="flex items-left justify-between">
                                    <span
                                        class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-{{$webhooks_log->status==200 ? "green" : "red"}}-100 text-{{$webhooks_log->status==200 ? "green" : "red"}}-800">
                                        {{$webhooks_log->status==200 ? "Success" : "Failed"}}
                                    </span>
                                    <span>{{$webhooks_log->userwebhook->url}}</span>
                                    <span class="ico-plus">{{$webhooks_log->created_at->diffForHumans()}}</span>
                                </div>
                            </button>
                            <div class="relative overflow-hidden transition-all max-h-0 duration-700" style=""
                                x-ref="container{{$webhooks_log->id}}"
                                x-bind:style="selected == {{$webhooks_log->id}} ? 'max-height: ' + $refs.container{{$webhooks_log->id}}.scrollHeight + 'px' : ''">
                                <div class="p-6">
                                    <!-- This example requires Tailwind CSS v2.0+ -->
                                    <div class="bg-white shadow overflow-hidden sm:rounded-lg">
                                        <div class="px-4 py-5 sm:px-6">
                                            <h3 class="text-lg leading-6 font-medium text-gray-900">
                                                Log Details
                                            </h3>
                                            <p class="mt-1 max-w-2xl text-sm text-gray-500">
                                                Request and Response Payload
                                            </p>
                                        </div>
                                        <div class="border-t border-gray-200">
                                            <dl>
                                                <div
                                                    class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                                    <dt class="text-sm font-medium text-gray-500">
                                                        HTTP status code
                                                    </dt>
                                                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                                        {{$webhooks_log->status}}
                                                    </dd>
                                                </div>
                                                <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                                    <dt class="text-sm font-medium text-gray-500">
                                                        Request to your endpoint
                                                    </dt>
                                                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                                        <pre>{{json_encode(json_decode($webhooks_log->payload),JSON_PRETTY_PRINT)}}</pre>
                                                    </dd>
                                                </div>
                                                <div
                                                    class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                                    <dt class="text-sm font-medium text-gray-500">
                                                        Response
                                                    </dt>
                                                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                                        <pre>{{$webhooks_log->response}}</pre>
                                                    </dd>
                                                </div>
                                            </dl>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            @else
            No data available
            @endif
        </div>
    </div>
</x-app-layout>
