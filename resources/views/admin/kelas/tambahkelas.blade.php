<!DOCTYPE html>
<html lang="en">

@include('admin.layout-bek.head')
<link rel="stylesheet" href="//cdn.datatables.net/1.13.3/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css"
    integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

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
    @include('admin.layout-bek.header')
    <!--====== Header End ======-->

    <!--====== Welcome Start ======-->
    <div class="inner-welcome pt85">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="title">
                        <h1>Data Kelas</h1>
                    </div>
                    {{-- <div class="bread-crumb text-center">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">News Feeds</li>
                            </ol>
                        </nav>
                    </div> --}}
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

    <!--====== Blog  Start ======-->
    <div class="blog-area section-padding inner-bg ">
        <div class="container">
            <div class="row mb30">
                <div class="col-lg-12 m-auto">
                   <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Tambah Kelas</h4>

                                <form action="/addkelas" method="POST" class="forms-sample">
                                    @csrf
                                    {{-- <div class="form-group">
                                        <label for="exampleInputName1">ID SPP</label>
                                        <input type="number" class="form-control" id="exampleInputName1" name="id_spp"
                                            placeholder="ID SPP" />
                                    </div> --}}
                                    <div class="form-group">
                                        <label for="exampleInputName1">Nama Kelas</label>
                                        <input type="text" class="form-control" id="exampleInputName1" name="nama_kelas"
                                            placeholder="Nama Kelas" />
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputName1">Kompetensi Keahlian</label>
                                        <input type="text" class="form-control" id="exampleInputName1" name="kompetensi_keahlian"
                                            placeholder="Kompetensi Keahlian" />
                                    </div>


                                    <button type="submit" class="btn btn-primary mr-2"> Submit </button>
                                    <button class="btn btn-light">Cancel</button>
                                </form>
                            </div>
                        </div>
                </div>
            </div>


        </div>
    </div>
    <!--====== Blog  End ======-->




    <!--====== Subscribe Start ======-->
    <div class="subscribe-area gray-bg">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="subscribe">
                        <h2>Start 15 days free trial</h2>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="subcribe-form">
                        <input type="email" placeholder="Enter your email..">
                        <button type="submit" class="submit-btn">Started Now</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--====== Subscribe End ======-->

    <!--====== Footer start ======-->
    <footer>
        <div class="footer-white footer">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-lg-3">
                        <a href="index.html" class="footer-logo"><img src="../assets/img/logo/logo1.png"
                                alt=""></a>
                        <div class="socials my-4">
                            <ul>
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            </ul>
                        </div>
                        <div class="copywrite mt-5">
                            <p>Bek. All Right Reserved</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="footer-widget mt-4 mt-lg-0">
                            <h3>Others Link</h3>
                            <ul>
                                <li><a href="#">Company</a></li>
                                <li><a href="#">Diversity</a></li>
                                <li><a href="#">Carrer</a></li>
                                <li><a href="#">Present</a></li>
                                <li><a href="#">Leadership</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="footer-widget mt-4 mt-lg-0">
                            <h3>Bek. Soluation</h3>
                            <ul>
                                <li><a href="#">Imperdiet</a></li>
                                <li><a href="#">Partueient</a></li>
                                <li><a href="#">Faucibus</a></li>
                                <li><a href="#">Ultricies</a></li>
                                <li><a href="#">Privicy & Policy</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="footer-widget mt-4 mt-lg-0">
                            <h3>Get in Touch</h3>
                            <ul>
                                <li><a href="#">359 Hill Field Avenue Laurel, MD 20707</a></li>
                                <li><a href="#">+88 967 846 937</a></li>
                                <li><a href="#"> bek.249@gmail.com</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--====== Footer end ======-->


    <!--====== Bootstrap js ======-->
    @include('admin.layout-bek.script')
</body>
<script>
    $(document).ready(function() {
        e.preventDefault();
        $.ajax({
            url: urlStr,
            type: GET,
            data: {
                tahun: $("#tahun").val()
            },
            success: function(datas) {
                console.log(datas);
                chart.data.w.config.series[0].data = datas.spp
                chart.update()
            },
            error: function(error) {
                console.log('error $(error)');
            }
        })
    })
</script>
{{-- <script>
var nominal = document.getElementById('nominal');
nominal.addEventListener('keyup', function(e)
{
    nominal.value = formatRupiah(this.value, 'Rp. ');
});

function formatRupiah(angka, prefix)
{
    var number_string = angka.replace(/[^,\d]/g, '').toString(),
        split    = number_string.split(','),
        sisa     = split[0].length % 3,
        rupiah     = split[0].substr(0, sisa),
        ribuan     = split[0].substr(sisa).match(/\d{3}/gi);
        
    if (ribuan) {
        separator = sisa ? '.' : '';
        rupiah += separator + ribuan.join('.');
    }
    
    rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
    return prefix == undefined ? rupiah : (rupiah ? 'Rp. ' + rupiah : '');
}
</script> --}}

</html>
