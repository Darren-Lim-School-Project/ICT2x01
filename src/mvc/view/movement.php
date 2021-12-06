<?php
include '../../processors/session.process.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>

<?php
include '../../../includes/head.php';
?>

<title>IR-Acer - Leaderboard</title>


</head>

<body id="page-top">

	<!-- Page Wrapper -->
	<div id="wrapper">

<?php
include '../../../includes/sidebar.php';
?>

        <!-- Content Wrapper -->
		<div id="content-wrapper" class="d-flex flex-column">

			<!-- Main Content -->
			<div id="content">

                <!-- navbar -->
                <?php
                include '../../../includes/nav.php';
                ?>
                <!-- End of navbar -->

				<!-- Begin Page Content -->
				<div class="container-fluid">

					<!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Controller</h1>
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Control Movement</h6>
                        </div>
                        <div class="card-body">
                        <button id="l" class="direction">Arrow Left</button>
                        <button id="r" class="direction">Arrow Right</button>
                        <button id="f" class="direction">Arrow Up</button>
                        <button id="b" class="direction">Arrow Down</button>
                        <script src="../../../js/jquery.min.js"></script>
                        <script type="text/javascript">
                          $(document).ready(function() {
                            $(".direction").click(function() {
                              var d = $(this).attr('id');
                              $.get("http://192.168.1.142:8000/", {pin:d});
                            });
                          });
                        </script>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

			</div>
			<!-- End of Main Content -->

			<!-- Footer -->
<?php
include '../../../includes/footer.php';
?>
			<!-- End of Footer -->

		</div>
		<!-- End of Content Wrapper -->

	</div>
	<!-- End of Page Wrapper -->

	<!-- Scroll to Top Button-->
	<a class="scroll-to-top rounded" href="#page-top"> <i
		class="fas fa-angle-up"></i>
	</a>

    <!-- Bootstrap core JavaScript-->
    <script src="../../../vendor/jquery/jquery.min.js"></script>
    <script src="../../../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../../../vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../../../js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="../../../vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="../../../vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="../../../js/demo/datatables-demo.js"></script>

</body>

</html>