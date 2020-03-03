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
<body id="step3-selectproduct">
<!-- ########## Wrapper Start ########## -->
<div class="wrapper"> 
  <!-- ########## Sidebar Start ########## -->
  <?php include("sidebar.php"); ?>
  <!-- ########## Sidebar End ########## --> 
  <!-- ########## Page Content Start ########## -->
  <div id="content">
    <div class="content-inner">
      <div class="btnCollapse"> <i></i> </div>
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="logo text-center mb3"><a href="index.php"><img src="imgs/logo.svg" class="img-fluid"></a></div>
            <div class="text-center text-semibold text-blue text-uppercase mb5">We’ve detected following products:</div>
            <div class="products mb5">
              <div class="selectproduct" data-toggle="buttons">
                <div class="btn"> <img src="step3-selectproduct/img-product1.png" class="img">
                  <h6>Nautilus EA</h6>
                  <p class="mb1">MAM</p>
                  <p class="text-sm">Prodcut Key: EA21548461</p>
                  <input type="checkbox" name="product">
                </div>
                <div class="btn"> <img src="step3-selectproduct/img-product2.png" class="img">
                  <h6>TORUS Grid</h6>
                  <p class="mb1">COPIER</p>
                  <p class="text-sm">Prodcut Key: TG53486513</p>
                  <input type="checkbox" name="product">
                </div>
              </div>
              <a href="step3-selectproduct-2.php">
              <div class="product-bl empty"> <i class="fas fa-plus"></i> </div>
              </a> 
            </div>
            <div class="text-center text-semibold text-blue text-uppercase mb1">Is your product not in the list? Please enter your account number: </div>
            <form action="" class="mb3">
              <div class="row">
                <div class="col-md-4 offset-md-4 text-center">
                  <div class="form-group">
                    <label for="email">Account No.</label>
                    <input type="text" class="form-control" id="accountno">
                  </div>
                </div>
              </div>
            </form>
            <div class="text-right">
              <button type="submit" class="btn btn-primary" onclick="location.href = '#';">Proceed <i class="fa fa-angle-right"></i></button>
            </div>
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