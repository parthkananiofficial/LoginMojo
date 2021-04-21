@extends('layouts.index')
@section('content')
<!-- Hero Area Start -->
<section id="hero-area" class="bg-gray-100 pt-48 pb-10">
    <div class="container">
        <div class="flex justify-between">
            <div class="w-full text-center">
                <h2 class="text-4xl font-bold leading-snug text-gray-700 mb-10 wow fadeInUp" data-wow-delay="1s">
                    World's 1<sup>st</sup> Login with WhatsApp
                    <br class="hidden lg:block"> Seamless Verification SaaS Provider </h2>
                <div class="text-center mb-10 wow fadeInUp" data-wow-delay="1.2s">
                    @auth
                    <a href="{{route('dashboard')}}" rel="nofollow" class="btn">Go to Dashboard</a>
                    @endauth
                    @guest
                    <button onclick="login_with_whatsapp();" rel="nofollow" class="btn">Login / Register</button>
                    @endguest
                </div>
                <div class="text-center wow fadeInUp" data-wow-delay="1.6s">
                    <img class="img-fluid mx-auto" src="{{ asset('img/hero.svg') }}" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Hero Area End -->

<!-- Services Section Start -->
<section id="whyus" class="py-24">
    <div class="container">
        <div class="text-center">
            <h2 class="mb-12 section-heading wow fadeInDown" data-wow-delay="0.3s">Why Us?</h2>
        </div>
        <div class="flex flex-wrap">
            <!-- Services item -->
            <div class="w-full sm:w-1/2 md:w-1/2 lg:w-1/3">
                <div class="m-4 wow fadeInRight" data-wow-delay="0.3s">
                    <div class="icon text-5xl">
                        <i class="lni lni-cog"></i>
                    </div>
                    <div>
                        <h3 class="service-title">Easy Mobile Verification</h3>
                        <p class="text-gray-600">Mobile Number verification in just 2 simple click, avaoid OTP Verification</p>
                    </div>
                </div>
            </div>
            <!-- Services item -->
            <div class="w-full sm:w-1/2 md:w-1/2 lg:w-1/3">
                <div class="m-4 wow fadeInRight" data-wow-delay="0.6s">
                    <div class="icon text-5xl">
                        <i class="lni lni-bar-chart"></i>
                    </div>
                    <div>
                        <h3 class="service-title">Seamless Authentication</h3>
                        <p class="text-gray-600">Do not have to type anything and it is seamless login authentication process</p>
                    </div>
                </div>
            </div>
            <!-- Services item -->
            <div class="w-full sm:w-1/2 md:w-1/2 lg:w-1/3">
                <div class="m-4 wow fadeInRight" data-wow-delay="0.9s">
                    <div class="icon text-5xl">
                        <i class="lni lni-briefcase"></i>
                    </div>
                    <div>
                        <h3 class="service-title">Flexible Integration</h3>
                        <p class="text-gray-600">Supports web integration and mobile app integration in any Technologies without any change in your DB Structure</p>
                    </div>
                </div>
            </div>
            <!-- Services item -->
            <div class="w-full sm:w-1/2 md:w-1/2 lg:w-1/3">
                <div class="m-4 wow fadeInRight" data-wow-delay="1.2s">
                    <div class="icon text-5xl">
                        <i class="lni lni-pencil-alt"></i>
                    </div>
                    <div>
                        <h3 class="service-title">Plugins Available</h3>
                        <p class="text-gray-600">Wordpress, Woocommerce plugins available. Integration in your website in just a few minuts</p>
                    </div>
                </div>
            </div>
            <!-- Services item -->
            <div class="w-full sm:w-1/2 md:w-1/2 lg:w-1/3">
                <div class="m-4 wow fadeInRight" data-wow-delay="1.5s">
                    <div class="icon text-5xl">
                        <i class="lni lni-mobile"></i>
                    </div>
                    <div>
                        <h3 class="service-title">Helps to Increase User traffic</h3>
                        <p class="text-gray-600">WhatsApp is used by over 2 billion users worldwide and it has already been a much preferred for login authentication</p>
                    </div>
                </div>
            </div>
            <!-- Services item -->
            <div class="w-full sm:w-1/2 md:w-1/2 lg:w-1/3">
                <div class="m-4 wow fadeInRight" data-wow-delay="1.8s">
                    <div class="icon text-5xl">
                        <i class="lni lni-layers"></i>
                    </div>
                    <div>
                        <h3 class="service-title">Useful accross various Industry</h3>
                        <p class="text-gray-600">It can be useful for all kind of industries including eCommerce, Corporates, Financial services and any kind of mid or small businesses</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Services Section End -->


<!-- Feature Section Start -->
<div id="feature" class="bg-gray-100 py-24">
    <div class="container">
        <div class="flex flex-wrap items-center">
            <div class="w-full lg:w-1/2">
                <div class="mb-5 lg:mb-0">
                    <h2 class="mb-12 section-heading wow fadeInDown" data-wow-delay="0.3s">Why Login with WhatsApp?</h2>

                    <div class="flex flex-wrap">
                        <div class="w-full sm:w-1/2 lg:w-1/2">
                            <div class="m-3">
                                <div class="icon text-4xl">
                                    <i class="lni lni-layers"></i>
                                </div>
                                <div class="features-content">
                                    <h4 class="feature-title">Delivery Rate</h4>
                                    <p>100% guaranteed delivery of messages</p>
                                </div>
                            </div>
                        </div>
                        <div class="w-full sm:w-1/2 lg:w-1/2">
                            <div class="m-3">
                                <div class="icon text-4xl">
                                    <i class="lni lni-gift"></i>
                                </div>
                                <div class="features-content">
                                    <h4 class="feature-title">Quick</h4>
                                    <p>Instant message Service</p>
                                </div>
                            </div>
                        </div>
                        <div class="w-full sm:w-1/2 lg:w-1/2">
                            <div class="m-3">
                                <div class="icon text-4xl">
                                    <i class="lni lni-laptop-phone"></i>
                                </div>
                                <div class="features-content">
                                    <h4 class="feature-title">No more Registration</h4>
                                    <p>Why Login and registration are seperate activity ?</p>
                                </div>
                            </div>
                        </div>
                        <div class="w-full sm:w-1/2 lg:w-1/2">
                            <div class="m-3">
                                <div class="icon text-4xl">
                                    <i class="lni lni-leaf"></i>
                                </div>
                                <div class="features-content">
                                    <h4 class="feature-title">Security</h4>
                                    <p>Verify with 360° degree Secured platform</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-full lg:w-1/2">
                <div class="mx-3 lg:mr-0 lg:ml-3 wow fadeInRight" data-wow-delay="0.3s">
                    <img src="{{ asset('img/feature/img-1.svg') }}" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Feature Section End -->



<section class="text-gray-600 body-font">
  <div class="container px-5 py-24 mx-auto">
    <div class="text-center">
        <h2 class="mb-12 section-heading wow fadeInDown" data-wow-delay="0.3s">We are Growing !!</h2>
    </div>
    <div class="flex flex-wrap -m-4 text-center">
      <div class="p-4 md:w-1/4 sm:w-1/2 w-full">
        <div class="border-2 border-gray-200 px-4 py-6 rounded-lg">
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="text-gray-500 w-12 h-12 mb-3 inline-block" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 14v6m-3-3h6M6 10h2a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v2a2 2 0 002 2zm10 0h2a2 2 0 002-2V6a2 2 0 00-2-2h-2a2 2 0 00-2 2v2a2 2 0 002 2zM6 20h2a2 2 0 002-2v-2a2 2 0 00-2-2H6a2 2 0 00-2 2v2a2 2 0 002 2z" />
              </svg>
            <h2 class="title-font font-medium text-3xl text-gray-900">10+</h2>
          <p class="leading-relaxed">Plugins</p>
        </div>
      </div>
      <div class="p-4 md:w-1/4 sm:w-1/2 w-full">
        <div class="border-2 border-gray-200 px-4 py-6 rounded-lg">
          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="text-gray-500 w-12 h-12 mb-3 inline-block" viewBox="0 0 24 24">
            <path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"></path>
            <circle cx="9" cy="7" r="4"></circle>
            <path d="M23 21v-2a4 4 0 00-3-3.87m-4-12a4 4 0 010 7.75"></path>
          </svg>
          <h2 class="title-font font-medium text-3xl text-gray-900">1.3K</h2>
          <p class="leading-relaxed">Accounts</p>
        </div>
      </div>
      <div class="p-4 md:w-1/4 sm:w-1/2 w-full">
        <div class="border-2 border-gray-200 px-4 py-6 rounded-lg">
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="text-gray-500 w-12 h-12 mb-3 inline-block" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8h2a2 2 0 012 2v6a2 2 0 01-2 2h-2v4l-4-4H9a1.994 1.994 0 01-1.414-.586m0 0L11 14h4a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2v4l.586-.586z" />
            </svg>
          <h2 class="title-font font-medium text-3xl text-gray-900">74K</h2>
          <p class="leading-relaxed">Unique Users</p>
        </div>
      </div>
      <div class="p-4 md:w-1/4 sm:w-1/2 w-full">
        <div class="border-2 border-gray-200 px-4 py-6 rounded-lg">
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="text-gray-500 w-12 h-12 mb-3 inline-block" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z" />
              </svg>
            <h2 class="title-font font-medium text-3xl text-gray-900">300K</h2>
          <p class="leading-relaxed">Verifications</p>
        </div>
      </div>
    </div>
  </div>
</section>



<!-- Clients Section Start -->
<div id="clients" class="py-16 bg-gray-100">
    <div class="container">
        <div class="text-center">
            <h2 class="mb-12 section-heading wow fadeInDown" data-wow-delay="0.3s">As Seen On</h2>
        </div>
        <div class="flex flex-wrap justify-center">
            <div class="w-1/2 md:w-1/4 lg:w-1/4">
                <div class="m-3 wow fadeInUp" data-wow-delay="0.3s">
                    <img class="client-logo" src="{{ asset('img/clients/1loupe.svg') }}" alt="">
                </div>
            </div>
            <div class="w-1/2 md:w-1/4 lg:w-1/4">
                <div class="m-3 wow fadeInUp" data-wow-delay="0.6s">
                    <img class="client-logo" src="{{ asset('img/clients/narnolia.svg') }}" alt="">
                </div>
            </div>
            <div class="w-1/2 md:w-1/4 lg:w-1/4">
                <div class="m-3 wow fadeInUp" data-wow-delay="0.9s">
                    <img class="client-logo" src="{{ asset('img/clients/img3.svg') }}" alt="">
                </div>
            </div>
            <div class="w-1/2 md:w-1/4 lg:w-1/4">
                <div class="m-3 wow fadeInUp" data-wow-delay="1.2s">
                    <img class="client-logo" src="{{ asset('img/clients/img4.svg') }}" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Clients Section End -->

<!-- Pricing section Start -->
<section class="text-gray-600 body-font overflow-hidden" id="pricing">
    <div class="container px-5 py-24 mx-auto">
        <div class="flex flex-col text-center w-full mb-20">
            <h1 class="sm:text-4xl text-3xl font-medium title-font mb-2 text-gray-900">Pricing</h1>
        </div>
        <div class="flex flex-wrap -m-4">
            <div class="p-4 xl:w-1/3 md:w-1/3">
                <div class="h-full p-6 rounded-lg border-2 border-gray-300 flex flex-col relative overflow-hidden">
                    <h2 class="text-sm tracking-widest title-font mb-1 font-medium">START</h2>
                    <h1 class="text-5xl text-gray-900 pb-4 mb-4 border-b border-gray-200 leading-none">Free</h1>
                    <p class="flex items-center text-gray-600 mb-2">
                        <span
                            class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-gray-400 text-white rounded-full flex-shrink-0">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                                <path d="M20 6L9 17l-5-5"></path>
                            </svg>
                        </span>Up to 500 Verification
                    </p>
                    <p class="flex items-center text-gray-600 mb-2">
                        <span
                            class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-gray-400 text-white rounded-full flex-shrink-0">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                                <path d="M20 6L9 17l-5-5"></path>
                            </svg>
                        </span>Standarad Message Templates
                    </p>
                    <p class="flex items-center text-gray-600 mb-2">
                        <span
                            class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-gray-400 text-white rounded-full flex-shrink-0">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                                <path d="M20 6L9 17l-5-5"></path>
                            </svg>
                        </span>Common phone number
                    </p>
                    <p class="flex items-center text-gray-600 mb-6">
                        <span
                            class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-gray-400 text-white rounded-full flex-shrink-0">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                                <path d="M20 6L9 17l-5-5"></path>
                            </svg>
                        </span>Community Support
                    </p>


                    @auth
                    <a href="{{route('dashboard')}}" rel="nofollow" class="btn">Go to Dashboard</a>
                    @endauth
                    @guest
                    <button onclick="login_with_whatsapp();"
                        class="flex items-center mt-auto text-white bg-gray-400 border-0 py-2 px-4 w-full focus:outline-none hover:bg-gray-500 rounded">Create
                        Free Account
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="2" class="w-4 h-4 ml-auto" viewBox="0 0 24 24">
                            <path d="M5 12h14M12 5l7 7-7 7"></path>
                        </svg>
                    </button>
                    @endguest


                    <p class="text-xs text-gray-500 mt-3">No Credit card required</p>
                </div>
            </div>
            <div class="p-4 xl:w-1/3 md:w-1/3">
                <div class="h-full p-6 rounded-lg border-2 border-gray-500 flex flex-col relative overflow-hidden">
                    <span
                        class="bg-gray-800 text-white px-3 py-1 tracking-widest text-xs absolute right-0 top-0 rounded-bl">POPULAR</span>
                    <h2 class="text-sm tracking-widest title-font mb-1 font-medium">PROFESIONAL</h2>
                    <h1
                        class="text-5xl text-gray-900 leading-none flex items-center pb-4 mb-4 border-b border-gray-200">
                        <span>$199</span>
                        <span class="text-lg ml-1 font-normal text-gray-500">/mo</span>
                    </h1>
                    <p class="flex items-center text-gray-600 mb-2">
                        <span
                            class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-gray-400 text-white rounded-full flex-shrink-0">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                                <path d="M20 6L9 17l-5-5"></path>
                            </svg>
                        </span>Up to 10,000 Verification
                    </p>
                    <p class="flex items-center text-gray-600 mb-2">
                        <span
                            class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-gray-400 text-white rounded-full flex-shrink-0">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                                <path d="M20 6L9 17l-5-5"></path>
                            </svg>
                        </span>Customisable Message Templates
                    </p>
                    <p class="flex items-center text-gray-600 mb-2">
                        <span
                            class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-gray-400 text-white rounded-full flex-shrink-0">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                                <path d="M20 6L9 17l-5-5"></path>
                            </svg>
                        </span>Common phone number
                    </p>
                    <p class="flex items-center text-gray-600 mb-6">
                        <span
                            class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-gray-400 text-white rounded-full flex-shrink-0">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                                <path d="M20 6L9 17l-5-5"></path>
                            </svg>
                        </span>Email Support
                    </p>

                    @auth
                    <a href="{{route('dashboard')}}" rel="nofollow" class="btn">Go to Dashboard</a>
                    @endauth
                    @guest
                    <button onclick="login_with_whatsapp();"
                        class="flex items-center mt-auto text-white bg-gray-800 border-0 py-2 px-4 w-full focus:outline-none hover:bg-gray-600 rounded">Register
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="2" class="w-4 h-4 ml-auto" viewBox="0 0 24 24">
                            <path d="M5 12h14M12 5l7 7-7 7"></path>
                        </svg>
                    </button>
                    @endguest
                    <p class="text-xs text-gray-500 mt-3">&nbsp;</p>
                </div>
            </div>
            <div class="p-4 xl:w-1/3 md:w-1/3">
                <div class="h-full p-6 rounded-lg border-2 border-gray-300 flex flex-col relative overflow-hidden">
                    <h2 class="text-sm tracking-widest title-font mb-1 font-medium">BUSINESS</h2>
                    <h1
                        class="text-5xl text-gray-900 leading-none flex items-center pb-4 mb-4 border-b border-gray-200">
                        <span class="text-lg ml-1 font-normal text-gray-500">For large businesses or those in
                            regulated industries</span>
                    </h1>
                    <p class="flex items-center text-gray-600 mb-2">
                        <span
                            class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-gray-400 text-white rounded-full flex-shrink-0">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                                <path d="M20 6L9 17l-5-5"></path>
                            </svg>
                        </span>10,000+ Verification
                    </p>
                    <p class="flex items-center text-gray-600 mb-2">
                        <span
                            class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-gray-400 text-white rounded-full flex-shrink-0">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                                <path d="M20 6L9 17l-5-5"></path>
                            </svg>
                        </span>Customisable Message Templates
                    </p>
                    <p class="flex items-center text-gray-600 mb-2">
                        <span
                            class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-gray-400 text-white rounded-full flex-shrink-0">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                                <path d="M20 6L9 17l-5-5"></path>
                            </svg>
                        </span>Private phone number
                    </p>
                    <p class="flex items-center text-gray-600 mb-6">
                        <span
                            class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-gray-400 text-white rounded-full flex-shrink-0">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                                <path d="M20 6L9 17l-5-5"></path>
                            </svg>
                        </span>Call Support 24x7
                    </p>
                    <a href="#contact"
                        class="flex items-center mt-auto text-white bg-gray-400 border-0 py-2 px-4 w-full focus:outline-none hover:bg-gray-500 rounded">Contact
                        Sales
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="2" class="w-4 h-4 ml-auto" viewBox="0 0 24 24">
                            <path d="M5 12h14M12 5l7 7-7 7"></path>
                        </svg>
                    </a>
                    <p class="text-xs text-gray-500 mt-3">&nbsp;</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Pricing Table Section End -->

{{-- <!-- Subscribe Section Start -->
<section id="Subscribes" class="text-center py-20 bg-gray-100">
    <div class="container">
        <div class="flex justify-center mx-3">
            <div class="w-full sm:w-3/4 md:w-2/3 lg:w-1/2">
                <h4 class="mb-3 section-heading wow fadeInUp" data-wow-delay="0.3s">Start For Free</h4>
                <p class="mb-4 text-gray-600 leading-loose text-sm wow fadeInUp" data-wow-delay="0.6s">Existing
                    customized
                    ideas through client-based deliverables. <br> Compellingly unleash fully tested outsourcing</p>
                <form for="">
                    <div class="wow fadeInDown" data-wow-delay="0.3s">
                        <input type="Email"
                            class="w-full mb-5 bg-white border border-blue-300 rounded-full px-5 py-3 duration-300 focus:border-blue-600 outline-none"
                            name="email" placeholder="Email Address">
                        <button
                            class="border-0 bg-gray-600 text-white rounded-full w-12 h-12 duration-300 hover:opacity-75"
                            type="submit"><i class="lni lni-arrow-right"></i></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- Subscribe Section End --> --}}
<!-- Contact Section Start -->
<section id="contact" class="py-24 bg-gray-100">
    <div class="container">
        <div class="text-center">
            <h2 class="mb-12 text-4xl text-gray-700 font-bold tracking-wide wow fadeInDown" data-wow-delay="0.3s">
                Contact Us
            </h2>
        </div>

        <div class="flex flex-wrap contact-form-area wow fadeInUp" data-wow-delay="0.4s">
            <div class="w-full md:w-1/2">
                <div class="ml-3 md:ml-12 wow fadeIn">
                    <h2 class="uppercase font-bold text-xl text-gray-700 mb-5">Get In Touch</h2>
                    <div>
                        <div class="flex flex-wrap mb-6 items-center">
                            <div class="contact-icon">
                                <i class="lni lni-map-marker"></i>
                            </div>
                            <p class="pl-3">Mumbai, India</p>
                        </div>
                        <div class="flex flex-wrap mb-6 items-center">
                            <div class="contact-icon">
                                <i class="lni lni-envelope"></i>
                            </div>
                            <p class="pl-3">
                                <a href="#" class="block">info@versionhash.com</a>
                            </p>
                        </div>
                        <div class="flex flex-wrap mb-6 items-center">
                            <div class="contact-icon">
                                <i class="lni lni-phone-set"></i>
                            </div>
                            <p class="pl-3">
                                <a href="#" class="block">+91 74051 36746</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-full md:w-1/2">
                <div class="contact">
                    <form id="contactForm" method="post" action="{{route('contact.store')}}">
                        {{csrf_field()}}
                        <div class="flex flex-wrap">
                            <div class="w-full sm:w-1/2 md:w-full lg:w-1/2">
                                <div class="mx-3">
                                    <input type="text" class="form-input rounded-full" id="name" name="name"
                                        placeholder="Name" required data-error="Please enter your name">
                                </div>
                            </div>
                            <div class="w-full sm:w-1/2 md:w-full lg:w-1/2">
                                <div class="mx-3">
                                    <input type="text" placeholder="Email" id="email" class="form-input rounded-full"
                                        name="email" required data-error="Please enter your email">
                                </div>
                            </div>
                            <div class="w-full">
                                <div class="mx-3">
                                    <input type="text" placeholder="Subject" id="subject" name="subject"
                                        class="form-input rounded-full" required data-error="Please enter your subject">
                                </div>
                            </div>
                            <div class="w-full">
                                <div class="mx-3">
                                    <textarea class="form-input rounded-lg" id="message" name="message"
                                        placeholder="Your Message" rows="5" data-error="Write your message"
                                        required></textarea>
                                </div>
                            </div>

                            <div class="w-full sm:w-1/2 md:w-full lg:w-1/2">
                                <div class="mx-3">
                                    {!! NoCaptcha::renderJs() !!}
                                    {!! NoCaptcha::display() !!}
                                    @error('g-recaptcha-response')
                                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="w-full sm:w-1/2 md:w-full lg:w-1/2">
                                <div class="submit-button mx-3 text-right">
                                    <button class="btn" id="form-submit" type="submit">Send Message</button>
                                </div>
                            </div>
                        </div>
                    </form>
                    @if(Session::has('success'))
                    <div class="alert alert-success">
                        {{ Session::get('success') }}
                    </div>
                    @endif
                </div>
            </div>

        </div>
    </div>
</section>
<!-- Contact Section End -->

<!-- Map Section Start -->
<section id="google-map-area">
    <div class="mx-6 mb-6">
        <div class="flex">
            <div class="w-full">
                {{-- <object style="border:0; height: 450px; width: 100%;" data="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3102.7887109309127!2d-77.44196278417968!3d38.95165507956235!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMzjCsDU3JzA2LjAiTiA3N8KwMjYnMjMuMiJX!5e0!3m2!1sen!2sbd!4v1545420879707"></object> --}}
                <object style="border:0; height: 450px; width: 100%;"
                    data="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15084.029653021133!2d72.85185609044923!3d19.063411674472828!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c8df0b86ea1b%3A0xce7eea4b1bbdf296!2sBandra%20Kurla%20Complex%2C%20Bandra%20East%2C%20Mumbai%2C%20Maharashtra!5e0!3m2!1sen!2sin!4v1618497222767!5m2!1sen!2sin"></object>
            </div>
        </div>
    </div>
</section>
<!-- Map Section End -->
@stop
