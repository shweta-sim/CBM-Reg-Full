<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">
<meta name="format-detection" content="telephone=no">
<meta name="authoring-tool" content="Adobe_Animate_CC">
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

<!-- Canvas JS -->
<script src="https://code.createjs.com/1.0.0/createjs.min.js"></script>
<script src="step2-buycashbacklicenses/step2-buycashbacklicenses.js"></script>
<script>
var canvas, stage, exportRoot, anim_container, dom_overlay_container, fnStartAnimation;
function init() {
  canvas = document.getElementById("canvas");
  anim_container = document.getElementById("animation_container");
  dom_overlay_container = document.getElementById("dom_overlay_container");
  var comp=AdobeAn.getComposition("EA5571A2295DF7458D9934B992E3E739");
  var lib=comp.getLibrary();
  var loader = new createjs.LoadQueue(false);
  loader.addEventListener("fileload", function(evt){handleFileLoad(evt,comp)});
  loader.addEventListener("complete", function(evt){handleComplete(evt,comp)});
  var lib=comp.getLibrary();
  loader.loadManifest(lib.properties.manifest);
}
function handleFileLoad(evt, comp) {
  var images=comp.getImages();  
  if (evt && (evt.item.type == "image")) { images[evt.item.id] = evt.result; }  
}
function handleComplete(evt,comp) {
  //This function is always called, irrespective of the content. You can use the variable "stage" after it is created in token create_stage.
  var lib=comp.getLibrary();
  var ss=comp.getSpriteSheet();
  var queue = evt.target;
  var ssMetadata = lib.ssMetadata;
  for(i=0; i<ssMetadata.length; i++) {
    ss[ssMetadata[i].name] = new createjs.SpriteSheet( {"images": [queue.getResult(ssMetadata[i].name)], "frames": ssMetadata[i].frames} )
  }
  exportRoot = new lib.step2buycashbacklicenses();
  stage = new lib.Stage(canvas);
  stage.enableMouseOver();  
  //Registers the "tick" event listener.
  fnStartAnimation = function() {
    stage.addChild(exportRoot);
    createjs.Ticker.framerate = lib.properties.fps;
    createjs.Ticker.addEventListener("tick", stage);
  }     
  //Code to support hidpi screens and responsive scaling.
  AdobeAn.makeResponsive(true,'both',true,1,[canvas,anim_container,dom_overlay_container]);  
  AdobeAn.compositionLoaded(lib.properties.id);
  fnStartAnimation();
}
</script>
</head>
<body onload="init();" class="demo" id="step2-buycashbacklicenses">
<!-- ########## Wrapper Start ########## -->
<div class="wrapper"> 
  
  <!-- ########## Sidebar Start ########## -->
  <?php include("sidebar.php"); ?>
  <!-- ########## Sidebar End ########## --> 
  <!-- ########## Page Content Start ########## -->
  <div id="content">
      <div class="btnCollapse"> <i></i> </div>
      <div class="wrap-demovideo wrap-demovideo-inner">
        <div id="animation_container">
            <canvas id="canvas"></canvas>
            <div id="dom_overlay_container"></div>
          </div>
          <div class="button-bl text-center">
            <a href="registration-demo/registration-demo.html" target="_blank" class="btn wow fadeInLeft" data-wow-delay="200ms">View Full Demo</a>
            <a href="step2-buycashbacklicenses.php" class="btn wow fadeInRight" data-wow-delay="200ms">Proceed With Registration</a>
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