<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="shortcut icon" href="img/logo/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="../css/style.css">
    <title>Sign up</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat&display=swap');

*{
    box-sizing: border-box;
    margin: 0;
    padding: 0;
    scroll-behavior: smooth;
    transition: all 0.3s ease 0s;
    font-family: 'Montserrat', sans-serif;
    font-weight: 500;
    font-size: 16px;
    color: #edf0f1;
    text-decoration: none;
}
body{
    background-color: rgb(35,36,41);
}
li, a, button, .slide-show-absolute-text{
    font-family: 'Montserrat', sans-serif;
    font-weight: 500;
    font-size: 16px;
    color: #edf0f1;
    text-decoration: none;
}
.nav{
    display: flex;
    justify-content: flex-end;
    align-items: center;
    padding: 30px 5%;
    background-color: rgb(24, 25, 29);
}
.nav-logo {
    cursor: pointer;
    margin-right: auto;
}
.nav-links{
    list-style: none;
}
.nav-links li{
    display: inline-block;
    padding: 0px 20px;
}
.nav-links li a{
    transition: all 0.3s ease 0s;
}
.nav-links li a:hover{
    color: red;
    border-bottom: 2px solid red;
    /* color: #0088a9; */
}
.form-cta, .cta button{
    padding: 9px 25px;
    background-color: rgb(255, 0, 0);
    border: none;
    border-radius: 50px;
    cursor: pointer;
    margin: 0px 2px 0px 2px;
}
.form-cta:hover, .cta button:hover{
    background-color: rgba(255, 0, 0, 0.863);
    /* background-color: rgba(0,136, 169, 0.8); */
}
/* NAVIGATION BAR END */

/* MAIN START */
        .info{
            text-align: center;
            align-items: center;
            margin: 10px auto;
        }
        .info label{
            color: red;
        }
        .table {
            margin: auto;
            border: 2px solid black;
            padding: 5px;
            background-color: gray;
        }

        .table tr,
        .table td {
            border: 1px solid black;
            padding: 8px;
        }

        form .table tr td label {
            float: right;
        }

        form .table tr input{
            padding: 3px;
            color:black;
            background: transparent;
            border: none;
            border-bottom: 2px solid black;
            border-radius: 20px;

        }
        form .table tr input:hover{
            background-color: white;
            box-shadow: 1px 2px 3px black;
        }

        .c-red {
            color: red;
        }
/* MAIN END */

/* FOOTER START */
.home-selector{
    background-color: rgb(24, 25, 29);
    margin-top: 10px;
    width: 100%;
    height: 100px;
}
.home-selector p{
    color: white;
    padding-top: 20px;
    text-align: center;
}
.home-selector label {
    float: left;
    margin: 0px 0px 2px 20px;
    transition: all 0.3s ease 0s;
}
.home-selector label a i span{
    font-size: medium;
    padding: 2px;
    display: none;
}
.home-selector a{
    float: right;
    padding: 0px 20px 2px 0px;
    
}
/* FOOTER END */
    </style>
</head>
<body>
    <!-- REFRESH THE PAGE -->
    <?php
        if(isset($_POST['sign-up']))
        {
            $count=$_POST['count'];
            while($count==1)
            {
                header("refresh:1,url=Regestration.php");
                $count=0;
            }
        }
        else{}
    ?>
    <!-- // -->

    <!-- NAVIGATION BAR STARTED -->
    <div class="nav" id="home">
        <div class="nav-logo animate__animated animate__heartBeat animate__infinite infinite"><img
                src="../img/logo/logowithtext.png" alt="logo" width="180px"><label class="nav-logo-text"></label></div>
        <nav>
            <ul class="nav-links">
                <li><a href="../index.html">Home</a></li>
                <li><a href="#feedback">Feedback</a></li>
            </ul>
        </nav>
        <div class="sign-btn">
            <a href="#" class="cta"><button onclick="showform()">Sign in</button></a>
        </div>
    </div>
    <!-- FORM START -->
    <div class="signin-signup animate__pulse animate__delay-2s animate__slow" id="signin-signup">
        <div class="main">
            <form action="check-login.php" method="post" class="signin-form">
                <div class="content">
                    <div class="form-heading"><span>LOGIN</span></div>
                    <input type="email" name="email" id="" placeholder="email id" class="input"> <br>
                    <input type="password" name="password" id="" placeholder="password" class="input"> <br>
                    <input type="submit" name="login" value="Login" class="btn-login">
                </div>
            </form>
            <form action="Regestration.php" method="post">
                <span></span>
                <input type="hidden" name="count" value="1" id="">
                <input type="submit" name="sign-up" value="Don't have Account Sign UP?" class="btn-signup">
            </form>
        </div>
    </div>

    <script>
        function showform() {
            document.getElementById('signin-signup').style.cssText = 'display:block;';
            document.getElementById('_containt').style.cssText = 'display:none';
            var element = document.getElementById('signin-signup');
            element.classList.add("animate__pulse animate__delay-2s animate__slow");
        }
    </script>
    <!-- FORM END -->
    <!-- NAVIGATION BAR COMPLETED -->

    <div class="_containt" id="_containt">
    <!-- MAIN START -->
    <?php
        $fname=$lname=$email=$password=$cpassword=$dob=$gender="";
        $fname_err=$lname_err=$email_err=$password_err=$cpassword_err=$dob_err=$gender_err="";
        $cpassword_status="";
        if($_SERVER["REQUEST_METHOD"]=="POST")
        {
            if(empty($_POST['fname']))
		    {
		    	$fname_err="Required Field";
		    }
		    else
		    {
		    	$fname=$_POST['fname'];
            }
            if(empty($_POST['lname']))
		    {
		    	$lname_err=" I SK";
		    }
		    else
		    {
		    	$lname=$_POST['lname'];
            }
            if(empty($_POST['email']))
		    {
		    	$email_err="valid Email is Required";
		    }
		    else
		    {
		    	$email=$_POST['email'];
            }
            if(empty($_POST['password']))
		    {
		    	$password_err="Password Required";
		    }
		    else
		    {
                $password=$_POST['password'];
            }
            if(empty($_POST['cpassword']))
		    {
		    	$cpassword_err="Password Not Matched";
		    }
		    else
		    {
		    	$cpassword=$_POST['cpassword'];
            }
            if(empty($_POST['dob']))
		    {
		    	$dob_err="Required Field";
		    }
		    else
		    {
		    	$dob=$_POST['dob'];
            }
            if(empty($_POST['gender']))
		    {
		    	$gender_err="Choose Gender";
		    }
		    else
		    {
		    	$gender=$_POST['gender'];
            }
            
        }
    ?>
    <div class="main2" id="main2">
        <div class="info"><label>* means compulsary</label></div>
        <form action="" method="post" class="form">
            <table class="table">
                <tr>
                    <td><label for="">First Name<span class="c-red">*</span></label></td>
                    <td> <input type="text" name="fname" id=""><span class="c-red"> <?php echo "$fname_err";?></span> </td>
                </tr>
                <tr>
                    <td> <label for="">Last Name</label> </td>
                    <td> <input type="text" name="lname" id=""> <span class="c-red"> <?php echo " ";?></span></td>
                </tr>
                <tr>
                    <td> <label for="">Email<span class="c-red">*</span></label></td>
                    <td> <input type="email" name="email" id=""><span class="c-red"> <?php echo "$email_err";?></span></td>
                </tr>
                <tr>
                    <td> <label for="">Password<span class="c-red">*</span></label></td>
                    <td> <input type="password" name="password" id=""> <span class="c-red"> <?php echo "$password_err";?></span></td>
                </tr>
                <tr>
                    <td> <label for="">Confirm Password<span class="c-red">*</span></label></td>
                    <td> <input type="password" name="cpassword" id="">
                    <?php
                        if(empty($_POST['cpassword']))
                        {
                            echo '<span style="color:red;">'.$cpassword_err.'</span>';
                        }
                        else
                        {
                            if($_POST['cpassword'] == $_POST['password'])
                            {
                                echo '<span style="color:green;">&#10004;</span>';
                            }
                            else
                            {
                                echo '<span style="color:red;">&#10006;</span>';
                            }
                        }
                    ?></td>
                </tr>
                <tr>
                    <td> <label for="">Date of Birth<span class="c-red">*</span></label></td>
                    <td> <input type="date" name="dob" id=""><span class="c-red"> <?php echo "$dob_err";?></span></td>
                </tr>
                <tr>
                    <td> <label for="">Gender<span class="c-red">*</span></label></td>
                    <td><input type="radio" name="gender" value="Male" id="">Male
                        <input type="radio" name="gender" value="Female" id="">Female
                        <input type="radio" name="gender" value="other" id="">other<span class="c-red"> <?php echo "$gender_err";?></span></td>
                </tr>
                <tr>
                    <td> <label for="">Images<span class="c-red">&nbsp;</span></label></td>
                    <td> <input type="file" name="img" id=""></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" name="submit" value="Submit" onclick="hide()">
                        <input type="reset" name="reset" value="Reset">
                </tr>
            </table>

        </form>
    </div>
    
    <?php
        
        $servername = "localhost";
        $username = "root";
        $connection_password = "";
        $database = "sketer";

        // Create connection
        $conn = mysqli_connect($servername, $username, $connection_password, $database);

        // Check connection
        if(isset($_POST['submit']))
        {
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
              }
              else{
                  echo " ";
              }
            
            //   Insert Query
            if($fname != "" && $email != "" && $password != "" && $dob != "" && $gender !="")
            {
                echo "";
                // INSERT INTO `assignment-form-data` (`Sno.`, `fname`, `lname`, `email`, `password`, `dob`, `gender`) VALUES ('1', 'sketer', ' I SK', 'ksamrit121@gmail.com', 'IamAdmin', '2001-10-20', 'Male');
                $query="INSERT INTO `form-data` (`fname`, `lname`, `email`, `password`, `dob`, `gender`) 
                        VALUES ('$fname','$lname','$email','$password','$dob','$gender')";
                $result= mysqli_query($conn, $query);
                if(isset($_POST['submit']))
                {
                    if($result)
                        echo " Regestration Complete";
                    else
                        echo " ";
                }
            }
            else
            {
                echo "Error";
            }
        }
        
    ?>
    <!-- MAIN END -->
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
    <!-- FOOTER END -->
    <script> 
                        function hide()
                        {
                            document.getElementById('main2').style.cssText = 'display:none';
                        }
                    </script>
</body>
</html>