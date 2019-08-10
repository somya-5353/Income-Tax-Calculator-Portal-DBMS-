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
        #p5{
            color:white;
        }
        #errp{
            color:red;
            transform:translate(890px,130px);
        }
        #errp1{
            color:red;
            transform:translate(890px,100px);
        }
    </style>
    </head>
<body> 
     <div class="container">
              <h1><span id="he">Income Tax Calculator</span></h1>
          </div>
    <br />
    <br />
   <?php $link=@mysqli_connect("localhost","root","","tax") or die("Erro:Unable to connect: " . mysqli_connect_error());
    $name =isset($_POST["name"])?$_POST["name"]:" ";
    $password=isset($_POST["pass"])?$_POST["pass"]:" ";
    setcookie("ename",$name,time()+9600);
    if(isset($_POST["submit"])){
    if(!$name || !$password)
    {
         echo "<p id='errp'>You are required to fill all the entries!</p>";
    }
    else{
        $sql="SELECT emp_id from employee where name='$name' AND password='$password'";
        if($result=mysqli_query($link,$sql)){
            if(mysqli_num_rows($result)>0)
            {
                header("Location:emp1.php");
                exit();
            }
            else{
                echo "<p id=errp1>Invalid username or password!</p>";
            }
        }
    }
    }
       
    ?>
    <div class="main" id="main1">
    <form method="post" action="loginemp.php">
        <div class="form-group">
            <input type="text" class="ut" name="name" placeholder="username" size="30px" maxlength="100" class="form-control" value="<?php 
       if(isset($_POST["name"]))echo $_POST["name"];?>"></div>  <br /> 
        <div class="form-group">
              <input type="password" class="ut" name="pass" id="eye1" placeholder="password" size="30px" maxlength="100" class="form-control" value="<?php
       if(isset($_POST["pass"]))echo $_POST["pass"];?>" > 
        </div>
      <br />
     <input type="submit" name="submit" class="btn btn-success btn-lg" id="button1" value="LOGIN" style="background-color:#e8bd78;">
        </form>
    </div>    
    <script>
   
    </script>
</body>
</html>
<?php
ob_flush();
?>