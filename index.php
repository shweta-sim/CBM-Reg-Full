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
<script src="intro/intro.js"></script>
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
  exportRoot = new lib.intro();
  stage = new lib.Stage(canvas);
  stage.enableMouseOver();  
  //Registers the "tick" event listener.
  fnStartAnimation = function() {
    stage.addChild(exportRoot);
    createjs.Ticker.framerate = lib.properties.fps;
    createjs.Ticker.addEventListener("tick", stage);
  }     
  //Code to support hidpi screens and responsive scaling.
  AdobeAn.makeResponsive(true,'both',false,1,[canvas,anim_container,dom_overlay_container]);  
  AdobeAn.compositionLoaded(lib.properties.id);
  fnStartAnimation();
}
</script>
</head>
<body onload="init();" id="intro" class="demo bg-light-blue">
<!-- ########## Wrapper Start ########## -->
<div class="wrapper"> 
  <!-- ########## Page Content Start ########## -->
  <div class="wrap-demovideo">
    <div id="animation_container">
      <canvas id="canvas"></canvas>
      <div id="dom_overlay_container"></div>
    </div>
    <div class="button-bl text-center">
      <div class="wow fadeInUp" data-wow-delay="200ms">
        <a href="registration-demo/registration-demo.html" target="_blank" class="btn">View Full Demo</a>
        <a href="step1-registration.php" class="btn wow fadeInRight" data-wow-delay="200ms">Proceed With Registration</a>
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
</body>
</html>