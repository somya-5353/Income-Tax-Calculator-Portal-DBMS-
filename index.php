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
<link href='https://fonts.googleapis.com/css?family=Vollkorn' rel='stylesheet' type='text/css'>
     <script src="js/jquery-3.3.1.min.js"></script>
<style>
body{
   background:url(https://cdn.pixabay.com/photo/2017/09/07/08/54/money-2724245_960_720.jpg) no-repeat center center;
    background-attachment:fixed;
    background-size:cover;
}
    .h{
        color:black;
    }
.navb{
color:white;
font-family:cursive;
}
#home{
    background-color: transparent;
    color: black;
    text-align: center;
    padding-top: 6%;
    font-family:cursive;
}
#home h1{
    margin-bottom: 30px;
    font-family:cursive;
    color:black;
}
#myCarousel{
    width: 40%;
    margin: -160px auto;
}
.carousel-inner .item img{
    height: 250px; 
    margin: 0 auto;
}

.carousel-caption{
    position: relative;
    left: auto;
    right: auto;
    height: 200px;
    color:black;
}


/*Style the pictures and nav-brand for different screens*/
@media (max-width:768px){
    .carousel-inner .item img{
        height: 300px;   
    }
    .carousel-inner h2{
        font-size: 23px;   
    }
}
@media (max-width:400px){
    .carousel-inner .item img{
        height: 200px;   
    }
    .carousel-inner h2{
        font-size: 17px;   
    }
    .navbar-brand{
        font-size: 12px;   
    }
}
.navbar-custom {
  font-size: 18px;
  background-color: black;
  border-color: black;
  background-image: -webkit-gradient(linear, left 0%, left 100%, from(black), to(black));
  background-image: -webkit-linear-gradient(top, black, 0%, black, 100%);
  background-image: -moz-linear-gradient(top, black 0%, black 100%);
  background-image: linear-gradient(to bottom, black 0%, black 100%);
  background-repeat: repeat-x;
  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ff274f80', endColorstr='#ff1b3759', GradientType=0);
}
.navbar-custom .navbar-brand {
  color: #fff;
}
.navbar-custom .navbar-brand:hover,
.navbar-custom .navbar-brand:focus {
  color: #fff;
  background-color: transparent;
}
.navbar-custom .navbar-text {
  color: #c0c0c0;
}
.navbar-custom .navbar-nav > li:last-child > a {
  border-right: 1px solid black;
}
.navbar-custom .navbar-nav > li > a {
  color: #c0c0c0;
  border-left: 1px solid black;
}
.navbar-custom .navbar-nav > li > a:hover,
.navbar-custom .navbar-nav > li > a:focus {
  color: #ffffff;
  background-color: transparent;
}
.navbar-custom .navbar-nav > .active > a,
.navbar-custom .navbar-nav > .active > a:hover,
.navbar-custom .navbar-nav > .active > a:focus {
  color: #ffffff;
  background-color: black;
  background-image: -webkit-gradient(linear, left 0%, left 100%, from(black), to(black));
  background-image: -webkit-linear-gradient(top, black, 0%, black, 100%);
  background-image: -moz-linear-gradient(top, black 0%, black black 100%);
  background-image: linear-gradient(to bottom, black 0%, black 100%);
  background-repeat: repeat-x;
  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ff132740', endColorstr='#ff1f3f67', GradientType=0);
}
.navbar-custom .navbar-nav > .disabled > a,
.navbar-custom .navbar-nav > .disabled > a:hover,
.navbar-custom .navbar-nav > .disabled > a:focus {
  color: #cccccc;
  background-color: transparent;
}
.navbar-custom .navbar-toggle {
  border-color: #dddddd;
}
.navbar-custom .navbar-toggle:hover,
.navbar-custom .navbar-toggle:focus {
  background-color: #dddddd;
}
.navbar-custom .navbar-toggle .icon-bar {
  background-color: #cccccc;
}
.navbar-custom .navbar-collapse,
.navbar-custom .navbar-form {
  border-color: #13263e;
}
.navbar-custom .navbar-nav > .dropdown > a:hover .caret,
.navbar-custom .navbar-nav > .dropdown > a:focus .caret {
  border-top-color: #ffffff;
  border-bottom-color: #ffffff;
}
.navbar-custom .navbar-nav > .open > a,
.navbar-custom .navbar-nav > .open > a:hover,
.navbar-custom .navbar-nav > .open > a:focus {
  background-color:black;
  color: #ffffff;
}
.navbar-custom .navbar-nav > .open > a .caret,
.navbar-custom .navbar-nav > .open > a:hover .caret,
.navbar-custom .navbar-nav > .open > a:focus .caret {
  border-top-color: #ffffff;
  border-bottom-color: #ffffff;
}
.navbar-custom .navbar-nav > .dropdown > a .caret {
  border-top-color: #c0c0c0;
  border-bottom-color: #c0c0c0;
}
@media (max-width: 767) {
  .navbar-custom .navbar-nav .open .dropdown-menu > li > a {
    color: #c0c0c0;
  }
  .navbar-custom .navbar-nav .open .dropdown-menu > li > a:hover,
  .navbar-custom .navbar-nav .open .dropdown-menu > li > a:focus {
    color: #ffffff;
    background-color: transparent;
  }
  .navbar-custom .navbar-nav .open .dropdown-menu > .active > a,
  .navbar-custom .navbar-nav .open .dropdown-menu > .active > a:hover,
  .navbar-custom .navbar-nav .open .dropdown-menu > .active > a:focus {
    color: #ffffff;
    background-color: black;
  }
  .navbar-custom .navbar-nav .open .dropdown-menu > .disabled > a,
  .navbar-custom .navbar-nav .open .dropdown-menu > .disabled > a:hover,
  .navbar-custom .navbar-nav .open .dropdown-menu > .disabled > a:focus {
    color: #cccccc;
    background-color: transparent;
  }
}
.navbar-custom .navbar-link {
  color: #c0c0c0;
}
.navbar-custom .navbar-link:hover {
  color: #ffffff;
}
#promise{
    padding-top:0px;   
}    
</style>
    </head>
<body data-spy="scroll" data-target="#mynavBar">
     
      
      <!--Create navigation bar with scrollspy-->
      <nav role="navigation" class="navbar navbar-custom navbar-fixed-top" id="mynavBar">
        
          <div class="container-fluid">
              <div class="navbar-header">
                  <a class="navbar-brand">INCOME TAX MANAGEMENT PORTAL</a>
                  <button type="button" class="navbar-toggle" data-target="#navbarCollapse" data-toggle="collapse">
                      <span class="sr-only">Toggle navigation</span>      
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  </button>
              </div>
              <div class="navbar-collapse collapse" id="navbarCollapse">
                  <ul class="nav navbar-nav navbar-right navb">
                      <li class="active"><a href="loginadmin.php">Admin</a></li>
                      <li><a href="loginemp.php">Employee</a></li>
                      <li><a href="loginclient.php">Client</a></li>
                  </ul>
              </div>
          </div>
      </nav>

 <div class="jumbotron" id="home">
          <div class="container">
              <h1>Income Tax Calculator</h1>
          </div>
      </div>
<!--Create Carousel-->
      <div id="promise" class="container-fluid">
          <div class="carousel slide" id="myCarousel" data-ride="carousel">
              <ol class="carousel-indicators">
                  <li data-target="#myCarousel" data-slide-to="0" class="active">
                  </li>
                  <li data-target="#myCarousel" data-slide-to="1">
                  </li>
                  <li data-target="#myCarousel" data-slide-to="2">
                  </li>
                  
              </ol>
              <div class="carousel-inner">
                  
                  <div class="item active">
                      <img src="images/tax3.jpg">
                      <div class="carousel-caption">
                          <h2 id="h">File your tax returns in a hassle free manner.</h2>
                      </div>
                  </div>
                  <div class="item">
                      <img src="images/inctax.jpg">
                      <div class="carousel-caption">
                          <h2 id="h">Pay your tax dues within the stipulated time.</h2>
                      </div>
                  </div>
                  <div class="item">
                      <img src="images/inctax1.jpg">
                      <div class="carousel-caption">
                          <h2 id="h">Join us to know more!</h2>
                      </div>
                  </div>
              </div>
                  </div>
             
              <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                  <span class="glyphicon glyphicon-chevron-left"></span>
                  <span class="sr-only">Previous</span>
              
              </a>
              <a class="right carousel-control" href="#myCarousel" data-slide="next">
                  <span class="glyphicon glyphicon-chevron-right"></span>
                  <span class="sr-only">Previous</span>
              
              </a>
    </div>
   
 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
      <script>
          $(function(){
                $('.carousel').carousel({
                    interval: 10000
                }); 
          });
      </script>
  </body>
</html>