


<!DOCTYPE html>
<html lang="en">

<head>
    <title>Home</title>

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
                    <form role="form" method="post" action="{{route('revisi')}}" enctype="multipart/form-data">

                        {{csrf_field()}}
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Informasi Revisi</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form>
                                    <div class="form-group">
                                        <label for="message-text" class="col-form-label" name>Judul Proposal</label>
                                        <input type="username" class="form-control" id="exampleInputEmail1" placeholder="Masukkan judul proposal" name="judul" value="{{$upload->judul}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="message-text" class="col-form-label" name>Pesan (Optional):</label>
                                        <textarea class="form-control" id="message-text" name="message"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="recipient-name" class="col-form-label">Upload Proposal Revisi</label>
                                        <br>
                                        <input type="file" class="" name="revisi_proposal">
                                        @if($errors->has('revisi_proposal'))
                                          <div class="text-danger">
                                            {{$errors->first('revisi_proposal')}}
                                          </div>
                                        @endif
                                    </div>
                                    </form>


                      </div>
                    </div> <!-- cd-timeline__content -->
                  </div> <!-- cd-timeline__block -->


                    <h1>

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
<td>  <a href="">
    <button type="button" class=" btn btn-success" data-toggle="modal">Terima</button>
</a>
<a href="">
<button type="button" class=" btn btn-danger">Tolak</button>
<a/>
<a href="">
    <button type="button" class="btn btn-warning">Revisi</button>
</a>
</td>
</tr>
