<?php
$difficulty = $_GET['difficulty'];

// Here by default (won't ever be 'hit' cos if not one of the 3, will redirect)
$dir_path = 'assets/img/challenges/easy/';

if ($difficulty == 'easy') {
    $dir_path = 'assets/img/challenges/easy';
} elseif ($difficulty == 'medium') {
    $dir_path = 'assets/img/challenges/medium';
} elseif ($difficulty == 'hard') {
    $dir_path = 'assets/img/challenges/hard';
} else {
    header("Location: playgame.php");
    exit();
}

// echo $dir_path;

?>

<!DOCTYPE html>
<html lang="en">

<head>

<?php
include './common_resources/head.php';
?>

<title>IR-Acer Challenges</title>

</head>

<body id="page-top" onload="start()">

	<!-- Page Wrapper -->
	<div id="wrapper">

		<?php
include './common_resources/sidebar.php';
?>

		<!-- Content Wrapper -->
		<div id="content-wrapper" class="d-flex flex-column">

			<!-- Main Content -->
			<div id="content">

				<!-- navbar -->
                <?php
                include './common_resources/nav.php';
                ?>
                <!-- End of navbar -->

				<div class="container-fluid py-4">

					<!-- Page Heading -->
					<h1 class="h3 mb-4 text-gray-800">Challenges</h1>

					<div class="row my-4">

						<!-- Container for map design -->
						<div class="col-lg-4">
							<div class="card">
								<div class="card-header pb-0">
									<div class="row">
										<div class="col-lg-4 col-7">
											<h6>Map</h6>
										</div>
									</div>
								</div>
								<div class="card-body px-0 pb-2 text-center">
								
								<?php getRandomImage($dir_path); ?>
<!-- 									<img src="../assets/img/ChallengeDesign.png" -->
									<!-- 										alt="Challenge Map" class="img-fluid border-radius-lg"> -->

								</div>
							</div>
						</div>

						<div class="col-lg-8">
							<div class="card h-100">
								<div class="card-header pb-0">
									<h6>Commands</h6>
								</div>
								<div class="card-body p-3">
									<div id="blocklyDiv" style="height: 480px; width: 690px;"></div>
									<xml id="toolbox-categories" style="display: none"> <!-- Control Category -->
									<category name="Movement" categorystyle="list_category"> <block
										type="forward"></block> <block type="left"></block> <block
										type="right"></block> </block> </category> <!-- Loop Category -->
									<category name="Loops" categorystyle="loop_category"> <block
										type="controls_repeat_ext"> <value name="TIMES"> <shadow
										type="math_number"> <field name="NUM">5</field> </shadow> </value>
									</block> <block type="controls_whileUntil"></block> <block
										type="controls_for"> <value name="FROM"> <shadow
										type="math_number"> <field name="NUM">1</field> </shadow> </value>
									<value name="TO"> <shadow type="math_number"> <field name="NUM">10</field>
									</shadow> </value> <value name="BY"> <shadow type="math_number">
									<field name="NUM">1</field> </shadow> </value> </block> <!-- <block type="controls_forEach"></block> -->
									<block type="controls_flow_statements"></block> </category> </xml>
									<br>
									<button type="button" class="btn btn-outline-primary"
										onclick="showCode()">Send Commands</button>

								</div>
							</div>
						</div>
					</div>

				</div>
				<!-- End of Main Content -->

				<!-- Footer -->
				<?php
    include './common_resources/footer.php';
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
		<script src="vendor/jquery/jquery.min.js"></script>
		<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

		<!-- Core plugin JavaScript-->
		<script src="vendor/jquery-easing/jquery.easing.min.js"></script>

		<!-- Custom scripts for all pages-->
		<script src="js/sb-admin-2.min.js"></script>

		<!-- Blockly javascript -->
		<script src="https://unpkg.com/blockly/blockly.min.js"></script>
		<!-- <script src="https://unpkg.com/@blockly/dev-tools@2.0.0/dist/index.js"></script> -->
		<script src="../assets/js/blockly/index.js"></script>
		<script src="../assets/js/blockly/javascript_compressed.js"></script>
		<!-- End of Blockly javascript -->

		<script src="../assets/js/core/popper.min.js"></script>
		<script src="../assets/js/core/bootstrap.min.js"></script>
		<script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
		<script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
		<script src="../assets/js/plugins/chartjs.min.js"></script>
<!-- 	This script will get the generated code after using blockly	 -->
		<script>
            // Move forward block return
            Blockly.JavaScript['forward'] = function(block) {
              var code = "moveForward()\n";
              return code;
            };
        
            // turn left block return
            Blockly.JavaScript['left'] = function(block) {
              var code = "turnLeft()\n";
              return code;
            };
        
            // turn right block return
            Blockly.JavaScript['right'] = function(block) {
              var code = "turnRight()\n";
              return code;
            };
		</script>
		<!-- Github buttons -->
		<script async defer src="https://buttons.github.io/buttons.js"></script>
		<!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
		<script src="../assets/js/soft-ui-dashboard.min.js?v=1.0.3"></script>

<?php
function getRandomImage($dir_path = NULL){
    
//     echo "param => " . $dir_path;
    if(!empty($dir_path)){
        $files = scandir($dir_path);
        $count = count($files);
        if($count > 2){
            $index = rand(2, ($count-1));
            $filename = $files[$index];
            if (strpos($filename, 'jpeg') !== false) {
                echo '<img src="'.$dir_path."/".$filename.'" alt="'.$filename.'" class="img-fluid border-radius-lg" id="challenge_image">';
            } else {
                getRandomImage($dir_path);
            }
        } else {
            return "The directory is empty!";
        }
    } else {
        return "Please enter valid path to image directory!";
    }
}
?>

</body>

</html>