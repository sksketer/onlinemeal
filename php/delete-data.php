<?php

    $conn = mysqli_connect('localhost','root','','sketer');
    if(!$conn)
    {
        echo "you are not connected with server";
    }
    $sql= "DELETE from `form-data` WHERE `form-data`.sno='$_POST[sno]' ";
    if(mysqli_query($conn,$sql))
    {
        echo "Data Delete Sucessfully...";
    } 
    else
    {
    	echo "Data Not Deleted";
    }
    echo '
        <form action="display-data.php" method="post">
            <input type="submit" value="Back to Form Data">
        </form>
            ';
            
?>