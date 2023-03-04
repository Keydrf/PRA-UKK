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
  <div class="inner-welcome pt85">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <div class="title">
            <h1>Sign Up</h1>
          </div>
          <div class="bread-crumb text-center">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Sign Up</li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </div>
    <div class="inner-1-bg">
      <img src="https://html.fleexstudio.com/bek/assets/img/bg/feature2bg2-2.svg" alt="">
    </div>
    <div class="inner-2-bg">
      <img src="https://html.fleexstudio.com/bek/assets/img/bg/feature2bg2-2.svg" alt="">
    </div>
  </div>
  <div class="border-bottom-gray"></div>
  <!--====== Welcome End ======-->


  <!--====== Sign Up Start ======-->
  <div class="login-area section-padding">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6">

          <div class="login-img">
            <img src="https://html.fleexstudio.com/bek/assets/img/bg/hero3.svg" alt="">
          </div>
          <div class="login-text mt-5">
            <h4>Already have an account? <a href="login.html">Login</a></h4>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="login-info">
            <div class="comment-form">
              <h2>Fill this form <br> to sign up</h2>
              <form action="/registerpost" method="POST">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <label for="name">Name *</label>
                        <p class="input-field input-name"><input type="text" id="name" name="name" placeholder="Name" required></p>
                      </div>
                  <div class="col-md-6">
                    <label for="name">Username *</label>
                    <p class="input-field input-name"><input type="text" id="name" name="username" placeholder="Username" required></p>
                  </div>
                  <div class="col-12">
                    <label for="email">Email *</label>
                    <p class="input-field input-email"><input type="email" id="email" name="email" placeholder="Enter Email" required></p>
                  </div>
                  <div class="col-12">
                    <label for="password">Password *</label>
                    <p class="input-field input-password"><input type="password" name="password" id="password" placeholder="Password" required></p>
                  </div>
                  {{-- <div class="col-12 mb-3">
                    <div class="form-check-box">
                      <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                      <label class="form-check-label" for="flexCheckDefault">
                        Agree to our terms of service and privacy policy
                      </label>
                    </div>
                  </div> --}}
                  <div class="col-6 ">
                    <div class="forget-pass">
                      Have a account?<a href="/login">SIGN IN</a>
                    </div>
                  </div>

                </div>
                <button type="submit" class="submit-btn">Submit</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--====== Sign Up End ======-->



  <!--====== Footer start ======-->
  @include('landing.layout.footer')
  <!--====== Footer end ======-->



  <!--====== Bootstrap js ======-->
  @include('landing.layout.script')

</body>

</html>
