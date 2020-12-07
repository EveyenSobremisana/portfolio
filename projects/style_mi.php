<!DOCTYPE html>
<html lang="en">

<head>
  <title>Style Mi Eveyen Sobremisana Front End Developer and Graphic Designer Portfolio, D3 BCIT 2019</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <meta name="description" content="Portfolio website of Eveyen Sobremisana. StyleMi is an informative dress up game that offers users with suggestion on what type of outfit to wear based on the weather and the style. Eveyen Sobremisana BCIT D3 2019. ">


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
            <img src="../img/projects/style_mi/style_mi_featured.png" style="width: 350px;" alt="style_mi_mobile_app">
          </figure>
        </div>
        <div class="col-md-6">
          <div class="blog-item">
            <article class="blog-content">
              <h1>Style Mi</h1>
              <p class="sub_title">Mobile Application</p>
              <p>StyleMi is an informative dress up game that offers users with suggestion on what type of outfit to wear based on the weather and the style.</p>
            </article>

            <a href="https://eveyensobremisana.github.io/StyleMi/" target="_blank" class="site-btn btn-line"><strong> CHECK OUT STYLE MI </strong></a>
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
            <span class="project_details">BCIT Term 2 <br>January 2018 - May 2018
            </span>
          </p>
        </div>


        <div class="col-md-3">
          <p>CLIENT<br>
            <span class="project_details">Digital Design and Development: <br> Design 1 &amp;Dynamic Content Design (BCIT)</span>
          </p>
        </div>

        <div class="col-md-3">
          <p>TECHNOLOGY USED<br>
            <span class="project_details">Illustrator, HTML &amp; CSS, Javascript, Jquery, Json, Github</span></p>
        </div>

      </div>

      <!--Project Process-->
      <div class="row project_process">
        <div class="col-md-12">

          <p class="project_process_title">Idea Brainstorming </p>

          <p class="projectBody">While thinking of informative web/mobile application to develop, my partner and I thought of a lot of ideas. Some ideas were Calendar based fashion Planning, Car Sharing Real-Time Mobile App, Food Truck tracking app and Mobile Wallet ( add cards into your mobile phone).

          </p>
        </div>
        <div class="row">

          <div class="col-md-6">
            <img src="../img/projects/style_mi/App_Topic_Planning_1.jpg" style="display: block; margin-left: auto; margin-right: auto;" alt="App_Topic_Planning_1" class="img-responsive" />
          </div>

          <div class="col-md-6">
            <img src="../img/projects/style_mi/App_Topic_Planning_2.jpg" style="display: block; margin-left: auto; margin-right: auto;" alt="App_Topic_Planning_2" class="img-responsive" />
          </div>

        </div>
        <div class="col-md-12">
          <p class="projectBody">
            After discussing with our Design 1 instructor, we decided to do the Calendar based fashion Planning since this application is the most viable idea. Also, with this idea, we can exercise our graphic design skills since every component of this app will be vector based- meaning we have to illustrate it first. Also since our team is a perfect balance of development and design we decided that my pair will be the one in charge of the design aspect of the application (eg. vector graphics, color scheme) and I will be the one responsible in executing everything into an actual web application.

          </p>
        </div>
        <div class="col-md-12">

          <p class="project_process_title">Development</p>

          <p class="projectBody">I was responsible for developing the components of the application and my partner was in charge of creating all the illustrations. Since the application is purely based on the inputs of the users, I have to make use of a lot of conditional statements and make sure that the if their input matched with one of the conditions there will be feedback. The project mainly used a nested if-else statement to provide a final look for the user. For example, if the user if a female, there’s a set of clothes that are available for females and if you chose sunny (weather) and casual (style) the final look will be a casual outfit suitable for sunny weather. The chosen look is justified with information such as the material and reason why it is a suitable choice. The brand of clothes is also provided for the convenience of the users.
          </p>
        </div>
        <div class="col-md-12">

          <p class="project_process_title">Pivots</p>

          <p class="projectBody"> When we were still doing the inital planning of the app, the selection of weather and style are too much. Before, user can specify what's the type of weather (cloudy,sunny,rain or snowy), the type of season (Summer, Fall, Winter and Spring) and whether it is day or night. For the style selection, we had 6 different styles such as Sporty, Casual, Fancy, Business, Chic and Street. Based on the feedback of our instructor and classmates, we limit the weather selection just the type of weather and we cut down the style selection to four styles. <br><br>

          The reason why we had to cut down options is that if we chose to keep those selection it means we have to make a lot of outfit per style that will be suitable for the weather, season and the day. This will also mean we have to have a lot of conditional statements when developing it. 
          </p>


        </div>
      </div>

      <br><br>
      <a href="style_mi_IA_UI.php"><em class="see_link">See the AI/UI design process of Style Mi</em></a>
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
