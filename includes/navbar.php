<?php 
  // $current_page = basename($_SERVER['PHP_SELF'])
  $current_page = $_GET['url'] ?? 'home';
?>
<!-- Navigation Menu (Responsive) -->
<nav class="navbar nav navbar-expand-lg navbar-light navbar-main" id="header-bar">
  <!-- NEW WRAPPER -->
  <div class="header-internal d-flex align-items-center w-100">
    
    <!-- Logo & Toggle - Left --> 
    <div class="col-auto pe-0">
      <a class="navbar-brand" <?= ($current_page == 'home') ? 'active' : '' ;?> href="<?= BASE_URL ?>home">
        <img src="<?= BASE_URL ?>assets/images/logo.png" class="d-inline-block align-text-top logo" alt="Logo">
      </a>
      <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse"
        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>

    <!-- Navigation Links - Center (Desktop) / Hidden Mobile -->
    <div class="col-lg-6 col-md-5 flex-grow-1 ">
      <div class="navbar-collapse mobile-menu" id="navbarSupportedContent">
        <button class="menu-close-btn d-lg-none" type="button" data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent" aria-label="Close">
          &times;
        </button>

        <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link nav-link1 <?= ($current_page == 'home') ? 'active' : '' ;?>" href="<?= BASE_URL ?>home">Home</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle <?= ($current_page == 'about-us') ? 'active' : '' ;?>" href="<?= BASE_URL ?>about-us" role="button" data-bs-toggle="dropdown"  aria-expanded="false">
              About Us
            </a>
            <ul class="dropdown-menu custom-dropdown">
              <li><a class="dropdown-item" href="<?= BASE_URL?>our-leadership">Our Leadership</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link nav-link3 <?= ($current_page == 'gallery') ? 'active' : '' ;?>" href="<?= BASE_URL ?>gallery">Gallery</a>
          </li>
          <li class="nav-item">
            <a class="nav-link nav-link4 <?= ($current_page == 'reviews') ? 'active' : '' ;?>" href="<?= BASE_URL ?>reviews">Reviews</a>
          </li>
          <li class="nav-item">
            <a class="nav-link nav-link5 <?= ($current_page == 'contact-us') ? 'active' : '' ;?>" href="<?= BASE_URL ?>contact-us">Contact Us</a>
          </li>
        </ul>
      </div>
    </div>

    <!-- CTA Button - Right -->
    <div class="col-auto ps-0 button-class">
      <a href="<?= BASE_URL ?>partner-program" class="d-lg-block">
        <button class="custom-button">
          Partner Events
        </button>
      </a>
    </div>

  </div>
  <!-- END WRAPPER -->
</nav>
