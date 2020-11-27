<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/check-login.css">
    <title>Online Meal</title>
    <style>
        .body{
           background-color: rgb(35,36,41);
        }
        .logout{
            position: relative;
        }
        .logout-btn{
            background: transparent; border: none; margin-left:8px; cursor: pointer; color: red;
        }
        .logout-content{
            display: none;
            padding: 5px;
            height: auto;
            margin: 3px auto;
            background: transparent;
            position: absolute;
            top: 18px; 
        }
        .logout-content a{
            background-color: red;
            border-radius: 20px;
            padding:  3px 10px;
        }
        .logout-content .mail{
            position: absolute;
            padding-top: 8px;
            left: -60px;
            color: red;
            font-weight: bold;
        }
        .show{
            display: block;
        }
    </style>
</head>
<body>
    <!-- <?php
   echo '
       <form action="../index.html" method="post">
           <input type="submit" value="Back to Registration Form">
       </form>
           ';
   ?> -->
    <!-- For check login email and password -->
    <?php
        $servername = "localhost";
        $username = "root";
        $connection_password = "";
        $database = "sketer";

        // Create connection
        $conn = mysqli_connect($servername, $username, $connection_password, $database);

        $sql= "SELECT sno,fname,lname,email,password FROM `form-data`";
        $result=mysqli_query($conn,$sql); 

        // for check number of row in table
        // echo "<br>"."Number of Row in Table are : ";
        // $cnt = mysqli_num_rows ( $result );
        // echo $cnt."<br>";

        $email = $_POST["email"]; 
        $password = $_POST["password"]; 
        $checkemailis=$checkpasswordis=$checksnois=$sno=$display_name=$display_surname="";
        
        if(isset($_POST["email"], $_POST["password"])) 
        {
            while($row=mysqli_fetch_assoc($result))
            {
                if($row['email'] == $email)
                {
                    $checkemailis++;
                    if($row['password'] == $password)
                    {
                        $checkpasswordis++;
                        $display_name=$row['fname'];
                        $display_surname=$row['lname'];
                    }
                    // else{
                    //     echo "Password is wrong";
                    // }
                }
            }
            session_start();
            $_SESSION['fname'] = $display_name;
            $_SESSION['lname'] = $display_surname;
            $_SESSION['email'] = $email;
            $_SESSION['password'] = $password;

            if($checkemailis > 0 && $checkpasswordis > 0)
            {
                echo '
                <!-- NAVIGATION BAR STARTED -->
                <div class="nav" id="home">
                    <div class="nav-logo animate__animated animate__heartBeat animate__infinite infinite"><img
                            src="../img/logo/logowithtext.png" alt="logo" width="180px"><label class="nav-logo-text"></label></div>
                    <nav>
                        <ul class="nav-links">
                            <li><a href="#">Home</a></li>
                            <li><a href="#services">Services</a></li>
                            <li><a href="#about">About</a></li>
                            <li><a href="#feedback">Feedback</a></li>
                        </ul>
                    </nav>
                    <div class="sign-btn logout" style="color: red;">
                        '.$display_name.'-'.$display_surname.'<button class="logout-btn" onclick="show_logout()">
                                    v
                                  </button>
                                    <div class="logout-content" id="logout-content">
                                        <div class="con">
                                            <a href="../index.html">Log out</a>
                                            <div class="mail"> '.$email.'</div>
                                        </div>
                                    </div>
                    </div>
                </div>

            
                <!-- NAVIGATION BAR COMPLETED -->
            
                <!-- FORM START -->
                <div class="signin-signup animate__pulse animate__delay-2s animate__slow" id="signin-signup">
                    <div class="main">
                        <form action="php/check-login.php" method="post" class="signin-form">
                            <div class="content">
                                <div class="form-heading"><span>LOGIN</span></div>
                                <input type="email" name="email" id="" placeholder="email id" class="input"> <br>
                                <input type="password" name="password" id="" placeholder="password" class="input"> <br>
                                <input type="submit" name="login" value="Login" class="btn-login">
                            </div>
                        </form>
                        <form action="php/Regestration.php" method="post">
                            <span></span>
                            <input type="hidden" name="count" value="1" id="">
                            <input type="submit" name="sign-up" value="Dont have Account Sign UP?" class="btn-signup">
                        </form>
                    </div>
                </div>
            
                <script>
                    function showform() {
                        document.getElementById("signin-signup").style.cssText = "display:block;";
                        document.getElementById("_containt").style.cssText = "display:none";
                        var element = document.getElementById("signin-signup");
                        element.classList.add("animate__pulse animate__delay-2s animate__slow");
                    }
                </script>
                <!-- FORM END -->
            
                <div class="_containt" id="_containt">
                    <!-- SLIDESHOW START -->
                    <div class="main">
                        <div class="slide-show">
                            <div class="myslide">
                                <div class="numbertext">1 / 4</div>
                                <img class="img" src="../img/slideshow/breakfast.jpg" style="width:100%">
                                <div class="text">Breakfast</div>
                            </div>
                            <div class="myslide">
                                <div class="numbertext">2 / 4</div>
                                <img class="img" src="../img/slideshow/lunch.jpg" style="width:100%">
                                <div class="text">Lunch</div>
                            </div>
                            <div class="myslide">
                                <div class="numbertext">3 / 4</div>
                                <img class="img" src="../img/slideshow/snacks.jpg" style="width:100%">
                                <div class="text">Snacks</div>
                            </div>
                            <div class="myslide">
                                <div class="numbertext">4 / 4</div>
                                <img class="img" src="../img/slideshow/dinner.jpg" style="width:100%">
                                <div class="text">Dinner</div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div style="text-align:center">
                        <span class="dot"></span>
                        <span class="dot"></span>
                        <span class="dot"></span>
                        <span class="dot"></span>
                    </div>
                    <!-- SLIDESHOW END -->
            
                    <!-- SERVICES START -->
                    <div class="services" id="services">
                        <div class="heading">
                            <label for="">Our Services</label>
                        </div>
                        <div class="services-card">
            
                            <div class="card">
                                <a href="pages/breakfast.php"><img src="../img/card/breakfast-card.jpg" alt="Image Not Found">
                                    <h2 class="card-text">Breakfast</h2>
                                </a>
                            </div>
                            <div class="card">
                                <a href="pages/lunch.php"><img src="../img/card/lunch-card.jpg" alt="Image Not Found">
                                    <h2 class="card-text">Lunch</h2>
                                </a>
                            </div>
            
                            <div class="card">
                                <a href="pages/snacks.html"><img src="../img/card/snacks-card.jpg" alt="Image Not Found">
                                    <h2 class="card-text">Snacks</h2>
                                </a>
                            </div>
                            <div class="card">
                                <a href="pages/dinner.html"><img src="../img/card/dinner-card.jpg" alt="Image Not Found">
                                    <h2 class="card-text">Dinner</h2>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- SERVICES END -->
            
                    <!-- ABOUT START -->
                    <div class="about" id="about">
                        <div class="heading">
                            <label for="">About</label>
                        </div>
                        <div class="about-content">
                            <div class="upper-text">
                                <p>The OnlineMeal was founded in year 2020 by sk Group in UP India, consectetur adipiscing elit, sed
                                    do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                    nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                <p><strong>The Chef?</strong> Mr. Unknown himself</p>
                                <p>We are proud of our interiors.</p>
                                <div class="chef">
                                    <img src="../img/chef.jpg" alt="" width="120px">
                                </div>
                            </div>
                            <div class="mid-image">
                                <img src="../img/restaurant.jpg" alt="">
                            </div>
                            <div class="lower-text">
            
                            </div>
                        </div>
                    </div>
                    <!-- ABOUT END -->
            
                    <!-- FEEDBACK START -->
                    <div class="feedback" id="feedback">
                        <div class="heading">
                            <label for="">Feedback</label>
                        </div>
                        <div class="form">
                            <form action="" method="post">
                                <label for="">Username</label>
                                <input type="text" name="username" class="form-input-text" placeholder="sketeramrit">
                                <label for="">Email</label>
                                <input type="email" name="email" class="form-input-text" placeholder="ksamrit121@gmail.com">
                                <label for="">Descriptrion</label>
                                <textarea name="description" id="" cols="20" rows="3" class="form-textarea"
                                    placeholder="Description"></textarea>
                                <input type="submit" value="Submit" class="form-submit">
                            </form>
                        </div>
                    </div>
                    <!-- FEEDBACK END -->
            
                    <!-- SCRIPT ARE HERE -->
                    <script>
                        var slideIndex = 0;
                        showSlides();
            
                        function showSlides() {
                            var i;
                            var slides = document.getElementsByClassName("myslide");
                            var dots = document.getElementsByClassName("dot");
                            for (i = 0; i < slides.length; i++) {
                                slides[i].style.display = "none";
                            }
                            slideIndex++;
                            if (slideIndex > slides.length) { slideIndex = 1 }
                            for (i = 0; i < dots.length; i++) {
                                dots[i].className = dots[i].className.replace(" active", "");
                            }
                            slides[slideIndex - 1].style.display = "block";
                            dots[slideIndex - 1].className += " active";
                            setTimeout(showSlides, 2000); // Change image every 2 seconds
                        }
                    </script>
                </div>
            
                <!-- FOOTER START -->
                <div class="home-selector" id="home-selector">
                    <p id="copyrightbysketeramrit">&copy; copyright 2020 by </p>
                    <label for="" class="contactus"><!-- <a href="pages/contactus.html"> -->
                        <i class="fa fa-comments-o" style="font-size:36px" onclick="footer_contactus()"><span class="span-text" id="span-text"><a href="mailto:ksamrit121@gmail.com" id="span-text-a">For Contact- Mail me</a></span></i>
                    </label>
                    <a href="#home" class="scroll-up"><i class="fa fa-arrow-circle-o-up" style="font-size:36px"></i></a>
                </div>
                <!-- FOOTER END -->
                <script>
                    document.getElementById("copyrightbysketeramrit").innerHTML = " &copy; copyright 2020 By sketeramrit";
                    function footer_contactus()
                    {
                        document.getElementById("span-text-a").style.cssText = "display: block;";
                    }
                </script>
                    ';
            }
            else if($checkemailis > 0 && $checkpasswordis == 0)
            {
                echo "Password Not Matched";
            }
            else{
                echo "user not found"."<br>"; echo "<a href='Regestration.php'>create new account</a>";
            }
        }
    ?>
    <script>
        // LOGOUT SCRIPT
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function show_logout() {
  document.getElementById("logout-content").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.logout-btn')) {
    var dropdowns = document.getElementsByClassName("logout-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }

//   FOOTER SCRIPT


}
</script>
</body>
</html>