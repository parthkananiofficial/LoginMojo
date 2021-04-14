<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Config') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <form action="{{route('config.update')}}" method="POST">
                <div class="md:grid md:grid-cols-3 md:gap-6">
                    <div class="md:col-span-1">
                      <div class="px-4 sm:px-0">
                        <h3 class="text-lg font-medium leading-6 text-gray-900">Message Template</h3>
                        <p class="mt-1 text-sm text-gray-600">
                          Set the templates to communicate with the users.
                        </p>
                      </div>
                    </div>
                    <div class="mt-5 md:mt-0 md:col-span-2">
                        <div class="shadow sm:rounded-md sm:overflow-hidden">
                          <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
                                <div>
                                    <label class="block text-sm font-medium text-gray-700">
                                        Valid Session Message
                                    </label>
                                    <div class="mt-1">
                                        <textarea name="valid_message_template" rows="2" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border-gray-300 rounded-md" placeholder="Default Message : 'Thank you for Login'">{{$settings['valid_message_template']}}</textarea>
                                    </div>
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-700">
                                        Invalid Session Message
                                    </label>
                                    <div class="mt-1">
                                        <textarea name="invalid_message_template" rows="2" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border-gray-300 rounded-md" placeholder="Default Message : 'Session is Expired or not found'">{{$settings['invalid_message_template']}}</textarea>
                                    </div>
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-700">
                                        Duplicate Session Message
                                    </label>
                                    <div class="mt-1">
                                        <textarea name="duplicate_session_message_template" rows="2" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border-gray-300 rounded-md" placeholder="Default Message : 'This session code is already used'">{{$settings['duplicate_session_message_template']}}</textarea>
                                    </div>
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-700">
                                        User Limit Reached Message
                                    </label>
                                    <div class="mt-1">
                                        <textarea name="throttle_message_template" rows="2" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border-gray-300 rounded-md" placeholder="Default Message : 'Your daily limit reached'">{{$settings['throttle_message_template']}}</textarea>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                  </div>

                <div class="hidden sm:block" aria-hidden="true">
                    <div class="py-5">
                        <div class="border-t border-gray-200"></div>
                    </div>
                </div>

                <div class="mt-10 sm:mt-0">
                    <div class="md:grid md:grid-cols-3 md:gap-6">
                        <div class="md:col-span-1">
                            <div class="px-4 sm:px-0">
                                <h3 class="text-lg font-medium leading-6 text-gray-900">User Restriction Settings</h3>
                                <p class="mt-1 text-sm text-gray-600">
                                    Decide the Application configuration based on your Usage.
                                </p>
                            </div>
                        </div>
                        <div class="mt-5 md:mt-0 md:col-span-2">
                            <div class="shadow overflow-hidden sm:rounded-md">
                                <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
                                    <div class="col-span-6 sm:col-span-3">
                                        <label for="throttle" class="block text-sm font-medium text-gray-700">Daily Throttle Per
                                            User</label>
                                        <select id="throttle" name="throttle" autocomplete="throttle"
                                            class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                            <option {{$settings['throttle'] == 0 ? "selected" : ""}} value=0>Unlimited</option>
                                            <option {{$settings['throttle'] == 5 ? "selected" : ""}}>5</option>
                                            <option {{$settings['throttle'] == 10 ? "selected" : ""}}>10</option>
                                            <option {{$settings['throttle'] == 15 ? "selected" : ""}}>15</option>
                                            <option {{$settings['throttle'] == 20 ? "selected" : ""}}>20</option>
                                            <option {{$settings['throttle'] == 25 ? "selected" : ""}}>25</option>
                                            <option {{$settings['throttle'] == 50 ? "selected" : ""}}>50</option>
                                            <option {{$settings['throttle'] == 100 ? "selected" : ""}}>100</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hidden sm:block" aria-hidden="true">
                    <div class="py-5">
                        <div class="border-t border-gray-200"></div>
                    </div>
                </div>
                <div class="mt-10 sm:mt-0">
                    <div class="md:grid md:grid-cols-3 md:gap-6">
                        <div class="md:col-span-1">
                            <div class="px-4 sm:px-0">
                                <h3 class="text-lg font-medium leading-6 text-gray-900">Mobile Number Settings</h3>
                                <p class="mt-1 text-sm text-gray-600">
                                    Decide the Application configuration based on your Usage.
                                </p>
                            </div>
                        </div>
                        <div class="mt-5 md:mt-0 md:col-span-2">

                            {!! csrf_field() !!}
                            <div class="shadow overflow-hidden sm:rounded-md">
                                <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
                                    <fieldset>
                                        <div>
                                            <legend class="text-base font-medium text-gray-900">WhatsApp Server Mobile Number
                                            </legend>
                                            <p class="text-sm text-gray-500">Users will be send the message to this Mobile Number
                                            </p>
                                        </div>
                                        <div class="mt-4 space-y-4">
                                            <div class="flex items-center">
                                                <input name="common_number" type="radio" value="true"
                                                    {{ $settings['common_number'] === true ? "checked":""}} class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300">
                                                <label for="push_email" class="ml-3 block text-sm font-medium text-gray-700">
                                                    WhatSender's
                                                </label>
                                            </div>
                                            <div class="flex items-center">
                                                <input name="common_number" type="radio" value="false" disabled
                                                {{ $settings['common_number'] === true ? "":"checked"}}  class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300">
                                                <label for="push_nothing" class="ml-3 block text-sm font-medium text-gray-700">
                                                    Self Hosted (Under Development)
                                                </label>
                                            </div>
                                        </div>
                                    </fieldset>
                                </div>
                                <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                                    <button type="submit"
                                        class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                        Save
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
