<?php$servername = "localhost";$username = "root";$password = "";$dbname = "userdb";// Create connection$conn = new mysqli($servername, $username, $password, $dbname);// Check connectionif ($conn->connect_error) {    die("Connection failed: " . $conn->connect_error);} $mail = $_POST['mail'];$name = $_POST['firstname'];$password = $_POST['password'];$sql = "INSERT INTO regdb (email,firstname,passowrd) VALUES ('$mail','$name', '$password')";if ($conn->query($sql) === TRUE) {    echo "New record created successfully";} else {    echo "Error: " . $sql . "<br>" . $conn->error;}$conn->close();?>