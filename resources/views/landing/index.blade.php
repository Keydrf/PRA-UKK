<!DOCTYPE html>
<html lang="en">

@include('landing.layout.head')

<body>

  <!--====== Preloader Start ======-->
  <div class="preloader">
    <div class="gooey">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!--====== Preloader End ======-->

  <!--====== Cursor Start ======-->
  <div class="cursor">
    <div class="cursor-dot"></div>
  </div>
  <!--====== Cursor End ======-->

  <!--====== Header Start ======-->
  @include('landing.layout.header')
  <!--====== Header End ======-->

  <!--====== Welcome Start ======-->
  <div class="hero-area flex-lg-middle pt85">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6">


          <div class="title xss-text-center" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="1000">

            <img style="width: 60%" src="{{asset('foto/mobile.png')}}" alt="">
            <h1>Pembayaran SPP</h1>
            {{-- <p>Completely we praiseng paenus was born and will been paenus was born give account system.</p> --}}
            <a href="#" class="cbtn effect2 mt30">Try 15 days free</a>
          </div>
        </div>
      </div>
    </div>
    {{-- <div class="soft-bg" data-aos="fade-left" data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="1000" data-aos-delay="500">
      <img src="{{asset('foto/mobile.png')}}" alt="">
    </div> --}}
    <div class="hero-shape" data-aos="fade-left" data-aos-delay="2000" data-aos-duration="500">
      <img src="https://html.fleexstudio.com/bek/assets/img/shapes/shape.svg" alt="">
    </div>
    {{-- <div class="hero-shape2" data-aos="fade-left" data-aos-delay="2000" data-aos-duration="500">
      <img src="https://html.fleexstudio.com/bek/assets/img/shapes/shape2.svg" alt="">
    </div> --}}
  </div>
  <!--====== Welcome End ======-->

  <!--====== Feature Start ======-->

  <!--====== Feature End ======-->


  <!--====== Feature Start ======-->

  <!--====== Feature End ======-->

  <!--====== Pricing Start ======-->

  <!--====== Pricing End ======-->

  <!--====== Trial Start ======-->

  <!--====== Trial End ======-->

  <!--====== Testimonial Start ======-->

  <!--====== Testimonial End ======-->

  <!--====== Blog Start ======-->

  <!--====== Blog End ======-->

  <!--====== Subscribe Start ======-->

  <!--====== Subscribe End ======-->

  <!--====== Footer start ======-->
 {{-- @include('layout.footer') --}}
  <!--====== Footer end ======-->



@include('landing.layout.script')
</body>

</html>
