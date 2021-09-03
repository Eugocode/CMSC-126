<?php

    $servername = "localhost";
    $username = "root";			//default username
    $password = "";				//default password
    $dbname = "blog";

    //Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    if ($conn->connect_error){
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM blog_post";
    $query = mysqli_query($conn, $sql);

    // Get post data based on id
    if(isset($_REQUEST['blog_id'])){
        $id = $_REQUEST['blog_id'];

        $sql = "SELECT * FROM blog_post WHERE blog_id = $id";
        $query = mysqli_query($conn, $sql);
    }
?>