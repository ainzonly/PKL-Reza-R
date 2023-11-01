<!DOCTYPE html>
<html lang="en">

<head>
    <title>Moni-School Data Kategori</title>

    @include('tools.head')
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        @include('tools.leftsidebaradmin')
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                @include('tools.topbar')
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    {{-- <h1 class="h3 mb-4 text-gray-800">Data Pengguna</h1> --}}
                    <div class="card shadow mb-4">
                        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                            <h6 class="m-0 font-weight-bold text-primary">Daftar Proposal diterima</h6>

                        </div>
                        <div class="card-body">
                            <div class="table-responsive">

                                <table class="table table-bordered">
                                    <thead class="thead-light">
                                        <tr>
                                            <th>Judul Proposal</th>
                                            <th>Kategori</th>
                                            <th>File Proposal</th>
                                            <th>Jumlah Dana</th>

                                        </tr>
                                    </thead>
                                    @foreach ($varMa as $item)
                                    <tr>
                                        <td>{{ $item->Judul }} </td>
                                        <td>{{ $item->kategori->namakategori }}</td>

                                        <td>{{$item->file}}<a href="{{ asset('img/'.$item->file) }}"> -Lihat </a></td>
                                        <td>{{$item->jumlah_dana}}</td>



                                    @endforeach


                                </table>




                            </div>



                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
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
                    <form method="POST" action="/logout" >
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
