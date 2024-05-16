<!DOCTYPE html>
<html lang="en">
<head>
  <title><?= $name ?> view</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="/app/css/style.scss">
</head> 

<body>

  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
      <li data-target="#myCarousel" data-slide-to="4"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="/app/resources/manonWall.png" alt="Chicago" style="height:400px;">
      </div>

      <div class="item">
        <img src="/app/resources/saddude.webp" alt="Chicago" style="height:400px;">
      </div>

      <div class="item">
        <img src="/app/resources/fireddude.webp" alt="Chicago" style="height:400px;">
      </div>

      <div class="item">
        <img src="/app/resources/happydude.webp" alt="Chicago" style="height:400px;">
      </div>

      <div class="item">
        <img src="/app/resources/owch.webp" alt="Chicago" style="height:400px;">
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



  <!-- <div class="container"> 
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    Indicators 
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

     Wrapper for slides 
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

    Left and right controls 
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div> -->



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

</body>

</html>