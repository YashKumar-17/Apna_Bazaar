<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database_name = "apnabazaar";

    $conn = mysqli_connect($servername,$username,$password,$database_name);
  
    if(!$conn)
    {
        die("Connection failed:" . mysqli_connect_error());
    }

    if(isset($_GET['Submit']))
    {
        $District = $_GET['District'];
        $Pincode = $_GET['Pincode'];
        $Email = $_GET['Email'];
        


        $sql_query = "INSERT INTO pincode(District, Pincode, Email)
        VALUES ('$District','$Pincode','$Email')";

        

        mysqli_close($conn);
    }
?>