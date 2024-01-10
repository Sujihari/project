<?php
$con=new mysqli('localhost','root','','Orders');

if($con->connect_errno)  
{

echo $con->connect_error;
die();

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Siragu foods</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
  body {
    font: 400 15px/1.8 Lato, sans-serif;
    color: #777;
  }
  h3, h4 {
    margin: 10px 0 30px 0;
    letter-spacing: 10px;      
    font-size: 20px;
    color: #111;
  }
  .container {
    padding: 80px 120px;
  }
  .person {
    border: 10px solid transparent;
    margin-bottom: 25px;
    width: 80%;
    height: 80%;
    opacity: 0.7;
  }
  .person:hover {
    border-color: #f1f1f1;
  }
  .carousel-inner img {
    -webkit-filter: grayscale(90%);
    filter: grayscale(90%); /* make all photos black and white */ 
    width: 100%; /* Set width to 100% */
    margin: auto;
  }
  .carousel-caption h3 {
    color: #fff !important;
  }
  @media (max-width: 600px) {
    .carousel-caption {
      display: none; /* Hide the carousel text when the screen is less than 600 pixels wide */
    }
  }
  .bg-1 {
    background: #2d2d30;
    color: #bdbdbd;
  }
  .bg-1 h3 {color: #fff;}
  .bg-1 p {font-style: italic;}
  .list-group-item:first-child {
    border-top-right-radius: 0;
    border-top-left-radius: 0;
  }
  .list-group-item:last-child {
    border-bottom-right-radius: 0;
    border-bottom-left-radius: 0;
  }
  .thumbnail {
    padding: 0 0 15px 0;
    border: none;
    border-radius: 0;
  }
  .thumbnail p {
    margin-top: 15px;
    color: #555;
  }
  .btn {
    padding: 10px 20px;
    background-color: #333;
    color: #f1f1f1;
    border-radius: 0;
    transition: .2s;
  }
  .btn:hover, .btn:focus {
    border: 1px solid #333;
    background-color: #fff;
    color: #000;
  }
  .modal-header, h4, .close {
    background-color: #333;
    color: #fff !important;
    text-align: center;
    font-size: 30px;
  }
  .modal-header, .modal-body {
    padding: 40px 50px;
  }
  .nav-tabs li a {
    color: #777;
  }
  #googleMap {
    width: 100%;
    height: 400px;
    -webkit-filter: grayscale(100%);
    filter: grayscale(100%);
  }  
  .navbar {
    font-family: Montserrat, sans-serif;
    margin-bottom: 0;
    background-color: #2d2d30;
    border: 0;
    font-size: 11px !important;
    letter-spacing: 4px;
    opacity: 0.9;
  }
  .navbar li a, .navbar .navbar-brand { 
    color: #d5d5d5 !important;
  }
  .navbar-nav li a:hover {
    color: #fff !important;
  }
  .navbar-nav li.active a {
    color: #fff !important;
    background-color: #29292c !important;
  }
  .navbar-default .navbar-toggle {
    border-color: transparent;
  }
  .open .dropdown-toggle {
    color: #fff;
    background-color: #555 !important;
  }
  .dropdown-menu li a {
    color: #000 !important;
  }
  .dropdown-menu li a:hover {
    background-color: red !important;
  }
  footer {
    background-color: #2d2d30;
    color: #f5f5f5;
    padding: 32px;
  }
  footer a {
    color: #f5f5f5;
  }
  footer a:hover {
    color: #777;
    text-decoration: none;
  }  
  .form-control {
    border-radius: 0;
  }
  textarea {
    resize: none;
  }
  </style>
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#myPage">Siragu</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#myPage">HOME</a></li>
        <li><a href="#band">Menu</a></li>
        <li><a href="#tour">Gallery</a></li>
        <li><a href="#contact">CONTACT</a></li>
      </ul>
    </div>
  </div>
</nav>

<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="C:\Users\SUJI\Downloads\6e1969b4-8a40-4721-8869-2339c00d2c20.jpeg" alt="New York" width="1200" height="700">
        <div class="carousel-caption">
          <h3>Chapati</h3>
          <p>A round flat unleavened bread of India that is usually made of whole wheat flour and cooked on a griddle.</p>
        </div>      
      </div>

      <div class="item">
        <img src="C:\Users\SUJI\Downloads\IMG-0804.jpg" alt="Chicago" width="1200" height="700">
        <div class="carousel-caption">
          <h3>Puri</h3>
          <p>Puri (sometimes spelled as poori) is a deep-fried bread made from unleavened whole-wheat flour that originated in the Indian subcontinent</p>
        </div>      
      </div>
    
      <div class="item">
        <img src="C:\Users\SUJI\Downloads\DE7AC1C5-10CA-4877-B612-112A623E21DF.jpeg"alt="Los Angeles" width="1200" height="700">
        <div class="carousel-caption">
          <h3>Parotta</h3>
          <p>The word parotta is generally used for the Malabar or Kerala parotta, the flaky, layered bread made of refined wheat flour or maida</p>
        </div>      
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>

<!-- Container (The Band Section) -->
<div id="band" class="container text-center">
  <h3>SIARGU THE FLUTTERS!</h3>
  <p><em>Food with Passion</em></p>
 
<p>Siragu foods is of SIRAGU holding that was established in the market since 2020.Though mom and pop store it is our hope that as many peopleas possible will lead a healthy diet life with an excellent source of soluble fibre.This is what makes it so nutritious for our body.

We distribute freshly manufactured chapatti's,poori,parotta in our company.Our products established in various districts,starhotels,catering,restaurant,super markets, and Grocery stores.</p> <br>
  <div class="row">
    <div class="col-sm-4">
      <p class="text-center"><strong>Chapati</strong></p><br>
      <a href="#demo" data-toggle="collapse">
        <img src="C:\Users\SUJI\Downloads\6e1969b4-8a40-4721-8869-2339c00d2c20.jpeg" class="img-circle person" alt="Random Chapati" width="255" height="255">
      </a>
      <div id="demo" class="collapse">
        <p>A round flat unleavened bread of India that is usually made of whole wheat flour and cooked on a griddle</p>
        <button class="btn" data-toggle="modal" data-target="#myModal">Buy</button>
      </div>
    </div>
    <div class="col-sm-4">
      <p class="text-center"><strong>Puri</strong></p><br>
      <a href="#demo2" data-toggle="collapse">
        <img src="C:\Users\SUJI\Downloads\IMG-0804.jpg" class="img-circle person" alt="Random Puri" width="255" height="255">
      </a>
      <div id="demo2" class="collapse">
        <p>Puri (sometimes spelled as poori) is a deep-fried bread made from unleavened whole-wheat flour that originated in the Indian subcontinent</p>
 <button class="btn" data-toggle="modal" data-target="#myModal">Buy </button>            
			</div>
    </div>
    <div class="col-sm-4">
      <p class="text-center"><strong>Parotta</strong></p><br>
      <a href="#demo3" data-toggle="collapse">
        <img src="C:\Users\SUJI\Downloads\DE7AC1C5-10CA-4877-B612-112A623E21DF.jpeg"class="img-circle person" alt="Random Name" width="255" height="255">
      </a>
      <div id="demo3" class="collapse">
        <p>The word parotta is generally used for the Malabar or Kerala parotta, the flaky, layered bread made of refined wheat flour or maida</p>
        <button class="btn" data-toggle="modal" data-target="#myModal">Buy </button>
      </div>
    </div>
  </div>
</div>

<!-- Container (TOUR Section) -->
<div id="tour" class="bg-1">
  <div class="container">
    
    
    <div class="row text-center">
      <div class="col-sm-4">
        <div class="thumbnail">
          <img src="C:\Users\SUJI\Downloads\6e1969b4-8a40-4721-8869-2339c00d2c20.jpeg" alt="Chapati" width="400" height="300">
          <p><strong>Chapati</strong></p>
                   
        </div>
      </div>
      <div class="col-sm-4">
        <div class="thumbnail">
          <img src="C:\Users\SUJI\Downloads\IMG-0804.jpg" alt="Puri" width="400" height="300">
		  
          <p><strong>Puri</strong></p>
      
        
        </div>
      </div>
      <div class="col-sm-4">
        <div class="thumbnail">
          <img src="C:\Users\SUJI\Downloads\DE7AC1C5-10CA-4877-B612-112A623E21DF.jpeg" alt="San Francisco" width="400" height="300">
          <p><strong>Parotta</strong></p>
        </div>
      </div>
    </div>
  </div>
  
  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">×</button>
          <h4><span class="glyphicon glyphicon-lock"></span>Order</h4>
        </div>
        <div class="modal-body">
         <form action="send.php" method="post">
  <div class="form-group">
    <label for="exampleFormControlInput1">Email address</label>
    <input type="email" class="form-control" id="mail" name="email" placeholder="name@example.com">
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Select Products</label>
    <select class="form-control" id="product" name="product">
      <option>Chapathi</option>
      <option>parotta</option>
      <option>Poori</option>
    
    </select>
  </div>
  
  <div class="form-group">
    <label for="exampleFormControlSelect1">No of Packets</label>
   <input type="text" class="form-control" id="nop" name="nop" placeholder="Enter No Of Packs?">
  </div>
  
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Address</label>
    <textarea class="form-control" id="address" rows="3" name="address"></textarea>
  </div>
  <input type="submit" class="btn btn-primary" value="order now">
</form>
        </div>
       
      </div>
    </div>
  </div>
</div>





<!-- Container (Contact Section) -->
<div id="contact" class="container">
  <h3 class="text-center">Contact</h3>
  <p class="text-center"><em>Always Welcome</em></p>

  <div class="row">
    <div class="col-md-4">
      <p>Fan? Drop a note.</p>
      <p><span class="glyphicon glyphicon-map-marker"></span>Thudiyalur, Cbe</p>
      <p><span class="glyphicon glyphicon-phone"></span>Phone: +91 6383869917</p>
      <p><span class="glyphicon glyphicon-envelope"></span>Email:siragufoods@gmail.com</p>
    </div>
   
  </div>
 
  

 
</div>

<!-- Image of location/map -->
<img src="map.jpg" class="img-responsive" style="width:100%">


<?php
// Database post method insert part
if(isset($_POST['submit']))
{
$mail=$_POST['mail'];
$products=$_POST['products'];
$nop=$_POST['nop'];
$address=$_POST['address'];


if($mail!=""&&$products!=""&&$nop!=""&&$address!="")
{

$con ="Insert into orders(mail,products,nop,address) values
 ('$mail','$products',$nop,'$address')";

}
}

?>

</body>
</html>
