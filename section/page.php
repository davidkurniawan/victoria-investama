
<body>
    <!--header start-->
    <!--header end-->

    <!-- Sequence Modern Slider -->

    <!--property start-->
      <div class="container">
          <div class="col-md-3  sidebar-bg">
            <div class="sidebar">
            <h3>Company</h3>
            @if(isset($nav_title))
            <h4 class="title-red">{{$nav_title}}</h4>
            @endif
            <ul class="page-footer-list">
              @foreach($sidebar_menu as $sidebar_nav)
              <li>
                <a href="//{{$base_url}}/{{$sidebar_nav->url}}">{{$sidebar_nav->MenuName}}</a>
              </li>
              @endforeach
            </ul>
          </div>
          </div>
      <div class="col-md-9 bg-white">
        <h3 class="title-content">{!!$content->Title!!}</h3>
        @if(isset($content))
        {!!$content->BodyTextEN!!}
        @endif
        <div class="clearfix"></div>
        <div class="row bod">
        @if(isset($bod))
        @foreach ($bod as $bod_list)
        <div class="col-md-4">
        <img src='{!!$bod_list->Photo!!}'>
        <h5>{!!$bod_list->Name!!}</h5>
        <h5 class="tebal">{!!$bod_list->Position!!}</h5>

        {!!substr($bod_list->DescriptionEN, 0, 100)!!}
      </div>
        @endforeach
        @endif
      </div>
          @if($nav_title=="About victoria")
        <div class="col-md-6">
          <h3>Vision</h3>
          <hr>
          <div class="clearfix"></div>
          <p>Being an internationally scale top-tier investment company and providing one stop financial service solutions that are trustworthy through its subsidiaries.
          Mission
        </div>
        <div class="col-md-6">
          <h3>Vision</h3>
          <hr>
          <div class="clearfix"></div>
          <ul>
            <li>Investing in companies that have good prospects in order to maximize its shareholders' value</li>
          <li>Providing services and up-to date information in the field of integrated financial services for customers</li>
          <li>Encourage sustainable development of human resources</li>
        </ul>
        </div>
        @endif
      </div>

      </div>

    <div class="container">

    </div>
    <!--property end-->




      <!--recent work start-->


    <!-- service end -->
    <!--container end-->

    <!--footer start-->
    <!-- footer end -->
    <!--small footer start -->

    <!--small footer end-->

    <!-- js placed at the end of the document so the pages load faster
<script src="js/jquery.js">
</script>
-->

  </body>
