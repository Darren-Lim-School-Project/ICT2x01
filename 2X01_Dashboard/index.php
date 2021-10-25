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
        include 'nav.inc.php';
        ?>
        <!--</div>-->
        <header class="jumbotron text-center">    
            <h1 class="display-4">IR-Acer Dashboard</h1>    
            <h2>Instilling Logical Thinking in Youths</h2>
        </header>
        <main class="container">

            <section id="dogs">
                <h2 id="aa">All About Dogs!</h2> 
                <div class="row">
                    <article class="col-sm">                
                        <h3>Poodles</h3>  
                        <figure>
                            <img src="images/poodle_small.jpg" alt="Poodle" title="View larger image..." class="img-thumbnail"  />

                            <figcaption id="poo">Standard Poodle</figcaption>
                        </figure>
                        <p>Poodles are a group of formal dog breeds, the Standard Poodle, Miniature Poodle and Toy Poodle...</p>            
                    </article>            
                    <article class="col-sm">                
                        <h3>Chihuahua</h3>  
                        <figure>            
                            <img src="images/chihuahua_small.jpg" alt="Poodle" title="View larger image..." class="img-thumbnail" />   

                            <figcaption id="chi">Chihuahua</figcaption>
                        </figure>
                        <p>The Chihuahua is the smallest breed of dog, and is named after the Mexican state of Chihuahua...</p>            
                    </article> 
                </div>
            </section>    
            <section id="cats">
                <h2 id="aa">All About Cats!</h2>  
                <div class="row">
                    <article class="col-sm">                
                        <h3>Tabby</h3> 
                        <figure>       
                            <img src="images/tabby_small.jpg" alt="Poodle" title="View larger image..." class="img-mouseover" /> 

                            <figcaption id="tab">Tabby Cat</figcaption>
                        </figure>
                        <p>A tabby is any domestic cat with an "M" on it's forehead, stripes by it's eyes and across it's cheeks.</p>            
                    </article>            
                    <article class="col-sm">                
                        <h3>Calico</h3>  
                        <figure>    
                            <img src="images/calico_small.jpg" alt="Poodle" title="View larger image..." class="img-mouseover"/>   

                            <figcaption id="cc">Calico Cat</figcaption>
                        </figure>
                        <p>A calico is any domestic cat with a coat that is typically 25% to 75% white and has large orange and black patches.</p>            
                    </article>     
                </div>
            </section>    
        </main>
        <?php
        include 'footer.inc.php';
        ?>
    </body>
</html>
