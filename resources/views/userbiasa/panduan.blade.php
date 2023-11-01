
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
     @include('tools.leftsidebarusr')
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


                  <h3><Strong>langkah Pertama</Strong></h3>

                  <p class="color-contrast-medium">Bagian ini bersifat opsional, silahkan skip langkah ini kemudian lanjut ke langkah berikutnya kalau anda sudah mempunyai format sendiri. Namun apabila anda belum memiliki format sendiri, kami menyediakan template proposal.</p>
                  <a href="#0" class="btn btn--subtle" style="background-color: #15bded;color: #6646a3;font-family: poppins;">Download Format Proposal</a>

                  <div class="flex justify-between items-center">

                  <h3><Strong>langkah Ketiga</Strong></h3>

                  <p class="color-contrast-medium">Upload File, Upload proposal anda untuk dikirim ke Dinas Pendidikan.</p>

                  <div class="flex justify-between items-center">




                    <h3><Strong>langkah Ke Empat</Strong></h3>

                    <p class="color-contrast-medium">Setelah anda upload proposal, anda akan mendapat balasan dari pihak Dinas Pendidikan diminta untuk revisi ataupun sudah diterima. Silahkan download kembali proposal anda jika mendapat revisi kemudian revisi .</p>

                    <div class="flex justify-between items-center">
                  <div class="cd-timeline__content text-component">
                    <h3><Strong>langkah Terakhir</Strong></h3>

                    <p class="color-contrast-medium"> File yang telah direvisi silahkan diupload ulang untuk mendapat evaluasi kembali oleh Dinas Pendidikan.</p>

                    <div class="flex justify-between items-center">


                    </div>
                  </div> <!-- cd-timeline__content -->
                </div> <!-- cd-timeline__block -->
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
