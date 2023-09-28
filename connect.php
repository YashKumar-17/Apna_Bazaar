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
        $Name = $_GET['Name'];
        $State = $_GET['State'];
        $District = $_GET['District'];
        $Phone = $_GET['Phone'];
        $Address = $_GET['Address'];
        $Email = $_GET['Email'];
        $password = $_GET['password'];
        $Confirmpassword = $_GET['Confirmpassword'];


        $sql_query = "INSERT INTO signup(Name,State,District,Phone,Address,Email,password,confirmpassword)
        VALUES ('$Name','$State','$District','$Phone','$Address','$Email','$password','$Confirmpassword')";

        if(mysqli_query($conn,$sql_query))
        {
            echo "Submission Successful";
        }
        else{
            echo "Error:" . mysqli_error($conn);
        }

        mysqli_close($conn);
    }
?>