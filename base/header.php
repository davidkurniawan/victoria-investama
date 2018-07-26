<?php
session_start();
?>
<!DOCTYPE HTML>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="<?=$setting->SiteDescription;?>">
<meta name="author" content="<?=$setting->SiteAuthor;?>">
<meta name="keywords" content="<?=$setting->SiteKeyword;?>">
<link rel="shortcut icon" href="img/favicon.png">

<title>
  <?=$setting->SiteTitle;?>
</title>

<!-- Bootstrap core CSS -->
<link href="<?=$base_url;?>css/bootstrap.min.css" rel="stylesheet">
<link href="<?=$base_url;?>css/theme.css" rel="stylesheet">
<!-- <link href="css/bootstrap.min.css" rel="stylesheet">-->

<!--external css-->
<link rel="stylesheet" type="text/css" href="<?=$base_url;?>css/timeline.css" />
<script src="<?=$base_url;?>js/jquery-1.8.3.min.js"></script>
<script src="<?=$base_url;?>js/bootstrap.min.js"></script>
<link href="<?=$base_url;?>assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
<link rel="stylesheet" href="<?=$base_url;?>css/flexslider.css"/>
<link href="<?=$base_url;?>assets/bxslider/jquery.bxslider.css" rel="stylesheet" />
<link rel="stylesheet" href="<?=$base_url;?>css/animate.css">
<link rel="stylesheet" href="<?=$base_url;?>assets/owlcarousel/owl.carousel.css">
<link rel="stylesheet" href="<?=$base_url;?>assets/owlcarousel/owl.theme.css">
<link href="<?=$base_url;?>css/superfish.css" rel="stylesheet" media="screen">
<link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
<!-- <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'> -->
<link rel="stylesheet" type="text/css" href="<?=$base_url;?>assets/plugin/jcarousel/jcarousel.connected-carousels.css">
<script type="text/javascript" src="<?=$base_url;?>assets/plugin/jcarousel/dist/jquery.jcarousel.min.js"></script>
<script type="text/javascript" src="<?=$base_url;?>assets/plugin/jcarousel/jcarousel.connected-carousels.js"></script>
<link rel="stylesheet" type="text/css" href="<?=$base_url;?>css/jquery-confirm.css" />
<script type="text/javascript" src="<?=$base_url;?>js/jquery-confirm.js"></script>
<script src="<?=$base_url;?>js/modal/pretty.js"></script>
<script src="<?=$base_url;?>js/chart/jquery.canvasjs.min.js"></script>
<script>
    var version = '2.0.0';
</script>
<style type="text/css">
    .space10{
        height: 10px;
    }
    body{
        font-family: Segoe UI,Frutiger,Frutiger Linotype,Dejavu Sans,Helvetica Neue,Arial,sans-serif;
    }
</style>

<!-- Custom styles for this template -->
<link rel="stylesheet" type="text/css" href="<?=$base_url;?>css/component.css">
<link href="<?=$base_url;?>css/style.css" rel="stylesheet">
<link href="<?=$base_url;?>css/style-responsive.css" rel="stylesheet" />

<link rel="stylesheet" type="text/css" href="<?=$base_url;?>css/parallax-slider/parallax-slider.css" />
<script type="text/javascript" src="<?=$base_url;?>js/parallax-slider/modernizr.custom.28468.js">
</script>
<script>
$(document).ready(function() {
    $(".toggle-trigger").click(function(){
        $(this).toggleClass("toggle-trigger-active").next().toggleClass("toggle-container-opened");
        return false; //Prevent the browser jump to the link anchor
    });
});
</script>
<!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
<!--[if lt IE 9]>
<script src="js/html5shiv.js">
</script>
<script src="js/respond.min.js">
</script>
<![endif]-->
