<?php
try {
    $con = new PDO("mysql:host=localhost;dbname=user", 'root', 'salmaan1');
    // set the PDO error mode to exception
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // prepare sql and bind parameters
    $stmt = $con->prepare("INSERT INTO register (user_name, user_age)
    VALUES (:user_name, :user_age)");
    $stmt->bindParam(':user_name', $user_name);
    $stmt->bindParam(':user_age', $user_age);


    // insert a row
    $user_name = "hi";
    $user_age = "36";
    $stmt->execute();
    // insert second row
    $user_name = "John";
    $user_age = "36";
    $stmt->execute();
    // insert third row
    $user_name = "james";
    $user_age = "21";
    $stmt->execute();
    // insert fourth row
    $user_name = "nico";
    $user_age = "19";
    $stmt->execute();


    echo "New records created successfully";
    }
catch(PDOException $e)
    {
    echo "Error: " . $e->getMessage();
    }



    ?>
