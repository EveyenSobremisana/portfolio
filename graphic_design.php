<!DOCTYPE html>
<html lang="en">

<head>
  <title>Graphic Design Eveyen Sobremisana Front End Developer and Graphic Designer Portfolio, D3 BCIT 2019</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <meta name="description" content="Portfolio website of Eveyen Sobremisana. This is a compilation of works I created in the Digital Design and Development Diploma as well as personal projects. Tools that I have used in making these projects include using Adobe Creative Cloud program such as Photoshop, Illustrator, InDesign, After Effects.Eveyen Sobremisana BCIT D3 2019. ">
  <meta name='author' content='Eveyen Sobremisana'>
  <meta name='keywords' content='Eveyen Sobremisana, eveyen sobremisana, Eveyen Sobremisana D3 Portfolio, Eveyen Sobremisana BCIT, BCIT D3 Portfolio'>


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
  <link href="img/icon.png" rel="shortcut icon" />

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:400,400i,600,600i,700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Lato:400,700,900" rel="stylesheet">

  <!-- Stylesheets -->
  <link rel="stylesheet" href="css/bootstrap.min.css" />
  <link rel="stylesheet" href="css/font-awesome.min.css" />
  <link rel="stylesheet" href="css/magnific-popup.css" />
  <link rel="stylesheet" href="css/style.css" />
  <link rel="stylesheet" href="css/style1.css" />


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
 <?php include 'main-header.php'; ?>
  <!-- header section end -->


  <!-- portfolio section start -->

  <section class="intro-section">
    <div class="container text-center">
      <div class="row">
        <div class="col-xl-10 offset-xl-1">
          <h1 class="section-title"> Graphic Design</h1>
          <!--					<h6>Illustrations | E-Publications</h6>-->
        </div>

        <p class="page-description">This is a compilation of works I created in the Digital Design and Development Diploma as well as personal projects. Tools that I have used in making these projects include using Adobe Creative Cloud program such as Photoshop, Illustrator, InDesign, After Effects.</p>
      </div>
    </div>
  </section>


  <section class="portfolio-section">
    <!--
		<div class="container">
			<ul class="portfolio-filter controls">
				<li class="control" data-filter="all">All</li>
				<li class="control" data-filter=".poster">Poster</li>
				<li class="control" data-filter=".illustration">Illustrations</li>
				<li class="control" data-filter=".epub">E- Publications</li>
			</ul>
		</div>                       
-->
    <div class="container-fluid p-0">
      <div class="row portfolios-area">

        <div class="mix col-md-6 col-lg-4 poster">

          <a href="projects/gorillion_magazine.php" class="portfolio_item pi-style2 set-bg">
            <img src="img/projects/gorillion_magazine/gorillion_magazine_thumb.png" alt="gorillion_magazine_thumbnail" class="img-responsive project_thumb" />
            <div class="portfolio-meta">
              <h2>Gorillion Magazine</h2>
              <p>Illustration</p>
            </div>
          </a>
        </div>
        <div class="mix col-md-6 col-lg-4 illustration">

          <a href="projects/xbox_console.php" class="portfolio_item pi-style2 set-bg">
            <img src="img/projects/xbox_console/xbox_console_thumb.png" alt="xbox_console_thumbnail" class="img-responsive project_thumb" />
            <div class="portfolio-meta">
              <h2>Xbox Console Illustration</h2>
              <p>Illustration</p>
            </div>
          </a>
        </div>
        <div class="mix col-md-6 col-lg-4 illustration">

          <a href="projects/coco_chanel_perfume.php" class="portfolio_item pi-style2 set-bg">
            <img src="img/projects/coco_chanel/coco_chanel_thumb.png" alt="coco_chanel_thumbnail" class="img-responsive project_thumb" />
            <div class="portfolio-meta">
              <h2>Coco Chanel Perfume Illustration</h2>
              <p>Illustration</p>
            </div>
          </a>
        </div>
        <div class="mix col-md-6 col-lg-4 epub">


          <a href="projects/goldilocks_and_the_three_bears.php" class="portfolio_item pi-style2 set-bg">
            <img src="img/projects/goldilocks/goldilocks_and_the_three_bears-thumb.png" alt="goldilocks_and_the_three_bears_thumbnail" class="img-responsive project_thumb" />
            <div class="portfolio-meta">
              <h2>Goldilocks and the Three Bears Storybook</h2>
              <p>E-Publication, Motion Graphics</p>
            </div>
          </a>
        </div>
        <div class="mix col-md-6 col-lg-4 epub poster">



          <a href="projects/cacti_magazine.php" class="portfolio_item pi-style2 set-bg">
            <img src="img/projects/cacti_magazine/cacti_magazine_thumb.png" alt="cacti_magazine_thumbnail" class="img-responsive project_thumb" />
            <div class="portfolio-meta">
              <h2>Cacti Magazine</h2>
              <p>E Publication, Typography</p>
            </div>
          </a>

        </div>

      </div>
    </div>
  </section>

  <!-- portfolio section end -->


  <!-- footer section start -->
 <?php include 'main-footer.php'; ?>
  <!-- footer section end -->



  <!--====== Javascripts & Jquery ======-->
  <script src="js/jquery-2.1.4.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/mixitup.min.js"></script>
  <script src="js/magnific-popup.min.js"></script>
  <script src="js/main.js"></script>
</body>

</html>
