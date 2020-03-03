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
            <div class="text-center text-semibold text-blue text-uppercase mb6">Select a product to link with your account:</div>
            <div class="products">
              <div class="selectproduct linkproduct" data-toggle="buttons">
                <div class="btn default">
                  <div class="ribbon ribbon-top-right"><span>Default</span></div>
                  <img src="step3-selectproduct/img-product1.png" class="img">
                  <h6>Nautilus EA</h6>
                  <p class="mb1">MAM</p>
                  <table class="table table-striped mb3">
                    <tbody>
                      <tr>
                        <td class="text-left">Leverage</td>
                        <td class="text-right">1:30</td>
                      </tr>
                      <tr>
                        <td class="text-left">Account Type :</td>
                        <td class="text-right">REAL (€)</td>
                      </tr>
                      <tr>
                        <td class="text-left">Platform :</td>
                        <td class="text-right">MetaTrader 4</td>
                      </tr>
                      <tr>
                        <td class="text-left">Broker :</td>
                        <td class="text-right">INFINOX Capital</td>
                      </tr>
                    </tbody>
                  </table>
                  <div><img src="step3-selectproduct/graph-product1.jpg" class="img-fluid"></div>
                  <input type="checkbox" name="product">
                  <button type="submit" class="btn btn-primary" onclick="location.href = 'step3-selectproduct-3.php';">Select Product</button>
                </div>
                <div class="btn"> <img src="step3-selectproduct/img-product2.png" class="img">
                  <h6>TORUS Grid</h6>
                  <p class="mb1">COPIER</p>
                  <table class="table table-striped mb3">
                    <tbody>
                      <tr>
                        <td class="text-left">Leverage</td>
                        <td class="text-right">1:500</td>
                      </tr>
                      <tr>
                        <td class="text-left">Account Type :</td>
                        <td class="text-right">REAL (€)</td>
                      </tr>
                      <tr>
                        <td class="text-left">Platform :</td>
                        <td class="text-right">MetaTrader 4</td>
                      </tr>
                      <tr>
                        <td class="text-left">Broker :</td>
                        <td class="text-right">INFINOX Capital</td>
                      </tr>
                    </tbody>
                  </table>
                  <div><img src="step3-selectproduct/graph-product2.jpg" class="img-fluid"></div>
                  <input type="checkbox" name="product">
                  <button type="submit" class="btn btn-primary" onclick="location.href = 'step3-selectproduct-3.php';">Select Product</button>
                </div>
              </div>
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