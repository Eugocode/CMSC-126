<?php
    $name = $_POST["name"];
    $email = $_POST["email"];
    $number = $_POST["number"];
    $msg = $_POST["msg"];
    
    //allfields are required to be filled.
    if(!empty($name) || !empty($email) || !empty($number) || !empty($msg)){
        
        //creating connection
        $servername = "localhost";
        $username = "root";			//default username
        $password = "";				//default password
        $dbname = "contact";

        $conn = new mysqli($servername, $username, $password, $dbname);
        //Check connection
        if ($conn->connect_error){
            die("Connection failed: " . $conn->connect_error);
        }else{
            $INSERT = $conn->query("INSERT INTO `contact info`(`name`, `email`, `number`, `msg`)
            VALUES ('$name','$email', '$number', '$msg')");
            
            if($INSERT == TRUE){
                echo "<h2>Your message has been submitted.</h2>";
                exit();
            }
        }
    }else{
        echo "All fields are required";
        die();
    }
    $conn->close();

?>