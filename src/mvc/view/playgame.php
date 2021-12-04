<?php
include '../../processors/session.process.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>

<?php
include '../../../includes/head.php';
?>

<title>IR-Acer - Play Game</title>

<!-- Custom fonts for this template-->
<link href="../../../vendor/fontawesome-free/css/all.min.css" rel="stylesheet"
      type="text/css">
<link
	href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
	rel="stylesheet">

<!-- Custom styles for this template-->
<link href="../../../css/sb-admin-2.min.css" rel="stylesheet">

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
					<h1 class="h3 mb-4 text-gray-800">Play Game!</h1>

					<!-- Basic Card Example -->
					<div class="card shadow mb-4">
						<div class="card-header py-3">
							<h6 class="m-0 font-weight-bold text-primary">Select your
								Difficulty!</h6>
						</div>
						<div class="card-body">

							<a href="challenges.php?difficulty=easy" class="btn btn-success btn-icon-split"> <span
								class="text">Easy</span>
							</a> <a href="challenges.php?difficulty=medium" class="btn btn-primary btn-icon-split"> <span
								class="text">Medium</span>
							</a> <a href="challenges.php?difficulty=hard" class="btn btn-danger btn-icon-split"> <span
								class="text">Hard</span>
							</a>

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
    <?php
    include '../../../includes/javascriptSrc.php';
    ?>

</body>

</html>