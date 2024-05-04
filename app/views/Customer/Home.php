<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="/app/css/style.scss">
  
</head>
<body>
<nav class="menu">
  <ol>
    <li class="menu-item"><a href="#0">Shop</a>
      <ol class="sub-menu">
        <li class="menu-item"><a href="#0">Eyeglasses</a>
        </li>
        <li class="menu-item"><a href="#0">Sunglasses</a>
        </li>
      </ol>
    </li>
    <li class="menu-item"><a href="#0">Brands</a>
      <ol class="sub-menu">
        <li class="menu-item"><a href="#0">Gucci</a></li>
        <li class="menu-item"><a href="#0">Cartier</a></li>
        <li class="menu-item"><a href="#0">More ></a></li>
      </ol>
    </li>
	<li class="menu-item"><a href="#0">About</a>
      <ol class="sub-menu">
        <li class="menu-item"><a href="#0">About Mes Yeux Tes Yeux</a></li>
        <li class="menu-item"><a href="#0">Contact Us</a></li>
      </ol>
    </li>
    <li class="menu-item"><a href="#0">Account</a>
      <ol class="sub-menu">
        <li class="menu-item"><a href="#0">My Account</a></li>
        <li class="menu-item"><a href="#0">Login/Register</a></li>
      </ol>
    </li>
	
  </ol>
  
</nav>

<div class="container"> 
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="shop.jpg" alt="Los Angeles">
      </div>

      <div class="item">
        <img src="shop1.jpg" alt="Chicago">
      </div>
    
      <div class="item">
        <img src="shop3.png" alt="New york">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>



<div class="text-center">
    <h3>Join Newsletter</h3>
  </div>

  <!-- Email input field and button -->
  <div class="text-center">
    <form>
      <div class="form-group">
        <input type="email" class="form-control" id="emailInput" placeholder="Email">
        <button type="submit" class="btn btn-primary">Join</button>
      </div>
      
    </form>
  </div>
</div>

	<footer class="footer">
  	<div class="container">
  	 	<div class="row">
		   <div class="footer-col">
		   <h4>Mes yeux tes yeux</h4>
  	 			<ul>
				<li><p>Address: 2324 Lucerne Rd,</p></li>
				<li><p> Mount Royal, Quebec H3R 2J8</p></li>
				<li><p>Email: mytyfacebook@gmail.com</p></li>
				<li><p>Phone: (514) 341-2020</p></li>
  	 			</ul>
  	 		</div>
  	 		<div class="footer-col">
  	 			<h4>company</h4>
  	 			<ul>
  	 				<li><a href="#">About</a></li>
  	 				<li><a href="#">Contact Us</a></li>
  	 			</ul>
  	 		</div>
  	 		<div class="footer-col">
  	 			<h4>Shop</h4>
  	 			<ul>
  	 				<li><a href="#">Men</a></li>
  	 				<li><a href="#">Women</a></li>
  	 			</ul>
  	 		</div>
  	 		<div class="footer-col">
  	 			<h4>Account</h4>
  	 			<ul>
  	 				<li><a href="#">My account</a></li>
  	 				<li><a href="#">My orders</a></li>
  	 				<li><a href="#">My cart</a></li>
  	 			</ul>
  	 		</div>
			   <div class="footer-col">
  	 			<h4>Opening time</h4>
  	 			<ul>
  	 				<p>Tue - Fri 10:00am - 6:00pm </a></p>
  	 				<p>Sat 10:00am - 5:00pm</a></p>
  	 				<p>Sun - Mon Closed</a></p>
  	 			</ul>
  	 		</div>
  	 	</div>
	<div>


		<div id ="footer-license">
			<p>&copy;1986-2024 Mes Yeux Tes Yeux</p>
		</div>
  </footer>
  
</body> 
</html>



