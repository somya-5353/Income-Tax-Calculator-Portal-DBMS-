<?php
ob_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>INCOME TAX MANAGEMENT PORTAL</title>
    <link href="styling.css" rel="stylesheet">
     <link href="css/bootstrap.min.css" rel="stylesheet">
    
    <link href='https://fonts.googleapis.com/css?family=Arvo' rel='stylesheet' type='text/css'>
    <script src="js/jquery-3.3.1.min.js"></script>
    <style>
        #q{
            color:red;
             transform:translate(910px,110px);
        }
        #q1{
            color:black;
             transform:translate(910px,110px);
        }
    </style>
    </head>
<body> 
    <div id="contain">
    <div id="head">
        <h5 id="add"><span class="add1"> Income Tax Calculator ->  </span>Home | Employee | Calculate<span class="back"><a href="emp1.php" class="link"><u>BACK</u></a></span></h5>
        
        <br /><br /><br />
      
    </div>    
    </div>
     <div class="container">
              <h1><span id="he">Income Tax Calculator</span></h1>
          </div>
    <br />
    <br />
    <div class="image1" id="image">
     <img src="images/sup1.png" class="bodyimage1"><br /><br />
    </div> 

<?php
$link=@mysqli_connect("localhost","root","","tax") or die("Error:Unable to connect: " . mysqli_connect_error());
    
$pan = isset($_POST["pan"])?$_POST["pan"]:" ";
if(isset($_POST["submit"])){
 if(!$pan)
 { 
     echo "<p id='q'>Please enter the pancard number</p>";
 }
 else{    
$sql="SELECT * from incdetails where pancard_no='$pan'";
  if($result=mysqli_query($link,$sql)){ 
   $row=mysqli_fetch_array($result,MYSQLI_ASSOC) ;
    $sal=$row["incsal"];
    $other=$row["incother"];
    $house=$row["inchouse"];
    $cap=$row["inccapital"];
    $exem=$row["exem"];
    $deduc=$row["deduc"];
      $taxpayable=0;
   $gross=$sal+$other+$house+$cap;
    $taxable=$gross-($exem+$deduc);
    if($taxable>=250000 && $taxable<=50000)
    {
        $taxpayable=0.05*$taxable;
    }
    else if($taxable>500000 && $taxable<=1000000)
    {
        $taxpayable=12500+(0.2*($taxable-500000));
    }
    else if($taxable>1000000)
    {
          $taxpayable=112500+(0.3*($taxable-1000000));
    }
    $query="UPDATE taxdetails set grosstotal=$gross,taxableinc=$taxable,taxpayable=$taxpayable,status='yes' where pancard_no='$pan'";
     if($res=mysqli_query($link,$query)){
         echo "<p id='q1'>Income Tax calculated successfully!</p>";
     }
    else
    {
        echo "<p id='q'>Income Tax cannot be calculated!</p>";
    }
  }
else
    {
        echo "<p id='q'>Income Tax cannot be computed!</p>";
    }
 }
}
?>

      <div class="sign1" id="sign2">  
    <form action="calculate.php" method="post">
        
        <div class="form-group">
              <input type="text" class="ut" name="pan" id="pan" placeholder="Enter pancard number" size="30px" maxlength="100" class="form-control" value="<?php if(isset($_POST["pan"])) echo $_POST["pan"];?>"></div> 
        <input type="submit" name="submit" class="btn btn-success btn-lg" id="button1" value="CALCULATE" color="black" style="background-color:#e8bd78;">
   
          </form>
    </div>
    
    </body>
    <script>
 
    </script>
</html>
<?php
ob_flush();
?>