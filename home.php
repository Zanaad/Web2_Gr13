<?php
$emailErr="";
$emailErr1="";
$logedin="";
$passwordErr="";

if(isset($_POST['login'])){
  $email=$_POST['email1'];
  $password=$_POST['password1'];


  if(empty($email)){
    $emailErr="email is required!";
    if (!preg_match("/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/", $email)) {
      $emailErr1="Email is not valid";
  } 
  }

  function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
  if (empty($_POST["password1"])) {
    $passwordErr = "Please enter your password";
} else {
    $password = test_input($_POST["password1"]);
    // Additional password validation
    if (strlen($password) < 8) {
        $passwordErr = "Password must be at least 8 characters long";
    } elseif (!preg_match("/[0-9]/", $password) || !preg_match("/[a-zA-Z]/", $password)) {
        $passwordErr = "Password must contain both letters and numbers";
    }
}


 // If there are no errors, proceed with registration
 if (empty($emailErr) && empty($passwordErr)) {
  // Here you would perform your registration logic
  // For demonstration purposes, let's just display a success message
 $logedin="you have logged in successfully";
  // You can redirect the user to a success page if needed
}
}

//pjesa e remember me



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bookstore website</title>
    <link rel="stylesheet" href="style1.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
 
</head>
<body>

<header class="container-fluid header-container">

  <div class="logo">
   <img src="./images/StoryShop.png" alt="Logo">
   <a href="home.html">LIBRARIA LIVING</a>
  </div>

  <div class="search-container">
    <form action="" class="search">
      <input type="text" class="search-bar" placeholder="Search...">
      <button class="search-button" type="submit"> <i class="fas fa-search search-icon"></i></button>
    </form>
  </div>

  <nav class="menu-container">
   <ul>
    <li><a href="#">Libra shqip</a>
     <ul>
      <li><a href="./fantazi.html">Fantazi</a></li>
      <li><a href="./novela.html">Novela</a></li>
      <li><a href="./romance.html">Romancë</a></li>
     </ul>
    </li>
    <li><a href="#">Libra të huaj</a>
     <ul>
      <li><a href="./english.html">Libra anglisht</a></li>
      <li><a href="./frengjisht.html">Libra frengjisht</a></li>
      <li><a href="./turqisht.html">Libra turqisht</a></li>
     </ul>
    </li>
    <li><a href="evente.html">Evente</a></li>
    <li><a href="./contact.html">Contact Us</a></li>
    <li><a href="#">My account</a><span class="far fa-user" style="font-size: 20px;"></span>
    <ul class="account-content">
      <li><a href="#" id="signup-btn">Sign Up</a></li>
      <li role="presentation"> <hr></li>
      <li><a href="#" id="login-btn">Log in</a></li>
      <li><a href="./cart.html">Cart</a></li>
      <li><a href="./wishlist.html">Wishlist</a></li>
     </ul>
    </li>
   
   <div class="cart-box">
   <div class="dropdown-cart">
          <button class="cart-toggle-btn">
            <i class="fas fa-shopping-cart"></i>
            <span class="cart-count">0</span>
          </button>
        <div class="cart-window">
            <div class="cart-items">
            </div>
            <div class="cart-total">
              <p>Total: <span id="cart-total-price">0€</span></p>
            </div>
            <div class="cart-footer">
              <button>View Bag</button>
              <button>Checkout</button>
            </div>
          </div>
        </div>
        </div>
        <div class="cart-box-1">
        <div class="dropdown-cart-1">
  <button class="cart-toggle-btn-1">
    <i class="fas fa-heart"></i>
    <span class="cart-count-1">0</span>
  </button>
<div class="cart-window-1">
    <div class="cart-items-1">
    </div>
    <div class="wishlist-footer">
      <button>View</button>
      <button id="move">Move to Bag</button>
    </div>
    </div>
  </div>
  </div>
  </ul>
  </nav>
 </header>
 <!--log in-->
 
 <div class="login-form-container">
     <div id="close-login-btn" class="fas fa-times"></div>
     <form  method="post" class="login-page">
        <h2>Login or continue as guest</h2>
        <input
            type="email"
            name="email1"
            placeholder="Email"
            class="form-group"
        />
        <span style="color: red;"><?php echo $emailErr;?></span>
        <span style="color: red;"><?php echo $emailErr1;?></span>
       
        <br><br>
        <input
            type="password"
            name="password1"
            placeholder="Password"
            class="form-group"
        />
        <span style="color:red"><?php echo $passwordErr;?></span>
        <input type="checkbox" name="check">remember me<br>
        
        <button type="submit" class="login-btn" name="login">Log in</button>
        <span ><?php echo $logedin;?></span>
        <button type="submit" class="guest-btn">Continue as guest</button>
        <div class="social-login">
            <button class="facebook-login">
                <i class="fab fa-facebook-square"></i> Log in with Facebook
            </button>
            <button class="google-login">
                <i class="fab fa-google"></i> Log in with Google
            </button>
        </div>
        <div class="go-to-register">
            <a href="">Don't have an account? <span id="signUp">Sign up now!</span></a>
        </div>
    </form>
</div>
<!--sign up form-->
<div class="signup-form-container">
      <div id="close-signup-btn" class="fas fa-times"></div>
      <form action="signup.php" method="post" class="login-page">
        <h2>Create an account</h2>
        <div class="social-login">
          <button class="facebook-login">
            <i class="fab fa-facebook-square"></i> Log in with Facebook
          </button>

          <button class="google-login">
            <i class="fab fa-google"></i> Log in with Google
          </button>
        </div>
        <input
          type="text"
          id="name"
          name="name"
          placeholder="First Name"
          class="form-group"
        />
      
        <input
          type="text"
          id="surname"
          name="lastname"
          placeholder="Last Name"
          class="form-group"
        />
        
        <input type="email" name="email" id="email" placeholder="Email" class="form-group" />
       
        <input
          type="password"
          id="password"
          placeholder="Password"
          name="password"
          class="form-group"
        />
        <input
          type="password"
          id="confirm-password"
          name="confirmPassword"
          placeholder="Confirm Password"
          class="form-group"
        />
        
        <button type="submit" name="submit" class="signup-btn">Sign Up</button>
        <button type="submit" class="guest-btn">Continue as guest</button>
      </form>
    </div>

<div class="background-section">
  <!-- Fotoja e background shkon ne kete pjese. E vendosim ne pjesen e css -->
</div>

  <div class="container-I">
   <a href="#" ><img style="height: 230px;width: 400px; margin-right: 30px;float: left;" src="images/epara.png" alt="img"></a>
   <a href="#" ><img class="img-1" src="images/oncert.png" alt="img"></a>
   <a href="#" ><img style="height: 230px;width: 400px;margin-left: 40px;float: right;" src="images/edyta.png" alt="img"></a>
    </div>
   


    <nav class="navbar-2">
     
      <ul>
        <li style="font-weight: bold;font-size: 20px; padding-right: 50px;text-shadow: 1px 1px 2px #000000;">Titujt e rinj</li>
        <li style="color: red; font-weight: bold;">Shqip</li>
        <li>Te huaj</li>
        <li style="padding-left: 700px;"><button type="button" class="btn btn-outline-danger">More</button></li>
      </ul>
</nav>

<div id="carouselExample1" class="carousel slide" data-bs-theme="dark">
  <div style="margin-bottom: 50px;" class="carousel-inner">
    <div class="carousel-item active">
<div class="wrapper">
      <div class="book-cards">
      <div class="book-card">
        <img src="./images/hajdefolimmeveten.png" alt="" />
        <div class="content">
          <div class="star-heart">
            <div class="stars" id="HajdeFolimMeVeten">
              <i class="far fa-star" data-value="1"></i>
              <i class="far fa-star" data-value="2"></i>
              <i class="far fa-star" data-value="3"></i>
              <i class="far fa-star" data-value="4"></i>
              <i class="far fa-star" data-value="5"></i>
            </div>
             <button class="btn btn-outline-danger">
              <i class="fas fa-heart"></i>
          </button>
          </div>
          <h5>Hajde folim me veten</h5>
          <h6>Autori i perbashket</h6>
          <h5 class="price">10.00€</h5>
          <div class="btn">
            <button>Shto në shportë</button>
          </div>
        </div>
      </div>

      <div class="book-card">
        <img src="./images/klubi.png" alt="" />

        <div class="content">
          <div class="star-heart">
            <div class="stars" id="Klubi5">
              <i class="far fa-star" data-value="1"></i>
              <i class="far fa-star" data-value="2"></i>
              <i class="far fa-star" data-value="3"></i>
              <i class="far fa-star" data-value="4"></i>
              <i class="far fa-star" data-value="5"></i>
            </div>
         <button class="btn btn-outline-danger">
              <i class="fas fa-heart"></i>
          </button>
          </div>
          <h5>Klubi 5</h5>
          <h6>Robin Sharma</h6>
          <h5 class="price">12.50€</h5>
          <div class="btn">
            <button>Shto në shportë</button>
          </div>
        </div>
      </div>

      <div class="book-card">
        <img src="./images/murgu.png" alt="" />

        <div class="content">
          <div class="star-heart">
            <div class="stars" id="MurguQeShitiFerrarin">
              <i class="far fa-star" data-value="1"></i>
              <i class="far fa-star" data-value="2"></i>
              <i class="far fa-star" data-value="3"></i>
              <i class="far fa-star" data-value="4"></i>
              <i class="far fa-star" data-value="5"></i>
            </div>
         <button class="btn btn-outline-danger">
              <i class="fas fa-heart"></i>
          </button>
          </div>
          <h5>Murgu qe shiti ferrarin</h5>
          <h6>Robin Sharma</h6>
          <h5 class="price">7.00€</h5>
          <div class="btn">
            <button>Shto në shportë</button>
          </div>
        </div>
      </div>

      <div class="book-card">
        <img src="./images/egojaeshtearmiku.png" alt="" />

        <div class="content">
          <div class="star-heart">
            <div class="stars" id="EgojaEshteArmiku">
              <i class="far fa-star" data-value="1"></i>
              <i class="far fa-star" data-value="2"></i>
              <i class="far fa-star" data-value="3"></i>
              <i class="far fa-star" data-value="4"></i>
              <i class="far fa-star" data-value="5"></i>
            </div>
         <button class="btn btn-outline-danger">
              <i class="fas fa-heart"></i>
          </button>
          </div>
          <h5>Egoja eshte armiku</h5>
          <h6>Joanne Rowling</h6>
          <h5 class="price">13.50€</h5>
          <div class="btn">
            <button>Shto në shportë</button>
          </div>
        </div>
      </div>

      </div>
      </div>
    </div>

    <div class="carousel-item">
      <div class="wrapper">
         <div class="book-cards">
      <div class="book-card">
        <img src="./images/psefleme.png" alt="" />
        <div class="content">
          <div class="star-heart">
            <div class="stars" id="PseFleme">
              <i class="far fa-star" data-value="1"></i>
              <i class="far fa-star" data-value="2"></i>
              <i class="far fa-star" data-value="3"></i>
              <i class="far fa-star" data-value="4"></i>
              <i class="far fa-star" data-value="5"></i>
            </div>
         <button class="btn btn-outline-danger">
              <i class="fas fa-heart"></i>
          </button>
          </div>
          <h5>Pse Fleme</h5>
          <h6>Mathew Walker</h6>
          <h5 class="price">15.00€</h5>
          <div class="btn">
            <button>Shto në shportë</button>
          </div>
        </div>
      </div>

      <div class="book-card">
        <img src="./images/ruajmprehtesine.png" alt="" />

        <div class="content">
          <div class="star-heart">
            <div class="stars" id="RuajMprehtesine">
              <i class="far fa-star" data-value="1"></i>
              <i class="far fa-star" data-value="2"></i>
              <i class="far fa-star" data-value="3"></i>
              <i class="far fa-star" data-value="4"></i>
              <i class="far fa-star" data-value="5"></i>
            </div>
         <button class="btn btn-outline-danger">
              <i class="fas fa-heart"></i>
          </button>
          </div>
          <h5>Ruaj Mprehtesine</h5>
          <h6>Dr. Sanjay Gupta</h6>
          <h5 class="price">12.50€</h5>
          <div class="btn">
            <button>Shto në shportë</button>
          </div>
        </div>
      </div>

      <div class="book-card">
        <img src="./images/shitesiikepuceve.png" alt="" />

        <div class="content">
          <div class="star-heart">
            <div class="stars" id="ShitesiKepuceve">
              <i class="far fa-star" data-value="1"></i>
              <i class="far fa-star" data-value="2"></i>
              <i class="far fa-star" data-value="3"></i>
              <i class="far fa-star" data-value="4"></i>
              <i class="far fa-star" data-value="5"></i>
            </div>
         <button class="btn btn-outline-danger">
              <i class="fas fa-heart"></i>
          </button>
          </div>
          <h5>Shitesi i Kepuceve</h5>
          <h6>Phil Knight</h6>
          <h5 class="price">13.00€</h5>
          <div class="btn">
            <button>Shto në shportë</button>
          </div>
        </div>
      </div>

      <div class="book-card">
        <img src="./images/divergjentja.png" alt="" />

        <div class="content">
          <div class="star-heart">
            <div class="stars" id="Divergjentja">
              <i class="far fa-star" data-value="1"></i>
              <i class="far fa-star" data-value="2"></i>
              <i class="far fa-star" data-value="3"></i>
              <i class="far fa-star" data-value="4"></i>
              <i class="far fa-star" data-value="5"></i>
            </div>
         <button class="btn btn-outline-danger">
              <i class="fas fa-heart"></i>
          </button>
          </div>
          <h5>Divergjentja</h5>
          <h6>Veronica Roth</h6>
          <h5 class="price">13.50€</h5>
          <div class="btn">
            <button>Shto në shportë</button>
          </div>
        </div>
      </div>
      
      </div>
        </div>
    </div>
    
    <div class="carousel-item">
      <div class="wrapper">
         <div class="book-cards">
      <div class="book-card">
        <img src="./images/stevejobs.png" alt="" />
        <div class="content">
          <div class="star-heart">
            <div class="stars" id="SteveJobs">
              <i class="far fa-star" data-value="1"></i>
              <i class="far fa-star" data-value="2"></i>
              <i class="far fa-star" data-value="3"></i>
              <i class="far fa-star" data-value="4"></i>
              <i class="far fa-star" data-value="5"></i>
            </div>
         <button class="btn btn-outline-danger">
              <i class="fas fa-heart"></i>
          </button>
          </div>
          <h5>Steve Jobs</h5>
          <h6>Walter Isaacson</h6>
          <h5 class="price">16.00€</h5>
          <div class="btn">
            <button>Shto në shportë</button>
          </div>
        </div>
      </div>

      <div class="book-card">
        <img src="./images/frida.png" alt="" />

        <div class="content">
          <div class="star-heart">
            <div class="stars" id="Frida">
              <i class="far fa-star" data-value="1"></i>
              <i class="far fa-star" data-value="2"></i>
              <i class="far fa-star" data-value="3"></i>
              <i class="far fa-star" data-value="4"></i>
              <i class="far fa-star" data-value="5"></i>
            </div>
         <button class="btn btn-outline-danger">
              <i class="fas fa-heart"></i>
          </button>
          </div>
          <h5>Frida</h5>
          <h6>Hayden Herrera</h6>
          <h5 class="price">12.50€</h5>
          <div class="btn">
            <button>Shto në shportë</button>
          </div>
        </div>
      </div>

      <div class="book-card">
        <img src="./images/becoming.png" alt="" />

        <div class="content">
          <div class="star-heart">
            <div class="stars" id="Becoming">
              <i class="far fa-star" data-value="1"></i>
              <i class="far fa-star" data-value="2"></i>
              <i class="far fa-star" data-value="3"></i>
              <i class="far fa-star" data-value="4"></i>
              <i class="far fa-star" data-value="5"></i>
            </div>
         <button class="btn btn-outline-danger">
              <i class="fas fa-heart"></i>
          </button>
          </div>
          <h5>Becoming</h5>
          <h6>Michelle Obama</h6>
          <h5 class="price">13.00€</h5>
          <div class="btn">
            <button>Shto në shportë</button>
          </div>
        </div>
      </div>

      <div class="book-card">
        <img src="./images/five_feet_apart.jpg" alt="" />

        <div class="content">
          <div class="star-heart">
            <div class="stars" id="FiveFeetApart">
              <i class="far fa-star" data-value="1"></i>
              <i class="far fa-star" data-value="2"></i>
              <i class="far fa-star" data-value="3"></i>
              <i class="far fa-star" data-value="4"></i>
              <i class="far fa-star" data-value="5"></i>
            </div>
         <button class="btn btn-outline-danger">
              <i class="fas fa-heart"></i>
          </button>
          </div>
          <h5>Five Feet Apart</h5>
          <h6>Rachael Lippincott</h6>
          <h5 class="price">13.50€</h5>
          <div class="btn">
            <button>Shto në shportë</button>
          </div>
        </div>
      </div>
      
      </div>
        </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample1" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExample1" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<hr></hr>
<!--carousel 2-->

<nav class="navbar-2">
     
  <ul>
    <li style="font-weight: bold;font-size: 20px; padding-right: 50px;text-shadow: 1px 1px 2px #000000;">Best Sellers</li>
    <li style="color: red; font-weight: bold;">Shqip</li>
    <li>Te huaj</li>
    <li style="padding-left: 700px;"><button type="button" class="btn btn-outline-danger">More</button></li>
  </ul>
</nav>

<div id="carouselExample2" class="carousel slide" data-bs-theme="dark">
<div style="margin-bottom: 50px;" class="carousel-inner">
<div class="carousel-item active">
<div class="wrapper">
  <div class="book-cards">
      <div class="book-card">
        <img src="./images/1984.png" alt="" />
        <div class="content">
          <div class="star-heart">
            <div class="stars" id="1984">
              <i class="far fa-star" data-value="1"></i>
              <i class="far fa-star" data-value="2"></i>
              <i class="far fa-star" data-value="3"></i>
              <i class="far fa-star" data-value="4"></i>
              <i class="far fa-star" data-value="5"></i>
            </div>
         <button class="btn btn-outline-danger">
              <i class="fas fa-heart"></i>
          </button>
          </div>
          <h5>1984</h5>
          <h6>George Orwell</h6>
          <h5 class="price">9.00€</h5>
          <div class="btn">
            <button>Shto në shportë</button>
          </div>
        </div>
      </div>

      <div class="book-card">
        <img src="./images/bibliotekaemesnates.png" alt="" />

        <div class="content">
          <div class="star-heart">
            <div class="stars" id="BiblotekaMesnates">
              <i class="far fa-star" data-value="1"></i>
              <i class="far fa-star" data-value="2"></i>
              <i class="far fa-star" data-value="3"></i>
              <i class="far fa-star" data-value="4"></i>
              <i class="far fa-star" data-value="5"></i>
            </div>
         <button class="btn btn-outline-danger">
              <i class="fas fa-heart"></i>
          </button>
          </div>
          <h5>Bibloteka e Mesnates</h5>
          <h6>Matt Haig</h6>
          <h5 class="price">10.00€</h5>
          <div class="btn">
            <button>Shto në shportë</button>
          </div>
        </div>
      </div>

      <div class="book-card">
        <img src="./images/mountain.png" alt="" />

        <div class="content">
          <div class="star-heart">
            <div class="stars" id="MaliJeTi">
              <i class="far fa-star" data-value="1"></i>
              <i class="far fa-star" data-value="2"></i>
              <i class="far fa-star" data-value="3"></i>
              <i class="far fa-star" data-value="4"></i>
              <i class="far fa-star" data-value="5"></i>
            </div>
         <button class="btn btn-outline-danger">
              <i class="fas fa-heart"></i>
          </button>
          </div>
          <h5>Mali je ti</h5>
          <h6>Brianna West</h6>
          <h5 class="price">10.00€</h5>
          <div class="btn">
            <button>Shto në shportë</button>
          </div>
        </div>
      </div>

      <div class="book-card">
        <img src="./images/all_the_bright_places.jpg" alt="" />

        <div class="content">
          <div class="star-heart">
            <div class="stars" id="AllTheBrightPlaces">
              <i class="far fa-star" data-value="1"></i>
              <i class="far fa-star" data-value="2"></i>
              <i class="far fa-star" data-value="3"></i>
              <i class="far fa-star" data-value="4"></i>
              <i class="far fa-star" data-value="5"></i>
            </div>
         <button class="btn btn-outline-danger">
              <i class="fas fa-heart"></i>
          </button>
          </div>
          <h5>All The Bright Places</h5>
          <h6>Jennifer Niven</h6>
          <h5 class="price">13.00€</h5>
          <div class="btn">
            <button>Shto në shportë</button>
          </div>
        </div>
      </div>
  
  </div>
</div>
</div>
<div class="carousel-item">
  <div class="wrapper">
   
    <div class="book-cards">
      <div class="book-card">
        <img src="./images/intelegjencaartificiale.png" alt="" />
        <div class="content">
          <div class="star-heart">
            <div class="stars" id="IntelegjencaArtificiale">
              <i class="far fa-star" data-value="1"></i>
              <i class="far fa-star" data-value="2"></i>
              <i class="far fa-star" data-value="3"></i>
              <i class="far fa-star" data-value="4"></i>
              <i class="far fa-star" data-value="5"></i>
            </div>
         <button class="btn btn-outline-danger">
              <i class="fas fa-heart"></i>
          </button>
          </div>
          <h5>Intelegjenca Artificiale</h5>
          <h6>Matt Burges</h6>
          <h5 class="price">5.00€</h5>
          <div class="btn">
            <button>Shto në shportë</button>
          </div>
        </div>
      </div>

      <div class="book-card">
        <img src="./images/mendodhepasurohu.png" alt="" />

        <div class="content">
          <div class="star-heart">
            <div class="stars" id="MendoDhePasurohu">
              <i class="far fa-star" data-value="1"></i>
              <i class="far fa-star" data-value="2"></i>
              <i class="far fa-star" data-value="3"></i>
              <i class="far fa-star" data-value="4"></i>
              <i class="far fa-star" data-value="5"></i>
            </div>
         <button class="btn btn-outline-danger">
              <i class="fas fa-heart"></i>
          </button>
          </div>
          <h5>Mendo Dhe Pasurohu</h5>
          <h6>Napolean Hill</h6>
          <h5 class="price">7.50€</h5>
          <div class="btn">
            <button>Shto në shportë</button>
          </div>
        </div>
      </div>

      <div class="book-card">
        <img src="./images/prgjteshkurtaperpytje.png" alt="" />

        <div class="content">
          <div class="star-heart">
            <div class="stars" id="PergjigjeTeShkurta">
              <i class="far fa-star" data-value="1"></i>
              <i class="far fa-star" data-value="2"></i>
              <i class="far fa-star" data-value="3"></i>
              <i class="far fa-star" data-value="4"></i>
              <i class="far fa-star" data-value="5"></i>
            </div>
         <button class="btn btn-outline-danger">
              <i class="fas fa-heart"></i>
          </button>
          </div>
          <h5>Pergjigje te shkurta per pyetje madhore</h5>
          <h6>Joanne Rowling</h6>
          <h5 class="price">8.00€</h5>
          <div class="btn">
            <button>Shto në shportë</button>
          </div>
        </div>
      </div>

      <div class="book-card">
        <img src="./images/gjuetariibalonave.png" alt="" />

        <div class="content">
          <div class="star-heart">
            <div class="stars" id="GjuetariBalonave">
              <i class="far fa-star" data-value="1"></i>
              <i class="far fa-star" data-value="2"></i>
              <i class="far fa-star" data-value="3"></i>
              <i class="far fa-star" data-value="4"></i>
              <i class="far fa-star" data-value="5"></i>
            </div>
         <button class="btn btn-outline-danger">
              <i class="fas fa-heart"></i>
          </button>
          </div>
          <h5>Gjuetari i Balonave</h5>
          <h6>Khaled Hosseini</h6>
          <h5 class="price">9.00€</h5>
          <div class="btn">
            <button>Shto në shportë</button>
          </div>
        </div>
      </div>
      
      </div>
    </div>
</div>
<div class="carousel-item">
  <div class="wrapper">
     <div class="book-cards">
      <div class="book-card">
        <img src="./images/mindset.png" alt="" />
        <div class="content">
          <div class="star-heart">
            <div class="stars" id="Mindset">
              <i class="far fa-star" data-value="1"></i>
              <i class="far fa-star" data-value="2"></i>
              <i class="far fa-star" data-value="3"></i>
              <i class="far fa-star" data-value="4"></i>
              <i class="far fa-star" data-value="5"></i>
            </div>
         <button class="btn btn-outline-danger">
              <i class="fas fa-heart"></i>
          </button>
          </div>
          <h5>Mindset</h5>
          <h6>Dr. Carol S Dweck</h6>
          <h5 class="price">16.80€</h5>
          <div class="btn">
            <button>Shto në shportë</button>
          </div>
        </div>
      </div>

      <div class="book-card">
        <img src="./images/fermakafsheve.png" alt="" />

        <div class="content">
          <div class="star-heart">
            <div class="stars" id="FermaKafsheve">
              <i class="far fa-star" data-value="1"></i>
              <i class="far fa-star" data-value="2"></i>
              <i class="far fa-star" data-value="3"></i>
              <i class="far fa-star" data-value="4"></i>
              <i class="far fa-star" data-value="5"></i>
            </div>
         <button class="btn btn-outline-danger">
              <i class="fas fa-heart"></i>
          </button>
          </div>
          <h5>Ferma e Kafsheve</h5>
          <h6>George Owell</h6>
          <h5 class="price">5.00€</h5>
          <div class="btn">
            <button>Shto në shportë</button>
          </div>
        </div>
      </div>

      <div class="book-card">
        <img src="./images/mindreader.png" alt="" />

        <div class="content">
          <div class="star-heart">
            <div class="stars" id="MindReader">
              <i class="far fa-star" data-value="1"></i>
              <i class="far fa-star" data-value="2"></i>
              <i class="far fa-star" data-value="3"></i>
              <i class="far fa-star" data-value="4"></i>
              <i class="far fa-star" data-value="5"></i>
            </div>
         <button class="btn btn-outline-danger">
              <i class="fas fa-heart"></i>
          </button>
          </div>
          <h5>Mind Reader</h5>
          <h6>David Liebeman</h6>
          <h5 class="price">8.00€</h5>
          <div class="btn">
            <button>Shto në shportë</button>
          </div>
        </div>
      </div>

      <div class="book-card">
        <img src="./images/thealchemist.png" alt="" />

        <div class="content">
          <div class="star-heart">
            <div class="stars" id="TheAlchemist">
              <i class="far fa-star" data-value="1"></i>
              <i class="far fa-star" data-value="2"></i>
              <i class="far fa-star" data-value="3"></i>
              <i class="far fa-star" data-value="4"></i>
              <i class="far fa-star" data-value="5"></i>
            </div>
         <button class="btn btn-outline-danger">
              <i class="fas fa-heart"></i>
          </button>
          </div>
          <h5>The Alchemist</h5>
          <h6>Paulo Coelho</h6>
          <h5 class="price">9.00€</h5>
          <div class="btn">
            <button>Shto në shportë</button>
          </div>
        </div>
      </div>
      
      </div>
    </div>
</div>
</div>
<button class="carousel-control-prev" type="button" data-bs-target="#carouselExample2" data-bs-slide="prev">
<span class="carousel-control-prev-icon" aria-hidden="true"></span>
<span class="visually-hidden">Previous</span>
</button>
<button class="carousel-control-next" type="button" data-bs-target="#carouselExample2" data-bs-slide="next">
<span class="carousel-control-next-icon" aria-hidden="true"></span>
<span class="visually-hidden">Next</span>
</button>
</div>

<!--carouseli 3-->
<hr></hr>
<nav class="navbar-2">
     
  <ul>
    <li style="font-weight: bold;font-size: 20px; padding-right: 50px;text-shadow: 1px 1px 2px #000000;">Librat e Muajit</li>
    <li style="color: red; font-weight: bold;">Shqip</li>
    <li>Te huaj</li>
    <li style="padding-left: 700px;"><button type="button" class="btn btn-outline-danger">More</button></li>
  </ul>
</nav>

<div id="carouselExample3" class="carousel slide" data-bs-theme="dark">
<div style="margin-bottom: 50px;" class="carousel-inner">
<div class="carousel-item active">
<div class="wrapper">
    <div class="book-cards">
      <div class="book-card">
        <img src="./images/thesecret.png" alt="" />
        <div class="content">
          <div class="star-heart">
            <div class="stars" id="TheSecret">
              <i class="far fa-star" data-value="1"></i>
              <i class="far fa-star" data-value="2"></i>
              <i class="far fa-star" data-value="3"></i>
              <i class="far fa-star" data-value="4"></i>
              <i class="far fa-star" data-value="5"></i>
            </div>
         <button class="btn btn-outline-danger">
              <i class="fas fa-heart"></i>
          </button>
          </div>
          <h5>The Secret</h5>
          <h6>Rhonda Burnes</h6>
          <h5 class="price">8.00€</h5>
          <div class="btn">
            <button>Shto në shportë</button>
          </div>
        </div>
      </div>

      <div class="book-card">
        <img src="./images/tijeplacebo.png" alt="" />

        <div class="content">
          <div class="star-heart">
            <div class="stars" id="TiJePlacebo">
              <i class="far fa-star" data-value="1"></i>
              <i class="far fa-star" data-value="2"></i>
              <i class="far fa-star" data-value="3"></i>
              <i class="far fa-star" data-value="4"></i>
              <i class="far fa-star" data-value="5"></i>
            </div>
         <button class="btn btn-outline-danger">
              <i class="fas fa-heart"></i>
          </button>
          </div>
          <h5>Ti je placebo</h5>
          <h6>Joanne Rowling</h6>
          <h5 class="price">7.40€</h5>
          <div class="btn">
            <button>Shto në shportë</button>
          </div>
        </div>
      </div>

      <div class="book-card">
        <img src="./images/trurifamijes.png" alt="" />

        <div class="content">
          <div class="star-heart">
            <div class="stars" id="TruriFemijes">
              <i class="far fa-star" data-value="1"></i>
              <i class="far fa-star" data-value="2"></i>
              <i class="far fa-star" data-value="3"></i>
              <i class="far fa-star" data-value="4"></i>
              <i class="far fa-star" data-value="5"></i>
            </div>
         <button class="btn btn-outline-danger">
              <i class="fas fa-heart"></i>
          </button>
          </div>
          <h5>Truri i femijes</h5>
          <h6>Daniel J.Siegel</h6>
          <h5 class="price">8.40€</h5>
          <div class="btn">
            <button>Shto në shportë</button>
          </div>
        </div>
      </div>

      <div class="book-card">
        <img src="./images/mockingbird.png" alt="" />

        <div class="content">
          <div class="star-heart">
            <div class="stars" id="MockingBird">
              <i class="far fa-star" data-value="1"></i>
              <i class="far fa-star" data-value="2"></i>
              <i class="far fa-star" data-value="3"></i>
              <i class="far fa-star" data-value="4"></i>
              <i class="far fa-star" data-value="5"></i>
            </div>
         <button class="btn btn-outline-danger">
              <i class="fas fa-heart"></i>
          </button>
          </div>
          <h5>Mockingbird</h5>
          <h6>Kathryn Erskine</h6>
          <h5 class="price">10.00€</h5>
          <div class="btn">
            <button>Shto në shportë</button>
          </div>
        </div>
      </div>
      
      </div>
  </div>
</div>
<div class="carousel-item">
  <div class="wrapper">
    <div class="book-cards">
      <div class="book-card">
        <img src="./images/teoriaegjithqkaje.png" alt="" />
        <div class="content">
          <div class="star-heart">
            <div class="stars" id="TeoriaGjithckaje">
              <i class="far fa-star" data-value="1"></i>
              <i class="far fa-star" data-value="2"></i>
              <i class="far fa-star" data-value="3"></i>
              <i class="far fa-star" data-value="4"></i>
              <i class="far fa-star" data-value="5"></i>
            </div>
         <button class="btn btn-outline-danger">
              <i class="fas fa-heart"></i>
          </button>
          </div>
          <h5>Teoria e gjithckaje</h5>
          <h6>Stephen Hawking</h6>
          <h5 class="price">8.00€</h5>
          <div class="btn">
            <button>Shto në shportë</button>
          </div>
        </div>
      </div>

      <div class="book-card">
        <img src="./images/everythingis.png" alt="" />

        <div class="content">
          <div class="star-heart">
            <div class="stars" id="Everything">
              <i class="far fa-star" data-value="1"></i>
              <i class="far fa-star" data-value="2"></i>
              <i class="far fa-star" data-value="3"></i>
              <i class="far fa-star" data-value="4"></i>
              <i class="far fa-star" data-value="5"></i>
            </div>
         <button class="btn btn-outline-danger">
              <i class="fas fa-heart"></i>
          </button>
          </div>
          <h5>Everything is f*cked</h5>
          <h6>Mark Manson</h6>
          <h5 class="price">10.00€</h5>
          <div class="btn">
            <button>Shto në shportë</button>
          </div>
        </div>
      </div>

      <div class="book-card">
        <img src="./images/beforewesaygoodbye.png" alt="" />

        <div class="content">
          <div class="star-heart">
            <div class="stars" id="BeforeWeSayGoodbye">
              <i class="far fa-star" data-value="1"></i>
              <i class="far fa-star" data-value="2"></i>
              <i class="far fa-star" data-value="3"></i>
              <i class="far fa-star" data-value="4"></i>
              <i class="far fa-star" data-value="5"></i>
            </div>
         <button class="btn btn-outline-danger">
              <i class="fas fa-heart"></i>
          </button>
          </div>
          <h5>Before We Say Goodbye</h5>
          <h6>Toshikazu Rawaguchi</h6>
          <h5 class="price">14.30€</h5>
          <div class="btn">
            <button>Shto në shportë</button>
          </div>
        </div>
      </div>

      <div class="book-card">
        <img src="./images/mengjestetiffany.png" alt="" />

        <div class="content">
          <div class="star-heart">
            <div class="stars" id="MengjesiTeTiffany">
              <i class="far fa-star" data-value="1"></i>
              <i class="far fa-star" data-value="2"></i>
              <i class="far fa-star" data-value="3"></i>
              <i class="far fa-star" data-value="4"></i>
              <i class="far fa-star" data-value="5"></i>
            </div>
         <button class="btn btn-outline-danger">
              <i class="fas fa-heart"></i>
          </button>
          </div>
          <h5>Mengjesi Te Tiffany</h5>
          <h6>truman Capote</h6>
          <h5 class="price">13.50€</h5>
          <div class="btn">
            <button>Shto në shportë</button>
          </div>
        </div>
      </div>
      
      </div>
      
    </div>
</div>
<div class="carousel-item">
  <div class="wrapper">
   
       <div class="book-cards">
      <div class="book-card">
        <img src="./images/artiibrishte.png" alt="" />
        <div class="content">
          <div class="star-heart">
            <div class="stars" id="ArtiBrishte">
              <i class="far fa-star" data-value="1"></i>
              <i class="far fa-star" data-value="2"></i>
              <i class="far fa-star" data-value="3"></i>
              <i class="far fa-star" data-value="4"></i>
              <i class="far fa-star" data-value="5"></i>
            </div>
         <button class="btn btn-outline-danger">
              <i class="fas fa-heart"></i>
          </button>
          </div>
          <h5>Arti i brishte</h5>
          <h6>Mark Manson</h6>
          <h5 class="price">16.00€</h5>
          <div class="btn">
            <button>Shto në shportë</button>
          </div>
        </div>
      </div>

      <div class="book-card">
        <img src="./images/mbaronmene.png" alt="" />

        <div class="content">
          <div class="star-heart">
            <div class="stars" id="MbaronMeNe">
              <i class="far fa-star" data-value="1"></i>
              <i class="far fa-star" data-value="2"></i>
              <i class="far fa-star" data-value="3"></i>
              <i class="far fa-star" data-value="4"></i>
              <i class="far fa-star" data-value="5"></i>
            </div>
         <button class="btn btn-outline-danger">
              <i class="fas fa-heart"></i>
          </button>
          </div>
          <h5>Mbaron Me Ne</h5>
          <h6>Colleen Hoover</h6>
          <h5 class="price">12.50€</h5>
          <div class="btn">
            <button>Shto në shportë</button>
          </div>
        </div>
      </div>

      <div class="book-card">
        <img src="./images/ishulliipemevetezhdukura.png" alt="" />

        <div class="content">
          <div class="star-heart">
            <div class="stars" id="Ishulli">
              <i class="far fa-star" data-value="1"></i>
              <i class="far fa-star" data-value="2"></i>
              <i class="far fa-star" data-value="3"></i>
              <i class="far fa-star" data-value="4"></i>
              <i class="far fa-star" data-value="5"></i>
            </div>
         <button class="btn btn-outline-danger">
              <i class="fas fa-heart"></i>
          </button>
          </div>
          <h5>Ishulli i pemeve te zhdukura</h5>
          <h6>Elif Shafak</h6>
          <h5 class="price">13.00€</h5>
          <div class="btn">
            <button>Shto në shportë</button>
          </div>
        </div>
      </div>

      <div class="book-card">
        <img src="./images/PetitePrince.png" alt="" />

        <div class="content">
          <div class="star-heart">
            <div class="stars" id="Harry-Potter3">
              <i class="far fa-star" data-value="1"></i>
              <i class="far fa-star" data-value="2"></i>
              <i class="far fa-star" data-value="3"></i>
              <i class="far fa-star" data-value="4"></i>
              <i class="far fa-star" data-value="5"></i>
            </div>
         <button class="btn btn-outline-danger">
              <i class="fas fa-heart"></i>
          </button>
          </div>
          <h5>Princi i vogel</h5>
          <h6>Antoine de Saint-Exupery</h6>
          <h5 class="price">10.50€</h5>
          <div class="btn">
            <button>Shto në shportë</button>
          </div>
        </div>
      </div>
      
      </div>
    </div>
</div>
</div>
<button class="carousel-control-prev" type="button" data-bs-target="#carouselExample3" data-bs-slide="prev">
<span class="carousel-control-prev-icon" aria-hidden="true"></span>
<span class="visually-hidden">Previous</span>
</button>
<button class="carousel-control-next" type="button" data-bs-target="#carouselExample3" data-bs-slide="next">
<span class="carousel-control-next-icon" aria-hidden="true"></span>
<span class="visually-hidden">Next</span>
</button>
</div>

<!--footeri-->
<footer>
  <div class="content">
    <div class="top">
      <div class="logo-details">
        <i class="fab fa-slack"></i>
        <span class="logo_name">Libraria Living</span>
      </div>
      <div class="media-icons">
        <a href="https://www.facebook.com" target="_blank"><i class="fab fa-facebook-f"></i></a>
        <a href="https://www.twitter.com" target="_blank"><i class="fab fa-twitter"></i></a>
        <a href="https://www.instagram.com" target="_blank"><i class="fab fa-instagram"></i></a>
        
      </div>
    </div>
    <div class="link-boxes">
      <ul class="box">
        <li class="link_name">LIBRARIA LIVING</li>
        <li><a href="#">Bulevardi Nene Tereza</a></li>
        <li><a href="mailto:bookstore@gmail.com">bookstore@gmail.com</a></li>
        <li><a href="callto:+383 45 647 763">+383 45 647 763</a></li>
     
      </ul>
      <ul class="box">
        <li class="link_name">Te duhet ndihme</li>
        <li><a href="about.html">Rreth nesh</a></li>
        <li><a href="contact.html">Na kontakto</a></li>
        <li class="link_name">Kontakto <abbr title="Kontakto sherbimin e konsumatorit">SHEK</abbr></li>
      </ul>
    
      <ul class="box input-box">
        <li class="link_name">Subscribe</li>
        <li><input type="text" placeholder="Enter your email"></li>
      </ul>
    </div>
  </div>
  </footer>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="script.js"></script>

</body>
</html>
