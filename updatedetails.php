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
    <style>
     #addpr{
            color:black;
          transform:translate(542px,18px);   
        }
    </style>
    </head>
    <body>
      <div id="contain">
    <div id="head">
        <h5 id="add"><span class="add1"> Income Tax Calculator ->  </span>Home | Client | Update Details<span class="back"><a href="client1.php" class="link"><u>BACK</u></a></span></h5>
        
        <br />
      
    </div>    
    </div>  
    <div id="contain">
   
        <h2 id="detail"><u>Enter your details:</u></h2>    
    </div>    
    <?php
$name =isset($_POST["name"])?$_POST["name"]:" ";
 $pan=isset($_POST["pan"])?$_POST["pan"]:" ";       
$incsal=isset($_POST["incsal"])?$_POST["incsal"]:" ";
$incother=isset($_POST["incother"])?$_POST["incother"]:" ";
 $inchouse=isset($_POST["inchouse"])?$_POST["inchouse"]:" ";       
$inccapital=isset($_POST["inccapital"])?$_POST["inccapital"]:" ";
$exem=isset($_POST["exem"])?$_POST["exem"]:" ";
$deduc=isset($_POST["deduc"])?$_POST["deduc"]:" ";
//error messages

//if the user has submitted the form
if(isset($_POST["submit"])){
    if($name && $pan && $incsal && $incother && $inchouse && $inccapital && $exem && $deduc){
        header("Location:cust1.php");
        exit();
    }
    //check for errors
    if(!$name || !$pan || !$incsal || !$incother || !$inchouse || !$inccapital || !$exem || !$deduc){
        echo "<p id='errx'>You are required to fill all the entries!</p>";
    }
    else{
        $sql="INSERT into incdetails (pancard_no,client_name,incsal,incother,inchouse,inccapital,exem,deduc) VALUES('$pan','$name',$incsal,$incother,$inchouse,$inccapital,$exem,$deduc)";
        if($result=mysqli_query($link,$sql)){
            echo "<p id=addpr>You have successfully updated your details.</p>";
        }
    }
   
}
?>
    <div class="adds" id="adds1">  
    <form method="post" action="updatedetails.php">
        <div class="form-group">
            <input type="text" class="ut1" name="name" id="nameuser" placeholder="Enter name" size="30px" maxlength="100" class="form-control" value="<?php if(isset($_POST["name"]))
 echo $_POST["name"];?>"> </div> <br /> 
  <div class="form-group">
      <input type="text" class="ut1" name="pan" id="mobuser" placeholder="Enter pancard_number" size="30px" maxlength="100" class="form-control" value="<?php if(isset($_POST["pan"])) echo $_POST["pan"];?>"></div>
         <br />
          <div class="form-group">
              <input type="text" class="ut1" name="incsal" id="emailuser" placeholder="Enter income from salary"  size="30px" maxlength="100" class="form-control" value="<?php if(isset($_POST["incsal"])) echo $_POST["incsal"];?>"> </div>
    
     <br />
        <div class="form-group">
            <input type="text" class="ut1" name="incother" id="addressuser" placeholder="Enter income from other sources"  size="30px" maxlength="100" class="form-control" value="<?php if(isset($_POST["incother"])) echo $_POST["incother"];?>"> </div> <br />
        <div class="form-group">
            <input type="text" class="ut1" name="inchouse" id="cityuser" placeholder="Enter income from house property"  size="30px" maxlength="100" class="form-control" value="<?php  if(isset($_POST["inchouse"])) echo $_POST["inchouse"];?>"> </div> <br />
        <div class="form-group">
            <input type="text" class="ut1" id="state" name="inccapital" placeholder="Enter income from capital"  size="30px" maxlength="100" class="form-control" value="<?php if(isset($_POST["inccapital"])) echo $_POST["inccapital"];?>"> </div> <br />
         <div class="form-group">
             <input type="text" class="ut1" id="zip" name="exem" placeholder="Enter exemption"  size="30px" maxlength="100"class="form-control" value="<?php if(isset($_POST["exem"])) echo $_POST["exem"];?>" > </div> <br />
        <div class="form-group">
             <input type="text" class="ut1" id="zip" name="deduc" placeholder="Enter deduction"  size="30px" maxlength="100"class="form-control" value="<?php if(isset($_POST["deduc"])) echo $_POST["deduc"];?>" > </div> <br />
     <input type="submit" name="submit" class="btn btn-success btn-lg" id="button1" value="CONFIRM" style="background-color:#e8bd78;">
          </form>
    </div>
    
    </body>
</html>
<?php
ob_flush();
?>