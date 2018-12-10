<?php
//getting data from database
$conn = mysqli_connect("localhost","root","","mydb");
//getting data
$result = mysqli_query($conn,"SELECT * FROM states_1");
//storing in array
$data=array();
while($row = mysqli_fetch_assoc($result))
{
    $data[]=$row;
foreach ($row as $value) 
    {
        print_r ($value);
    }
}
?>  