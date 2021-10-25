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
            
            session_start();
            unset($_SESSION["name"]);
            echo "<h3>Logout successful!</h3>";
            header('Refresh: 1; URL=http://52.0.214.221/lab09/index.php');
            ?>

            <br><br>
        </main>
        <?php
        include "footer.inc.php";
        ?>
    </body>
</html>