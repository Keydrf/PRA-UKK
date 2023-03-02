<!DOCTYPE html>
<html lang="en">
@include('admin.layout.head')

<body>
    <div class="container-scroller">
        @include('admin.layout.sidebar')
        <div class="container-fluid page-body-wrapper">
            <div id="theme-settings" class="settings-panel">
                <i class="settings-close mdi mdi-close"></i>
                <p class="settings-heading">SIDEBAR SKINS</p>
                <div class="sidebar-bg-options selected" id="sidebar-default-theme">
                    <div class="img-ss rounded-circle bg-light border mr-3"></div> Default
                </div>
                <div class="sidebar-bg-options" id="sidebar-dark-theme">
                    <div class="img-ss rounded-circle bg-dark border mr-3"></div> Dark
                </div>
                <p class="settings-heading mt-2">HEADER SKINS</p>
                <div class="color-tiles mx-0 px-4">
                    <div class="tiles light"></div>
                    <div class="tiles dark"></div>
                </div>
            </div>
            @include('admin.layout.navbar')
            <div class="main-panel">
                <div class="content-wrapper pb-0">

                    <div class="col-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Tambah Siswa</h4>

                                <form action="/addsiswa" method="POST" class="forms-sample">
                                    @csrf
                                    <div class="form-group">
                                        <label for="exampleInputName1">NISN</label>
                                        <input type="text" class="form-control" id="exampleInputName1" name="nisn"
                                            placeholder="NISN" />
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputName1">NIS</label>
                                        <input type="text" class="form-control" id="exampleInputName1" name="nis"
                                            placeholder="NIS" />
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputName1">Nama</label>
                                        <input type="text" class="form-control" id="exampleInputName1" name="nama"
                                            placeholder="Nama Lengkap" />
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail3">Kelas</label>
                                        <select class="form-control" name="id_kelas" aria-label="Default select example">
                                        <option value="0" selected>Pilih Kelas</option>
                                        @foreach ($kelas as $kls)
                                        <option value="{{$kls->id_kelas}}">{{$kls->nama_kelas}}</option>
                                        @endforeach
                                        </select>
                                        {{-- <input type="number" class="form-control" id="exampleInputEmail3" name="id_kelas"
                                            placeholder="Kelas" /> --}}
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword4">Alamat</label>
                                        <input type="text" class="form-control" id="exampleInputPassword4" name="alamat"
                                            placeholder="Alamat" />
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword4">No Telpon</label>
                                        <input type="text" class="form-control" id="exampleInputPassword4" name="no_telp"
                                            placeholder="No Telpon" />
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleSelectGender">ID SPP</label>
                                        <select class="form-control" name="id_spp" aria-label="Default select example">
                                            <option value="0" selected>Pilih SPP</option>
                                            @foreach ($spp as $sp)
                                            <option value="{{$sp->id_spp}}">{{$sp->nominal}}</option>
                                            @endforeach
                                            </select>
                                        {{-- <input type="number" class="form-control" id="exampleInputPassword4" name="id_spp"
                                            placeholder="ID APP" /> --}}
                                    </div>
                                    <button type="submit" class="btn btn-primary mr-2"> Submit </button>
                                    <button class="btn btn-light">Cancel</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                @include('admin.layout.footer')
            </div>
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.layout.script')
    <!-- End custom js for this page -->
</body>

</html>
