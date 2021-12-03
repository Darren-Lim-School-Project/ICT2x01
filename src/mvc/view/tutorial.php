<?php
include '../../processors/session.process.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>

<?php
include '../../../includes/head.php';
?>

<title>IR-Acer - Tutorial</title>
</head>
<style>
    /*CSS*/
    video {
        width: 100%;
        max-height: 100%;
    }
</style>
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
                    <h1 class="h3 mb-4 text-gray-800">Tutorial</h1>

                    <!-- Basic Card Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">How To Play IR-Acer</h6>
                        </div>
                        <div class="card-body">
                            <h3>Objective:</h3>
                            <p>With the rise of the digital age, people are more connected than they ever have been. Children as young as primary school students are able to use social media and internet services through their personal smartphones. Schools are also looking towards using smart-devices to help cultivate their learning.
                                To further support schools in their efforts, this project aims to instil logical thinking and problem-solving skills amongst the younger generation by creating a fun and interactive toy that these children can use.
                                IR-Acer is a three-wheel robot-car that is made for children above the age of 5-6 to get involved in the world of programmable robots. This robot will exercise their logical and problem-solving skills in a fun and creative manner by demonstrating how instructions (code blocks) can interact with the robot car.
                                Children can set up obstacles and learn how to program a route, which will allow them to visualise the path needed for the robot to traverse and reach its end goal. IR-Acer will allow children to nurture their problem-solving skills and get instant feedback on whether their pre-programmed routes work or not.
                                Controlling IR-Acer’s movement can be done in real time or can be pre-programmed through the web UI. The web UI will also be able to display robot system information.</p>
                            <hr>
                            <video width="1280" height="720" controls>
                                <source src="#" type="video/mp4">
                            </video>
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
    include "../../../includes/javascriptSrc.php";
    ?>

</body>

</html>