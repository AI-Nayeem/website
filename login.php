<?php
session_start();

 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>FilmFiesta</title>
    <link rel="stylesheet" href="master.css" type="text/css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  </head>
  <body>
    <header>
      <div class="container-fluid">
        <nav class="navbar navbar-expand-md navbar-dark bg-dark ">
            <a href="login.php" class="navbar-brand"> <img src="images/logo.png" alt=""> </a>
            <span class="navbar-text">FilmFiesta</span>

            <ul class="navbar-nav">
              <li class="nav-item"> <a href="#A" class="nav-link"> Services</a> </li>
              <li class="nav-item"> <a href="user-login.php" class="nav-link"> SignIn</a> </li>

            </ul>

        </nav>

        <div class="container">
          <div class="jumbotron">
            <h1>Watch Anywhere, <br> Watch Anytime... </h1> <br>
            <a href="test.php" type="button" class="btn btn-danger btn-block">Sign Up Now</a>
          </div>
        </div>
      </div>

      </header>



    <section class="features">
        <a href="#" name="A"></a>
        <h2>Our Services</h2>

        <div class="container">
          <div class="row">
            <div class="col-md-4">
              <p class="arrange"><img src="images/mob.png" alt=""> <br> Enjoy FilmFiesta on the go with our mobile-friendly website. Whether you're using a smartphone or tablet, you can access all the features and functionalities seamlessly, allowing you to browse movies, read reviews, and watch trailers wherever you are.


              </p>
            </div><div class="col-md-4">
              <p class="arrange"><img src="images/mess.png" alt=""> <br>At FilmFiesta, we believe in the power of community. Our platform allows users to rate and review movies, sharing their thoughts, opinions, and recommendations with fellow movie lovers. You can read authentic reviews, engage in discussions, and make informed decisions about which movies to watch next.
              </p>
            </div>
              <div class="col-md-4">

                <p class="arrange">
                  <img src="images/desktop.jpg" > <br>  FilmFiesta ensures that you can access the platform seamlessly across multiple devices, providing a consistent movie-watching experience no matter where you are. Whether you prefer browsing on your computer, tablet, or smartphone, FilmFiesta caters to your needs.
                </p>
              </div>

            </div>

          </div>
          <h3></h3>

    </section>
    <footer>
      <?php include('footer.php');?>

    </footer>
  </body>
</html>
