
        <nav class="navbar-default navbar-static-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="side-menu">
                    <li class="sidebar-search">
                        <div class="input-group custom-search-form">
                            <input type="text" class="form-control" placeholder="Search...">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                        </div>
                        <!-- /input-group -->
                    </li>
                    <li>
                        <a href="<?php echo site_url()?>/dashboard/"><i class="fa fa-dashboard fa-fw"></i>Home</a>
                    </li>
                    
                    <li>
                        <a href="<?php echo site_url()?>/dashboard/gardu"><i class="fa fa-table fa-fw"></i>Gardu</a>
                    </li>
                    <li>
                        <a href="<?php echo site_url()?>/dashboard/trafo"><i class="fa fa-table fa-fw"></i>Trafo</a>
                    </li>
                    
                    <li>
                        <a href="#"><i class="fa fa-sitemap fa-fw"></i> Admin<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="<?php echo site_url()?>/dashboard/add_gardu/">Tambah Gardu Baru</a>
                            </li>
                            <li>
                                <a href="#">Oil Level List</a>
                            </li>
                            <li>
                                <a href="#">Tap List</a>
                            </li>
                            <li>
                                <a href="#">Tipe Trafo List</a>
                            </li>
                            <li>
                                <a href="#">Name Trafo List</a>
                            </li>
                            <li>
                                <a href="#">Note<span class="fa arrow"></span></a>
                                <ul class="nav nav-third-level">
                                    <li>
                                        <a href="#">Note Gardu</a>
                                    </li>
                                    <li>
                                        <a href="#">Note Trafo</a>
                                    </li>
                                    <li>
                                        <a href="#">Note Rak</a>
                                    </li>
                                </ul>
                                <!-- /.nav-third-level -->
                            </li>
                        </ul>
                        <!-- /.nav-second-level -->
                    </li>
                    
                </ul>
                <!-- /#side-menu -->
            </div>
            <!-- /.sidebar-collapse -->
        </nav>
        <!-- /.navbar-static-side -->