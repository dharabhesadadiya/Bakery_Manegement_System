<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css">

  <!-- Font Awesome CSS -->
  <link rel="stylesheet" href="css/all.min.css">

  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">

  <!-- Custom CSS -->
  <link rel="stylesheet" href="css/custom.css">

  <!-- Hover -->
  <link rel="stylesheet" href="css/style.css">
  <!-- Hover -->
  <link rel="stylesheet" href="style.css">

  <title>Bakery</title>
</head>

<body>
  <!-- Start Navigation -->
  <nav class="navbar navbar-expand-sm navbar-dark bg-danger pl-5 fixed-top">
    <a href="index.php" class="navbar-brand">Bakery</a>
    <span class="navbar-text">Customer's Happiness is our Aim</span>
    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#myMenu">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="myMenu">
      <ul class="navbar-nav pl-5 custom-nav">
        <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
        <li class="nav-item"><a href="Menu.php" class="nav-link">Menu</a></li>
        <li class="nav-item"><a href="#registration" class="nav-link">Cart</a></li>
        <li class="nav-item"><a href="userlogin.php" class="nav-link">Login</a></li>
        <li class="nav-item"><a href="#Contact" class="nav-link">Contact</a></li>
      </ul>
    </div>
  </nav> <!-- End Navigation -->

<!-- Start Header Jumbotron-->
<header class="jumbotron back-image" style="background-image:url(image/banner2.jpg);">
</header>
<div class="container">
    <!--Introduction Section-->
    <div class="jumbotron">
      <h3 class="text-center">Bakery Services</h3>
      <p>
      Some bakeries provide services for special occasions (such as weddings, anniversaries, birthday parties, business networking events, etc.)
       or customized baked products for people who have allergies or sensitivities to certain foods (such as nuts, peanuts, dairy or gluten, etc.). 
       Bakeries can provide a wide range of cake designs such as sheet cakes, layer cakes, wedding cakes, tiered cakes, etc. 
       Other bakeries may specialize in traditional or hand-made types of baked products made with locally milled flour
        without flour bleaching agents or flour treatment agents, baking what is sometimes referred to as artisan bread.
      </p>
    </div>
</div>

 <!-- Start Navigation -->
  <nav class="navbar navbar-expand-sm navbar-dark bg-danger pl-5 fixed-top">
    <a href="index.php" class="navbar-brand">Bakery</a>
    <span class="navbar-text">Customer's Happiness is our Aim</span>
    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#myMenu">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="myMenu">
      <ul class="navbar-nav pl-5 custom-nav">
        <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
        <li class="nav-item"><a href="Menu.php" class="nav-link">Menu</a></li>
        <li class="nav-item"><a href="#registration" class="nav-link">Cart</a></li>
        <li class="nav-item"><a href="#Contact" class="nav-link">Contact</a></li>
		<li class="nav-item" style="margin-left:788px;"><a href="userlogin.php" class="nav-link">LOGIN</a></li>
        
	  </ul>
    </div>
  </nav> <!-- End Navigation -->
	<section class="bg-light" style="height: 160%; scroll-behavior:smooth;" id="Contact">
        <div class="container pt-5">
           <h2 class="text-center mb-4" style="margin-top: 20px;">Suggestion</h2>
            <div class=" row mt-4 mt-4">
                <div class="col-md-7 offset-md-3">
                    <form action="" style="width: 80%;margin-left: 30px; margin-top: 10px; margin-left: 40px;">
                        <i class="fa fa-user"></i> <label for="Name" class="font-weight-bold" pl-2>Name</label></i>
                        <input type="text" class="form-control" name="name" placeholder="Name"><br>

                        <i class="fa fa-envelope"></i> <label for="email" class="font-weight-bold" pl-2>Email</label></i>
                        <input type="email" class="form-control" name="email" placeholder="Email"><br>

                        <i class="fa fa-user"></i> <label for="que" class="font-weight-bold" pl-2>Question</label></i>
                        <textarea class="form-control" name="Message" placeholder="How can we help you?" style="height:100px;"></textarea><br>
                        <input type="submit" class="btn btn-primary" value="send" name="submit"><br>

                    </form>
                </div>
            </div>
        </div>
        </section>
<!-- Start Footer-->
<footer class="container-fluid bg-dark text-white mt-5" style="border-top: 3px solid #DC3545;">
    <div class="container">
      <!-- Start Footer Container -->
      <div class="row py-3">
        <!-- Start Footer Row -->
        <div class="col-md-6">
          <!-- Start Footer 1st Column -->
          <span class="pr-2">Follow Us: </span>
          <a href="#" target="_blank" class="pr-2 fi-color"><i class="fab fa-facebook-f"></i></a>
          <a href="#" target="_blank" class="pr-2 fi-color"><i class="fab fa-twitter"></i></a>
          <a href="#" target="_blank" class="pr-2 fi-color"><i class="fab fa-youtube"></i></a>
          <a href="#" target="_blank" class="pr-2 fi-color"><i class="fab fa-google-plus-g"></i></a>
          <a href="#" target="_blank" class="pr-2 fi-color"><i class="fas fa-rss"></i></a>
        </div> <!-- End Footer 1st Column -->

        <div class="col-md-6 text-right">
          <!-- Start Footer 2nd Column -->
          <small> Designed by Someone &copy; 2021.
          </small>
          <small class="ml-2"><a href="Admin/login.php">Admin Login</a></small>
        </div> <!-- End Footer 2nd Column -->
      </div> <!-- End Footer Row -->
    </div> <!-- End Footer Container -->
  </footer> <!-- End Footer -->
    <!-- Boostrap JavaScript -->
    <script src="js/jquery.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/all.min.js"></script>
  
</body>

</html>