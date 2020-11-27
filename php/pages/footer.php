<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../../css/page.css">
    <title>Online Meal</title>
    <style>
        .body{
           background-color: rgb(35,36,41);
        }
    </style>
</head>
<body>

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
        
            <script>
                function showfeedbackform() {
                    document.getElementById("feedback").style.cssText = "display:block;";
                }
            </script>
            <!-- FEEDBACK END -->

    <?php
       echo '
       <div class="home-selector" id="home-selector">
       <p id="copyrightbysketeramrit">&copy; copyright 2020 by sketeramrit</p>
       <label for="" class="contactus">
           <!-- <a href="pages/contactus.html"> -->
           <i class="fa fa-comments-o" style="font-size:36px" onclick="footer_contactus()"><span class="span-text"
                   id="span-text"><a href="mailto:ksamrit121@gmail.com" id="span-text-a">For Contact- Mail
                       me</a></span></i>
       </label>
       <a href="#home" class="scroll-up"><i class="fa fa-arrow-circle-o-up" style="font-size:36px"></i></a>
   </div>
   <script>
       function footer_contactus() {
           document.getElementById("span-text-a").style.cssText = "display: block;";
       }
   </script>
       '; 
    ?>
</body>
</html>