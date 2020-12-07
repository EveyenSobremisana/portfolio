<!DOCTYPE html>
<html lang="en">

<head>
  <title>Previews Mobile App Eveyen Sobremisana Front End Developer and Graphic Designer Portfolio, D3 BCIT 2019</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <meta name="description" content="Portfolio website of Eveyen Sobremisana. Previews is a mobile application that allows the users to search product information via Barcode Scan function and Keyword Search function in an easy yet intuitive way. Eveyen Sobremisana BCIT D3 2019. ">


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
        <div class="col-md-5">
          <figure class="thumb">
            <img src="../img/projects/previews/previews_featured.png" alt="previews_mobile_app" class="img-responsive">
          </figure>
        </div>
        <div class="col-md-7">
          <div class="blog-item">
            <article class="blog-content">
              <h1>Previews</h1>
              <p class="sub_title">Mobile Application</p>
              <p>Previews is a mobile application that allows the users to search product information via Barcode Scan function and Keyword Search function in an easy yet intuitive way.</p>
            </article>

            <a href="https://projectpreviews.github.io/landing/" target="_blank" class="site-btn btn-line"><strong>VISIT PREVIEWS'S WEBSITE </strong></a>
          </div>
        </div>
      </div>

      <!--Project Details-->
      <div class="row details-center">


        <div class="col-md-3">
          <p> ROLE/S <br>
            <span class="project_details ">Project Manager <br>Front-end Developer</span> </p>
        </div>


        <div class="col-md-3">
          <p> DATE <br>
            <span class="project_details">BCIT Term 3 <br>Sept 2018 - Dec 2018</span>
          </p>
        </div>


        <div class="col-md-3">
          <p>CLIENT<br>
            <span class="project_details">Digital Design and Development: <br> Asset Design and Integration (BCIT)</span>
          </p>
        </div>

        <div class="col-md-3">
          <p>TECHNOLOGY USED<br>
            <span class="project_details">React Native, Redux, JS, Firebase, Node.JS, InVision</span></p>
        </div>

      </div>

      <!--Project Process-->
      <div class="row project_process">
        <div class="col-md-7">

          <p class="project_process_title">Idea Brainstorming </p>

          <p class="projectBody">Before the 2018 Fall semester started, we were assigned to make up project ideas to be presented at the beginning of the semester in front of the whole Digital Design and Development staff and students. The original idea that I came up with is a product review app that utilizes augmented reality to provide users with an interactive way of searching for the product review. The intended way it was supposed to work is simplified into two simple steps: point and tap- point the phone into the product users want to search and tap the augmented reality box that will pop up once the app recognizes the product that you scanned.
          </p>
        </div>

        <div class="col-md-5">

          <img src="../img/projects/previews/previews_pitch.png" alt="Previews pitched idea" class="img-responsive" />
        </div>

        <div class="col-md-12">

          <p class="project_process_title">Development</p>

          <p class="projectBody">I was responsible for managing the group and making sure all each task that was divided to all the group members were delivered on time. Alongside this, I assisted the main developer in both the front-end development and back-end development. Since we have to provide the users with information regarding the product they were searching, the team has 2 databases. One database was set up using firebase in which all the user's information, reviews, and added products are stored. The other one is from an open source database where the information of the products that are scanned and searched are fetched from.
          </p>
        </div>

        <div class="col-md-12">

          <p class="project_process_title">Pivots</p>

          <p class="projectBody">There are multiple pivots that the team had encountered all throughout the development of Previews. First was the initial scope was not very well thought of, so the team deliberately make some changes. The team also felt like the initial idea which was to use camera scanning as a way of scanning is too far advanced for us so with the guidance of our instructors we decided to change it to a barcode scanner and keyword search.<br><br>

            Although one of our major problem (camera scanning) was solved, another problem arose, we don't have enough resource to provide information about the product. As the project manager, I decided to search up some resources and contacted them. However, some of those resources are for commercial use which means that we have to pay them a certain amount in order to get access to their database. I considered many options- look for a free one or communicate with my members a split up the cost and many more, but in the end, I decided to communicate with my team and they suggested to look for a free one instead. Luckily, after connecting with 4-5 resources we were able to find an open source database that we integrated into our app.
          </p>


        </div>







      </div>

      <br><br>
      <a href="previews_IA_UI.php"><em class="see_link">See the AI/UI design process of Previews</em></a>
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
