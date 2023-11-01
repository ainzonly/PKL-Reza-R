<!DOCTYPE html>
<html lang="en">

<head>
    <title>Edit Bangunan</title>
    @include('tools.head')
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        @include('tools.leftsidebarusr')
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                @include('tools.topbar')

                <div class="card shadow mb-4">
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">Edit Proposal</h6>
                    </div>

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <div class="alert-title">
                                <h4>Whoops!</h4>
                            </div>
                            There are some problems with your input.
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <div class="card-body">
                        <form method="POST" action="{{ url('update-bangunan/'.$varBang->id) }}" enctype="multipart/form-data">
                            {{ csrf_field() }}

                            <div class="form-group">
                                <input type="text" name="nama_bangunan" class="form-control form-control-user"
                                    id="exampleFirstName" placeholder="Nama Bangunan" value="{{ $varBang->judul }}">
                            </div>
                            <div class="form-group">
                                <select name="kategori_id" class="form-control">
                                    <option value="">-Pilih Kategori-</option>
                                    @foreach ($kitkat as $item)
                                        <option value="{{ $item->id }}"
                                            {{ $varBang->kategori_id == $item->id ? 'selected' : '' }}>{{ $item->namakategori }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <textarea name="deskripsi" class="form-control form-control-user"
                                    id="exampleFirstName" placeholder="Deskripsi">{{ $varBang->jumlah_dana }}</textarea>
                            </div>
                            <div class="mb-3">
                                <label for="formFile" class="form-label">File</label>
                                <input class="form-control" type="file" name="gambar" id="formFile">
                            </div>
                            <button type="submit" class="btn btn-primary btn-user btn-block">
                                Simpan Perubahan
                            </button>
                        </form>
                    </div>
                </div>

                @include('tools.footer')
                <!-- End of Footer -->

            </div>
            <!-- End of Content Wrapper -->

        </div>
        <!-- End of Page Wrapper -->

        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>

        <!-- Logout Modal-->
        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <form method="POST" action="/logout">
                            {{ csrf_field() }}
                            <button class="btn btn-primary" type="submit">Logout</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bootstrap core JavaScript-->
        @include('tools.script')
    </body>

</html>
