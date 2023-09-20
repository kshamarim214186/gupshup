<?php  $uri_path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$uri_segments = explode('/', $uri_path);

//echo $uri_segments[6]; ?>
 <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?=ROOT_PATH?>" class="brand-link">
      <span class="brand-text font-weight-light">Mailer</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->
                <li class="nav-item has-treeview menu-open">
                    <a href="#" class="nav-link active" style="display: none;">
                      <i class="nav-icon fas fa-tachometer-alt"></i>
                      <p>
                        Common
                        <i class="right fas fa-angle-left"></i>
                      </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?=ROOT_PATH?>dashboard" class="nav-link <?php if($uri_segments[1]=='dashboard' && $uri_segments[2]==''){ echo "active"; } ?>">
                              <i class="far fa-circle nav-icon"></i>
                              <p>Dashboard</p>
                            </a>
                        </li>
        
                        <li class="nav-item">
                            <a href="<?=ROOT_PATH?>dashboard/import_contact_number" class="nav-link <?php if($uri_segments[2]=='import_contact_number'){ echo "active"; } ?>">
                              <i class="fa fa-user nav-icon"></i>
                              <p>Import Contact for Automation</p>
                            </a>
                        </li>
                        
                        <li class="nav-item">
                            <a href="<?=ROOT_PATH?>dashboard/import_custom" class="nav-link <?php if($uri_segments[2]=='send_custom_email_india'){ echo "active"; } ?>">
                              <i class="fa fa-user nav-icon"></i>
                              <p>Custom Contact</p>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>