<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../../css/breakfast-style.css">
    <title>Online meal Lunch</title>
    <style>
        .body{
           background-color: rgb(35,36,41);
        }
    </style>
</head>
<body>
    <?php
        require 'navigation-bar.php';
        
        echo '
        <div class="_containt">
        <div class="main-content">
            <div class="breakfast-heading"><br>
                <label for="">Lunch</label>
            </div>

            <div class="myslider">
                <div class="myslide">
                    <div class="img">
                        <a href="#"><img src="../../img/lunch/lun1.jpg" width="400px" height="250px"
                                alt="Image Not Found"></a>
                        <label for="">Fried Rice</label>
                    </div>
                    <div class="img">
                        <a href="#"><img src="../../img/lunch/lun2.jpg" width="150px" height="250px"
                                alt="Image Not Found"></a>
                        <label for="">Egg Roll</label>
                    </div>
                    <div class="img">
                        <a href="#"><img src="../../img/lunch/lun3.jpg" width="400px" height="250px"
                                alt="Image Not Found"></a>
                        <label for="">Rajma Chawal</label>
                    </div>
                </div>
                <div class="myslide">
                    <div class="img">
                        <a href="#"><img src="../../img/lunch/lun4.jpg" width="400px" height="250px"
                                alt="Image Not Found"></a>
                        <label for="">Puri Sabji</label>
                    </div>
                    <div class="img">
                        <a href="#"><img src="../../img/lunch/lun5.jpg" width="400px" height="250px"
                                alt="Image Not Found"></a>
                        <label for="">Dal Bati</label>
                    </div>
                    <div class="img">
                        <a href="#"><img src="../../img/lunch/lun6.jpg" width="400px" height="250px"
                                alt="Image Not Found"></a>
                        <label for="">Butter chicken</label>
                    </div>
                </div>
            </div>
        </div>
    </div>
        ';

        include 'footer.php';
    ?>
</body>
</html>