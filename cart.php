<?php
session_start();
if (!isset($_SESSION['users'])) {
  header("Location: login.php?message=Please log in to access your cart.");
  exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Cart</title>
  <link rel="stylesheet" href="style.css" />
  <link rel="stylesheet" href="checkout.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
  <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" />
  <style>
    .header {
      margin-bottom: 500px;
    }

    .cart-container {
      margin-top: 100px;
      margin-left: 60px;
      display: flex;
    }

    .book-card {
      width: 1000px;
      height: 340px;
      display: flex;
      justify-content: space-between;
      align-items: center;
      border: 1px solid #ccc;
      padding: 60px;
    }

    .book-card:hover {
      border: 1px solid #ccc;
    }

    .cart-footer-1 {
      display: block;
      justify-content: center;
      align-items: center;
      margin: 15px;
      padding: 60px;
      border: 1px solid #ccc;
      border-radius: 10px;
      height: 340px;
    }

    .cart-footer-1 button {
      border: 1px solid #b8b4b4;
      box-sizing: border-box;
      background-color: #fff;
      border-radius: 2px;
      font-weight: 700;
      font-size: 16px;
      text-align: center;
      color: #7a7777;
      padding: 10px 60px;
      margin-top: 10px;
    }

    .cart-footer-1 button:hover {
      background-color: #032161;
      color: #fff;
    }
  </style>
</head>

<body>
  <header class="container-fluid header-container">

    <div class="logo">
      <img src="./images/StoryShop.png" alt="Logo">
      <a href="home.php">LIBRARIA LIVING</a>
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
            <li><a href="./fantazi.php">Fantazi</a></li>
            <li><a href="./novela.php">Novela</a></li>
            <li><a href="./romance.php">Romancë</a></li>
          </ul>
        </li>
        <li><a href="#">Libra të huaj</a>
          <ul>
            <li><a href="./english.php">Libra anglisht</a></li>
            <li><a href="./frengjisht.php">Libra frengjisht</a></li>
            <li><a href="./turqisht.php">Libra turqisht</a></li>
          </ul>
        </li>
        <li><a href="evente.php">Evente</a></li>
        <li><a href="./contact.php">Contact Us</a></li>
        <li><a href="#">
            <?php
            if (isset($_SESSION['user_name'])) {
              echo $_SESSION['user_name'];
            } else {
              echo "My account";
            }
            ?>
          </a><span class="far fa-user" style="font-size: 20px; <?php echo isset($_COOKIE['logged_in']) ? 'color: darkblue;' : ''; ?>"></span>
          <ul class="account-content">
            <?php if (isset($_SESSION['user_name'])) : ?>
              <li><a href="logout.php">Log Out</a></li>
            <?php else : ?>
              <li><a href="./signup.php" id="signup-btn">Sign Up</a></li>
              <li role="presentation">
                <hr>
              </li>
              <li><a href="login.php" id="login-btn">Log in</a></li>
            <?php endif; ?>
            <li><a href="./cart.php">Cart</a></li>
            <li><a href="./wishlist.php">Wishlist</a></li>
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
                <a href="login.php"><button>View Bag</button></a>
                <a href="./checkout.php"><button>Checkout</button></a>
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
                <a href="wishlist.php"><button>View</button></a>
                <button id="move">Move to Bag</button>
              </div>
            </div>
          </div>
        </div>
      </ul>
    </nav>
  </header>

  <div class="cart-container">
    <div class="cart-items">
      <!-- Cart items will be displayed here -->
    </div>

    <div class="cart-footer-1">
      <h3>Order Summary</h3>
      <hr style="margin-bottom: 20px" />
      <div class="cart-total">
        <p>Total: <span id="cart-total-price-books">0€</span></p>
      </div>
      <button onclick="clearCart()">Clear Cart</button>
    </div>
  </div>

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
          <li>
            <a href="mailto:bookstore@gmail.com">bookstore@gmail.com</a>
          </li>
          <li><a href="callto:+383 45 647 763">+383 45 647 763</a></li>
        </ul>
        <ul class="box">
          <li class="link_name">Te duhet ndihme</li>
          <li><a href="about.php">Rreth nesh</a></li>
          <li><a href="contact.php">Na kontakto</a></li>
          <li class="link_name">
            Kontakto
            <abbr title="Kontakto sherbimin e konsumatorit">SHEK</abbr>
          </li>
        </ul>

        <ul class="box input-box">
          <li class="link_name">Subscribe</li>
          <li><input type="text" placeholder="Enter your email" /></li>
        </ul>
      </div>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="script.js"></script>
  <script src="checkout.js"></script>
  <script>
    function openForm() {
      console.log("openForm function called");
      document.getElementById("bigDiv").style.display = "block";
    }

    function closeForm() {
      document.getElementById("bigDiv").style.display = "none";
    }

    function clearCart() {
      // Remove all items from the cart stored in local storage
      localStorage.removeItem("cart");

      // Clear the cart display
      $(".cart-items").empty();

      // Reset the total price display
      $("#cart-total-price").text("0€");

      // Reset the cart count display
      $(".cart-count").text("0");
    }
  </script>
</body>

</html>