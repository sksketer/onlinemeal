<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/check-login.css">
    <link rel="stylesheet" href="../css/page.css">
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

        session_start();
        $fname = $_SESSION['fname'];
        $lname = $_SESSION['lname'];
        $email = $_SESSION['email'];
                    
        ?>
        <!-- NAVIGATION BAR STARTED -->
            <div class="nav" id="home">
                <div class="nav-logo animate__animated animate__heartBeat animate__infinite infinite">
                    <img src="../../img/logo/logowithtext.png" alt="logo" width="180px">
                </div>
                <nav>
                    <ul class="nav-links">
                        <li><a href="../index.php">Home</a></li>
                        <li><a href="#feedback" onclick="showfeedbackform()">Feedback</a></li> 
                    </ul>
                </nav>
                <div class="sign-btn logout" style="color: red;">
                    <?php echo $fname;?>-<?php echo $lname;?>
                        <button class="logout-btn" onclick="show_logout()"> v </button>
                            <div class="logout-content" id="logout-content">
                                <div class="con">
                                    <a href="../../index.html">Log out</a>
                                    <div class="mail"> <?php echo $email; ?></div>
                                </div>
                            </div>
                </div>
            </div>
        <!-- NAVIGATION BAR COMPLETED -->

    <script>
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
        }
    </script>
</body>
</html>