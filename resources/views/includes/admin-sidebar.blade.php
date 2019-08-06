  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/home" class="brand-link">
      <img src="./img/logo.png" alt="Mamay Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Mamay | Admin</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <router-link to="/dashboard" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>Dashboard</p>
            </router-link>
          </li>
          <li class="nav-item has-treeview menu">
            <a href="#" class="nav-link">
              <i class="nav-icon fa  fa-print"></i>
              <p>
                Manage Reports
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <router-link to="/view-reports" class="nav-link">
                  <p>View Reports</p>
                </router-link>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview menu">
              <router-link to="/manage-users" class="nav-link">
                <i class="nav-icon fa fa-users"></i>
                <p>
                  Manage Users
                  <i class="right fas fa-angle-left"></i>
                </p>
              </router-link>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <router-link to="/view-users" class="nav-link">
                    <p>View Users</p>
                  </router-link>
                </li>
                <li class="nav-item">
                  <router-link to="/manage-roles" class="nav-link">
                    <p>Manage Roles</p>
                  </router-link>
                </li>
              </ul>
            </li>
          <li class="nav-item">
            <router-link to="/manage-events" class="nav-link">
              <i class="nav-icon fa fa-calendar"></i>
                <p>Manage Events</p>
            </router-link>
          </li>
          <li class="nav-item">
              <router-link to="/manage-articles" class="nav-link">
                <i class="nav-icon fa fa-copy"></i>
                  <p>Manage Articles</p>
              </router-link>
          </li>
          <li class="nav-item">
            <router-link to="/manage-logistics" class="nav-link">
              <i class="nav-icon fa fa-motorcycle"></i>
              <p>Manage Logistics</p>
            </router-link>
          </li>
          <li class="nav-item has-treeview menu">
              <router-link to="/manage-transactions" class="nav-link">
                <i class="nav-icon fa  fa-tags"></i>
                <p>
                  Manage Transactions
                  <i class="right fas fa-angle-left"></i>
                </p>
              </router-link>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <router-link to="/view-transactions" class="nav-link">
                    <p>View Transactions</p>
                  </router-link>
                </li>
                <li class="nav-item">
                    <router-link to="/edit-price-range" class="nav-link">
                      <p>Edit Pricing Range</p>
                    </router-link>
                  </li>
              </ul>
            </li>
          <li class="nav-item">
            <router-link to="/manage-interview-form" class="nav-link">
              <i class="nav-icon fa fa-question-circle"></i>
              <p>Manage Interview Forms</p>
            </router-link>
          </li>
          <li class="nav-item">
            <router-link to="/manage-milkbanks" class="nav-link">
              <i class="nav-icon fa fa-home"></i>
              <p>Manage Milk Banks</p>
            </router-link>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>