<!DOCTYPE html>
<!-- Coding by CodingNepal || www.codingnepalweb.com -->
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- Boxicons CSS -->
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
    <title>Home Page</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="manu.css"/>

    <style>
      .carousel-item {
        height: 40rem;
      }
      .carousel-inner{
        height: 450px;
      }



      <style>
    .card {
      perspective: 1000px;
      cursor: pointer;
    }
    
    .card-inner {
      transition: transform 0.6s;
      transform-style: preserve-3d;
      height: 400px;
    }
    
    .card:hover .card-inner {
      transform: rotateY(180deg);
    }
    
    .card-front, .card-back {
      width: 100%;
      height: 100%;
      position: absolute;
      backface-visibility: hidden;
      background-color: aqua;
    }
    
    .card-front {
      background-color: #f2f2f2;
      display: flex;
      align-items: center;
      justify-content: center;
    }
    
    .card-back {
      background-color: #eaeaea;
      transform: rotateY(180deg);
      display: flex;
      align-items: center;
      justify-content: center;
      text-align: center;
    }
   
  </style>
    </style>
    
  </head>
  <body>

    <!-- navbar -->
    <nav class="navbar">
      <div class="logo_item">
        <i class="bx-menu" id="sidebarOpen"></i>
        <!-- <img src="images/logo.png" alt=""></i>-->
          Gaming-Hub
      </div>
      <div class="navbar_content">
        <i class="bi bi-grid"></i>
        <i class='bx bx-sun' id="darkLight"></i>
      </div>
    </nav>

    <!-- sidebar -->
   <nav class="sidebar">
      <div class="menu_content">
    <ul class="menu_items">
       <div class="menu_title menu_dahsboard"></div>
          
          <li class="item">
          <div href="#" class="nav_link submenu_item">
             <span class="navlink_icon">
               <i class="bx bx-home-alt"></i>
          </span>
          <span class="navlink">Home</span>
             <i class="bx bx-chevron-right arrow-left"></i>
            </div>

         <ul class="menu_items submenu">
              <a href="#" class="nav_link sublink">Coming Soon</a>
              <a href="#" class="nav_link sublink">Coming Soon</a>
          </li>
        
        </ul>

        <ul class="menu_items">
          <div class="menu_title menu_editor"></div>
        
          
       <li class="item">
          <a href="list.php" class="nav_link">
         <span class="navlink_icon">
            <i class="bx bx-bookmarks"></i>
            </span>
            <span class="navlink">cart</span>
          </a>
          </li>

      <li class="item">
            <a href="profile.php" class="nav_link">
           <span class="navlink_icon">
            <i class="bx bx-male"></i>
              </span>
        <span class="navlink">Profile</span>
            </a>
       </li>
          <li class="item">
            <a href="payment.php" class="nav_link">
      <span class="navlink_icon">
                <i class="bx bx-filter"></i>
              </span>
           <span class="navlink">Payment</span>
            </a>
          </li>
          <li class="item">
            <a href="curd.php" class="nav_link">
          <span class="navlink_icon">
                <i class="bx bx-cloud-upload"></i>
              </span>
              <span class="navlink">Upload new</span>
            </a>
          </li>
        </ul>
        <ul class="menu_items">
         <div class="menu_title menu_setting"></div>
          <li class="item">
          <a href="about.php" class="nav_link">
              <span class="navlink_icon">
         <i class="bx bx-flag"></i>
           </span>
         <span class="navlink">About Us</span>
            </a>
          </li>
          <li class="item">
            <a href="logoutAction.php" class="nav_link">
              <span class="navlink_icon">
         <i class="bx bx-power-off"></i>
              </span>
        <span class="navlink">Logout</span>
        </a>
          </li>
         
        </ul>

        <!-- Sidebar Open / Close -->
        <div class="bottom_content">
     <div class="bottom expand_sidebar">
            <span> Expand</span>
       <i class='bx bx-log-in' ></i>
     </div>
          <div class="bottom collapse_sidebar">
      <span> Collapse</span>
            <i class='bx bx-log-out'></i>
      </div>
    </div>
    </nav>

    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel mb-3">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
   
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="img/cal-1.jpg" class=" d-block w-100" style="height: 70%" alt="...">
      </div>
      <div class="carousel-item">
        <img src="img/cal-2.jpg" class=" d-block w-100" id="img" style="height: 70%"  alt="...">
      </div>
      <div class="carousel-item">
        <img src="img/cal-3.jpg" class=" d-block w-100" id="img" style="height: 70%"  alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

  <div class="container-fluid bg-secondary">
        <div class=" col-12  text-center text-white ">
            <h3 class="text-info">Buy Your Favourite Games And Enjoy</h3>
        </div>
        <div class="row">
        <div class="col-lg-2 col-md-2 p-3 ">
        <div class="card bg-secondary">
          <div class="card-inner">
            <div class="card-front">
            <img class="img-fluid img-thumbnail" style="height:100%" src="img/img-1.webp" alt="">
            </div>
            <div class="card-back">
              <p>The game is played from either a third-person or first-person perspective.
                 In the game, up to one hundred players parachute onto an island where they scavenge for weapons and
                  equipment to kill other players while avoiding getting killed themselves.</p>
            </div>
          </div>
          <h4 class="text-center text-warning" style="font-size:18px">Pubg-mobile</h4>
                <h6 class= "text-warning" style="font-size:11px">Unic:1</h6>
                <h5 class="text-center">Price : 7$</h5>
                <a href="add_to_cart.php?id=1" class="btn btn-outline-warning d-block m-auto">Add to Cart</a>
           </div>
           </div>

           <div class="col-lg-2 col-md-2 p-3">
           <div class="card bg-secondary">
          <div class="card-inner">
            <div class="card-front">
            <img class="img-fluid img-thumbnail" style="height:100%" src="img/img-2.jpg" alt="">
            </div>
            <div class="card-back">
              <p>Gears of War is a third-person shooter video game developed by Epic Games and published by Microsoft Studios
              It was initially released for the Xbox 360 on November 7, 2006 in North America, and on November 17 in Europe. 
              It was released for Microsoft Windows on June 11, 2007.
              </p>
            </div>
          </div>
          <h4 class="text-center text-warning" style="font-size:18px">Gears Of War4</h4>
                <h6 class= "text-warning" style="font-size:11px">Unic:2</h6>
                <h5 class="text-center">Price : 7$</h5>
                <a href="add_to_cart.php?id=1" class="btn btn-outline-warning d-block m-auto">Add to Cart</a>
           </div>
           </div>
              

           <div class="col-lg-2 col-md-2 p-3">
           <div class="card bg-secondary">
          <div class="card-inner">
            <div class="card-front">
            <img class="img-fluid img-thumbnail" style="height:100%" src="img/img-3.jpg" alt="">
            </div>
            <div class="card-back">
              <p>Tomb Raider explores the intense and gritty origin story of Lara Croft and her ascent from a young woman to a hardened survivor.
             Armed only with raw instincts and the ability to push beyond the limits of human endurance, 
             Lara must fight to unravel the dark history of a forgotten island to escape its relentless hold</p>
            </div>
          </div>
          <h4 class="text-center text-warning" style="font-size:18px">Tomb Raider</h4>
                <h6 class= "text-warning" style="font-size:11px">Unic:3</h6>
                <h5 class="text-center">Price : 7$</h5>
                <a href="add_to_cart.php?id=1" class="btn btn-outline-warning d-block m-auto">Add to Cart</a>
           </div>
           </div>
            

           <div class="col-lg-2 col-md-2 p-3">
         <div class="card bg-secondary">
          <div class="card-inner">
            <div class="card-front">
            <img class="img-fluid img-thumbnail" style="height:100%" src="img/img-4.webp" alt="">
            </div>
            <div class="card-back">
              <p>Garena free fire is one of the most popular game on the playstore.
               One of the best battle royale game I have ever played. 
               And plus point is each round lasts 12-15 minute so you don't need to wait for 40 minutes to end single round like some Battle Royale games.</p>
            </div>
          </div>
          <h4 class="text-center text-warning" style="font-size:18px">Free Fire</h4>
                <h6 class= "text-warning" style="font-size:11px">Unic:4</h6>
                <h5 class="text-center">Price : 7$</h5>
                <a href="add_to_cart.php?id=1" class="btn btn-outline-warning d-block m-auto">Add to Cart</a>
           </div>
           </div>

           <div class="col-lg-2 col-md-2 p-3">
           <div class="card bg-secondary">
          <div class="card-inner">
            <div class="card-front">
            <img class="img-fluid img-thumbnail" style="height:100%" src="img/img-5.webp" alt="">
            </div>
            <div class="card-back">
              <p>Assassin's Creed Odyssey is an action role-playing video game played from a third-person perspective.
                 At the beginning of the game, the player can select to play as either Alexios or Kassandra, 
                 Greek mercenaries and descendants of the Spartan king Leonidas I.</p>
            </div>
          </div>
          <h4 class="text-center text-warning" style="font-size:18px">Assassin's Creed</h4>
                <h6 class= "text-warning" style="font-size:11px">Unic:5</h6>
                <h5 class="text-center">Price : 7$</h5>
                <a href="add_to_cart.php?id=1" class="btn btn-outline-warning d-block m-auto">Add to Cart</a>
           </div>
           </div>

           <div class="col-lg-2 col-md-2 p-3">
           <div class="card bg-secondary">
          <div class="card-inner">
            <div class="card-front">
            <img class="img-fluid img-thumbnail" style="height:100%" src="img/img-6.jpg" alt="">
            </div>
            <div class="card-back">
              <p>In God of War, players control Kratos, a Spartan warrior who is sent by the Greek gods to kill Ares, 
                the god of war. As the story progresses, Kratos is revealed to be Ares' former servant,
                 who had been tricked into killing his own family and is haunted by terrible nightmares</p>
            </div>
          </div>
          <h4 class="text-center text-warning" style="font-size:18px">God Of War</h4>
                <h6 class= "text-warning" style="font-size:11px">Unic:6</h6>
                <h5 class="text-center">Price : 7$</h5>
                <a href="add_to_cart.php?id=1" class="btn btn-outline-warning d-block m-auto">Add to Cart</a>
           </div>
           </div>
              

           <div class="col-lg-2 col-md-2 p-3">
           <div class="card bg-secondary">
          <div class="card-inner">
            <div class="card-front">
            <img class="img-fluid img-thumbnail" style="height:100%" src="img/img-7.jpg" alt="">
            </div>
            <div class="card-back">
              <p>Valorant is a team-based first-person tactical hero shooter set in the near future.
                 Players play as one of a set of Agents, characters based on several countries and cultures around the world.
                  In the main game mode, players are assigned to either the attacking or defending team with each team having five players on it</p>
            </div>
          </div>
          <h4 class="text-center text-warning" style="font-size:18px">Valorant</h4>
                <h6 class= "text-warning" style="font-size:11px">Unic:7</h6>
                <h5 class="text-center">Price : 7$</h5>
                <a href="add_to_cart.php?id=1" class="btn btn-outline-warning d-block m-auto">Add to Cart</a>
           </div>
           </div>
            
           <div class="col-lg-2 col-md-2 p-3">
           <div class="card bg-secondary">
          <div class="card-inner">
            <div class="card-front">
            <img class="img-fluid img-thumbnail" style="height:100%" src="img/img-8.webp" alt="">
            </div>
            <div class="card-back">
              <p>God of War Ragnarök is an action-adventure game developed by Santa Monica Studio and published by Sony Interactive Entertainment. 
                It was released worldwide on November 9, 2022, for both the PlayStation 4 and PlayStation 5, 
                marking the first cross-gen release in the God of War series.</p>
            </div>
          </div>
          <h4 class="text-center text-warning" style="font-size:18px">GOW Ragnarok</h4>
                <h6 class= "text-warning" style="font-size:11px">Unic:8</h6>
                <h5 class="text-center">Price : 7$</h5>
                <a href="add_to_cart.php?id=1" class="btn btn-outline-warning d-block m-auto">Add to Cart</a>
           </div>
           </div>

              
           <div class="col-lg-2 col-md-2 p-3">
           <div class="card bg-secondary">
          <div class="card-inner">
            <div class="card-front">
            <img class="img-fluid img-thumbnail" style="height:100%" src="img/img-9.jpg" alt="">
            </div>
            <div class="card-back">
              <p>Grand Theft Auto V is an action-adventure game played from either a third-person or first-person perspective. 
                Players complete missions—linear scenarios with set objectives—to progress through the story.
                 Outside of the missions, players may freely roam the open world</p>
            </div>
          </div>
          <h4 class="text-center text-warning" style="font-size:18px">Gta-5</h4>
                <h6 class= "text-warning" style="font-size:11px">Unic:9</h6>
                <h5 class="text-center">Price : 7$</h5>
                <a href="add_to_cart.php?id=1" class="btn btn-outline-warning d-block m-auto">Add to Cart</a>
           </div>
           </div>

           <div class="col-lg-2 col-md-2 p-3">
           <div class="card bg-secondary">
          <div class="card-inner">
            <div class="card-front">
            <img class="img-fluid img-thumbnail" style="height:100%" src="img/img-10.jpg" alt="">
            </div>
            <div class="card-back">
              <p>Far Cry 5 is the next entry into the 1st person shooter franchise by Ubisoft. 
                Set in the fictional location of Hope County,the plot follows an unknown sherrif's deputy as
                 they attempt to wrest control of the region back from the dangerous cult that has taken over this section of rural America</p>
            </div>
          </div>
          <h4 class="text-center text-warning" style="font-size:18px">Farcry 5</h4>
                <h6 class= "text-warning" style="font-size:11px">Unic:10</h6>
                <h5 class="text-center">Price : 7$</h5>
                <a href="add_to_cart.php?id=1" class="btn btn-outline-warning d-block m-auto">Add to Cart</a>
           </div>
           </div>

           <div class="col-lg-2 col-md-2 p-3 ">
           <div class="card bg-secondary">
          <div class="card-inner">
            <div class="card-front">
            <img class="img-fluid img-thumbnail" style="height:100%" src="img/img-11.jpg" alt="">
            </div>
            <div class="card-back">
              <p>State of Decay 2 is a zombie survival game, with an emphasis on scavenging for items,
                 in which gameplay is experienced from a third-person view. 
                 The game is set in an open world environment and features cooperative gameplay with up to three other players.</p>
            </div>
          </div>
          <h4 class="text-center text-warning" style="font-size:18px">State Of Decay 2</h4>
                <h6 class= "text-warning" style="font-size:11px">Unic:11</h6>
                <h5 class="text-center">Price : 7$</h5>
                <a href="add_to_cart.php?id=1" class="btn btn-outline-warning d-block m-auto">Add to Cart</a>
           </div>
           </div>

           <div class="col-lg-2 col-md-2 p-3">
           <div class="card bg-secondary">
          <div class="card-inner">
            <div class="card-front">
            <img class="img-thumbnail" style="height:100%" src="img/img-12.jpg" alt="">
            </div>
            <div class="card-back">
              <p>Apex Legends is an online multiplayer battle royale game featuring squads of three players
                 using pre-made characters with distinctive abilities, called "Legends". 
                 Alternate modes have been introduced allowing for single and for two-player squads since the game's release.
                 s vitae elit hendrerit ullamcorper.</p>
            </div>
          </div>
          <h4 class="text-center text-warning" style="font-size:18px">Apex Leagend</h4>
                <h6 class= "text-warning" style="font-size:11px">Unic:12</h6>
                <h5 class="text-center">Price : 7$</h5>
                <a href="add_to_cart.php?id=1" class="btn btn-outline-warning d-block m-auto">Add to Cart</a>
           </div>
           </div>
    <!-- JavaScript -->
    <script src="manu.js"></script>
  </body>
</html>
