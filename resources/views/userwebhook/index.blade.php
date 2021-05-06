<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Webhooks') }}
        </h2>
    </x-slot>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <form action="{{route('userwebhook.store')}}" method="POST">
                @csrf
                <div class="md:grid md:grid-cols-3 md:gap-6">
                    <div class="md:col-span-1">
                        <div class="px-4 sm:px-0">
                            <h3 class="text-lg font-medium leading-6 text-gray-900">Create Webhook</h3>
                            <p class="mt-1 text-sm text-gray-600">
                                Will notify when user Send the Message Successfully.
                            </p>
                        </div>
                    </div>
                    <div class="mt-5 md:mt-0 md:col-span-2">
                        <div class="shadow sm:rounded-md sm:overflow-hidden">
                            <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
                                <div>
                                    <label class="block text-sm font-medium text-gray-700">
                                        Webhook URL
                                    </label>
                                    <div class="mt-1">
                                        <textarea name="url" rows="1"
                                            class="shadow-sm focus:ring-gray-500 focus:border-gray-500 mt-1 block w-full sm:text-sm border-gray-300 rounded-md"
                                            placeholder="https://mywebsite.com/handlewebhook"></textarea>
                                    </div>
                                </div>
                                <label for="secured" class="flex items-center">
                                    <x-jet-checkbox id="secured" name="secured" onclick="secured()" />
                                    <span class="ml-2 text-sm text-gray-600">{{ __('(Opptional) Sign with Secret?') }}</span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mt-10 sm:mt-0">
                    <div class="px-4 py-3 text-right sm:px-6">
                        <button type="submit"
                            class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-gray-600 hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500">
                            Add
                        </button>
                    </div>
                </div>
            </form>

            <div class="hidden sm:block" aria-hidden="true">
                <div class="py-5">
                    <div class="border-t border-gray-200"></div>
                </div>
            </div>


            @if(count($webhooks) >0)

            <!-- Manage Webhooks -->
            <div class="mt-10 sm:mt-0">
                <!-- Webhook List -->
                <div class="space-y-6">
                    <!-- This example requires Tailwind CSS v2.0+ -->
                    <div class="flex flex-col">
                        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                                <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                                    <table class="min-w-full divide-y divide-gray-200">
                                        <thead class="bg-gray-50">
                                            <tr>
                                                <th scope="col"
                                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                    Endpoints
                                                </th>
                                                <th scope="col"
                                                    class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                    Signing Secret
                                                </th>
                                                <th scope="col"
                                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                    Created at
                                                </th>
                                                <th scope="col"
                                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">

                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody class="bg-white divide-y divide-gray-200">
                                            @foreach ($webhooks as $webhook)
                                            <tr>
                                                <td class="max-w-sm md:max-w-lg px-6 py-4 break-all">
                                                    <div class="flex items-center text-gray-800">
                                                        {{$webhook->url}}
                                                    </div>
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap">
                                                    <div class="flex item-center justify-center">
                                                        <span
                                                            class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-{{$webhook->secured ? "green" : "red"}}-100 text-green-800">
                                                            {{$webhook->secured ? $webhook->signature : "Not Secured"}}
                                                        </span>
                                                    </div>
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                                    {{$webhook->created_at->diffForHumans()}}
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                                    <div class="flex item-center justify-center">

                                                        <form id="delete-form-{{$webhook->id}}" +
                                                            action="{{route('userwebhook.destroy', $webhook->id)}}"
                                                            method="post">
                                                            @csrf @method('DELETE')
                                                            <button class="cursor-pointer ml-6 text-sm text-red-500"
                                                                type="submit">
                                                                <div
                                                                    class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                        viewBox="0 0 24 24" stroke="currentColor">
                                                                        <path stroke-linecap="round"
                                                                            stroke-linejoin="round" stroke-width="2"
                                                                            d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                                    </svg>
                                                                </div>
                                                            </button>
                                                        </form>
                                                    </div>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-10 sm:mt-0">
                <div class="px-4 py-3 text-right sm:px-6">
                    <a href="{{route('userwebhook.logs')}}"
                        class="inline-flex justify-center disabled:opacity-50 flex items-center mt-auto text-white bg-gray-700 border-0 py-2 px-4 focus:outline-none hover:bg-gray-500 rounded-md">
                        Show Logs
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="2" class="w-4 h-4 ml-auto" viewBox="0 0 24 24">
                            <path d="M5 12h14M12 5l7 7-7 7"></path>
                        </svg>
                    </a>
                </div>
            </div>

            @endif
            @include('includes.help')
        </div>

    </div>

    <script>
        function copyToClipboard(element) {
            var $temp = $("<input>");
            $("body").append($temp);
            $temp.val($(element).text()).select();
            document.execCommand("copy");
            $temp.remove();
        }
    </script>
</x-app-layout>
