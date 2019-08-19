  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/home" class="brand-link">
      <img src="./img/logo.png" alt="Mamay Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Mamay | Milkbank</span>
    </a>
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <router-link to="/donor-registration" class="nav-link">
              <i class="nav-icon fa fa-user"></i>
              <p>Register Donor</p>
            </router-link>
          </li>
          <li class="nav-item">
              <router-link to="/milkbank-dashboard" class="nav-link">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>Dashboard</p>
              </router-link>
          </li>
          <li class="nav-item">
              <router-link to="/received-transported-milk" class="nav-link">
                <i class="nav-icon fa fa-dolly"></i>
                <p>Received Transported Milk</p>
              </router-link>
          </li>
          <li class="nav-item">
              <router-link to="/manage-prepasteurization" class="nav-link">
                <i class="nav-icon fa fa-microchip"></i>
                <p>Manage Milk <br /> Pre-Pasteurization</p>
              </router-link>
          </li>
          <li class="nav-item">
                <router-link to="/manage-pasteurization-post-processing" class="nav-link">
                  <i class="nav-icon fa fa-project-diagram"></i>
                  <p>Manage Pasteurization <br /> and Post-processing</p>
                </router-link>
          </li>
          <li class="nav-item">
              <router-link to="/manange-stored-milk" class="nav-link">
                <i class="nav-icon fa fa-store"></i>
                <p>Manage Stored Milk</p>
              </router-link>
          </li>
          <li class="nav-item">
              <router-link to="/manange-milkbatches" class="nav-link">
                <i class="nav-icon fa fa-box"></i>
                <p>Manage Milk Batches</p>
              </router-link>
          </li>
          <li class="nav-item">
              <router-link to="/recipient-selection" class="nav-link">
                <i class="nav-icon fa fa-users"></i>
                <p>Selection of Recepient</p>
              </router-link>
          </li>
          <li class="nav-item has-treeview menu">
              <router-link to="/manage-milkbank-documents" class="nav-link">
                <i class="nav-icon fa  fa-file"></i>
                <p>
                  Manage Milk Bank <br /> Documents
                  <i class="right fas fa-angle-left"></i>
                </p>
              </router-link>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <router-link to="/donor-records" class="nav-link">
                    <p>Donor Records</p>
                  </router-link>
                </li>
                <li class="nav-item">
                    <router-link to="/recipient-records" class="nav-link">
                      <p>Recipient Records</p>
                    </router-link>
                  </li>
              </ul>
            </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>