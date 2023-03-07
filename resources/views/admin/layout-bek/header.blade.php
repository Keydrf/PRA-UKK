<header class="absolute-header">
    <div class="header-area" id="header">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-6 col-lg-2">
            {{-- <div class="logo">
              <a href="index.html"><img src="{{asset('foto/logo.png')}}" alt=""></a>
            </div> --}}
          </div>
          <div class="col-6 col-lg-10">

            <div class="mobile-menu d-lg-none">
              <div class="mobile-menu-wrap">
                <span class="menu-line"></span>
                <span class="menu-line"></span>
                <span class="menu-line"></span>
              </div>

            </div>
            <div class="menu-elements">

              <div class="main-menu">
                <div class="row align-items-center d-lg-none mb-4">
                  <div class="col-6">
                    <div class="logo">
                      <a href="index.html"><img src="{{asset('bek/assets/img/logo/logo1.png')}}" alt=""></a>
                    </div>
                  </div>
                </div>
                <div class="menu-close-btn d-lg-none ">
                  <i class="fal fa-times"></i>
                </div>

                <ul class="menu-list">
                  
                  <li><a href="/spp">SPP</a></li>
                  <li><a href="/kelas">Kelas</a></li>
                  
                  <li class="dropdown"><a href="#">Data</a>
                    <ul class="dropdown-parrent">
                      <li><a href="#">Petugas</a></li>
                      <li><a href="/siswa">Siswa</a></li>
                      <li><a href="#">Transaksi</a></li>
                      
                    </ul>
                    {{-- <span class="dropdown-plus d-lg-none"><i class="fal fa-plus"></i></span> --}}
                  </li>
                 
                </ul>             

              </div>
              <div class="action-btn">
              
                <a href="/logout" class="cbtn btn-one effect1">LOGOUT</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
