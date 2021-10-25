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
            <h1>Administrator Login</h1>        
            <!--<p>            
                Existing members, log in here. For new members, please go to the            
                <a href="register.php">Sign In page</a>.        
            </p>   -->     
            <form action="process_login.php" method="post">    
                <div class="form-group">        
                    <label for="admin">Email:</label>        
                    <input class="form-control" type="text" id="email"               
                           maxlength="45" name="admin" required="" placeholder="ADMIN" type="text" value="ADMIN">    
                </div>    <div class="form-group">        
                    <label for="pwd">Password:</label>        
                    <input class="form-control" type="password" id="pwd"               
                           name="pwd" placeholder="Enter password that is found on the sticker of the IR-Acer" required>    
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
