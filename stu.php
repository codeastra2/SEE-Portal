<!DOCTYPE html>
<html>
<head>
   <title>Results</title>
   <link rel="stylesheet" type="text/css" href="WebStyle.css"/>
</head>
<body>
   <div class="header">
      <img class="logo" src="BMSCE_logo.png"/>
      <h1 class="bms">BMS College<br/>Of Engineering</h1>
      <br/>
      <h1 class="see">SEMESTER END EXAM TERMINAL</h1>
   </div>
   <div class="buttons">
      <a href="Introduction2.php">
         <div class="homebutton">
            <h3 class="button">Home</h3>
         </div>
      </a>
      <div class="selectedbordbutton">
         <h3 class="button">Results</h3>
      </div>
      <a href="LoginPage.php">
         <div class="logoutbutton">
            <h3 class="button">Go-Back</h3>
         </div>
      </a>
   </div>
   <div class="content">
      <h2 class="results">Results</h2>
      <table>
         <?php
            include 'connection.php';
            $usn=$_POST['usn'];
            $query = "SELECT * FROM `sectionamarks`";

            $result = mysql_query($query);
            $flag=0;
            while($arry = mysql_fetch_array($result)) {
               if($arry['usn'] == $usn )
               {
                  $flag=1;
                  echo "<tr class = heading><th rowspan = 2>Name</th><th rowspan = 2>USN</th><th colspan = 2>COA</th><th colspan = 2>WP</th><th colspan = 2>Math</th><th colspan = 2>DS</th><th colspan = 2>C++</th></tr>";
                  echo "<tr class = heading><th>Marks</th><th>Grade</th><th>Marks</th><th>Grade</th><th>Marks</th><th>Grade</th><th>Marks</th><th>Grade</th><th>Marks</th><th>Grade</th></tr>";
                  echo "<tr class = main>" . "<td>" . $arry['name'] . "</td><td>" . $arry['usn'] . "</td><td>" . $arry['coa'] . "</td><td>" . $arry['coag'] . "</td><td>" . $arry['wp'] . "</td><td>" . $arry['wpg'] . "</td><td>" . $arry['math'] . "</td><td>" . $arry['mathg'] . "</td><td>" . $arry['ds'] . "</td><td>" . $arry['dsg'] . "</td><td>" . $arry['cplusplus'] . "</td><td>" . $arry['cplusplusg'] . "</td></tr></table>"
                  . "<br/><br/>" . "<div class = cgpa>" . "<h3 class = cgpa>Your SGPA is:</h3>" . "<h2 class = cgpa>" . $arry['scgpa'] . "</h2></div>"; 
               }
            }
            if($flag == 0)
            {
               $query = "SELECT * FROM `sectionbmarks`";
               $result = mysql_query($query);
               $flag=0;
               while($arry = mysql_fetch_array($result))
               {
                  if($arry['usn'] == $usn )
                  {
                     $flag=1;
                     echo "<tr class = heading><th rowspan = 2>Name</th><th rowspan = 2>USN</th><th colspan = 2>COA</th><th colspan = 2>WP</th><th colspan = 2>Math</th><th colspan = 2>DS</th><th colspan = 2>C++</th></tr>";
                     echo "<tr class = heading><th>Marks</th><th>Grade</th><th>Marks</th><th>Grade</th><th>Marks</th><th>Grade</th><th>Marks</th><th>Grade</th><th>Marks</th><th>Grade</th></tr>";
                     echo "<tr class = main>" . "<td>" . $arry['name'] . "</td><td>" . $arry['usn'] . "</td><td>" . $arry['coa'] . "</td><td>" . $arry['coag'] . "</td><td>" . $arry['wp'] . "</td><td>" . $arry['wpg'] . "</td><td>" . $arry['math'] . "</td><td>" . $arry['mathg'] . "</td><td>" . $arry['ds'] . "</td><td>" . $arry['dsg'] . "</td><td>" . $arry['cplusplus'] . "</td><td>" . $arry['cplusplusg'] . "</td></tr></table>"
                     . "<br/><br/>" ."<div class = cgpa>" . "<h3 class = cgpa>Your SGPA is:</h3>" . "<h2 class = cgpa>" . $arry['scgpa'] . "</h2></div>"; 
                  }
               }
            }
            if($flag == 0)
            {
               echo"Please enter the right usn!";
            }
         ?>
      <br/><br/>
   </div>
</body>
</html>