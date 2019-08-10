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
     #errp{
            color:red;
            transform:translate(550px,17px);
        }
       #q5{
            color:black;
              transform:translate(515px,17px); 
        }
         
    </style>
    </head>
    <body>
    <div id="contain">
    <div id="head">
        <h5 id="add"><span class="add1">Income Tax Calculator ->  </span>Home | Admin| Assign Request<span class="back"><a href="admin1.php" class="link"><u>BACK</u></a></span></h5>
        
        <br /><br />
        <h2 id="add3"><u>Assign Request to the Employee:</u></h2>    
    </div>    
    </div>
       <?php $link=@mysqli_connect("localhost","root","","tax") or die("Erro:Unable to connect: " . mysqli_connect_error());
    $panid = isset($_POST["panid"])?$_POST["panid"]:" ";
    $sid=isset($_POST["staffid1"])?$_POST["staffid1"]:" ";
    if(isset($_POST["submit"])){
    if(!$panid || !$sid)
    {
         echo "<p id='errp'>You are required to fill all the entries!</p>";
    }
        else{
           $panid=mysqli_real_escape_string($link,$panid);
        $sid=mysqli_real_escape_string($link,$sid);
        $sql="UPDATE taxdetails set emp_id='$sid' where pancard_no='$panid' and status='no'";
        if($result=mysqli_query($link,$sql)){
            echo "<p id=q5>The request has been assigned successfully.</p>";
        }
        }
    }
    ?>
    <div class="adds" id="adds1">  
    <form method="post" action="assignrequest.php">
              <br />
         <div class="form-group">
             <input type="text" class="ut" name="panid" placeholder="Enter pancard_no" size="30px" maxlength="100" class="form-control" value="<?php if(isset($_POST["panid"])) echo $_POST["panid"];?>"></div>
         <br />
         <div class="form-group"> 
             <input type="text" class="ut" name="staffid1" placeholder="Enter employee-id"  size="30px" maxlength="100" class="form-control" value="<?php if(isset($_POST["staffid1"])) echo $_POST["staffid1"];?>"> 
        </div>
     <br />
            
         <input type="submit" name="submit" class="btn btn-success btn-lg" id="button1" value="ASSIGN" style="background-color:#e8bd78;">
    
          </form>
    </div>
    
    </body>
</html>