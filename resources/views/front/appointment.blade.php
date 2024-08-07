@extends('front.layouts.app')

@section('content')
<div id="header" class="bg-[#F6F7FA] relative h-[700px] -mb-[488px]">
    <div class="container max-w-[1130px] mx-auto relative pt-10  z-10">
        <x-navbar/>
    </div>
  </div>
  <div id="Contact" class="container max-w-[1130px] mx-auto flex flex-wrap xl:flex-nowrap justify-between gap-[50px] relative z-10">
    <div class="flex flex-col mt-20 gap-[50px]">
      <div class="breadcrumb flex items-center gap-[30px]">
        <p class="text-cp-light-grey last-of-type:text-cp-black last-of-type:font-semibold">Home</p>
        <span class="text-cp-light-grey">/</span>
        <p class="text-cp-light-grey last-of-type:text-cp-black last-of-type:font-semibold">Product</p>
        <span class="text-cp-light-grey">/</span>
        <p class="text-cp-light-grey last-of-type:text-cp-black last-of-type:font-semibold">Appointment</p>
      </div>
      <h1 class="font-extrabold text-4xl leading-[45px]">We Help You to Build Awesome Project</h1>
      <div class="flex flex-col gap-5">
        <div class="flex items-center gap-[10px]">
          <div class="flex w-6 h-6 shrink-0">
            <img src="assets/icons/global.svg" alt="icon">
          </div>
          <p class="font-semibold text-cp-dark-blue">No 96, Anggapati Jakarta</p>
        </div>
        <div class="flex items-center gap-[10px]">
          <div class="flex w-6 h-6 shrink-0">
            <img src="assets/icons/call.svg" alt="icon">
          </div>
          <p class="font-semibold text-cp-dark-blue">(021) 22081996</p>
        </div>
        <div class="flex items-center gap-[10px]">
          <div class="flex w-6 h-6 shrink-0">
            <img src="assets/icons/monitor-mobbile.svg" alt="icon">
          </div>
          <p class="font-semibold text-cp-dark-blue">shaynacomp.com</p>
        </div>
      </div>
    </div>
    <form method="POST" action="{{ route('front.appointment.store') }}" class="flex flex-col p-[30px] rounded-[20px] gap-[18px] bg-white shadow-[0_10px_30px_0_#D1D4DF40] w-full md:w-[700px] shrink-0">
        @csrf
      <div class="flex items-center gap-[18px]">
        <div class="flex flex-col w-full gap-2">
          <p class="font-semibold">Complete Name</p>
          <div class="flex items-center gap-[10px] p-[14px_20px] border border-[#E8EAF2] focus-within:border-cp-dark-blue transition-all duration-300 rounded-xl bg-white">
            <div class="w-[18px] h-[18px] flex shrink-0">
              <img src="assets/icons/profile.svg" alt="icon">
            </div>
            <input type="text" name="name" id="name" class="w-full font-semibold bg-white outline-none appearance-none placeholder:font-normal placeholder:text-cp-black" placeholder="Write your complete name" required>
          </div>
        </div>
        <div class="flex flex-col w-full gap-2">
          <p class="font-semibold">Email Address</p>
          <div class="flex items-center gap-[10px] p-[14px_20px] border border-[#E8EAF2] focus-within:border-cp-dark-blue transition-all duration-300 rounded-xl bg-white">
            <div class="w-[18px] h-[18px] flex shrink-0">
              <img src="assets/icons/sms.svg" alt="icon">
            </div>
            <input type="email" name="email" id="email" class="w-full font-semibold bg-white outline-none appearance-none placeholder:font-normal placeholder:text-cp-black" placeholder="Write your email address" required>
          </div>
        </div>
      </div>
      <div class="flex items-center gap-[18px]">
        <div class="flex flex-col w-full gap-2">
          <p class="font-semibold">Phone Number</p>
          <div class="flex items-center gap-[10px] p-[14px_20px] border border-[#E8EAF2] focus-within:border-cp-dark-blue transition-all duration-300 rounded-xl bg-white">
            <div class="w-[18px] h-[18px] flex shrink-0">
              <img src="assets/icons/call-black.svg" alt="icon">
            </div>
            <input type="tel" name="phone_number" id="phone_number" class="w-full font-semibold bg-white outline-none appearance-none placeholder:font-normal placeholder:text-cp-black" placeholder="Write your phone number" required>
          </div>
        </div>
        <div class="flex flex-col w-full gap-2">
          <p class="font-semibold">Meeting Date</p>
          <div class="flex items-center gap-[10px] p-[14px_20px] border border-[#E8EAF2] focus-within:border-cp-dark-blue transition-all duration-300 rounded-xl bg-white relative">
            <div class="w-[18px] h-[18px] flex shrink-0">
              <img src="assets/icons/calendar.svg" alt="icon">
            </div>
            <button type="button" id="dateButton" class="w-full p-0 text-left bg-transparent border-none outline-none">Choose the date</button>
            <input type="date" name="meeting_at" id="dateInput" class="absolute opacity-0 -z-10">
          </div>
        </div>
      </div>
      <div class="flex items-center gap-[18px]">
        <div class="flex flex-col w-full gap-2">
          <p class="font-semibold">Your Interest</p>
          <div class="flex items-center gap-[10px] p-[14px_20px] border border-[#E8EAF2] focus-within:border-cp-dark-blue transition-all duration-300 rounded-xl bg-white">
            <div class="w-[18px] h-[18px] flex shrink-0">
              <img src="assets/icons/building-4-black.svg" alt="icon">
            </div>
            <select name="product_id" id="product_id" class="appearance-none outline-none w-full invalid:font-normal font-semibold px-[10px] -mx-[10px] bg-white" required>
              <option value="" hidden>Choose a project</option>
              @foreach ($products as $product)
              <option value="{{ $product->id }}">{{ $product->name }}</option>                  
              @endforeach
            </select>
          </div>
        </div>
        <div class="flex flex-col w-full gap-2">
          <p class="font-semibold">Budget Available</p>
          <div class="flex items-center gap-[10px] p-[14px_20px] border border-[#E8EAF2] focus-within:border-cp-dark-blue transition-all duration-300 rounded-xl bg-white">
            <div class="w-[18px] h-[18px] flex shrink-0">
              <img src="assets/icons/dollar-square.svg" alt="icon">
            </div>
            <input type="number" name="budget" id="budget" class="w-full font-semibold bg-white outline-none appearance-none placeholder:font-normal placeholder:text-cp-black" placeholder="What is your budget" required>
          </div>
        </div>
      </div>
      <div class="flex flex-col w-full gap-2">
        <p class="font-semibold">Project Brief</p>
        <div class="flex gap-[10px] p-[14px_20px] border border-[#E8EAF2] focus-within:border-cp-dark-blue transition-all duration-300 rounded-xl bg-white">
          <div class="w-[18px] h-[18px] flex shrink-0 mt-[3px]">
            <img src="assets/icons/message-text.svg" alt="icon">
          </div>
          <textarea name="brief" id="brief" rows="6" class="w-full font-semibold bg-white outline-none appearance-none resize-none placeholder:font-normal placeholder:text-cp-black" placeholder="Tell us the project brief"></textarea>
        </div>
      </div>
      <button type="submit" class="bg-cp-dark-blue p-5 w-full rounded-xl hover:shadow-[0_12px_30px_0_#312ECB66] transition-all duration-300 font-bold text-white">Book Appointment</button>
    </form>
  </div>
  <div id="Clients" class="container max-w-[1130px] mx-auto flex flex-col justify-center text-center gap-5 mt-20 relative z-10">
    <h2 class="text-lg font-bold">Trusted by 500+ Top Leaders Worldwide</h2>
    <div class="flex flex-wrap justify-center gap-5 logo-container">
      <div class="logo-card h-[68px] w-fit flex items-center shrink-0 border border-[#E8EAF2] rounded-[18px] p-4 gap-[10px] bg-white hover:border-cp-dark-blue transition-all duration-300">
        <div class="overflow-hidden h-9">
          <img src="assets/logo/logo-54.svg" class="object-contain w-full h-full" alt="logo">
        </div>
      </div>
      <div class="logo-card h-[68px] w-fit flex items-center shrink-0 border border-[#E8EAF2] rounded-[18px] p-4 gap-[10px] bg-white hover:border-cp-dark-blue transition-all duration-300">
        <div class="overflow-hidden h-9">
          <img src="assets/logo/logo-52.svg" class="object-contain w-full h-full" alt="logo">
        </div>
      </div>
      <div class="logo-card h-[68px] w-fit flex items-center shrink-0 border border-[#E8EAF2] rounded-[18px] p-4 gap-[10px] bg-white hover:border-cp-dark-blue transition-all duration-300">
        <div class="overflow-hidden h-9">
          <img src="assets/logo/logo-55.svg" class="object-contain w-full h-full" alt="logo">
        </div>
      </div>
      <div class="logo-card h-[68px] w-fit flex items-center shrink-0 border border-[#E8EAF2] rounded-[18px] p-4 gap-[10px] bg-white hover:border-cp-dark-blue transition-all duration-300">
        <div class="overflow-hidden h-9">
          <img src="assets/logo/logo-44.svg" class="object-contain w-full h-full" alt="logo">
        </div>
      </div>
      <div class="logo-card h-[68px] w-fit flex items-center shrink-0 border border-[#E8EAF2] rounded-[18px] p-4 gap-[10px] bg-white hover:border-cp-dark-blue transition-all duration-300">
        <div class="overflow-hidden h-9">
          <img src="assets/logo/logo-51.svg" class="object-contain w-full h-full" alt="logo">
        </div>
      </div>
      <div class="logo-card h-[68px] w-fit flex items-center shrink-0 border border-[#E8EAF2] rounded-[18px] p-4 gap-[10px] bg-white hover:border-cp-dark-blue transition-all duration-300">
        <div class="overflow-hidden h-9">
          <img src="assets/logo/logo-55.svg" class="object-contain w-full h-full" alt="logo">
        </div>
      </div>
      <div class="logo-card h-[68px] w-fit flex items-center shrink-0 border border-[#E8EAF2] rounded-[18px] p-4 gap-[10px] bg-white hover:border-cp-dark-blue transition-all duration-300">
        <div class="overflow-hidden h-9">
          <img src="assets/logo/logo-52.svg" class="object-contain w-full h-full" alt="logo">
        </div>
      </div>
      <div class="logo-card h-[68px] w-fit flex items-center shrink-0 border border-[#E8EAF2] rounded-[18px] p-4 gap-[10px] bg-white hover:border-cp-dark-blue transition-all duration-300">
        <div class="overflow-hidden h-9">
          <img src="assets/logo/logo-54.svg" class="object-contain w-full h-full" alt="logo">
        </div>
      </div>
      <div class="logo-card h-[68px] w-fit flex items-center shrink-0 border border-[#E8EAF2] rounded-[18px] p-4 gap-[10px] bg-white hover:border-cp-dark-blue transition-all duration-300">
        <div class="overflow-hidden h-9">
          <img src="assets/logo/logo-51.svg" class="object-contain w-full h-full" alt="logo">
        </div>
      </div>
    </div>
  </div>
  <div id="Testimonials" class="w-full flex flex-col gap-[50px] items-center mt-20">
    <div class="flex flex-col gap-[14px] items-center">
      <p class="badge w-fit bg-cp-pale-blue text-cp-light-blue p-[8px_16px] rounded-full uppercase font-bold text-sm">SUCCESS CLIENTS</p>
      <h2 class="font-bold text-4xl leading-[45px] text-center">Our Satisfied Clients<br>From Worldwide Company</h2>
    </div>
    <div class="w-full main-carousel">
      @forelse ($testimonials as $testimonial)
      <div class="carousel-card container max-w-[1130px] w-full flex flex-wrap justify-between items-center lg:mx-[calc((100vw-1130px)/2)]">
        <div class="testimonial-container flex flex-col gap-[112px] w-[565px]">
          <div class="flex flex-col gap-[30px]">
            <div class="overflow-hidden h-9">
              <img src="{{ Storage::url($testimonial->client->logo) }}" class="object-contain" alt="icon">
            </div>
            <div class="relative pt-[27px] pl-[30px]">
              <div class="absolute top-0 left-0">
                <img src="{{ asset('assets/icons/quote.svg') }}" alt="icon">
              </div>
              <p class="font-semibold text-2xl leading-[46px] relative z-10">{{ $testimonial->message }}</p>
            </div>
            <div class="flex items-center justify-between pl-[30px]">
              <div class="flex items-center gap-6">
                <div class="w-[60px] h-[60px] flex shrink-0 rounded-full overflow-hidden">
                  <img src="{{ Storage::url($testimonial->thumbnail) }}" class="object-cover w-full h-full" alt="photo">
                </div>
                <div class="flex flex-col justify-center gap-1">
                  <p class="font-bold">{{ $testimonial->client->name }}</p>
                  <p class="text-sm text-cp-light-grey">{{ $testimonial->client->occupation }}</p>
                </div>
              </div>
              <div class="flex flex-nowrap">
                <div class="flex w-6 h-6 shrink-0">
                  <img src="{{ asset('assets/icons/Star-rating.svg') }}" alt="star">
                </div>
                <div class="flex w-6 h-6 shrink-0">
                  <img src="{{ asset('assets/icons/Star-rating.svg') }}" alt="star">
                </div>
                <div class="flex w-6 h-6 shrink-0">
                  <img src="{{ asset('assets/icons/Star-rating.svg') }}" alt="star">
                </div>
                <div class="flex w-6 h-6 shrink-0">
                  <img src="{{ asset('assets/icons/Star-rating.svg') }}" alt="star">
                </div>
                <div class="flex w-6 h-6 shrink-0">
                  <img src="{{ asset('assets/icons/Star-rating.svg') }}" alt="star">
                </div>
              </div>
            </div>
          </div>
          <div class="flex items-center justify-center h-4 gap-2 carousel-indicator shrink-0">
          </div>
        </div>
        <div class="testimonial-thumbnail w-[470px] h-[550px] rounded-[20px] overflow-hidden bg-[#D9D9D9]">
          <img src="{{ asset('assets/backgrounds/banner.jpg') }}" class="object-cover object-center w-full h-full" alt="thumbnail">
        </div>
      </div>
      @empty
        <p>Tidak ada data terbaru</p>
      @endforelse
    </div>
  </div>
  <footer class="relative w-full mt-20 overflow-hidden bg-cp-black">
    <div class="container max-w-[1130px] mx-auto flex flex-wrap gap-y-4 items-center justify-between pt-[100px] pb-[220px] relative z-10">
      <div class="flex flex-col gap-10">
        <div class="flex items-center gap-3">
          <div class="flex shrink-0 h-[43px] overflow-hidden">
              <img src="assets/logo/logo.svg" class="object-contain w-full h-full" alt="logo">
          </div>
          <div class="flex flex-col">
            <p id="CompanyName" class="font-extrabold text-xl leading-[30px] text-white">ShaynaComp</p>
            <p id="CompanyTagline" class="text-sm text-cp-light-grey">Build Futuristic Dreams</p>
          </div>
        </div>
        <div class="flex items-center gap-4">
          <a href="">
            <div class="flex w-6 h-6 overflow-hidden shrink-0">
              <img src="assets/icons/youtube.svg" class="object-contain w-full h-full" alt="youtube">
            </div>
          </a>
          <a href="">
            <div class="flex w-6 h-6 overflow-hidden shrink-0">
              <img src="assets/icons/whatsapp.svg" class="object-contain w-full h-full" alt="whatsapp">
            </div>
          </a>
          <a href="">
            <div class="flex w-6 h-6 overflow-hidden shrink-0">
              <img src="assets/icons/facebook.svg" class="object-contain w-full h-full" alt="facebook">
            </div>
          </a>
          <a href="">
            <div class="flex w-6 h-6 overflow-hidden shrink-0">
              <img src="assets/icons/instagram.svg" class="object-contain w-full h-full" alt="instagram">
            </div>
          </a>
        </div>
      </div>
      <div class="flex flex-wrap gap-[50px]">
        <div class="flex flex-col w-[200px] gap-3">
          <p class="text-lg font-bold text-white">Products</p>
          <a href="" class="transition-all duration-300 text-cp-light-grey hover:text-white">General Contract</a>
          <a href="" class="transition-all duration-300 text-cp-light-grey hover:text-white">Building Assessment</a>
          <a href="" class="transition-all duration-300 text-cp-light-grey hover:text-white">3D Paper Builder</a>
          <a href="" class="transition-all duration-300 text-cp-light-grey hover:text-white">Legal Constructions</a>
        </div>
        <div class="flex flex-col w-[200px] gap-3">
          <p class="text-lg font-bold text-white">About</p>
          <a href="" class="transition-all duration-300 text-cp-light-grey hover:text-white">We’re Hiring</a>
          <a href="" class="transition-all duration-300 text-cp-light-grey hover:text-white">Our Big Purposes</a>
          <a href="" class="transition-all duration-300 text-cp-light-grey hover:text-white">Investor Relations</a>
          <a href="" class="transition-all duration-300 text-cp-light-grey hover:text-white">Media Press</a>
        </div>
        <div class="flex flex-col w-[200px] gap-3">
          <p class="text-lg font-bold text-white">Useful Links</p>
          <a href="" class="transition-all duration-300 text-cp-light-grey hover:text-white">Privacy & Policy</a>
          <a href="" class="transition-all duration-300 text-cp-light-grey hover:text-white">Terms & Conditions</a>
          <a href="contact.html" class="transition-all duration-300 text-cp-light-grey hover:text-white">Contact Us</a>
          <a href="" class="transition-all duration-300 text-cp-light-grey hover:text-white">Download Template</a>
        </div>
      </div>
    </div>
    <div class="absolute -bottom-[135px] w-full">
      <p class="font-extrabold text-[250px] leading-[375px] text-center text-white opacity-5">SHAYNA</p>
    </div>
  </footer>
  
  @push('after-scripts')
    <script src="{{ asset('js/contact-form.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <!-- JavaScript -->
    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
    <script src="https://unpkg.com/flickity-fade@1/flickity-fade.js"></script>
    <script src="{{ asset('js/carousel.js') }}"></script>
  @endpush
@endsection