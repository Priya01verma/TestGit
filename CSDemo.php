<script>
        function changeCountry(first){
        var xmlhttp;
        if (window.XMLHttpRequest)
          {// code for IE7+, Firefox, Chrome, Opera, Safari
          xmlhttp=new XMLHttpRequest();
          }
        else
          {// code for IE6, IE5
          xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
          }
        xmlhttp.onreadystatechange=function()
        {
          if (xmlhttp.readyState==4 && xmlhttp.status==200)
            {
            var res=xmlhttp.responseText;
            document.getElementById("second").innerHTML=res;
            }
          }
        xmlhttp.open("GET","CSDemo1.php?first="+first,true);
        xmlhttp.send();
        }
     </script>
     Country :  <select id="myCountry" onChange="changeCountry(this.value)">
         
         <option value="">---select---</option>
            <option value="India">India</option>
            <option value="Australia">Australia</option>
            <option value="USA">USA</option>
            <option value="China">China</option>
        </select>
    <div id="second"><select>
      States: <option value="Delhi">Delhi</option>
      <option value="Assam">Assam</option>
      <option value="Bihar">Bihar</option>
      <option value="uttar pradesh">uttar pradesh</option>
      </select>
      </div>
       