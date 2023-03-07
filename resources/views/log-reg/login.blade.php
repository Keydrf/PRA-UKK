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
            <h1>Log In</h1>
          </div>
          <div class="bread-crumb text-center">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Log In</li>
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


  <!--====== Login Start ======-->
  <div class="login-area section-padding">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6">

          <div class="login-img">
            <img src="https://html.fleexstudio.com/bek/assets/img/bg/hero3.svg" alt="">
          </div>

        </div>
        <div class="col-lg-6">
          <div class="login-info">
            <div class="comment-form">
              <h2>Enter Your Log In Info</h2>
              <form action="/loginpost" method="POST">
                @csrf
                <div class="row">

                  <div class="col-12">
                    <label for="email">Email *</label>
                    <p class="input-field input-email"><input type="email" id="email" name="email" placeholder="Email" autofocus required></p>
                  </div>

                  <div class="col-12">
                    <label for="password">Password *</label>
                    <p class="input-field input-password"><input type="password" id="password" name="password" placeholder="Password" required></p>
                  </div>

                  {{-- <div class="col-6 mb-3">
                    <div class="form-check-box">
                      <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                      <label class="form-check-label" for="flexCheckDefault">Remember Me</label>
                    </div>
                  </div>
                  <div class="col-6 text-right">
                    <div class="forget-pass">
                      <a href="#">Forgot password?</a>
                    </div>
                  </div> --}}
                  <div class="col-6 ">
                    <div class="forget-pass">
                      Don't have a account?<a href="/register">SIGN UP</a>
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
  <!--====== Login End ======-->


  <!--====== Footer start ======-->
  @include('landing.layout.footer')
  <!--====== Footer end ======-->


@include('landing.layout.script')

</body>

</html>
