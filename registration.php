<?php
    include 'connection.php';

    if(isset($_POST['submit'])){
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $age = $_POST['age'];
        $gender = $_POST['gender'];
        $email = $_POST['email'];

        $sql = "INSERT INTO users (fname, lname, age, gender, email) VALUES ('$fname', '$lname', '$age', '$gender', '$email')";

        if(mysql_query($sql, $conn)){
            echo "Record added successfully!";
        }
        else{
            echo "Error adding record: " . mysql_error();
        }
    }
?>