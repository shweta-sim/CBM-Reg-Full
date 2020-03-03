<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">
<meta name="format-detection" content="telephone=no">
<title>CBM Global</title>

<!-- Favicon -->
<link rel="icon" href="imgs/favicon.png" type="image/png" sizes="16x16">

<!-- Bootstrap CSS -->
<link href="plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">

<!-- Custom CSS -->
<link href="css/style.css" rel="stylesheet" type="text/css">

<!-- Responsive CSS -->
<link href="css/responsive.css" rel="stylesheet" type="text/css">

<!-- Animate CSS -->
<link rel="stylesheet" href="plugins/animate/animate.min.css"/>
</head>
<body id="step1-registration">
<!-- ########## Wrapper Start ########## -->
<div class="wrapper"> 
  <!-- ########## Sidebar Start ########## -->
  <?php include("sidebar.php"); ?>
  <!-- ########## Sidebar End ########## --> 
  <!-- ########## Page Content Start ########## -->
  <div id="content">
    <div class="content-inner">
      <div class="btnCollapse"> <i></i> </div>
      <div class="container">
        <div class="row mb9 mb6-md">
          <div class="col-md-12 text-center">
            <div class="logo mb3 wow fadeInUp" data-wow-delay="100ms"><a href="index.php"><img src="imgs/logo.svg" class="img-fluid"></a></div>
            <h5 class="text-blue text-semibold text-center text-uppercase wow fadeInUp" data-wow-delay="200ms">Type of Account</h5>
          </div>
        </div>
        <div class="account-type mb6 mb1-md" data-toggle="buttons">
          <div class="row">
            <div class="col-md-6 col-lg-6 col-xl-4 offset-xl-2 mb9-sm wow fadeInLeft" data-wow-delay="300ms">
              <div class="btn"> <i><img src="imgs/icon-personal-account.svg"></i>
                <h6 class="mb1">Personal Account</h6>
                <p>You are one individual registering for one account.</p>
                <input type="radio" name="accountype">
              </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-4 mb4-md wow fadeInRight" data-wow-delay="300ms">
              <div class="btn"> <i><img src="imgs/icon-corporate-account.svg"></i>
                <h6 class="mb1">Corporate Account</h6>
                <p>You want to register under a business name.</p>
                <input type="radio" name="accountype">
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">
            <div class="wow fadeInUp" data-wow-delay="400ms"><a href="step1-registration-1.php" class="btn">Continue</a></div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- ########## Page Content End ########## --> 
</div>
<!-- ########## Wrapper End ########## --> 

<!-- jQuery JavaScript --> 
<script type="text/javascript" src="plugins/jquery/jquery-3.3.1.min.js"></script> 

<!-- Bootstrap JavaScript --> 
<script type="text/javascript" src="plugins/bootstrap/js/bootstrap.min.js"></script> 

<!-- Animate Script --> 
<script type="text/javascript" src="plugins/animate/animate.min.js"></script> 
<script type="text/javascript">
  new WOW().init();
</script> 

<!-- SVG Fill Script --> 
<script type="text/javascript" src="plugins/js/svg-img.js"></script> 

<!-- Sidebar Toggle Script --> 
<script type="text/javascript">
  $(document).ready(function () {
    $('.btnCollapse').on('click', function () {
      $('#sidebar').toggleClass('active');
    });
  });
</script> 

<!-- Accordion Script --> 
<script type="text/javascript">
       $('.panel-collapse').on('show.bs.collapse', function () {
    $(this).siblings('.panel-heading').addClass('active');
  });

  $('.panel-collapse').on('hide.bs.collapse', function () {
    $(this).siblings('.panel-heading').removeClass('active');
  });
</script>
</body>
</html>