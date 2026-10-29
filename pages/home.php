<?php
  $PAGE_CSS = 'home.css';
  $NAVBAR_SCRIPT = 'navbar.js';
  include __DIR__ . '/../includes/header.php';
  include __DIR__ . '/../includes/navbar.php';
  require_once __DIR__ .'/reviews_code.php';
?>
<!-- Hero Section -->
<div class="container-fluid text-center hero-container">
  <div class="row">
    <div class="col col-1">
      <h1><span class= "heading-span">SIP Abacus</span>: Where Young Minds Become Future Leaders</h1>
    </div>
    <div class="col col-2">
      <button class= "own-btn">Own One <span class= "btn-span">Now!</span></button>
      <div class="box"></div>
    </div>
  </div>
  <p>A scientifically designed brain development program packed with powerful techniques to improve concentration, memory, and calculation speed. Perfect for young learners building a strong academic foundation.</p>
  <img src= "<?= BASE_URL ?>assets/images/roboki.webp" alt= "abacus" class= "abacus">
</div>
  <svg class="w-full first-svg" viewBox="0 0 1440 175" fill="none" xmlns="http://www.w3.org/2000/svg">
    <g clip-path="url(#clip0_14320_117540)">
      <path fill-rule="evenodd" clip-rule="evenodd" d="M1440 0.5C1440 -34.5701 1411.57 -63 1376.5 -63H63.5C28.4299 -63 0 -34.5701 0 0.5C0 35.5701 28.4299 64 63.5 64H472.5C503.152 64 528 88.8482 528 119.5C528 150.152 552.848 175 583.5 175H856.5C887.152 175 912 150.152 912 119.5C912 88.8482 936.848 64 967.5 64H1376.5C1411.57 64 1440 35.5701 1440 0.5Z" fill="var(--bs-yellow)"></path>
    </g>
    <defs>
      <clipPath id="clip0_14320_117540">
        <rect width="1440" height="175" fill="white"></rect>
      </clipPath>
    </defs>
  </svg>
<!-- REVIEWS -->
<div class="container-fluid reviews">
  <svg class="star-stroke" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
    <path 
      d="M50 0C50 27.6142 27.6142 50 0 50C27.6142 50 50 72.3858 50 100C50 72.3858 72.3858 50 100 50C72.3858 50 50 27.6142 50 0Z" 
      fill="none" 
      stroke="var(--bs-yellow)" 
      stroke-width="10" 
      stroke-linejoin="round"
      class= "star"
    />
  </svg>
  <div id="carouselExampleSlidesOnly" class="carousel slide slider-review height-vt" data-bs-ride="carousel">
    <div class="carousel-inner">
      <?php
        $active = true;
        while($row = mysqli_fetch_assoc($result)):
      ?>
      <div class="carousel-item <?= ($active) ? 'active' : ''?>">
        <div class="reviews-card-custom">
          <p>Tech</p>
          <h2 class="reviews-message"><?= $row['message'] ?></h2>
          <div class="reviews-profile">
            <p class= "img-p"><img src="<?= BASE_URL ?>assets/uploads/<?= $row['image_path'] ?>" class="d-block w-100 reviews-img-custom" alt="review"></p>
            <h5 class= "reviews-name"><?= $row['name'] ?></h5>
          </div>
        </div>
      </div>
      <?php 
        $active = false;
        endwhile;
      ?>
    </div>
  </div>
  <svg class="star-stroke-2" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
    <path 
      d="M50 0C50 27.6142 27.6142 50 0 50C27.6142 50 50 72.3858 50 100C50 72.3858 72.3858 50 100 50C72.3858 50 50 27.6142 50 0Z" 
      fill="none" 
      stroke="var(--bs-yellow)" 
      stroke-width="10" 
      stroke-linejoin="round"
      class= "star"
    />
  </svg>
  <svg class="star-stroke-3" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
    <path 
      d="M50 0C50 27.6142 27.6142 50 0 50C27.6142 50 50 72.3858 50 100C50 72.3858 72.3858 50 100 50C72.3858 50 50 27.6142 50 0Z" 
      fill="none" 
      stroke="var(--bs-yellow)" 
      stroke-width="8" 
      stroke-linejoin="round"
      class= "star"
    />
  </svg>
</div>
<?php
  include __DIR__ .'/../includes/hero_banner_area.php';
  include __DIR__ .'/../includes/popular_section.php';
  include __DIR__ .'/../includes/register.php';
  include __DIR__ .'/../includes/learning.php';
  include __DIR__ .'/../includes/course.php';
  include __DIR__ .'/../includes/blogs.php';
  include __DIR__ .'/../includes/footer.php'; 
?>