<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  <title>BRTA</title>

  <style>
    * {
      box-sizing: border-box;
    }

    body {
      font-family: Verdana, sans-serif;
    }
    img {
      vertical-align: middle;
    }

    .navbar {
    display: flex;
    justify-content: right;
    background-color: #89cff0;
    color: whitesmoke;
    position: fixed;
    width: 100%;
    top: 0;
    padding: 10px;
}

.navbar ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    
   
}

.navbar li {
    display: inline;
    margin-right: 20px;
    float: left;
}

.navbar li a{
  border-radius: 8px;
   background-color: #89cff0;
    display: block;
  color: white;
  text-align: center;
  padding: 4px 16px;
  text-decoration: none;
}

.navbar li a:hover{
    background-color: steelblue;
}

.footer {
    background-color: rgb(48, 37, 77);
   color: whitesmoke;
    padding: 20px 0;
}

.footer-columns {
    display: flex;
    justify-content: space-evenly;
}

    @keyframes fade {
      from {
        opacity: .4
      }

      to {
        opacity: 1
      }
    }

    @media only screen and (max-width: 300px) {
      .text {
        font-size: 11px
      }
    }
  </style>



</head>

<body>
<nav class="navbar">
    <ul>
      <li><a href="index.php">Home</a></li>
      <li><a href="license_application.php">License Forms</a></li>
      <li><a href="login.php">Log In</a></li>
      <li><a href="map.php">Location</a></li>

    </ul>
  </nav>
  <br><br>
  <br><br>


  <center>
    <div >

        <img src="img/banner2.jpg" style="width:30%">

      </div>
  </center>
  <br>
    <?php 
      if(isset($_GET["success_msg"])){
        echo "<div class='alert alert-success' role='alert'> ".$_GET["success_msg"]." </div>";
      }
    ?>

<div class="container">
    <div class="row">
      <div class="col-md-6">
        <div class="instructions">
          <h2>License Instructions</h2>
          <p>Follow the instructions below to obtain your license...</p>
          <ol>
            <li>Arrange Required Documents</li>
            <li>Submit Fee</li>
            <li>Arrange approved medical certificate</li>
            <li>Submit documents at BRTA office</li>
          </ol>
        </div>
      </div>
      <div class="col-md-6">
        <div class="fees">
          <h2>Vehicle License Fees</h2>
          <ul>
            <li>Bike: 2185 tk</li>
            <li>Car: 27000</li>
            <li>SUV: 27000</li>
            <li>Truck (Small): 21000</li>
            <li>Truck (Large): 35000</li>
            <li>Bus: 20000</li>
          </ul>
        </div>
      </div>
    </div>
  </div>

  <footer class="footer">
    <div class="footer-columns px-5">
      <div class="contact">
        <h3>Contact Us</h3>
        <p>Email: info@brta.gov.bd</p>
        <p>Phone: +880 1624042472</p>
      </div>

      <div class="subscribe">
        <h3>Subscribe</h3>
        <form action="subscribe.php" method="post">
          <label for="email">Enter your email:</label>
          <input type="email" name="email" required>
          <input type="submit" value="Subscribe">
        </form>
      </div>
    </div>
  </footer>
</body>

</html>