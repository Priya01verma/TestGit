<!doctype html>
<html>
<head>
<title>SIMRegistrationAndActivation</title>
</head>
<body>
   <form action="Form1.php" method="post">
    First Name:<input type="text" name="FirstName"><br>
    Last Name: <input type="text" name="LastName"><br>
    Email Address: <input type="text" name="Email"><br>
    Indian Mobile Number:<input type="text" name="MobileNo"><br>
    Address1: <input type="text" name="Address1"><br>
    Address2: <input type="text" name="Address2"><br>
    Date Of Birth: <input type="date" name="DateOfBirth"><br>
    Passport No. <input type="text" name="Passport"><br>
    Travel Date: <input type="date" name="TravelDate"><br>
    Arrival Date: <input type="date" name="ArrivalDate"><br>
    Return Date: <input type="date" name="ReturnDate"><br>
           Country: <select>
            <option value="">---select---</option>
            <option value="India">India</option>
            <option value="Australia">Australia</option>
            <option value="USA">USA</option>
            <option value="China">China</option>
            </select>
           <?php
       $arr=array("India","Australia","USA","China");
       $arrlen = count($arr);
       for($i=0;$i<$arrlen;$i++)
       {
           echo $arr[$i]."<br>";
       }
           ?>

             <br><br>
              <input type="submit" value="Save">
             </form>
</body>
</html>
