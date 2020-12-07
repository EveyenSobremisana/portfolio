<!DOCTYPE html>
<html lang="en">

<head>
  <title>Christmas E-Card Eveyen Sobremisana Front-End Developer and Graphic Designer Portfolio, D3 BCIT 2019</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <meta name="description" content="Portfolio website of Eveyen Sobremisana.Christmas ECard is an interactive electronic digital card that displays 10 facts about Christmas. Eveyen Sobremisana BCIT D3 2019. ">


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
            <img src="../img/projects/christmas_ecard/christmas_ecard_featured.png" alt="christmas_ecard_web_app">
          </figure>
        </div>
        <div class="col-md-6">
          <div class="blog-item">
            <article class="blog-content">
              <h1>Christmas E Card</h1>
              <p class="sub_title">Web Application</p>
              <p>Christmas ECard is an interactive electronic digital card that displays 10 facts about Christmas.</p>
            </article>

            <a href="https://eveyensobremisana.github.io/ChristmasEcard/" target="_blank" class="site-btn btn-line"><strong> CHECK OUT THIS E-CARD </strong></a>
          </div>
        </div>
      </div>

      <!--Project Details-->
      <div class="row details-center">


        <div class="col-md-3">
          <p> ROLE <br>
            <span class="project_details ">Developer, Designer</span> </p>
        </div>


        <div class="col-md-3">
          <p> TIMELINE <br>
            <span class="project_details">BCIT Term 2 <br>January 2018 - May 2018
            </span>
          </p>
        </div>


        <div class="col-md-3">
          <p>CLIENT<br>
            <span class="project_details">Digital Design and Development: <br>Dynamic Content Design (BCIT)</span>
          </p>
        </div>

        <div class="col-md-3">
          <p>TECHNOLOGY USED<br>
            <span class="project_details">HTML &amp; CSS, Javascript, Jquery, Json, Illustrator, Github</span></p>
        </div>

      </div>

      <!--Project Process-->
      <div class="row project_process">
        <div class="col-md-12">

          <p class="project_process_title">Idea Brainstorming </p>

          <p class="projectBody">
            While thinking about what holiday I should use for my E-Card, I thought of what holiday usually people give out cards. I initially thought of Christmas as it happens only once a year and people give each other a card or even a present. I went ahead and gathered 10 unique facts about this holiday and what components to put into the E-Card.

          </p>
        </div>

        <div class="col-md-12">

          <p class="project_process_title">Development</p>

          <p class="projectBody">I was responsible for making both the SVG files that are needed for the E-Card and developing it. I used illustrator for making the files and coded everything in Brackets. I have used a piece of code from code pen for the snowfall effect.</p>
          <p> <strong>A walkthrough of Christmas Ecard: </strong></p>

          <p>1. When you loaded the E-Card, you have to type in your name then click on the snowman. <br>2. You can toggle between the reindeer and penguin and the facts will show on the roof of the house. <br>3. On the next page, you can dress up Santa by clicking on the arrows, each outfit corresponds to a unique fact about Santa/Christmas.<br>4. You can also click on the wreath and the gifts or click on the red arrow to move to the next page. <br>5. After clicking the red arrow, the will background will move from left to right. <br> 6. In there you can click on the mistletoe, candy cane, eggnog, and the ugly sweater.<br> 7. When you click on the "next" button, it will redirect you to a page that will say "Happy Holidays <em>*your name* </em>"
          </p>
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
