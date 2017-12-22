  <!-- SideMenu -->
  <div id="mySidenav" class="sidenav">
                <nav class="navbar">
                    <ul class="nav navbar-nav">
                        <li>
                            <h5>Menu</h5>
                        </li>
                        <li class="li-hr">
                            <hr>
                        </li>
                        <li>
                            <?php wp_nav_menu( array('theme_location' => 'menu', 
                            'menu_id'=> 'menu-side-list', 
                            'container' => 'false') ); ?>
                                <li id="close-arrow">
                                    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">
                                        <span class="glyphicon glyphicon-play" aria-hidden="true"></span>
                                    </a>
                                </li>
                                <li class="li-hr">
                                    <hr id="hr-after-closebtn">
                                </li>
                                <?php wp_nav_menu( array('theme_location' => 'sidemenu', 
                                      'menu_id' => 'menu-sidebar',
                                      'container' => 'false') ); ?>
                        </li>
                        <li class="li-hr">
                            <hr id="hr-brefore-socicon">
                        </li>
                        <li id="fb-icon-li">
                            <a href="#">
                                <i class="icon-facebook" aria-hidden="true"></i>
                            </a>
                        </li>
                        <li id="ln-icon-li">
                            <a href="#">
                                <i class="icon-linkedin" aria-hidden="true"></i>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
            <!-- SideMenu Ends-->