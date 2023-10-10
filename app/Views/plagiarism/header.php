<header class="main-header " id="header">
            <nav class="navbar navbar-static-top navbar-expand-lg">
              <!-- Sidebar toggle button -->
              <button id="sidebar-toggler" class="sidebar-toggle">
                <span class="sr-only">Toggle navigation</span>
              </button>
              <!-- search form -->
              
              <div class="search-form d-none d-lg-inline-block">
                <div class="input-group">
                  <!--<button type="button" name="search" id="search-btn" class="btn btn-flat">
                    <i class="mdi mdi-magnify"></i>
                  </button>
                  <input type="text" name="query" id="search-input" class="form-control" placeholder="'button', 'chart' etc."
                    autofocus autocomplete="off" /> -->
                </div>
                <div id="search-results-container">
                  <ul id="search-results"></ul>
                </div>
              </div>
            
              <div class="navbar-right ">
                <ul class="nav navbar-nav">
                  
                  <li class="right-sidebar-in right-sidebar-2-menu">
                    <i class="mdi mdi-settings mdi-spin"></i>
                  </li>
                  <!-- User Account -->
                  <li class="dropdown user-menu">
                    <button href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                      <img src="<?php echo base_url(); ?>/backend-asset/img/user/user.png" class="user-image" alt="User Image" />
                      <span class="d-none d-lg-inline-block"><?php echo $user->{'first_name'}?></span>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-right">
                      <!-- User image -->
                      <li class="dropdown-header">
                        <img src="<?php echo base_url(); ?>/backend-asset/img/user/user.png" class="img-circle" alt="User Image" />
                        <div class="d-inline-block">
                        <?php echo $user->{'first_name'}.$user->{'last_name'};?> <small class="pt-1"><?php echo $user->{'email'};?></small>
                        </div>
                      </li>

                      <li>
                        <a href="user-profile.html">
                          <i class="mdi mdi-account"></i> My Profile
                        </a>
                      </li>
                      

                      <li class="dropdown-footer">
                        <a href="<?php echo base_url("/auth/logout"); ?>"> <i class="mdi mdi-logout"></i> Log Out </a>
                      </li>
                    </ul>
                  </li>
                </ul>
              </div>
            </nav>
          </header>