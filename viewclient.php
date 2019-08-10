<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>INCOME TAX MANAGEMENT PORTAL</title>
    <link href="styling.css" rel="stylesheet">
     <link href="css/bootstrap.min.css" rel="stylesheet">
    
    <link href='https://fonts.googleapis.com/css?family=Arvo' rel='stylesheet' type='text/css'>
    </head>
    <body>
    <div id="contain">
    <div id="head">
        <h5 id="add"><span class="add1">Income Tax Calculator  ->  </span>Home | Admin | View Client<span class="back"><a href="admin1.php" class="link"><u>BACK</u></a></span></h5>
        
        <br /><br /><br />
      
    </div>    
    </div>
   <div class="st">
        
        <img src="images/user1.png" class="bodyimg">
       <br /><br /><br /></div>
<?php
 $link=mysqli_connect("localhost","root","","tax") or die("Erro:Unable to connect: " . mysqli_connect_error());     
  $sql="select a.client_id,a.name,a.pancard_no,a.phone,a.mail,b.status from client a,taxdetails b where a.pancard_no=b.pancard_no";
         if($result=mysqli_query($link,$sql)){
             $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
             
      
 if(mysqli_num_rows($result)>0){
               echo "<table class='tabl table table-stripped table-hover table-condensed table-bordered'>
               <tr>
               <th>ID</th>
               <th >NAME</th>
               <th>MOBILE</th>
               <th >EMAIL-ID</th>
               <th >PANCARD NUMBER</th>
               <th >STATUS</th>
               </tr>
               ";
               while($row=mysqli_fetch_array($result,MYSQLI_ASSOC)){
                   echo "<tr>";
                   echo "<td>".$row["client_id"]."</td>";
                   echo "<td>".$row["name"]."</td>";
                   echo "<td>".$row["mobile"]."</td>";
                   echo "<td>".$row["mail"]."</td>";
                   echo "<td>".$row["pancard_no"]."</td>";
                  echo "<td>".$row["status"]."</td>"; 
                   echo "</tr>";
               }
               echo "</table>";
               mysqli_free_result($result);
           }  
         }
        else
        {
            echo "fail";
        }
        ?>
         </body>
</html>