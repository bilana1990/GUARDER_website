<!doctype html>
<html>
    <head>
        <title>GUARDER</title>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="responsive.css">

        <meta charset="UTF-8">
        <meta name="description" content="Free Web tutorials">
        <meta name="keywords" content="HTML, CSS, JavaScript">
        <meta name="author" content="Gio Bilana">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    </head>
    <body>
       <?php include 'backend.php';  ?>
        <header>
            <div class="headerdiv">
                <a href="#"><i class='fas fa-map-marker-alt' id="location"></i>  Lorem ipsum dolor sit amet,</a>
                <a href="tel:+01 1234567890"><i class='fas fa-phone-alt' id="telepone"></i>  Call : +01 1234567890</a>
                <a href="mailto:demo@gmail.com"><i class="fa fa-envelope" id="envelope"></i>  demo@gmail.com</a>
            </div>
            <div class="blackbackground"></div>
            <div class="headerdiv2">
                <h1><a href="index.php">Guarder</a></h1>
            <nav>
                <a href="#" class="home">HOME</a>
                <a href="#" class="about">ABOUT</a>
                <a href="#" class="services">SERVICES</a>
                <a href="#" class="guards">GUARDS</a>
                <a href="#" class="contactus">CONTACT US</a>
            </nav>

            <div class="headerdiv3">
                    <h2>YOUR SAFTEY<br>
                    <span>OUR RESPONSIBILITY</span></h2>
                    <br>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing<br> elit, sed do eiusmod magna aliqua. Ut enim ad minim veniam</p>
                    <br>
                    <br>
                    <button class="btn1">Read more</button>
                    <button class="btn2">GET A QUOTE</button>
                    
            </div>

            <div class="headerdiv4">
                    <h2>YOUR SAFTEY<br>
                    <span>OUR RESPONSIBILITY</span></h2>
                    <br>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing<br> elit, sed do eiusmod magna aliqua. Ut enim ad minim veniam</p>
                    <br>
                    <br>
                    <button class="btn1">Read more</button>
                    <button class="btn2">GET A QUOTE</button>
                    
                    
            </div>
            <div class="yellowbtns">
                    <button class="yellowbtn1" onclick="changediv()"></button>
                    <button class="yellowbtn2" onclick="changediv()"></button>
                    
            </div>
            </div>
            
        </header>



        <section class="who_are_we">
            <img src="img/about-img.jpg" alt="">
            <div id="who_are_we">
                <h2>WHO ARE WE?</h2>
                <hr>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                     incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                      exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
                       dolor in reprehenderit in voluptate velit</p>
                <button>READ MORE</button>
            </div>
        </section>


        <section class="our_services">
            <h2>OUR SERVICES</h2>
            <hr>           
<div class="allservices">
    <?php
        foreach ($services as $service){
            echo '<div class="home_security">
            <img src="'. $service['icon'].'" alt="">
            <h2>'. $service['title'].'</h2>
            <p>Minima consequatur architecto eaque assumenda ipsam itaque quia eum in doloribus debitis impedit ut minus tenetur corrupti excepturi ullam.</p>
            <button>READ MORE</button>
        </div>';
        }
    ?>
</div>      
        </section>
   

 <section class="WHAT_IS_SAYS_OUR_CLIENTS">
    <h2>WHAT IS SAYS OUR CLIENTS</h2>
    <hr>
    <i style='font-size:24px' class='fas' onclick="leftarrow()">&#xf104;</i>
    <i style='font-size:24px' class='fas' id="rightarrow" onclick="rightarrow()">&#xf105;</i>
    <div class="client">
        <img src="img/client.png" alt="">
        <h3>Minim Veniam</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore<br>
             et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip</p>
    </div>
    <div class="client2">
        <img src="img/client.png" alt="">
        <h3>Minim Veniam</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore<br>
             et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip</p>
    </div>
 </section>

 <section class="GET_IN_TOUCH">
    <h2>GET IN TOUCH</h2>
    <hr>
    <form action="backend.php" method="post">
        <input type="text" id="fullname" name="fullname" placeholder="Full Name">
        <input type="text" id="email" name="email" placeholder="Email">
        <input type="text" id="phonenumber" name="phonenumber" placeholder="Phone Number">
        <input type="text" id="message" name="message" placeholder="Message">
        <input type="submit" id="send" name="send" value="SEND">
    </form>
    
 </section>

 <section class="OUR_GUARDS">
    <h2>OUR GUARDS</h2>
    <hr>
    <p>Lorem ipsum dolor sit amet, non odio tincidunt ut ante, lorem a euismod<br> suspendisse vel, sed quam nulla mauris iaculis. Erat eget vitae malesuada, tortor tincidunt porta lorem lectus.</p>
    <div class="guarderimgs">
        <img src="img/t1.jpg" alt="">
        <img src="img/t2.jpg" alt="">
        <img src="img/t3.jpg" alt="">
    </div>
    <button>View All</button>
 </section>


 <footer>
    <div class="footerguarder">
        <h2><a href="index.html">Guarder</a></h2>
        <p>dolor sit amet, consectetur<br> magna aliqua. Ut enim ad<br> minim veniam, quisdotempor<br> incididunt r</p>
    </div>

    <div class="footerUsefulLink">
        <h2>Useful Link</h2>
        <p>dolor sit amet, consectetur<br> magna aliqua. Ut enim ad<br> minim veniam, quisdotempor<br> incididunt r</p>
    </div>

    <div class="ContactUs">
        <h2>Contuct Us</h2>
        <div class="ContactUsdiv">
        <a href="#"><i class='fas fa-map-marker-alt'></i>  Lorem ipsum dolor sit amet,</a>
        <a href="tel:+01 1234567890"><i class='fas fa-phone-alt'></i>  Call : +01 1234567890</a>
        <a href="mailto:demo@gmail.com"><i class="fa fa-envelope"></i>  demo@gmail.com</a>
        </div>
    </div>

    <div class="Newsletter">
        <h2>Newsletter</h2>
    
        <input type="text" id="email" name="email" placeholder="Enter Your Email">
        <button>SUBSCRIBE</button>
    
    </div>

    <div class="socialmediaicons">
        <a href="#"><i style='font-size:24px' class='fab'>&#xf39e;</i></a>
        <a href="#"><i style='font-size:24px' class='fab'>&#xf099;</i></a>
        <a href="#"><i style="font-size:24px" class="fa">&#xf16a;</i></a>
        <a href="#"><i style='font-size:24px' class='fab'>&#xf16d;</i></a>
    </div>
    <p class="lastp">© 2023 All Rights Reserved. Design by Free Html Templates</p>
 </footer>

 












        <script>
            function changediv(){
                var headerdiv4=document.querySelector(".headerdiv4")
                var headerdiv3=document.querySelector(".headerdiv3")
                headerdiv4.classList.toggle("active")
                headerdiv3.classList.toggle("active")
            }
            setInterval(changediv, 2000);



           function leftarrow(){
            var client=document.querySelector(".client")
            var client2=document.querySelector(".client2")
            client.classList.toggle("active")
            client2.classList.toggle("active")
           }
          setInterval( leftarrow,1000);
          
           
        </script>

                
       
    </body>
</html>