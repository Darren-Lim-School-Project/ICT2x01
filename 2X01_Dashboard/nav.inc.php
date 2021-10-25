<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
    <a class="navbar-brand" href="index.php">
                <!-- <a href="index.php">Home</a>

            <!-- collapse button for bootstrap -->
           <!-- <button class="navbar-toggler" type="button" data-toggle="collapse" 
                    data-target="#navbarToggler" 
                    aria-controls="navbarToggler" 
                    aria-expanded="false" 
                    aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- for the link to follow the bar -->
            <!--<div class="collapse navbar-collapse" id="navbarToggler"> -->

                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php#dogs">Dogs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php#cats">Cats</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="register.php">Register</a>
                    </li>
                </ul>
                <ul class="navbar-nav ml-auto">
                    <?php
                    session_start();
                    if ($_SESSION["name"]) {
                        ?>
                    <a class="nav-link" id="seshname"><?php echo ucwords($_SESSION["name"]);?></a>
                        <li class="nav-item">
                            <a class="nav-link" title="Logout" href="process_logout.php">
                                <span class ="material-icons md-light" style="font-size:2em">login</span></a>
                        </li>
                        <?php
                    } else {
                        ?>
                        <li class="nav-item">
                            <a class="nav-link" title="Account" href="login.php">
                                <span class ="material-icons md-light" style="font-size:2em">account_circle</span></a>
                        </li>
                        <?php } ?>
                </ul>
                <!-- login button -->

          <!--  </div> -->
</nav>