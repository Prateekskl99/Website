<!DOCTYPE html>
<html lang="en">

<head>
  <title>Document</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="styles.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>

<body>

 <?php include 'menu.php'; ?>


  <div id="demo" class="carousel slide" data-ride="carousel">

    <!-- Indicators -->

    <ul class="carousel-indicators">
      <li data-target="#demo" data-slide-to="0" class="active"></li>
      <li data-target="#demo" data-slide-to="1"></li>
      <li data-target="#demo" data-slide-to="2"></li>
    </ul>

    <!-- The slideshow -->

    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="images/a.jpg" alt="Los Angeles" width="1000" height="100">
      </div>
      <div class="carousel-item">
        <img src="images/b.jpg" alt="Chicago" width="1000" height="100">
      </div>
      <div class="carousel-item">
        <img src="images/c.jpg" alt="New York" width="1000" height="100">
      </div>
    </div>

    <!-- Left and right controls -->

    <a class="carousel-control-prev" href="#demo" data-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </a>
    <a class="carousel-control-next" href="#demo" data-slide="next">
      <span class="carousel-control-next-icon"></span>
    </a>
  </div>

  <section class="my-5">
    <div class="py-5">
      <h2 class="text-center">About Us</h2>
    </div>
    
    <!-- Grid System -->

    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-6 col-md-6 col-12">
          <img src="images/d.jpg" class="img-fluid aboutimg">
        </div>
        <div class="col-lg-6 col-md-6 col-12">
          <h3>I am Prateek Shukla</h3>
          <p>This is my first dynamic website.Hope it will be all right</p>
          <a href="about.php" class="btn btn-success">Wanna know me</a>
        </div>
      </div>
    </div>
  </section>

  <section class="my-5">
    <div class="py-5">
      <h2 class="text-center">Our Services</h2>
    </div>

    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-4 col-md-4 col-12">
          <div class="card">
            <img class="card-img-top" src="images/e.jpg" alt="Card image">
            <div class="card-body">
              <h4 class="card-title">Abbey Road</h4>
              <p class="card-text">Iconic Studio</p>
              <a href="#" class="btn btn-primary">See Profile</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-12">
          <div class="card">
            <img class="card-img-top" src="images/f.jpg" alt="Card image">
            <div class="card-body">
              <h4 class="card-title">Electronic Music</h4>
              <p class="card-text">Party Place</p>
              <a href="#" class="btn btn-primary">See Profile</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-12">
          <div class="card">
            <img class="card-img-top" src="images/g.jpg" alt="Card image">
            <div class="card-body">
              <h4 class="card-title">WonderWall</h4>
              <p class="card-text">Thought of the Day</p>
              <a href="#" class="btn btn-primary">See Profile</a>
            </div>
          </div>
        </div>
  </section>

  <section class="my-5">
    <div class="py-5">
      <h2 class="text-center">Our Services</h2>
    </div>
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-4 col-md-4 col-12">
          <img src="images/h.jpg" class="img-fluid">
        </div>
        <div class="col-lg-4 col-md-4 col-12">
          <img src="images/h.jpg" class="img-fluid pb-4">
        </div>
        <div class="col-lg-4 col-md-4 col-12">
          <img src="images/h.jpg" class="img-fluid pb-4">
        </div>
        <div class="col-lg-4 col-md-4 col-12">
          <img src="images/h.jpg" class="img-fluid pb-4">
        </div>
        <div class="col-lg-4 col-md-4 col-12">
          <img src="images/h.jpg" class="img-fluid pb-4">
        </div>
        <div class="col-lg-4 col-md-4 col-12">
          <img src="images/h.jpg" class="img-fluid pb-4">
        </div>
        <div class="col-lg-4 col-md-4 col-12">
          <img src="images/h.jpg" class="img-fluid pb-4">
        </div>
        <div class="col-lg-4 col-md-4 col-12">
          <img src="images/h.jpg" class="img-fluid pb-4">
        </div>
        <div class="col-lg-4 col-md-4 col-12">
          <img src="images/h.jpg" class="img-fluid pb-4">
        </div>
      </div>
    </div>
  </section>

  <section class="my-5">
    <div class="py-5">
      <h2 class="text-center">Our Services</h2>
    </div>
    <div class="w-50 m-auto">
      <form action="userinfo.php" method="post">  
        <div class="form-group">
          <label>Username</label>
          <input type="text" name="user" autocomplete="off" class="form-control">
        </div>
        <div class="form-group">
          <label>Email Id</label>
          <input type="text" name="email" autocomplete="off" class="form-control">
        </div>
        <div class="form-group">
          <label>Mobile Number</label>
          <input type="text" name="mobile" autocomplete="off" class="form-control">
        </div>
        <div class="form-group">
          <label>Comments</label>
          <textarea class="form-control" name="comment">
          </textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>  
  </section>

  <footer>
      <p class="p-3 bg-dark text-white text-center">@prateekproduction</p>
  </footer>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>

</html>