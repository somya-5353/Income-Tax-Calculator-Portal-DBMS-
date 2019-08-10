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
        <h5 id="add"><span class="add1">Income Tax Calculator  ->  </span>Home | Client | View Tax Returns<span class="back"><a href="client1.php" class="link"><u>BACK</u></a></span></h5>
        
        <br /><br /><br />
      
    </div>    
    </div>
   <div class="st">
        
        <img src="images/taxbill.png" class="bodyimg">
       <br /><br /></div>
<?php
 $link=@mysqli_connect("localhost","root","","tax") or die("Erro:Unable to connect: " . mysqli_connect_error());     
  $clientname=$_COOKIE["clientname"];
  $sql="select * from client where
       name='$clientname'";
         if($result=mysqli_query($link,$sql)){
             $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
             $pan=$row["pancard_no"];
             $query="select * from taxdetails where pancard_no='$pan'"; if($res=mysqli_query($link,$query)){
                $row1=mysqli_fetch_array($res,MYSQLI_ASSOC);
                 $taxy=$row1["taxyear"];
                 $gross=$row1["grosstotal"];
                 $taxable=$row1["taxableinc"];
                 $tpay=$row1["taxpayable"];
       echo "<p id='para'>Pancard Number:".$pan."</p><br />";
        echo "<p id='para1'>Tax Year:".$taxy."</p><br />";
       echo "<p id='para2'>Gross Total Income:".$gross."</p><br />";
        echo "<p id='para3'>Taxable Income:".$taxable."</p><br />";
            echo "<p id='para4'>Tax to be paid:".$tpay."</p><br />";
        
 }
else{
    echo "<p>Failed</p>";
}
}
  else{
        echo "<p>Failedxxx</p>";
  }
        ?>
        
      
    
    </body>
</html>