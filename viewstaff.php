<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>INCOME TAX MANAGEMENT PORTAL</title>
    <link href="styling.css" rel="stylesheet">
     <link href="css/bootstrap.min.css" rel="stylesheet">
    
    <link href='https://fonts.googleapis.com/css?family=Arvo' rel='stylesheet' type='text/css'>
    <style>
        .tabl{
            color:black;
        }
        .tabl:hover{
            color:#8d4f20;
        }
    </style>
    </head>
     <body>
    <div id="contain">
    <div id="head">
        <h5 id="add"><span class="add1">Income Tax Calculator ->  </span>Home | Admin | View Staff<span class="back"><a href="admin1.php" class="link"><u>BACK</u></a></span></h5>
        
        <br /><br />
        </div>
         </div>
          <?php
$link=mysqli_connect("localhost","root","","tax") or die("Error:Unable to connect: " . mysqli_connect_error());
    $sql="select * from employee";
         if($result=mysqli_query($link,$sql)){
           if(mysqli_num_rows($result)>0){
               echo "<table class='tabl table table-stripped table-hover table-condensed table-bordered'>
               <tr>
               <th>ID</th>
               <th >NAME</th>
               <th>MOBILE</th>
               <th >EMAIL-ID</th>
               </tr>
               ";
               while($row=mysqli_fetch_array($result,MYSQLI_ASSOC)){
                   echo "<tr>";
                   echo "<td>".$row["emp_id"]."</td>";
                   echo "<td>".$row["name"]."</td>";
                   echo "<td>".$row["mobile"]."</td>";
                   echo "<td>".$row["email"]."</td>";
                   echo "</tr>";
               }
               echo "</table>";
               mysqli_free_result($result);
           }  
         }
         
         ?>
    </body>
</html>