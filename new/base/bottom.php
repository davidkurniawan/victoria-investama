<script src="<?=$base_url;?>js/jquery-1.8.3.min.js"></script>
<script src="<?=$base_url;?>js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?=$base_url;?>js/hover-dropdown.js"></script>
<script defer src="<?=$base_url;?>js/jquery.flexslider.js"></script>
<script type="text/javascript" src="<?=$base_url;?>assets/bxslider/jquery.bxslider.js"></script>

<script type="text/javascript" src="<?=$base_url;?>js/jquery.parallax-1.1.3.js"></script>
<script src="<?=$base_url;?>js/wow.min.js"></script>
<script src="<?=$base_url;?>assets/owlcarousel/owl.carousel.js"></script>

<script src="<?=$base_url;?>js/jquery.easing.min.js"></script>
<script src="<?=$base_url;?>js/link-hover.js"></script>
<script src="<?=$base_url;?>js/superfish.js"></script>
<script type="text/javascript" src="<?=$base_url;?>js/parallax-slider/jquery.cslider.js"></script>
<script type="text/javascript">
  $(function() {

    $('#da-slider').cslider({
      autoplay    : true,
      bgincrement : 0
    });

  });
</script>



<!--common script for all pages-->
<script src="<?=$base_url;?>js/common-scripts.js">
</script>

<script type="text/javascript">
  jQuery(document).ready(function() {


    $('.bxslider1').bxSlider({
      minSlides: 5,
      maxSlides: 6,
      slideWidth: 360,
      slideMargin: 2,
      moveSlides: 1,
      responsive: true,
      nextSelector: '#slider-next',
      prevSelector: '#slider-prev',
      nextText: 'Onward →',
      prevText: '← Go back'
    });

  });


</script>


<script>
  $('a.info').tooltip();

  $(window).load(function() {
    $('.flexslider').flexslider({
      animation: "fade",
      start: function(slider) {
        $('body').removeClass('loading');
      }
    });
    $('.flexslider2').flexslider({
      animation: "fade",
      start: function(slider) {
        $('body').removeClass('loading');
      }
    });
  });

  $(document).ready(function() {

    $("#owl-demo").owlCarousel({

      items : 4

    });

  });

  jQuery(document).ready(function(){
    jQuery('ul.superfish').superfish();
  });

  new WOW().init();

  $("iframe").contents().find(".fade-box h2").css("font-size", "30px");
</script>
