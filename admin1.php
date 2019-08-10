<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
 <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>INCOME TAX MANAGEMENT PORTAL</title>
    <link href="styling.css" rel="stylesheet">
     <link href="css/bootstrap.min.css" rel="stylesheet">
    
    <link href='https://fonts.googleapis.com/css?family=Arvo' rel='stylesheet' type='text/css'>
     <script src="js/jquery-3.3.1.min.js"></script>   
<style>
body {
    font-family: "Lato", sans-serif;
}
    #he2{
        font-family:Cursive;
         color:black;
    text-align: center;
    margin-left: 350px;
    padding: 55px;
    letter-spacing: 3px;
font-size:35px; 
        font-weight: bold;
        
    }
    #he3{
        font-size:20px;
        font-family:cursive;
        margin-left:-1030px;
       
    }
    .bodyimage8{
        height:30px;
        transform:translate(1200px,-110px);
    }
   .bodyimage9{
        height:160px;
        transform:translate(480px,150px);
    } 
.sidenav {
    height: 100%;
    width: 0;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    background-color: #111;
    overflow-x: hidden;
    transition: 0.5s;
    padding-top: 60px;
    text-align:center;
}

.sidenav a {
    padding: 8px 8px 8px 32px;
    text-decoration: none;
    font-size: 25px;
    color: #818181;
    display: block;
    transition: 0.3s;

}

.sidenav a:hover{
    color: #f1f1f1;
}

.sidenav .closebtn {
    position: absolute;
    top: 0;
    right: 25px;
    font-size: 36px;
    margin-left: 50px;
}
    #ad{
        color:black;
        font-family:cursive;
        font-size:20px;
        transform: translate(660px,150px);
    }

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
</style>
</head>
<body>

<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="viewstaff.php">View Staff</a>
  <a href="viewclient.php">View Client</a>
  <a href="addstaff.php">Add Staff</a>
  <a href="removestaff.php">Remove Staff</a>
   <a href="assignrequest.php">Assign Request</a>
    <a href="resetadmin.php">Reset Password</a> 
       <a href="index.php">Logout</a>
</div>

<div id="main">
    <h2><span id="he2"><u>INCOME TAX CALCULATOR </u></span><span id="he3">logged in as Admin</span></h2>
<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; open</span>
 <img src="images/home.png" class="bodyimage8">
    
<img src="images/adminx.png" class="bodyimage9">
<p id="ad">Hello,Somya</p>
<script>
function openNav() {
    document.getElementById("mySidenav").style.width = "100%";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}
</script>
  
    </div>    
</body>
</html> 