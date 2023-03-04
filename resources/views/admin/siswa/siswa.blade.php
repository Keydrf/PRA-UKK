<!DOCTYPE html>
<html lang="en">
@include('admin.layout.head')
<link rel="stylesheet" href="//cdn.datatables.net/1.13.3/css/jquery.dataTables.min.css">

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
                    <div class="col-lg-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Data Siswa</h4>
                                <a href="/formsiswa"><button type="button" class="btn btn-primary btn-rounded btn-fw">
                                        Tambah + </button></a>
                                </p>
                                <div class="table-responsive">
                                    <table class="table table-striped" id="myTable">
                                        <thead>
                                            <tr>
                                                <th>NISN</th>
                                                <th>NIS</th>
                                                <th>Nama</th>
                                                <th>Kelas</th>
                                                <th>Alamat</th>
                                                <th>No Telpon</th>
                                                <th>ID SPP</th>
                                                <th>Aksi</th>

                                            </tr>
                                        </thead>
                                        <tbody>

                                            @foreach ($data as $siswa)
                                                <tr>
                                                    <td>
                                                        {{ $siswa->nisn }}
                                                    </td>
                                                    <td>{{ $siswa->nis }}</td>
                                                    <td>
                                                        {{ $siswa->nama }}
                                                    </td>
                                                    <td>{{ $siswa->kelas->nama_kelas }}</td>
                                                    <td>{{ $siswa->alamat }}</td>
                                                    <td>{{ $siswa->no_telp }}</td>
                                                    <td>{{ $siswa->spp->nominal }}</td>
                                                    <td>
                                                        <button type="button"
                                                            class="btn btn-danger btn-rounded btn-fw"> Hapus </button>
                                                        <button type="button"
                                                            class="btn btn-warning btn-rounded btn-fw"> Edit
                                                        </button>
                                                    </td>
                                                </tr>
                                            @endforeach


                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                @include('admin.layout.footer')
                <!-- main-panel ends -->
            </div>
            <!-- page-body-wrapper ends -->
        </div>
        <!-- container-scroller -->
        <!-- plugins:js -->
        @include('admin.layout.script')
        <!-- End custom js for this page -->
        <script src="//cdn.datatables.net/1.13.3/js/jquery.dataTables.min.js"></script>
</body>
<script>
    let table = new DataTable('#myTable');
</script>

</html>
