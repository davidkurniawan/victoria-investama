<div id="sidebar"  class="nav-collapse ">
    <!-- sidebar menu start-->
    <ul class="sidebar-menu" id="nav-accordion">



        <li class="sub-menu">
            <a href="javascript:;" class="<? if($page=="list-page" or $page=="page-editor" or $page=="page-manager" or $page=="category-manager" or $page=="edit-category" or $page=="create-category" or $page=="edit-page") {echo "active";} ?>">
                <i class="fa fa-book"></i>
                <span>Content Management</span>
            </a>
            <ul class="sub">
                <li  class="<? if($page=="page-manager") {echo "active";} ?>"><a  href="?page=page-manager">All Content</a></li>
                <li class=" <? if($page=="list-page" or $page=="category-manager"  or $page=="edit-category" or $page=="create-category") {echo "active";} ?>"><a  href="?page=category-manager">Category Page</a></li>
            </ul>
        </li>
        <li class="sub-menu">
            <a href="javascript:;" class="<? if($page=="post-press-release" or $page=="edit-press" or $page=="press-release-manager" or $page=="post-news" or $page=="edit-news" or $page=="news-manager") {echo "active";} ?>">
                <i class="fa fa-rss-square"></i>
                <span>Media News</span>
            </a>
            <ul class="sub">
                <li  class="<? if($page=="post-news" or  $page=="news-manager" or $page=="edit-news") {echo "active";} ?>"><a  href="?page=news-manager">News</a></li>
                <li class=" <? if( $page=="press-release-manager" or $page=="edit-press"  or $page=="edit-press-release" or $page=="post-press-release") {echo "active";} ?>"><a  href="?page=press-release-manager">Press Release</a></li>
            </ul>
        </li>

        <li class="sub-menu">
            <a href="javascript:;"  class="<? if($page=="add-image-slider" or  $page=="slider" or $page=="new-slide-image" or $page=="slide-show" or $page=="milestone" or $page=="new-milestone" or $page=="edit-milestone" or $page=="visi-misi" or $page=="visi-misi-editor" or $page=="share-ownership-structure" or $page=="bod" or $page=="bod-editor" or $page=="boc" or $page=="boc-editor") {echo "active";} ?>">
                <i class="fa fa-puzzle-piece"></i>
                <span>Page Extra</span>
            </a>
            <ul class="sub">
                <li class="<? if($page=="visi-misi" or $page=="visi-misi-editor") {echo "active";} ?>"><a  href="?page=visi-misi">Visi & Mission</a></li>
                <li class="<? if($page=="milestone" or $page=="new-milestone" or $page=="edit-milestone") {echo "active";} ?>"><a  href="?page=milestone">Milestone</a></li>
                <li class="<? if($page=="share-ownership-structure") {echo "active";} ?>"><a  href="?page=share-ownership-structure">Share Ownership Structure</a></li>
                <li class="<? if($page=="bod" or $page=="bod-editor") {echo "active";} ?>"><a  href="?page=bod">Board Of Directors</a></li>
                <li class="<? if($page=="boc" or $page=="boc-editor") {echo "active";} ?>"><a  href="?page=boc">Board of Commissioner</a></li>
                <li class="<? if($page=="add-image-slider" or $page=="slider" or $page=="new-slide-image" or $page=="slide-show" or $page=="slide-show-editor") {echo "active";} ?>"><a  href="?page=slide-show">Slide Show</a></li>
            </ul>
        </li>
        <li class="sub-menu">
            <a href="javascript:;"  class="<? if($page=="edit-dividen" or $page=="new-financial-ratio" or $page=="financial-ratio" or $page=="edit-financial-ratio" or $page=="profit-lost" or $page=="new-profit-loss" or $page=="edit-profit-loss" or $page=="balance-sheet" or $page=="new-balance-sheet" or $page=="edit-balance-sheet" or $page=="dividen-history" or $page=='new-dividen') {echo "active";} ?>">
                <i class="fa fa-ticket"></i>
                <span>Reporting</span>
            </a>
            <ul class="sub">
                <li class="<? if($page=="balance-sheet" or $page=="new-balance-sheet" or $page=="edit-balance-sheet") {echo "active";} ?>"><a  href="?page=balance-sheet">Balance Sheet</a></li>
                <li class="<? if($page=="profit-lost" or $page=="new-profit-loss" or $page=="edit-profit-loss") {echo "active";} ?>"><a  href="?page=profit-lost">Profit Loss</a></li>
                <li class="<? if($page=="financial-ratio" or $page=="new-financial-ratio" or $page=="edit-financial-ratio") {echo "active";} ?>"><a  href="?page=financial-ratio">Financial Ratio</a></li>
                <li class="<? if($page=="edit-dividen" or $page=="dividen-history" or $page=="new-dividen") {echo "active";} ?>"><a  href="?page=dividen-history">Dividen History</a></li>

            </ul>
        </li>
        <li class="sub-menu">
            <a href="javascript:;"  class="<? if(
            $page=="financial-reports" or
            $page=="edit-ep" or
            $page=="new-ep" or
            $page=="new-gms" or
            $page=="edit-ar" or
            $page=="new-annual-reports" or
            $page=="annual-reports" or
            $page=="general-meetings-of-shareholders" or
            $page=="events-presentation" or
            $page=="information-disclosure" or
            $page=="prospectus" or
            $page=="new-id" or
            $page=="edit-id" or
            $page=="edit-prt" or
            $page=="new-prt") {echo "active";} ?>">
                <i class="fa fa-file"></i>
                <span>File Attachment</span>
            </a>
            <ul class="sub">
                <li class="<? if($page=="annual-reports" or $page=="new-annual-reports" or $page=="edit-ar") {echo "active";} ?>"><a  href="?page=annual-reports">Annual Reports</a></li>
                <li class="<? if($page=="financial-reports" or $page=="new-financial-reports" or $page=="edit-financial-report") {echo "active";} ?>"><a  href="?page=financial-reports">Financial Reports</a></li>
                <li class="<? if($page=="general-meetings-of-shareholders") {echo "active";} ?>"><a  href="?page=general-meetings-of-shareholders">General meetings of shareholders</a></li>
                <li class="<? if($page=="events-presentation" or $page=="new-ep" or $page=="edit-ep") {echo "active";} ?>"><a  href="?page=events-presentation">Events & presentation</a></li>
                <li class="<? if($page=="information-disclosure" or $page=="new-id" or $page=="edit-id") {echo "active";} ?>"><a  href="?page=information-disclosure">Information disclosure</a></li>
                <li  class="<? if($page=="prospectus" or $page=="new-prt" or $page=="edit-prt") {echo "active";} ?>"><a  href="?page=prospectus">Prospectus</a></li>
            </ul>
        </li>
        <li >                   <a href="?page=company-link-setting" class="<? if($page=="company-link-setting") {echo "active";} ?>">
                          <i class="fa fa-link"></i>
                          <span>Company Link</span>
                      </a>
                  </li>
        <li >                   <a href="?page=stock-setting" class="<? if($page=="stock-setting") {echo "active";} ?>">
                          <i class="fa fa-bar-chart-o"></i>
                          <span>Stock Widget</span>
                      </a>
                  </li>
        <li >                   <a href="?page=contact-setting" class="<? if($page=="contact-setting") {echo "active";} ?>">
                          <i class="fa fa-phone"></i>
                          <span>Contact Setting</span>
                      </a>
                  </li>
                  <li >                   <a href="?page=user-management" class="<? if($page=="user-management" or $page=="create-user" or $page=="edit-user") {echo "active";} ?>">
                                    <i class="fa fa-user"></i>
                                    <span>User Management</span>
                                </a>
                            </li>
                            <li >                   <a href="?page=web-setting" class="<? if($page=="web-setting") {echo "active";} ?>">
                                              <i class="fa fa-gear"></i>
                                              <span>Web Setting</span>
                                          </a>
                                      </li>








        <!--multi level menu start-->

        <!--multi level menu end-->

    </ul>
    <!-- sidebar menu end-->
</div>
