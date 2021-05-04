@extends('layouts.index')
@section('content')


<!-- Feature Section Start -->
<div id="feature" class="bg-gray-100 py-24">
    <div class="container">
        <div class="flex flex-wrap items-center">
            <div class="w-full lg:w-1/2">
                <div class="mx-3 lg:mr-0 lg:ml-3 wow fadeInRight" data-wow-delay="0.3s">
                    <img src="{{ asset('img/hero.svg') }}" alt="">
                </div>
            </div>
            <div class="w-full lg:w-1/2">
                <div class="mb-5 lg:mb-0">
                    <h2 class="mb-12 section-heading wow fadeInDown" data-wow-delay="0.3s">Why Login with WhatsApp?</h2>

                    <div class="flex flex-wrap">

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
                    <div class="text-center mb-10 wow fadeInUp" data-wow-delay="1.2s">
                        @auth
                        <a href="{{route('dashboard')}}" rel="nofollow" class="btn">Go to Dashboard</a>
                        @endauth
                        @guest
                        <button onclick="login_with_whatsapp();" rel="nofollow" class="btn">Login / Register</button>
                        @endguest
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- Feature Section End -->
@stop
