<!DOCTYPE html>
<html lang="en">
@include('admin.layout.head')
<link rel="stylesheet" href="//cdn.datatables.net/1.13.3/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
                                <h4 class="card-title">Data SPP</h4>
                                <a href="/formspp"><button type="button" class="btn btn-primary btn-rounded btn-fw">
                                        Tambah + </button></a>
                                </p>
                                <div class="table-responsive">
                                    <table class="table table-striped" id="myTable">
                                        <thead>
                                            <tr>
                                                <th>ID SPP</th>
                                                <th>Tahun</th>
                                                <th>Nominal</th>
                                                <th>Aksi</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($data as $spp)
                                                <tr>
                                                    <td>
                                                        {{ $spp->id_spp }}
                                                    </td>
                                                    <td>{{ $spp->tahun }}</td>

                                                    <td>
                                                        {{ $spp->nominal }}
                                                    </td>
                                                    <td>

                                                        <a href="/editspp/{{$spp->id_spp}}"></a><button type="button"
                                                            class="btn btn-warning btn-rounded btn-fw"> Edit
                                                        </button>
                                                        <a href="#" class="btn btn-danger btn-rounded btn-fw delete" data-id="{{ $spp->id_spp }}" data-spp="{{ $spp->tahun }}">Hapus</a>
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
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
</body>
<script>
    $('.delete').click(function() {
        var sppid = $(this).attr('data-id');
        var spp = $(this).attr('data-spp');
        swal({
                title: "Apakah kamu yakin?",
                text: "Kamu akan menghapus spp tahun " + spp + "",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
            .then((willDelete) => {
                if (willDelete) {
                    window.location = "/deletespp/" + sppid + ""
                    swal("Data berhasil dihapus", {
                        icon: "success",
                    });
                } else {
                    swal("Data tidak jadi dihapus");
                }
            });
    });
</script>
<script>
    let table = new DataTable('#myTable');
</script>
<script>
    @if(Session::get('success'))
    toastr.success("{{ Session::get('success') }}")
    @endif
</script>
</html>
