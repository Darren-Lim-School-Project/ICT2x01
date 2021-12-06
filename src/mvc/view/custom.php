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

<!-- Custom fonts for this template-->
<link href="../../../vendor/fontawesome-free/css/all.min.css" rel="stylesheet"
	type="text/css">
<link
	href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
	rel="stylesheet">

<!-- Custom styles for this template-->
<link href="css/sb-admin-2.min.css" rel="stylesheet">

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

				<div class="container-fluid py-4">

					<!-- Page Heading -->
					<h1 class="h3 mb-4 text-gray-800">Challenges</h1>

					<div class="row my-4">

						<!-- Container for map design -->
						<div class="col-lg-4">
							<div class="card h-100">
								<div class="card-header py-3">
									<h6 class="m-0 font-weight-bold text-primary">How to upload custom challenges</h6>
								</div>
								<div class="card-body p-3">
								
								<ol>
									<li> Head to <a href="https://craftdesignonline.com/pattern-grid/">https://craftdesignonline.com/pattern-grid/</a></li>
									<li> Zoom in until its a 10x10 grid using the magnifying glass</li>
									<li> Draw a path from start to end</li>
										<ul>
											<li>Start: grid (4,1)</li>
											<li>End: grid (4,10)</li>
										</ul>
									<li> Take a screenshot of the challenge that you have created (should be a square image)</li>
									<li> Upload the .png or .jpg image</li>
									<li> Click upload</li>
									<li> Have fun!</li>
								</ol>

								</div>
							</div>
						</div>

						<div class="col-lg-8">
							<div class="card h-100">
								<div class="card-header py-3">
									<h6 class="m-0 font-weight-bold text-primary">Upload challenges here!</h6>
								</div>
								<div class="card-body p-3">
									
                                    <form action="upload.php" method="post" enctype="multipart/form-data">
                                    	<input type="file" name="the_file" id="fileToUpload">
                                    	<input type="submit" name="submit" value="Upload!">
                                    </form>

								</div>
							</div>
						</div>
					</div>

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

	<!-- Logout Modal-->
	<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog"
		aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
					<button class="close" type="button" data-dismiss="modal"
						aria-label="Close">
						<span aria-hidden="true">×</span>
					</button>
				</div>
				<div class="modal-body">Select "Logout" below if you are ready to
					end your current session.</div>
				<div class="modal-footer">
					<button class="btn btn-secondary" type="button"
						data-dismiss="modal">Cancel</button>
					<a class="btn btn-primary" href="login.html">Logout</a>
				</div>
			</div>
		</div>
	</div>

	<!-- Bootstrap core JavaScript-->
	<script src="../../../vendor/jquery/jquery.min.js"></script>
	<script src="../../../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

	<!-- Core plugin JavaScript-->
	<script src="../../../vendor/jquery-easing/jquery.easing.min.js"></script>

	<!-- Custom scripts for all pages-->
	<script src="js/sb-admin-2.min.js"></script>

</body>

</html>