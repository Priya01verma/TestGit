<?php
//getting data from database
$conn = mysqli_connect("localhost","root","","mydb");
//getting data
$result = mysqli_query($conn,"SELECT * FROM country");
//storing in array
$data=array();
echo "<select name='country'>";
while($row = mysqli_fetch_assoc($result))
{
  echo "<option value=''>".$row['CountryName']."</option>";
}
echo "</select> ";

?>  