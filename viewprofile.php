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
        <h5 id="add"><span class="add1">Income Tax Calculator  ->  </span>Home | Client | View Profile<span class="back"><a href="client1.php" class="link"><u>BACK</u></a></span></h5>
        
        <br /><br /><br />
      
    </div>    
    </div>
   <div class="st">
        
        <img src="images/user1.png" class="bodyimg">
       <br /><br /><br /></div>
<?php
 $link=@mysqli_connect("localhost","root","","tax") or die("Erro:Unable to connect: " . mysqli_connect_error());     
  $clientname=$_COOKIE["clientname"];
  $sql="select * from client where
       name='$clientname'";
         if($result=mysqli_query($link,$sql)){
             $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
             $pan=$row["pancard_no"];
             $id=$row["client_id"];
             $mob=$row["phone"];
             $mail=$row["mail"];
       echo "<p id='par'>Name:".$clientname."</p><br />";
        echo "<p id='par1'>Pancard Number:".$pan."</p><br />";
       echo "<p id='par2'>Contact Number:".$mob."</p><br />";
        echo "<p id='par3'>E-mail id:".$mail."</p><br />";
        
 }
else{
    echo "<p>Failed</p>";
}
 
        ?>
        
      
    
    </body>
</html>