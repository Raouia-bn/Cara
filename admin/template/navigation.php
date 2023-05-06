<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link " aria-current="page" href="#">
              <span data-feather="home"></span>
             Home
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="http://<?php echo $_SERVER['HTTP_HOST'];?>/admin/categories/liste.php">
              <span data-feather="list"></span>
              Categories
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="http://<?php echo $_SERVER['HTTP_HOST'];?>/admin/produits/liste.php">
              <span data-feather="shopping-cart"></span>
              Products
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="users"></span>
              Customers
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="bar-chart-2"></span>
              Reports
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="http://<?php echo $_SERVER['HTTP_HOST'];?>/admin/profile.php">
              <span data-feather="user"></span>
             Profil
            </a>
          </li>
        </ul>

        
      </div>
    </nav>