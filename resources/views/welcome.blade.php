<x-guest-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('Config') }}
    </h2>
  </x-slot>
  <!-- Header Area wrapper Starts -->
  <header id="header-wrap" class="relative">
    <!-- Navbar Start -->
    <div class="navigation fixed top-0 left-0 w-full z-30 duration-300">
      <div class="container">
        <nav class="navbar py-2 navbar-expand-lg flex justify-between items-center relative duration-300">
          <a class="navbar-brand">
            <img src="{{ asset('img/logo.svg') }}" alt="Logo">
          </a>
          <button class="navbar-toggler focus:outline-none block lg:hidden" type="button" data-toggle="collapse"
            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="toggler-icon"></span>
            <span class="toggler-icon"></span>
            <span class="toggler-icon"></span>
          </button>

          <div
            class="collapse navbar-collapse hidden lg:block duration-300 shadow absolute top-100 left-0 mt-full bg-white z-20 px-5 py-3 w-full lg:static lg:bg-transparent lg:shadow-none"
            id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto justify-center items-center lg:flex">
              <li class="nav-item">
                <a class="page-scroll active" href="#hero-area">Home</a>
              </li>
              <li class="nav-item">
                <a class="page-scroll" href="#proscons">Pros & Cons</a>
              </li>
              <li class="nav-item">
                <a class="page-scroll" href="#feature">feature</a>
              </li>
              <li class="nav-item">
                <a class="page-scroll" href="#pricing">Pricing</a>
              </li>
              <li class="nav-item">
                <a class="page-scroll" href="#contact">Contact</a>
              </li>
            </ul>
          </div>
          <div class="header-btn hidden sm:block sm:absolute sm:right-0 sm:mr-16 lg:static lg:mr-0">
            <a class="text-blue-600 border border-blue-600 px-10 py-3 rounded-full duration-300 hover:bg-black hover:text-white"
              href="/login">Login</a>
          </div>
        </nav>
      </div>
    </div>
    <!-- Navbar End -->
  </header>
  <!-- Header Area wrapper End -->

  <!-- Hero Area Start -->
  <section id="hero-area" class="bg-gray-100 pt-48 pb-10">
    <div class="container">
      <div class="flex justify-between">
        <div class="w-full text-center">
          <h2 class="text-4xl font-bold leading-snug text-gray-700 mb-10 wow fadeInUp" data-wow-delay="1s">Startup and
            SaaS Landing Page
            <br class="hidden lg:block"> Built with TailwindCSS</h2>
          <div class="text-center mb-10 wow fadeInUp" data-wow-delay="1.2s">

            @if (Route::has('login'))
            @auth
            <a href="{{ url('/dashboard') }}" rel="nofollow" class="btn">Go to Dashboard</a>
            @else
            @if (Route::has('register'))
            <a href="{{ route('register') }}" rel="nofollow" class="btn">Create Free Account</a>
            @endif
            @endauth
            @endif
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
  <section id="proscons" class="py-24">
    <div class="container">
      <div class="text-center">
        <h2 class="mb-12 section-heading wow fadeInDown" data-wow-delay="0.3s">Pros & Cons</h2>
      </div>
      <div class="flex flex-wrap">
        <!-- Services item -->
        <div class="w-full sm:w-1/2 md:w-1/2 lg:w-1/3">
          <div class="m-4 wow fadeInRight" data-wow-delay="0.3s">
            <div class="icon text-5xl">
              <i class="lni lni-cog"></i>
            </div>
            <div>
              <h3 class="service-title">Web Development</h3>
              <p class="text-gray-600">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde perspiciatis dicta
                labore nulla beatae quaerat quia
                incidunt laborum aspernatur...</p>
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
              <h3 class="service-title">Graphic Design</h3>
              <p class="text-gray-600">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde perspiciatis dicta
                labore nulla beatae quaerat quia
                incidunt laborum aspernatur...</p>
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
              <h3 class="service-title">Business Branding</h3>
              <p class="text-gray-600">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde perspiciatis dicta
                labore nulla beatae quaerat quia
                incidunt laborum aspernatur...</p>
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
              <h3 class="service-title">Content Writing</h3>
              <p class="text-gray-600">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde perspiciatis dicta
                labore nulla beatae quaerat quia
                incidunt laborum aspernatur...</p>
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
              <h3 class="service-title">App Development</h3>
              <p class="text-gray-600">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde perspiciatis dicta
                labore nulla beatae quaerat quia
                incidunt laborum aspernatur...</p>
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
              <h3 class="service-title">Digital Marketing</h3>
              <p class="text-gray-600">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde perspiciatis dicta
                labore nulla beatae quaerat quia
                incidunt laborum aspernatur...</p>
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
            <h2 class="mb-12 section-heading wow fadeInDown" data-wow-delay="0.3s">Learn More About Us</h2>

            <div class="flex flex-wrap">
              <div class="w-full sm:w-1/2 lg:w-1/2">
                <div class="m-3">
                  <div class="icon text-4xl">
                    <i class="lni lni-layers"></i>
                  </div>
                  <div class="features-content">
                    <h4 class="feature-title">Built with TailwindCSS</h4>
                    <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam tempora quidem vel sint.</p>
                  </div>
                </div>
              </div>
              <div class="w-full sm:w-1/2 lg:w-1/2">
                <div class="m-3">
                  <div class="icon text-4xl">
                    <i class="lni lni-gift"></i>
                  </div>
                  <div class="features-content">
                    <h4 class="feature-title">Free to Use</h4>
                    <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam tempora quidem vel sint.</p>
                  </div>
                </div>
              </div>
              <div class="w-full sm:w-1/2 lg:w-1/2">
                <div class="m-3">
                  <div class="icon text-4xl">
                    <i class="lni lni-laptop-phone"></i>
                  </div>
                  <div class="features-content">
                    <h4 class="feature-title">Fully Responsive</h4>
                    <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam tempora quidem vel sint.</p>
                  </div>
                </div>
              </div>
              <div class="w-full sm:w-1/2 lg:w-1/2">
                <div class="m-3">
                  <div class="icon text-4xl">
                    <i class="lni lni-leaf"></i>
                  </div>
                  <div class="features-content">
                    <h4 class="feature-title">Easy to Customize</h4>
                    <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam tempora quidem vel sint.</p>
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

  <!-- Clients Section Start -->
  <div id="clients" class="py-16 bg-gray-100">
    <div class="container">
      <div class="text-center">
        <h2 class="mb-12 section-heading wow fadeInDown" data-wow-delay="0.3s">As Seen On</h2>
      </div>
      <div class="flex flex-wrap justify-center">
        <div class="w-1/2 md:w-1/4 lg:w-1/4">
          <div class="m-3 wow fadeInUp" data-wow-delay="0.3s">
            <img class="client-logo" src="{{ asset('img/clients/img1.svg') }}" alt="">
          </div>
        </div>
        <div class="w-1/2 md:w-1/4 lg:w-1/4">
          <div class="m-3 wow fadeInUp" data-wow-delay="0.6s">
            <img class="client-logo" src="{{ asset('img/clients/img2.svg') }}" alt="">
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
              <span class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-gray-400 text-white rounded-full flex-shrink-0">
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                  <path d="M20 6L9 17l-5-5"></path>
                </svg>
              </span>Up to 500 Verification
            </p>
            <p class="flex items-center text-gray-600 mb-2">
              <span class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-gray-400 text-white rounded-full flex-shrink-0">
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                  <path d="M20 6L9 17l-5-5"></path>
                </svg>
              </span>Standarad Message Templates
            </p>
            <p class="flex items-center text-gray-600 mb-2">
              <span class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-gray-400 text-white rounded-full flex-shrink-0">
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                  <path d="M20 6L9 17l-5-5"></path>
                </svg>
              </span>Common phone number
            </p>
            <p class="flex items-center text-gray-600 mb-6">
              <span class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-gray-400 text-white rounded-full flex-shrink-0">
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                  <path d="M20 6L9 17l-5-5"></path>
                </svg>
              </span>Community Support
            </p>

            <a href="{{route('register')}}" class="flex items-center mt-auto text-white bg-gray-400 border-0 py-2 px-4 w-full focus:outline-none hover:bg-gray-500 rounded">Create Free Account
              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-auto" viewBox="0 0 24 24">
                <path d="M5 12h14M12 5l7 7-7 7"></path>
              </svg>
            </a>
            <p class="text-xs text-gray-500 mt-3">No Credit card required</p>
          </div>
        </div>
        <div class="p-4 xl:w-1/3 md:w-1/3">
          <div class="h-full p-6 rounded-lg border-2 border-indigo-500 flex flex-col relative overflow-hidden">
            <span class="bg-indigo-500 text-white px-3 py-1 tracking-widest text-xs absolute right-0 top-0 rounded-bl">POPULAR</span>
            <h2 class="text-sm tracking-widest title-font mb-1 font-medium">PROFESIONAL</h2>
            <h1 class="text-5xl text-gray-900 leading-none flex items-center pb-4 mb-4 border-b border-gray-200">
              <span>$199</span>
              <span class="text-lg ml-1 font-normal text-gray-500">/mo</span>
            </h1>
            <p class="flex items-center text-gray-600 mb-2">
              <span class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-gray-400 text-white rounded-full flex-shrink-0">
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                  <path d="M20 6L9 17l-5-5"></path>
                </svg>
              </span>Up to 10,000 Verification
            </p>
            <p class="flex items-center text-gray-600 mb-2">
              <span class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-gray-400 text-white rounded-full flex-shrink-0">
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                  <path d="M20 6L9 17l-5-5"></path>
                </svg>
              </span>Customisable Message Templates
            </p>
            <p class="flex items-center text-gray-600 mb-2">
              <span class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-gray-400 text-white rounded-full flex-shrink-0">
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                  <path d="M20 6L9 17l-5-5"></path>
                </svg>
              </span>Common phone number
            </p>
            <p class="flex items-center text-gray-600 mb-6">
              <span class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-gray-400 text-white rounded-full flex-shrink-0">
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                  <path d="M20 6L9 17l-5-5"></path>
                </svg>
              </span>Email Support
            </p>
            <a href="{{route('register')}}" class="flex items-center mt-auto text-white bg-indigo-500 border-0 py-2 px-4 w-full focus:outline-none hover:bg-indigo-600 rounded">Register
              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-auto" viewBox="0 0 24 24">
                <path d="M5 12h14M12 5l7 7-7 7"></path>
              </svg>
            </a>
            <p class="text-xs text-gray-500 mt-3">&nbsp;</p>
          </div>
        </div>
        <div class="p-4 xl:w-1/3 md:w-1/3">
          <div class="h-full p-6 rounded-lg border-2 border-gray-300 flex flex-col relative overflow-hidden">
            <h2 class="text-sm tracking-widest title-font mb-1 font-medium">BUSINESS</h2>
            <h1 class="text-5xl text-gray-900 leading-none flex items-center pb-4 mb-4 border-b border-gray-200">
              <span class="text-lg ml-1 font-normal text-gray-500">For extra large businesses or those in regulated industries</span>
            </h1>
            <p class="flex items-center text-gray-600 mb-2">
              <span class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-gray-400 text-white rounded-full flex-shrink-0">
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                  <path d="M20 6L9 17l-5-5"></path>
                </svg>
              </span>10,000+ Verification
            </p>
            <p class="flex items-center text-gray-600 mb-2">
              <span class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-gray-400 text-white rounded-full flex-shrink-0">
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                  <path d="M20 6L9 17l-5-5"></path>
                </svg>
              </span>Customisable Message Templates
            </p>
            <p class="flex items-center text-gray-600 mb-2">
              <span class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-gray-400 text-white rounded-full flex-shrink-0">
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                  <path d="M20 6L9 17l-5-5"></path>
                </svg>
              </span>Private phone number
            </p>
            <p class="flex items-center text-gray-600 mb-6">
              <span class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-gray-400 text-white rounded-full flex-shrink-0">
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                  <path d="M20 6L9 17l-5-5"></path>
                </svg>
              </span>Call Support 24x7
            </p>
            <a href="#contact" class="flex items-center mt-auto text-white bg-gray-400 border-0 py-2 px-4 w-full focus:outline-none hover:bg-gray-500 rounded">Contact Sales
              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-auto" viewBox="0 0 24 24">
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

  <!-- Subscribe Section Start -->
  <section id="Subscribes" class="text-center py-20 bg-gray-100">
    <div class="container">
      <div class="flex justify-center mx-3">
        <div class="w-full sm:w-3/4 md:w-2/3 lg:w-1/2">
          <h4 class="mb-3 section-heading wow fadeInUp" data-wow-delay="0.3s">Start For Free</h4>
          <p class="mb-4 text-gray-600 leading-loose text-sm wow fadeInUp" data-wow-delay="0.6s">Existing customized
            ideas through client-based deliverables. <br> Compellingly unleash fully tested outsourcing</p>
          <form for="">
            <div class="wow fadeInDown" data-wow-delay="0.3s">
              <input type="Email"
                class="w-full mb-5 bg-white border border-blue-300 rounded-full px-5 py-3 duration-300 focus:border-blue-600 outline-none"
                name="email" placeholder="Email Address">
              <button class="border-0 bg-gray-600 text-white rounded-full w-12 h-12 duration-300 hover:opacity-75"
                type="submit"><i class="lni lni-arrow-right"></i></button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
  <!-- Subscribe Section End -->

  <!-- Contact Section Start -->
  <section id="contact" class="py-24">
    <div class="container">
      <div class="text-center">
        <h2 class="mb-12 text-4xl text-gray-700 font-bold tracking-wide wow fadeInDown" data-wow-delay="0.3s">Contact
        </h2>
      </div>

      <div class="flex flex-wrap contact-form-area wow fadeInUp" data-wow-delay="0.4s">
        <div class="w-full md:w-1/2">
          <div class="contact">
            <h2 class="uppercase font-bold text-xl text-gray-700 mb-5 ml-3">Contact Form</h2>
            <form id="contactForm" action="{{ asset('contact.php')}}">
              <div class="flex flex-wrap">
                <div class="w-full sm:w-1/2 md:w-full lg:w-1/2">
                  <div class="mx-3">
                    <input type="text" class="form-input rounded-full" id="name" name="name" placeholder="Name" required
                      data-error="Please enter your name">
                  </div>
                </div>
                <div class="w-full sm:w-1/2 md:w-full lg:w-1/2">
                  <div class="mx-3">
                    <input type="text" placeholder="Email" id="email" class="form-input rounded-full" name="email"
                      required data-error="Please enter your email">
                  </div>
                </div>
                <div class="w-full">
                  <div class="mx-3">
                    <input type="text" placeholder="Subject" id="subject" name="subject" class="form-input rounded-full"
                      required data-error="Please enter your subject">
                  </div>
                </div>
                <div class="w-full">
                  <div class="mx-3">
                    <textarea class="form-input rounded-lg" id="message" name="message" placeholder="Your Message"
                      rows="5" data-error="Write your message" required></textarea>
                  </div>
                </div>
                <div class="w-full">
                  <div class="submit-button mx-3">
                    <button class="btn" id="form-submit" type="submit">Send Message</button>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
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

  <!-- Footer Section Start -->
  <footer id="footer" class="bg-black py-16">
    <div class="container">
      <div class="flex flex-wrap">
        <div class="w-full sm:w-1/2 md:w-1/2 lg:w-1/4 wow fadeInUp" data-wow-delay="0.2s">
          <div class="mx-3 mb-8">
            <div class="footer-logo mb-3">
              <img src="{{ asset('img/logo.svg') }}" alt="">
            </div>
            <p class="text-gray-300">Developed with ♥ in India</p>
          </div>
        </div>
        <div class="w-full sm:w-1/2 md:w-1/2 lg:w-1/4 wow fadeInUp" data-wow-delay="0.4s">
          <div class="mx-3 mb-8">
            <h3 class="font-bold text-xl text-white mb-5">Company</h3>
            <ul>
              <li><a href="#" class="footer-links">Version#</a></li>
              <li><a href="#" class="footer-links">Surat - Gujarat</a></li>
              <li><a href="#" class="footer-links">India</a></li>
            </ul>
          </div>
        </div>
        <div class="w-full sm:w-1/2 md:w-1/2 lg:w-1/4 wow fadeInUp" data-wow-delay="0.6s">
          <div class="mx-3 mb-8">
            <h3 class="font-bold text-xl text-white mb-5">Account</h3>
            <ul>
              <li><a href="#" class="footer-links">info@versionhash.com</a></li>
              <li><a href="#" class="footer-links"></a></li>
            </ul>
          </div>
        </div>
        <div class="w-full sm:w-1/2 md:w-1/2 lg:w-1/4 wow fadeInUp" data-wow-delay="0.8s">
          <div class="mx-3 mb-8">
            <h3 class="font-bold text-xl text-white mb-5">Find us on</h3>

            <ul class="social-icons flex justify-start">
              <li class="mx-2">
                <a href="#" class="footer-icon hover:bg-gray-500">
                  <i class="lni lni-facebook-original" aria-hidden="true"></i>
                </a>
              </li>
              <li class="mx-2">
                <a href="#" class="footer-icon hover:bg-gray-400">
                  <i class="lni lni-twitter-original" aria-hidden="true"></i>
                </a>
              </li>
              <li class="mx-2">
                <a href="#" class="footer-icon hover:bg-red-500">
                  <i class="lni lni-instagram-original" aria-hidden="true"></i>
                </a>
              </li>
              <li class="mx-2">
                <a href="#" class="footer-icon hover:bg-gray-600">
                  <i class="lni lni-linkedin-original" aria-hidden="true"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!-- Footer Section End -->
  <!-- Go to Top Link -->
  <a href="#"
    class="back-to-top w-10 h-10 fixed bottom-0 right-0 mb-5 mr-5 flex items-center justify-center rounded-full bg-gray-600 text-white text-lg z-20 duration-300 hover:bg-gray-400">
    <i class="lni lni-arrow-up"></i>
  </a>

</x-guest-layout>
