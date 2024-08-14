<?php 
    header('Access-Control-Allow-Origin: *');///cors - connect to different domains
     
    $conn = new mysqli("localhost","root","","reactusers");
    ///  $conn = new mysqli("localhost","root","","reactusers");
     
    if(mysqli_connect_error()){
        echo mysqli_connect_error();
        exit();
    }
    else{
        $name = $_POST['name'];
        $mobile = $_POST['mobile'];
        $email = $_POST['email'];
         
        $sql = "INSERT INTO reactusers(name,mobile,email) VALUES('$name','$mobile','$email');";
        $res = mysqli_query($conn, $sql);
         
        if($res){
            echo "Success!";
        }
        else{
            echo "Error!";
        }
        $conn->close();
    }
?>
