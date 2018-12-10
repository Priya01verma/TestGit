<?php
$servername="localhost";
$username="root";
$password="";
$dbname="mydb";
//create connection
$conn = new mysqli($servername,$username,$password,$dbname);
//check connection
if($conn->connect_error)
{
    die("Connection failed: ". $conn->connect_error);
}
$FirstName=$_POST['FirstName'];
$LastName=$_POST['LastName'];
$Email=$_POST['Email'];
$MobileNo=$_POST['MobileNo'];
$Address1=$_POST['Address1'];
$Address2=$_POST['Address2'];
$country=$_POST['country'];
$DateOfBirth=$_POST['DateOfBirth'];
$TravelDate=$_POST['TravelDate'];
$ArrivalDate=$_POST['ArrivalDate'];
$ReturnDate=$_POST['ReturnDate'];
$Passport=$_POST['Passport'];

$sql="INSERT INTO mytable1(FirstName,LastName,Email,MobileNo,Address1,Address2,country,DateOfBirth,TravelDate,ArrivalDate,ReturnDate,Passport) VALUES ('$FirstName','$LastName','$Email','$MobileNo','$Address1','$Address2','$country','$DateOfBirth','$TravelDate','$ArrivalDate','$ReturnDate','$Passport')";


 if($conn->query($sql)=== TRUE)
                {
                    echo "New record is inserted successfully"; 
                }
            else
                {
                    echo "Error: " . $sql ."<br>" .$conn->error;
                }

$conn->close();
?>
