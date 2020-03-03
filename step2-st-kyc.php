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
<body id="step2-st-kyc">
<!-- ########## Wrapper Start ########## -->
<div class="wrapper"> 
  <!-- ########## Sidebar Start ########## -->
  <?php include("sidebar.php"); ?>
  <!-- ########## Sidebar End ########## --> 
  <!-- ########## Page Content Start ########## -->
  <div id="content">
    <div class="btnCollapse"> <i></i> </div>
    <div class="wrap-demovideo wrap-demovideo-inner">
      <div class="text-center wow fadeInUp" data-wow-delay="200ms"><img src="step2-st-kyc/img-flow.jpg" class="img-fluid img"></div>
      <div class="mb3 wow fadeInUp" data-wow-delay="300ms">
        <div class="text-blue text-semibold text-uppercase mb3">Please make sure you have your kyc (know your customer) documents ready</div>
        <div class="d-flex mb3"> <img src="step2-st-kyc/flag-belgium.jpg" class="mr-3">
          <div>
            <h6 class="text-uppercase text-semibold m-r2">Belgium</h6>
            <div><a href="#">View Full List of Countries</a></div>
          </div>
        </div>
        <div class="mb3">A valid full coloured photo id document is required. This could be a Passport, ID Card or Driving License (front & back). A passport is preferable to an ID Card or Driving License</div>
        <div class="kycdocs"> <img src="step2-st-kyc/img-kyc-doc1.png" class="img-fluid"> <img src="step2-st-kyc/img-kyc-doc2.png" class="img-fluid"> <img src="step2-st-kyc/img-kyc-doc3.png" class="img-fluid"> </div>
        <div>A clear full copy of a bank statement or utility bill containing the client’s physical address is required (e.g. gas, water, electricity, lanline phone, internet , cable TV connections), issued in the  client’s name within the previous 3 months.</div>
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