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
    </head>
    <body>
    <div id="contain">
   
        <h2 id="detail"><u>Enter your details:</u><br /><br /><br /></h2>    
    </div>   
    <?php
    $link=@mysqli_connect("localhost","tacwdct1_somya","q,=A~1FTDh}u","tacwdct1_itm") or die("Erro:Unable to connect: " . mysqli_connect_error());
$name = $_POST["name"];
$pan=$_POST["pan"];
$mob=$_POST["mob"];
 $mail=$_POST["mail"];
//error messages

//if the user has submitted the form
if($_POST["submit"]){
    
    if($name && $pan && $mob && $mail  && filter_var($mail,FILTER_VALIDATE_EMAIL)){
        $var=$_COOKIE["uname"];
        $var1=$_COOKIE["pass"];
        $sql="SELECT user_id from users where user_name='$var'";
         if($result=mysqli_query($link,$sql)){
           $row=mysqli_fetch_array($result,MYSQLI_ASSOC) ;
            $val=$row["user_id"];
            $sql1="INSERT into client(client_id,name,pancard_no,mobile,mail,password) VALUES($val,'$name','$pan','$mob','$mail','$var1')";
              if($res=mysqli_query($link,$sql1)){
        header("Location:loginclient.php");
        exit();
              }
    }
    }
    //check for errors
    if(!$name || !$pan || !$mail || !$mob ){
        echo "<p id='errx'>You are required to fill all the entries!</p>";
    }else{
    if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
            echo "<p id='errx1'>Enter a valid e-mail id!</p>";  
        } 
       
       
    }
}
?>
    <div class="adds" id="adds1">  
    <form method="post" action="details.php">
        <div class="form-group">
            <input type="text" class="ut1" name="name" id="nameuser" placeholder="Enter name" size="30px" maxlength="100" class="form-control" value="<?php echo $_POST["name"];?>"> </div> <br /> 
  <div class="form-group">
      <input type="text" class="ut1" name="pan" id="mobuser" placeholder="Enter pancard number" size="30px" maxlength="100" class="form-control" value="<?php echo $_POST["pan"];?>"></div>
         <br />
          <div class="form-group">
              <input type="text" class="ut1" name="mob" id="emailuser" placeholder="Enter mobile number"  size="30px" maxlength="100" class="form-control" value="<?php echo $_POST["mob"];?>"> </div>
    
     <br />
        <div class="form-group">
            <input type="text" class="ut1" name="mail" id="addressuser" placeholder="Enter email id"  size="30px" maxlength="100" class="form-control" value="<?php echo $_POST["mail"];?>"> </div> <br />

     <input type="submit" name="submit" class="btn btn-success btn-lg" id="button1" value="CONFIRM" style="background-color:#8d4f20;">
          </form>
    </div>
    
    </body>
</html>
<?php
ob_flush();
?>