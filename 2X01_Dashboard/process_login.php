<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <?php
    include "header.inc.php";
    ?>
    <body>    
        <?php
        include "nav.inc.php";
        ?> 

        <br><br>
        <main class="container" ><hr>
            <?php
            $email = $errorMsg = "";
            $fname = "";
            $lname = "";
            $success = true;
            $hashpass = "";

            if (empty($_POST["email"])) {
                $errorMsg .= "Email is required.<br>";
                $success = false;
            } else {
                $email = sanitize_input($_POST["email"]);
                // Additional check to make sure e-mail address is well-formed.    
                if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    $errorMsg .= "Invalid email format.<br>";
                    $success = false;
                }
            }

            if (empty($_POST["pwd"])) {
                $errorMsg .= "Password is required.<br>";
                $success = false;
            } else {
                $pwd = ($_POST["pwd"]);
            }

            //Helper function that checks input for malicious or unwanted content.
            function sanitize_input($data) {
                $data = trim($data);
                $data = stripslashes($data);
                $data = htmlspecialchars($data);
                return $data;
            }

            /*
             * Helper function to authenticate the login. 
             */

            function authenticateUser() {
                global $fname, $lname, $email, $hashpass, $errorMsg, $success;
                // Create database connection.    
                $config = parse_ini_file('../../private/db-config.ini');
                $conn = new mysqli($config['servername'], $config['username'],
                        $config['password'], $config['dbname']);
                // Check connection    
                if ($conn->connect_error) {
                    $errorMsg = "Connection failed: " . $conn->connect_error;
                    $success = false;
                } else {
                    // Prepare the statement:      
                    $stmt = $conn->prepare("SELECT * FROM world_of_pets_members WHERE email=?");
                    // Bind & execute the query statement:        
                    $stmt->bind_param("s", $email);
                    $stmt->execute();
                    $result = $stmt->get_result();
                    if ($result->num_rows > 0) {
                        // Note that email field is unique, so should only have    
                        // one row in the result set.           
                        $row = $result->fetch_assoc();
                        $fname = $row["fname"];
                        $lname = $row["lname"];
                        $hashpass = $row["password"];
                        // Check if the password matches:            
                        if (!password_verify($_POST["pwd"], $hashpass)) {
                            // Don't be too specific with the error message - hackers don't                
                            // need to know which one they got right or wrong. :)      
                            $errorMsg = "Email not found or password doesn't match...";
                            $success = false;
                        }
                    } else {
                        $errorMsg = "Email not found or password doesn't match...";
                        $success = false;
                    }
                    $stmt->close();
                }
                $conn->close();
            }

            authenticateUser();
            if ($success == true) {

                echo "<h1>Login successful!</h1>";
                echo "<p>Thank you for signing up, " . ucwords($fname) . " " . ucwords($lname) . ".";
                //echo "<p>" . $errorMsg . "</p>";
                //echo '<button id="logbtn" class="btn btn-primary" style="color:green;"><a href="index.php">Return to Home</a></button>';
                session_start();
                $_SESSION["name"] = $lname;
                header('Refresh: 0; URL=http://52.0.214.221/lab09/index.php');
                
            } else {
                
                echo "<h1>Oops!</h1>";
                echo "<h4>The following errors were detected:</h4>";
                echo "<p>" . $errorMsg . "</p>";
                echo '<button id="signbtn" class="btn btn-primary" style="color:yellow;"><a href="login.php">Return to Login</a></button>';
            }
            ?>

            <br><br>
        </main>
        <?php
        include "footer.inc.php";
        ?>
    </body>
</html>