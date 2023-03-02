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
                                <h4 class="card-title">Tambah SPP</h4>

                                <form action="/addspp" method="POST" class="forms-sample">
                                    @csrf
                                    {{-- <div class="form-group">
                                        <label for="exampleInputName1">ID SPP</label>
                                        <input type="number" class="form-control" id="exampleInputName1" name="id_spp"
                                            placeholder="ID SPP" />
                                    </div> --}}
                                    <div class="form-group">
                                        <label for="exampleInputName1">Tahun</label>
                                        <input type="text" class="form-control" id="exampleInputName1" name="tahun"
                                            placeholder="Tahun" />
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputName1">Nominal</label>
                                        <input type="text" class="form-control" id="exampleInputName1" name="nominal"
                                            placeholder="Nominal" />
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
