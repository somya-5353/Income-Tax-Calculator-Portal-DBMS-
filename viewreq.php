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
          #cp{
              color:black;
          }
          #ne1{
              color:#8d4f20;
          }
         #ne{
              color:forestgreen;
          } 
    </style>
    </head>
    <body>
    <div id="contain">
    <div id="head">
        <h5 id="add"><span class="add1"> Income Tax Calculator ->  </span>Home | Employee | View Request<span class="back"><a href="emp1.php" class="link"><u>BACK</u></a></span></h5>
        
        <br /><br /><br />
      
    </div>    
    </div>
      <?php
  $link=@mysqli_connect("localhost","root","","tax") or die("Erro:Unable to connect: " . mysqli_connect_error());
    $val=$_COOKIE["ename"];
        echo "<p id='cp'>Name:".$val."</p>";
    $query="SELECT emp_id from employee where name='$val'";
       if($result=mysqli_query($link,$query)){ 
        $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
        $value=$row["emp_id"];
         echo "<p id='cp'>Id:".$value."</p>";
    $sql= "SELECT pancard_no,status from taxdetails where emp_id='$value'";
         if($rest=mysqli_query($link,$sql)){
           if(mysqli_num_rows($rest)>0){
               echo "<table class='tabl table table-stripped table-hover table-condensed table-bordered'>
               <tr>
               <th>PANCARD NUMBER</th>
         <th >STATUS OF THE REQUEST</th>
               </tr>
               ";
               while($row1=mysqli_fetch_array($rest,MYSQLI_ASSOC)){
                   echo "<tr>";
                   echo "<td>".$row1["pancard_no"]."</td>";
                   echo "<td>".$row1["status"]."</td>";
                   echo "</tr>";
               }
               echo "</table>";
               mysqli_free_result($rest);
           }
           }  
         }
         
         ?>
    </body>
</html>