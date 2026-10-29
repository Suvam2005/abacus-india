<?php require_once __DIR__ .'/config/paths.php'?>
<?php
    $PAGE_CSS = 'landing.css';
    $PAGE_SCRIPT = 'landing.js';
    $NAVBAR_SCRIPT = 'navbar.js';
    include __DIR__ . '/includes/header.php';
    include __DIR__ . '/includes/navbar.php';
?>
<div class="containor div-containor" id= "applySection">
  <div class="row">
    <div class="col">
      <h1>Apply for Your Own SIP Abacus<br> Institute</h1>
      <h2 class= "fill-h2">Fill the form to check availability in your area and get the full franchise kit via WhatsApp.</h2>
      <h2 class= "you-h2">What You & Your Students Will Get</h2>
      <div class="qualities-1">
        <div class="quality-image">
          <i class="fa-solid fa-globe"></i>
        </div>
        <div class="quality-content">
          <h2 class= "quality-1">Global Certificate Recognition</h2>
          <h3 class= "quality-1-h3">Internationally accepted certificates with online verification</h3>
        </div>
      </div>
      <div class="qualities-2">
        <div class="quality-image2">
          <i class="fa-solid fa-check"></i>
        </div>
        <div class="quality-content2">
          <h2 class= "quality-2">Quality Education Standards</h2>
          <h3 class= "quality-2-h3">Industry-aligned curriculum with expert guidance</h3>
        </div>
      </div>
      <div class="qualities-3">
        <div class="quality-image3">
          <i class="fa-solid fa-computer"></i>
        </div>
        <div class="quality-content3">
          <h2 class= "quality-3">Structured & Updated Curriculum</h2>
          <h3 class= "quality-3-h3">Latest tools, Software & Hardware Knowledge</h3>
        </div>
      </div>
      <div class="qualities-4">
        <div class="quality-image4">
          <i class="fa-solid fa-robot"></i>
        </div>
        <div class="quality-content4">
          <h2 class= "quality-4">Confidence & Career Growth</h2>
          <h3 class= "quality-4-h3">Improved problem-solving skills, digital literacy, and better placement opportunities.</h3>
        </div>
      </div>
    </div>
    <!-- Form -->
    <div class="col">
      <?php if (isset($_GET['form']) && $_GET['form'] === 'success'): ?>

      <!-- SUCCESS MESSAGE -->
        <div class="form-success">
          <div class="box-success">
            <p>Success! Your franchise application is submitted. Our team will call you soon.</p>
          </div>
          <div class="normal-success">
            <h2>Application Submitted Successfully!</h2>
          </div>
        </div>
      <?php else: ?>
      <form id= "contact-form" method= "POST" action= "landing_code.php">
        <label for= "name" class= "name">Full Name</label>
        <input type= "text" placeholder= "e.g. Aditya Singh" name= "full_name" id= "name" required>
        <div class="personal">
          <div class="email">
            <label for= "email" class= "email_name">Email Address</label>
            <input type= "email" placeholder= "e.g. aditya@example.com" name= "email" id= "mail" required>
          </div>
          <div class="phone">
            <label for= "phone" class= "phone_name">Phone Number</label>
            <input type= "text" placeholder= "10 Digit Mobile" name= "phone" id= "phone" required>
          </div>
        </div>
        <div class="personal2">
          <div class="pin">
            <label for= "pincode" class= "pin_name">Area Pincode</label>
            <input type= "text" placeholder= "6 Digit PIN" name= "pincode" id= "pin" required>
          </div>
          <div class="status">
            <label for= "centre_status" class= "centre_name">Centre Status</label>
            <select id= "status_centre" name="centre_status" required>
              <option value= "" id= "choose">Choose Option</option>
              <option value= "have_centre" id= "having">Already have Computer Centre</option>
              <option value= "new_centre" id= "creating">Open new Computer Centre</option>
            </select>
          </div>
        </div>
        <button type= "submit" class= "submit-button">Submit Application <i class="fa-solid fa-arrow-right"></i></button>
      </form>
      <?php endif; ?>
    </div>
</div>

<!-- CARDS -->
<div class="cards containor">
<div class="card card-1" style="width: 18rem;">
  <div class="card-body">
    <i class="fa-solid fa-calculator"></i>
    <h4 class="card-title">285</h4>
    <p>Franchise</p>
  </div>
</div>
<div class="card card-2" style="width: 18rem;">
  <div class="card-body">
    <i class="fa-solid fa-flag"></i>
    <h4 class="card-title">28</h4>
    <p>State</p>
  </div>
</div>
<div class="card card-3" style="width: 18rem;">
  <div class="card-body">
    <i class="fa-solid fa-location-arrow"></i>
    <h4 class="card-title">763</h4>
    <p>City</p>
  </div>
</div>
<div class="card card-4" style="width: 18rem;">
  <div class="card-body">
    <i class="fa-regular fa-note-sticky"></i>
    <h4 class="card-title">364</h4>
    <p>Course</p>
  </div>
</div>
</div>
<!-- WHY SIP VIDEO -->
<div class="containor video-cont">
  <h1>Know More About SIP Abacus</h1>
  <div class="video">
    <video id= "bgVideo" autoplay muted loop playsinline>
      <source src="assets/videos/intro.mp4" type="video/mp4">
    </video>
    <button id="muteBtn" class="mute-btn">
      <i class="fa-solid fa-volume-xmark"></i>
      <h4>Unmute</h4>
    </button>
  </div>
</div>
<!-- WHY SIP -->
<div class="main">
  <h1>Why Join SIP Abacus?</h1>
  <p>India's fast-growing and reliable name in skill education.</p>
  <div class="containor why-cont">
    <div class="why-cont1">
      <ul class="list-group list">
        <li class="list-group-item item-1"><img src="<?= BASE_URL ?>assets/images/icons/verified.jpg">Trusted Brand Presence</li>
      </ul>
      <ul class="list-group">
        <li class="list-group-item item-2"><img src="<?= BASE_URL ?>assets/images/icons/verified.jpg">Industry-Relevant Curriculum</li>
      </ul>
      <ul class="list-group">
        <li class="list-group-item item-3"><img src="<?= BASE_URL ?>assets/images/icons/verified.jpg">Global Certification</li>
      </ul>
      <ul class="list-group">
        <li class="list-group-item item-4"><img src="<?= BASE_URL ?>assets/images/icons/verified.jpg">Franchise-Friendly Model</li>
      </ul>
      <ul class="list-group">
        <li class="list-group-item item-5"><img src="<?= BASE_URL ?>assets/images/icons/verified.jpg">Proven Teaching Methodology</li>
      </ul>
      <ul class="list-group">
        <li class="list-group-item item-6"><img src="<?= BASE_URL ?>assets/images/icons/verified.jpg">Comprehensive Course Portfolio</li>
      </ul>
    </div>
    <div class="why-cont2">
      <ul class="list-group list">
        <li class="list-group-item item-1"><img src="<?= BASE_URL ?>assets/images/icons/verified.jpg">Skill-Focused Learning</li>
      </ul>
      <ul class="list-group">
        <li class="list-group-item item-2"><img src="<?= BASE_URL ?>assets/images/icons/verified.jpg">Expert Academic Support</li>
      </ul>
      <ul class="list-group">
        <li class="list-group-item item-3"><img src="<?= BASE_URL ?>assets/images/icons/verified.jpg">Student-Centric Approach</li>
      </ul>
      <ul class="list-group">
        <li class="list-group-item item-4"><img src="<?= BASE_URL ?>assets/images/icons/verified.jpg">Easy Centre Setup</li>
      </ul>
      <ul class="list-group">
        <li class="list-group-item item-5"><img src="<?= BASE_URL ?>assets/images/icons/verified.jpg">Marketing & Branding Support</li>
      </ul>
      <ul class="list-group">
        <li class="list-group-item item-6"><img src="<?= BASE_URL ?>assets/images/icons/verified.jpg">Affordable Course Fees</li>
      </ul>
    </div>
    <div class="why-cont3">
      <ul class="list-group list">
        <li class="list-group-item item-1"><img src="<?= BASE_URL ?>assets/images/icons/verified.jpg">Digital Learning Support</li>
      </ul>
      <ul class="list-group">
        <li class="list-group-item item-2"><img src="<?= BASE_URL ?>assets/images/icons/verified.jpg">Career-Oriented Programs</li>
      </ul>
      <ul class="list-group">
        <li class="list-group-item item-3"><img src="<?= BASE_URL ?>assets/images/icons/verified.jpg">Regular Curriculum Updates</li>
      </ul>
      <ul class="list-group">
        <li class="list-group-item item-4"><img src="<?= BASE_URL ?>assets/images/icons/verified.jpg">Assessment & Evaluation System</li>
      </ul>
      <ul class="list-group">
        <li class="list-group-item item-5"><img src="<?= BASE_URL ?>assets/images/icons/verified.jpg">Teacher Training Support</li>
      </ul>
      <ul class="list-group">
        <li class="list-group-item item-6"><img src="<?= BASE_URL ?>assets/images/icons/verified.jpg">Pan-India Reach</li>
      </ul>
    </div>
    <div class="why-cont4">
      <ul class="list-group list">
        <li class="list-group-item item-1"><img src="<?= BASE_URL ?>assets/images/icons/verified.jpg">High Student Demand</li>
      </ul>
      <ul class="list-group">
        <li class="list-group-item item-2"><img src="<?= BASE_URL ?>assets/images/icons/verified.jpg">Future-Ready Education</li>
      </ul>
      <ul class="list-group">
        <li class="list-group-item item-3"><img src="<?= BASE_URL ?>assets/images/icons/verified.jpg">Strong Franchise Growth Potential</li>
      </ul>
      <ul class="list-group">
        <li class="list-group-item item-4"><img src="<?= BASE_URL ?>assets/images/icons/verified.jpg">Ethical & Transparent Operations</li>
      </ul>
      <ul class="list-group">
        <li class="list-group-item item-5"><img src="<?= BASE_URL ?>assets/images/icons/verified.jpg">Commitment to Quality Education</li>
      </ul>
    </div>
  </div>
</div>
<!-- FRANCHISE -->
<section class="testimonial-section py-5">
  <div class="container">
    <h2 class="fw-bold mb-5 h2-test">What Our Franchise Partners Say</h2>
    
    <div class="row g-4 align-items-stretch">
      <div class="col-lg-8">
        <div id="testimonialCarousel" class="carousel slide carousel-container" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="testimonial-card">
                <div class="row align-items-center h-100">
                  <div class="col-md-4 text-center">
                    <img src="assets/images/user1.jpg" class="testimonial-img" alt="">
                    <h5 class="mt-3 fw-bold">Shweta Rana</h5>
                    <p class="text-muted mb-0">Tinti Computer Education</p>
                  </div>
                  <div class="col-md-8">
                    <p class="testimonial-text">
                      "The global certification and placement support made our students job-ready. Best franchise decision ever!"
                    </p>
                    <button class="btn btn-primary btn-testimonial mt-3 btn-test">
                      <i class="fa-solid fa-circle-play me-2"></i>
                      Watch Testimonial Video
                    </button>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="testimonial-card">
                <div class="row align-items-center h-100">
                  <div class="col-md-4 text-center">
                    <img src="assets/images/user2.jpg" class="testimonial-img" alt="">
                    <h5 class="mt-3 fw-bold">Amit Kumar</h5>
                    <p class="text-muted mb-0">Future Tech Academy</p>
                  </div>
                  <div class="col-md-8">
                    <p class="testimonial-text">
                      "Excellent branding support and future-ready curriculum. Our center grew rapidly with NCAIEB."
                    </p>
                    <button class="btn btn-primary btn-testimonial mt-3 btn-test">
                      <i class="fa-solid fa-circle-play me-2"></i>
                      Watch Testimonial Video
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>
      <div class="col-lg-4 right-card">
        <div class="about-card card-product">
          <h4 class="fw-bold mb-3 about-h4">About NCAIEB</h4>
          <p class= "p-1">NCAIEB Skill Development is a leading educational franchise network recognized by MCA, ISO 9001:2015 certified, and NITI Aayog registered.</p>
          <p class= "p-2">We empower entrepreneurs with zero renewal fees, full branding support, placement assistance, and future-ready courses including Coding, AI & Advanced Computing.</p>
          <a href="#applySection" class="btn w-100 mt-3 btn-card">
            Become a Franchise Partner →
          </a>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- START JOURNEY -->
<div class="start-container">
  <h1>Start Your SIP Abacus Institute Journey Now</h1>
  <a href="#applySection" class="mt-3 apply-btn">
    Apply & Check Availability →
  </a>
</div>


<?php 
  include __DIR__ . '/includes/footer.php' 
?>