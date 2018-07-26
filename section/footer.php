<footer class="footer">
  <div class="container">
<div class="col-md-12 footer-white ">

      <?
      $con = new DB_con();
      $parent_menu=$con->select_where('menu','Parent','=0');
      while($cat_menu=mysql_fetch_object($parent_menu))
      {
        if($cat_menu->MenuName=="SERVICES" or $cat_menu->MenuNameID=="JASA" or $cat_menu->MenuName=="MEDIA" or $cat_menu->MenuNameID=="MEDIA")
        {
          echo '
          <div class="col-md-1 col-sm-6 no-padding">
            <div class="page-footer wow fadeInUp" data-wow-duration="2s" data-wow-delay=".5s">
          ';
        }
        else {
          echo '
          <div class="col-md-2 col-sm-6 no-padding">
            <div class="page-footer wow fadeInUp" data-wow-duration="2s" data-wow-delay=".5s">
          ';
        }

        if($language=="EN")
        {
          echo
          '<h6>'.$cat_menu->MenuName.'</h6>';
        }
        else
        {
          echo
          '<h6>'.$cat_menu->MenuNameID.'</h6>';
        }


        echo '<ul class="page-footer-list">';
        $child_menu=$con->select_where('menu','Parent',$cat_menu->id);
        while($menu_child=mysql_fetch_object($child_menu))
        {
          if($language=="EN")
          {
            echo '
              <li>
                <a href="/'.$cat_menu->url.'/'.$menu_child->url.'">'.$menu_child->MenuName.'</a>
              </li>
            ';
          }
          else {

            echo '
              <li>
                <a href="/'.$cat_menu->url.'/'.$menu_child->url.'">'.$menu_child->MenuNameID.'</a>
              </li>
            ';
          }


        }
          echo '</ul>';
        echo '


            </div>
          </div>
        ';
      }
      ?>

  <div class="clearfix"></div>
  <div class="copyright">
    <img src="<?=$base_url;?>assets/img/logo_gray.png">
    <p>&copy; Copyright - victoria Investama.</p>
  </div>
</div>
</div>
</footer>
