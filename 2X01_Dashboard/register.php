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
        <main class="container">        
            <h1>Member Registration</h1>        
            <p>            
                For existing members, please go to the            
                <a href="login.php">Sign In page</a>.        
            </p>        
            <form action="process_register.php" method="post">    
                <div class="form-group">       
                    <label for="fname">First Name:</label>        
                    <input class="form-control" type="text" id="fname"               
                            maxlength="45" name="fname" placeholder="Enter first name">    
                </div>    
                <div class="form-group">        
                    <label for="lname">Last Name:</label>        
                    <input class="form-control" type="text" id="lname"               
                           maxlength="45" name="lname" required="" placeholder="Enter last name">    
                </div>    <div class="form-group">        
                    <label for="email">Email:</label>        
                    <input class="form-control" type="email" id="email"               
                           maxlength="45" name="email" required="" placeholder="Enter email" type="email">    
                </div>    <div class="form-group">        
                    <label for="pwd">Password:</label>        
                    <input class="form-control" type="password" id="pwd"               
                           name="pwd" placeholder="Enter password" type="password" required="">    
                </div>    
                <div class="form-group">        
                    <label for="pwd_confirm">Confirm Password:</label>         
                    <input class="form-control" type="password" id="pwd_confirm"     
                           name="pwd_confirm" placeholder="Confirm password" type="password" required="">   
                </div>    
                <div class="form-check">        
                    <label>            
                        <input type="checkbox" name="agree" required=""> Agree to terms and conditions.
                    </label>    
                </div>    
                <div class="form-group">        
                    <button class="btn btn-primary" type="submit">Submit</button>    
                </div>
            </form>    
        </main>    
        <?php
        include "footer.inc.php";
        ?>
    </body>
</html>
