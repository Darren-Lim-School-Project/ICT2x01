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
            $pass = "";
            
            $hashpass = "";


            if (empty($_POST["lname"])) {
                $errorMsg .= "Last name is required.<br>";
                $success = false;
            } else {
                $fname = $_POST["fname"];
                $lname = $_POST["lname"];
                if (preg_match('/^[1-9][0-9]{0,15}$/', $lname)) {
                    $errorMsg .= "Last name cannot contain numbers.<br>";
                    $success = false;
                }
            }

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
                $pass = $_POST["pwd"];
                $uppercase = preg_match('@[A-Z]@', $pass);
                $lowercase = preg_match('@[a-z]@', $pass);
                $number = preg_match('@[0-9]@', $pass);
                $specialChars = preg_match('@[^\w]@', $pass);
                if (!$uppercase || !$lowercase || !$number || !$specialChars || strlen($pass) < 8) {
                    $errorMsg .= "Password should be at least 8 characters in length and should include at least one upper case letter, one number, and one special character.<br>";
                    $success = false;
                } else {
                    if ($pass != $_POST["pwd_confirm"]) {
                        $errorMsg .= "Password does not match.<br>";
                        $success = false;
                    } else {
                        $hashpass = password_hash($pass, PASSWORD_DEFAULT);
                    }
                }
            }
            if (empty($_POST["pwd_confirm"])) {
                $errorMsg .= "Confirm Password is required.<br>";
                $success = false;
            }

            
            if ($success) {
                
                echo "<h1>Your registration is successful!</h1>";
                echo "<p>Thank you for signing up, " . ucwords($fname)." " . ucwords($lname) . ".";
                echo "<p></p>";
                echo '<button id="logbtn" class="btn btn-primary" style="color:red;"><a href="register.php">Return to Sign Up</a></button>';
                saveMemberToDB();
           
            } else {

                echo "<h1>Oops!</h1>";
                echo "<h4>The following input errors were detected:</h4>";
                echo "<p>" . $errorMsg . "</p>";
                echo '<button id="signbtn" class="btn btn-primary" style="color:red;"><a href="register.php">Return to Sign Up</a></button>';
            }

//Helper function that checks input for malicious or unwanted content.
            function sanitize_input($data) {
                $data = trim($data);
                $data = stripslashes($data);
                $data = htmlspecialchars($data);
                return $data;
            }
            /*             * Helper function to write the member data to the DB */
            function saveMemberToDB()
            { 
                global $fname, $lname, $email, $hashpass, $errorMsg, $success;   
                // Create database connection.    
                $config = parse_ini_file('../../private/db-config.ini');    
                $conn = new mysqli($config['servername'], $config['username'],           
                        $config['password'], $config['dbname']);    
                // Check connection    
                if ($conn->connect_error)    
                {        
                    $errorMsg = "Connection failed: " . $conn->connect_error;        
                    $success = false;    
                    
                }   
                else   
                {        
                    // Prepare the statement:       
                    $stmt = $conn->prepare("INSERT INTO world_of_pets_members (fname, lname, email, password) VALUES (?, ?, ?, ?)");       
                    // Bind & execute the query statement:        
                    $stmt->bind_param("ssss", $fname, $lname, $email, $hashpass);        
                    if (!$stmt->execute())        
                    {            
                        $errorMsg = "Execute failed: (" . $stmt->errno . ") " . $stmt->error;      
                        $success = false;        
                    }       
                    $stmt->close();    
                    }  
                    $conn->close();
                    } 
            ?>
            
            <br><br>
        </main>
            <?php
            include "footer.inc.php";
            ?>
    </body>
</html>