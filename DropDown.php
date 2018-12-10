<!doctype html>
<html>
    <body>
         Country :  <select id="myCountry" onChange="javascript:ChooseCountry();">
         
         <option value="">---select---</option>
            <option value="India">India</option>
            <option value="Australia">Australia</option>
            <option value="USA">USA</option>
            <option value="China">China</option>
        </select>
        
        <script>
        function ChooseCountry()
            {
                var x = document.getElementById("myCountry").selectedIndex;
                var y = document.getElementById("myCountry").options;
                alert(y[x].index + ". "+y[x].text);
            }
        </script>
    </body>
</html>