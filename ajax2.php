<?php

    $conn= new mysqli('localhost','root','','odss_db')or die("Could not connect to mysql".mysqli_error($conn));

    if($_FILES['img']['tmp_name'] != ''){
        $fname = strtotime(date('y-m-d H:i')).'_'.$_FILES['img']['name'];
        $move = move_uploaded_file($_FILES['img']['tmp_name'],'assets/uploads/'. $fname);
    }
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $middlename = $_POST['middlename'];
    $contact = $_POST['contact'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $password= md5($_POST['password']);
    

    $conn->query("INSERT INTO users VALUES (null, ' $firstname', '$lastname', '$middlename', '$contact', '$address', '$email', '$password', '2', '1605080820_avatar.jpg', current_timestamp())");
    echo "<h1>". mysqli_error($conn)."</h1>";
    echo "<h1> (null, '$firstname', '$lastname', '$middlename', '$contact', '$address', '$email', '$password', '2', '$fname', current_timestamp()) </h1>";
    

    ?>