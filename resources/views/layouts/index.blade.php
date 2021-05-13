<x-guest-layout>


    <div class="bg-gray-400 h-screen w-screen">
        <div class="flex flex-col items-center flex-1 h-full justify-center px-4 sm:px-0"
            style="background-image: url('{{ asset('img/topography.svg') }}')">

            <div class="flex rounded-lg shadow-2xl w-full sm:w-3/4 lg:w-1/4 bg-gray-600 bg-opacity-25 sm:mx-0">
                <section class="hero container max-w-screen-lg mx-auto p-4 m-4">
                    <img class="mx-auto" src="{{ asset('img/loginwithwhatsapp-white.png') }}" width="300" alt="Logo">
                </section>
            </div>
            <div class="flex rounded-lg shadow-2xl w-full sm:w-3/4 lg:w-1/4 bg-white sm:mx-0" style="height: 350px;">
                {{-- <div class="md:block md:w-1/2 rounded-l-lg" style="background: url('https://images.unsplash.com/photo-1515965885361-f1e0095517ea?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=3300&q=80');
            background-size: cover; background-position: center center;">
                </div> --}}
                <div class="flex flex-col w-full md:w-1/1 p-4">
                    <div class="flex flex-col flex-1 justify-center mb-4">
                        <div class="w-full mt-4">
                            <div class="form-horizontal sm:w-3/4 lg:w-1/2 mx-auto" method="POST" action="#">
                                <div class="block mt-4">
                                    <label for="terms" class="flex items-center">
                                        <x-jet-checkbox id="terms" name="terms" onclick="terms()" />
                                        <span
                                            class="ml-2 text-sm text-gray-600">{{ __('Accept Terms & Conditions') }}</span>
                                        <a class="ml-1" href="https://loginmojo.com/terms" target="_blank">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-600"
                                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                                            </svg>
                                        </a>
                                    </label>
                                </div>
                                <div class="flex flex-col mt-4">
                                    <button onclick="login();" id="loginBtn" disabled
                                        class="disabled:opacity-50 items-center mt-auto text-white bg-gray-700 border-0 py-2 px-4 w-full focus:outline-none hover:bg-gray-500 rounded">
                                        Login with WhatsApp
                                        <svg class="animate-spin ml-2 mr-0 h-5 w-5 text-white" id="waiting"
                                            style="display: none" xmlns="http://www.w3.org/2000/svg" fill="none"
                                            viewBox="0 0 24 24">
                                            <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor"
                                                stroke-width="4"></circle>
                                            <path class="opacity-75" fill="currentColor"
                                                d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z">
                                            </path>
                                        </svg>
                                    </button>
                                    <span id="mojomsg"></span>

                                </div>
                            </div>
                        </div>
                        <p class="text-center mb-4 mt-16 text-gray-600">
                            <b>Magic</b> : No Registration Required
                        </p>
                    </div>
                    <h6 class="text-sm text-right">Powered by <strong>Version#</strong></h6>
                </div>
            </div>
        </div>
    </div>

    <script>
        function terms() {
            var checkBox = document.getElementById("terms");
            var btn = document.getElementById("loginBtn");

            if (checkBox.checked == true){
                //btn.style.display = "block";
                btn.disabled = false;
            } else {
                //btn.style.display = "none";
                btn.disabled = true;
            }
        }

        function login() {
            $("#loginBtn").addClass("flex");
            $("#terms").prop('disabled', true);
            $("#loginBtn").prop('disabled', true);
            $("#waiting").show();
            console.log("login button pressed");
            getMessage();

        }
        function getMessage() {
            $.ajax({
               type:'GET',
               url:"{{ route('mojo.store') }}",
               data:'_token = <?php echo csrf_token() ?>',
               success:function(data) {
                    console.log(data.url);
                    if(data.url != "")
                    {
                        $("#mojomsg").html("Waiting...");
                        var myWindow = window.open(data.url, "_blank");
                        myWindow.focus();
                        setInterval(checkLogin, 2000);
                    }else{
                        $("#mojomsg").html("There is some problem during WhatsApp Intilisation");
                    }
                }
            });
         }
         function checkLogin() {
            $.ajax({
               type:'GET',
               url:"{{ route('mojo.show') }}",
               data:'_token = <?php echo csrf_token() ?>',
               success:function(data) {
                    console.log(data);
                    if(data == true)
                    {
                        window.location.replace("{{ route('dashboard') }}");
                    }
                }
            });
         }
    </script>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
</x-guest-layout>
