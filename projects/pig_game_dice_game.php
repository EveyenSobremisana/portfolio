<!DOCTYPE html>
<html lang="en">

<head>
  <title>Pig Game Dice Game Eveyen Sobremisana Front End Developer and Graphic Designer Portfolio, D3 BCIT 2019</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <meta name="description" content="Portfolio website of Eveyen Sobremisana. This project is a multiplayer game made with some advanced javascript codes. Eveyen Sobremisana BCIT D3 2019. ">


  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-133321323-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-133321323-1');

  </script>
  <!-- Favicon -->
  <link href="../img/icon.png" rel="shortcut icon" />

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:400,400i,600,600i,700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Lato:400,700,900" rel="stylesheet">

  <!-- Stylesheets -->
  <link rel="stylesheet" href="../css/bootstrap.min.css" />
  <link rel="stylesheet" href="../css/font-awesome.min.css" />
  <link rel="stylesheet" href="../css/magnific-popup.css" />
  <link rel="stylesheet" href="../css/style.css" />
  <link rel="stylesheet" href="../css/style1.css" />


  <!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>

<body class="body-pad">
  <!-- Page Preloder -->
  <div id="preloder">
    <div class="loader"></div>
  </div>

  <!-- header section start -->
  <?php include '../main-header.php'; ?>
  <!-- header section end -->


  <div class="page-section">
    <div class="container">
      <!--Project Description-->
      <div class="row mb-5 project-feat">
        <div class="col-md-6">
          <figure class="thumb">
            <img src="../img/projects/pig_game_dice_game/pig_game_dice_game_featured.png" alt="pig_game_dice_game">
          </figure>
        </div>
        <div class="col-md-6">
          <div class="blog-item">
            <article class="blog-content">
              <h1>Pig Game - <br> Dice Game</h1>
              <p class="sub_title">Web Application</p>
              <p>A 2 player web dice game made with javascript. </p>
            </article>

            <a href="https://eveyensobremisana.github.io/Pig-Game/" target="_blank" class="site-btn btn-line"><strong> CHECK OUT PIG GAME - DICE GAME </strong></a>
          </div>
        </div>
      </div>

      <!--Project Details-->
      <div class="row details-center">


        <div class="col-md-3">
          <p> ROLE <br>
            <span class="project_details ">Developer</span> </p>
        </div>


        <div class="col-md-3">
          <p> TIMELINE <br>
            <span class="project_details">December 2018
            </span>
          </p>
        </div>


        <div class="col-md-3">
          <p>CLIENT<br>
            <span class="project_details">Personal Project</span>
          </p>
        </div>

        <div class="col-md-3">
          <p>TECHNOLOGY USED<br>
            <span class="project_details">HTML5, CSS, Javascript</span></p>
        </div>

      </div>

      <!--Project Process-->

      <div class="row project_process">
        <div class="col-md-12">

          <p class="project_process_title">Idea Brainstorming </p>
          <p class="projectBody">
            This project was made during my Christmas break. During my Christmas break, I was thinking of taking some courses online that can help me improve my web development skills. Together with some of my friends, we signed up to a Udemy class. I signed up particularly on Advanced javascript course that is available.

            This is one of the projects that I made with the help of the course. The goal of this 2-player game is to have 20 points before your opponent. I think this project was fun and it was great to learn more advanced javascript skills that I was not able to learn on my web development class.
          </p>
        </div>
        <div class="col-md-12">

          <p class="project_process_title">Development</p>
          <p class="projectBody">
            For this project, I used different methods of calling class and id's as what the instructor taught. I was on using getElementById() as my element-look up method. For this project in particular, I learned about the method called querySelector() which is more versatile than getElementById(). I also learned about the different propterties of classList like toggle, add and remove which are all new to me.
          </p>

          <img src="../img/projects/pig_game_dice_game/pig_game.png" style="width: 900px; display: block; margin-left: auto; margin-right: auto;" alt="pig game code" class="img-responsive project_process_image" />
          <br><br>
        </div>
        <div class="col-md-12">
          <p class="projectBody">
            After knowing the basics of how to code this game, I added another thing on the game which is the users can input their desired winning score instead of the default one which is 20. For example on the pictures showed below, the one on the left shows a winner player based on the default winning score. And on the right side, you can see that there is a 50 showed below which is the new winning score.
          </p>
        </div>
        <div class="col-md-6">
          <img src="../img/projects/pig_game_dice_game/pig_game_2.png" alt="Pig game default score" class="img-responsive ideation" />
        </div>
        <div class="col-md-6">
          <img src="../img/projects/pig_game_dice_game/pig_game_3.png" alt="Pig game base on users" class="img-responsive ideation" />
        </div>








      </div>


    </div>



  </div>


  <!-- footer section start -->

  <?php include '../main-footer.php'; ?>
  <!-- footer section end -->



  <!--====== Javascripts & Jquery ======-->
  <script src="../js/jquery-2.1.4.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <script src="../js/mixitup.min.js"></script>
  <script src="../js/magnific-popup.min.js"></script>
  <script src="../js/main.js"></script>
</body>

</html>
