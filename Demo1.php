<?php
//getting data from database
$conn = mysqli_connect("localhost","root","","mydb");
//getting data
$result = mysqli_query($conn,"SELECT * FROM country");
//storing in array
//$data=array();
echo "<select name='country'>";
while($row = mysqli_fetch_assoc($result))
{
    //$data[]=$row;
    $arrlen = count($row)
for($i=1; $i<=$arrlen; $i=$i+2)
    {
        //print_r ($value);
    echo " <option value='' >$arr[$i]</option>";                 
}
}
echo "</select> ";
?>  