
<?php

// database connection
    $servername="localhost:3307";
    $username="root";
    $password="";
    $dbname="signup";
    
    // database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

    $conn = new mysqli('localhost:3307','root','','signup');
    if($conn === false){
    
        die("ERROR: Could not connect. " 
        
        . mysqli_connect_error());
        
    }

    $Name = $_GET['Name'];
    $State = $_GET['State'];
    $District = $_GET['District'];
    $Phone = $_GET['Phone'];
    $Address = $_GET['Address'];
    $Email = $_GET['Email'];
    $password= $_GET['password'];
    $Confirmpassword = $_GET['Confirmpassword'];
    

    $sql = "INSERT INTO details  VALUES ('$Name','$State','$District','$Phone','$Address','$Email','$password','$Confirmpassword')";
    // insert in database 
// $rs = mysqli_query($conn, $sql);

if(mysqli_query($conn, $sql)){
    
    echo "details has been saved";
    
}else{
    
    echo "Some error occured.";
    
}

mysqli_close($conn);




?>