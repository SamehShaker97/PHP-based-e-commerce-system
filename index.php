<?php 

  session_start();
  if(isset($_POST["submitBtn"])){
    $firstName = $_POST["fname"];
    $lastName = $_POST["lname"];
    $subject = $_POST["subject"];
    $email = $_POST["email"];
    $message = $_POST["message"];
    
    // Validate the form inputs
    if(empty($firstName) || empty($lastName) || empty($subject) || empty($email) || empty($message)){
      $errors["inputs"] = "All fields are required!";
    } elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
      $errors["email"] = "Invalid email format!";
    } else{
        $messages = file_get_contents('messages.json');
        $messagesArray = json_decode($messages, true);
        $messagesArray[] = ["firstName" => $firstName, "lastName" => $lastName, "email" => $email, "subject" => $subject, "message" => $message];
        $newMessages = json_encode($messagesArray);
        file_put_contents('messages.json', $newMessages);
        header("Location: index.php");
    }
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Furni.</title>
  <!--Box Icon-->
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <!--File Style-->
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <!--start section header-->
  <header class="header">
  <div class="container">
      <a href="#" class="logo">Furni.</a>
      <nav>
        <ul class="navbar">
          <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
          <li class="nav-item"><a href="pages/shop.php" class="nav-link">Shop</a></li>
          <li class="nav-item"><a href="#about" class="nav-link">About</a></li>
          <li class="nav-item"><a href="#contact" class="nav-link">Contact</a></li>
        </ul>
      </nav>
      <div class="form">
        <a class="icon-cart" href="pages/cart.php">
          <i class="bx bx-cart"></i>
          <span><?= isset($_SESSION["cart"]) ? count($_SESSION["cart"]) : 0 ?></span>
        </a>
        <li class="nav-item">
          <a href="#" style="color:#f9bf29;"> 
              <?php if(isset($_SESSION["profilePic"])):?>
                <img src="profilePic/<?= $_SESSION["profilePic"]?>" style="border-radius:50%;" width="50px" hight="50px"  />
              <?php else:?>
                <i class="bx bxs-user"></i>
              <?php endif;?>
            </a>
        </li>
        <li class="nav-item" >
          <a href="#" style="color:#f9bf29;"> <?= isset($_SESSION["userName"]) ? $_SESSION["userName"] : "" ?></a>
        </li>
        <li class="nav-item">
          <a href="handler/logout.php" class="login">Logout</a>
        </li>
      </div>
      <div class="menu">
        <span class=""></span>
        <span class="three"></span>
      </div>
    </div>
</header>
<div class="slider">
  <i class='bx bx-x'></i>
  <nav>
    <ul class="navbar-menu">
      <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
      <li class="nav-item"><a href="pages/shop.php" class="nav-link">Shop</a></li>
      <li class="nav-item"><a href="#about" class="nav-link">About</a></li>
      <li class="nav-item"><a href="#contact" class="nav-link">Contact</a></li>
    </ul>
  </nav>
  <div class="form-menu">
        <a class="icon-cart" href="pages/cartPage.php">
          <i class="bx bx-cart"></i>
        </a>
        <li class="nav-item">
          <a href="pages/logout.php" class="login">Logout</a>
        </li>
  </div>
</div>
<div id="btn"><i class='bx bxs-arrow-to-top bx-tada'></i></div>
<!--end section header-->
<!--start section home-->
<section class="home" id="home">
  <div class="container">
    <div class="content">
      <div class="home-text">
        <h1>Modern Interior<br/> Design Studio</h1>
        <p>
          Donec vitae odio quis nisl dapibus malesuada. Nullam ac
          aliquet velit. Aliquam vulputate velit imperdiet dolor tempor
          tristique.
        </p>
        <button class="shop">Shop Now</button>
        <button class="explore">Explore</button>
      </div>
      <div class="image">
        <img src="images/banner_img (1).png" alt=''/>
      </div>
    </div>
  </div>
</section>
<!--end section home-->
<!--Start Section Banner-->
<section class="banner" id="banner">
  <div class="container">
    <div class="text">
      <h3 class="special-heading">Discover Our Latest Designs</h3>
      <h2>Crafted with excellent material</h2>
    </div>
    <div class="content">
      <div class="item">
        <img src="images/product-chair-7.jpg" alt="Image">
        <div class="overlay"></div>
      </div>
      <div class="item">
        <img src="images/big-table-41.jpg" alt="Image">
        <div class="overlay"></div>
      </div>
          <div class="item">
            <img src="images/big-sofa-2.jpg" alt="Image">
            <div class="overlay"></div>
          </div>
          <div class="item">
            <img src="images/big-chair-3.jpg" alt="Image">
            <div class="overlay"></div>
          </div>
          <div class="item">
            <img src="images/big-table-2.jpg" alt="Image">
            <div class="overlay"></div>
          </div>
    </div>
      
  </div>
</section>
<!--End Section Banner-->
<!--Start section Choose-->
<section class="choose" id="about">
  <div class="container">
    <div class="choose-text">
      <h2 class="special-heading">Why Choose Us?</h2>
        <p class="head-text">
          Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet
          velit. Aliquam vulputate velit imperdiet dolor tempor tristique.
        </p>
    </div>
    <div class="content">
      <div class="choose-items">
        <div class="itemsOne">
          <!--item 1-->
          <div class="item">
            <i class="bx bxs-car"></i>
            <h4>Fast & Free Shipping</h4>
            <p>
              Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet
              velit. Aliquam vulputate.
            </p>
          </div>
          <!--item 2-->
          <div class="item">
            <i class='bx bx-doughnut-chart'></i>
            <h4>24/7 Support</h4>
            <p>
              Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet
              velit. Aliquam vulputate.
            </p>
          </div>
        </div>

        <div class="itemsTwo">
          <!--item 3-->
          <div class="item">
            <i class='bx bxs-shopping-bag' ></i>
              <h4>Easy to Shop</h4>
              <p>
                Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet
                velit. Aliquam vulputate.
              </p>
          </div>
          <!--item 4-->
          <div class="item">
            <i class='bx bx-transfer-alt'></i>
            <h4>Hassle Free Returns</h4>
            <p>
              Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet
              velit. Aliquam vulputate.
            </p>
          </div>
        </div>
      
      </div>
      <div class="choose-image">
        <img src="images/why-choose-us-img.jpg"" alt="Image">
    </div>
  </div>
</section>
<!--End Section Choose-->
<!--Start section Testimonials-->
<section class="testimonials">
  <div class="testimonials-text">
    <h2 class="special-heading">What Our Clients Say?</h2>
  </div>
  <div class="container">
    <!--Box 1-->
    <div class='box'>
      <div class='image'>
        <img src="images/client1.jpg" alt=''/>
      </div>
      <div class='text'>
        <h4>Patrik White</h4>
        <span>CEO, Co-Founder, XYZ Inc.</span>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eligendi esse accusantium repellat minima nobis veritatis cupiditate. Fugit ipsa quisquam, facilis quia.</p>
      </div>
    </div>
    <!--Box 2-->
    <div class='box'>
      <div class='image'>
        <img src="images/client2.jpg" alt=''/>
      </div>
      <div class='text'>
        <h4>Zen Court</h4>
        <span>magna aliqua.Ut</span>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eligendi esse accusantium repellat minima nobis veritatis cupiditate. Fugit ipsa quisquam, facilis quia.</p>
      </div>
    </div>
    <!--Box 3-->
    <div class='box'>
      <div class='image'>
        <img src="images/person_3.jpg" alt=''/>
      </div>
      <div class='text'>
        <h4>LusDen</h4>
        <span>magna aliqua.Ut</span>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eligendi esse accusantium repellat minima nobis veritatis cupiditate. Fugit ipsa quisquam, facilis quia.</p>
      </div>
    </div>
    <!--Box 4-->
    <div class='box'>
      <div class='image'>
        <img src="images/person_4.jpg" alt=''/>
      </div>
      <div class='text'>
        <h4>Maria Jones</h4>
        <span>CEO, Co-Founder, XYZ Inc.</span>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eligendi esse accusantium repellat minima nobis veritatis cupiditate. Fugit ipsa quisquam, facilis quia.</p>
      </div>
    </div>
  </div>
</section>
<!--End section Testimonials-->
<!--start section content -->
<section class="contact" id="contact">
  <div class="container">
    <div class="content">
      <form class="form-contact" method="post" action="index.php">
        <div class="input">
          <input type="text" placeholder="Enter your first name" name="fname" />
          <input type="text" placeholder="Enter your last name" name="lname" />
        </div>
        <input type="email" placeholder="Enter your email" name="email" />
        <input type="text" placeholder="Enter your subject" name="subject" />
        <textarea placeholder="Enter your message" name="message"></textarea>
        <button type="submit" name="submitBtn">Send Message</button>
      </form>
      <div class="icon">
        <ul>
          <li>
            <i class="bx bx-map send"></i>
            43 Raymouth Rd. Baltemoer, London 3910
          </li>
          <li>
            <i class="bx bx-envelope send"></i>
            info@yourdomain.com
          </li>
          <li>
            <i class="bx bx-phone send"></i>
            +1 294 3925 3939
          </li>
        </ul>
      </div>
    </div>
  </div>
</section>
<!--end section content -->
<!--start section footer-->

<?php include 'layout/footer.php'; ?>
<!--end section footer-->

  <script src="mainJS.js"></script>
</body>
</html>
