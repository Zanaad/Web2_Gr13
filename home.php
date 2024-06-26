 <?php
  function trackTimeOnSite()
  {

    if (!isset($_SESSION['start_time'])) {

      $_SESSION['start_time'] = time();
      $_SESSION['total_time'] = 0;
    } else {

      $current_time = time();
      $elapsed_time = $current_time - $_SESSION['start_time'];
      $_SESSION['total_time'] += $elapsed_time;

      $_SESSION['start_time'] = $current_time;
    }
  }

  trackTimeOnSite();
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
   <?php
    include './php/header.php'
    ?>
   <div class="background-section" style="margin-top: 45px;">
     <?php
      if (!isset($_COOKIE['logged_in'])) {
        echo '<img src="./images/living2.png" alt="Not Logged In Image">';
      } else if (isset($_COOKIE['logged_in'])) {
        echo '<img src="./images/living.png" alt="Logged In Image">';
      }
      ?>
   </div>


   <div class="container-I">
     <a href="#"><img style="height: 230px;width: 400px; margin-right: 30px;float: left;" src="images/epara.png" alt="img"></a>
     <a href="#"><img class="img-1" src="images/oncert.png" alt="img"></a>
     <a href="#"><img style="height: 230px;width: 400px;margin-left: 40px;float: right;" src="images/edyta.png" alt="img"></a>
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

   <hr>
   </hr>
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
   <hr>
   </hr>
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

   <?php
    include './php/footer.php'
    ?>
   <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
   <script src="script.js"></script>
     <script src="ajax-requests.js"></script>

 </body>

 </html>
