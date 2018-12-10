
 <?php
  //  $arr =["Azad","Siraj","Deepak","Ritu","Priya"];
    //for($i=0;$i<5;$i++)

            //echo "$arr";
//    foreach($arr as $value)
        
  //      print "<pre>";
    //    print_r ($value);
      //  print "<\pre>";
//    }
$arr = array("New Delhi", "Chennai", "Mumbai", "Pune", "Kanpur");
$arrlen=count($arr);
for($i=0;$i<$arrlen;$i++)
{
    echo "&ltoption value=&quot".$arr[$i]."&quot&gt".$arr[$i]."&lt/option &gt <br>" ; 
}
?>