<?php

    $servername = "localhost";
    $username = "root";
    $connection_password = "";
    $database = "sketer";

    // Create connection
    $conn = mysqli_connect($servername, $username, $connection_password, $database);

    $sql= "SELECT sno,fname,lname,email,password,dob,gender FROM `form-data`";
    $result=mysqli_query($conn,$sql); 
    echo "
            <table border='1'>
            <tr>
            <th>Sno.</th>
            <th>Name</th>
            <th>Last NAME</th>
            <th>Email</th>
            <th>Password</th>
            <th>Date of Birth</th>
            <th>Gender</th>
            </tr>
        ";  
    while($row=mysqli_fetch_assoc($result))
    { 
        echo '<tr><form action="delete-data.php" method="post">';
        echo '<td>'.$row['sno'].'</td>';
        echo '<td>'.$row['fname'].'</td>';
        echo '<td>'.$row['lname'].'</td>';
        echo '<td>'.$row['email'].'</td>';
        echo '<td>'.$row['password'].'</td>';
        echo '<td>'.$row['dob'].'</td>';
        echo '<td>'.$row['gender'].'</td>';
        // echo '<td><input type=text name=id value= '.$row['name'].'></td>';
        // echo '<td><input type=text name=lname value= '.$row['lname'].'></td>';
        // echo '<td><input type=text name=email value= '.$row['email'].'></td>';
        // echo '<td><input type=text name=password value= '.$row['password'].'></td>';
        // echo '<td><input type=text name=dob value= '.$row['dob'].'></td>';
        // echo '<td><input type=text name=gender value= '.$row['gender'].'></td>';
        echo '<input type="hidden" value='.$row['sno'].' name="sno">';
        echo '<td><input type="submit" name="delete" value="Delete"></td>';
        echo '</form></tr>';
    } 
    echo '
        <form action="ass.php" method="post">
            <input type="submit" value="Back to Registration Form">
        </form>
            ';
?>