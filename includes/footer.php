<?php
  require_once __DIR__ . '/../config/paths.php'; 
  $PAGE_CSS = 'footer.css';
  include __DIR__ .'/header.php';
  $current_page = $_GET['url'] ?? 'home';
?>
<?php if($current_page != 'landing'): ?>
<svg class="w-full" viewBox="0 0 1440 176" fill="none" xmlns="http://www.w3.org/2000/svg">
	<g clip-path="url(#clip0_14148_25822)">
		<path fill-rule="evenodd" clip-rule="evenodd" d="M1440 174.817C1440 209.887 1411.57 238.317 1376.5 238.317H63.5C28.4299 238.317 0 209.887 0 174.817C0 139.747 28.4299 111.317 63.5 111.317H472.5C503.152 111.317 528 86.4692 528 55.8174C528 25.1656 552.848 0.317383 583.5 0.317383H856.5C887.152 0.317383 912 25.1656 912 55.8174C912 86.4692 936.848 111.317 967.5 111.317H1376.5C1411.57 111.317 1440 139.747 1440 174.817Z" fill="var(--bs-yellow)"></path>
	</g>
	<defs>
		<clipPath id="clip0_14148_25822">
			<rect width="1440" height="175" fill="white" transform="translate(0 0.317383)"></rect>
		</clipPath>
	</defs>
</svg>
<section class="section-footer bg-warning pt-5 pb-5">

<div class="container">

    <!-- Heading -->
    <div class="row mb-5">
        <div class="col-lg-6">
            <p class="mb-2">Contact us</p>
            <h1 class="fw-bold display-5">Chat to our friendly team</h1>
            <p class="text-dark">
                We’d love to hear from you. Please fill out this form or shoot us an email.
            </p>
        </div>
    </div>


    <!-- Content -->
    <div class="row align-items-center">

        <!-- LEFT SIDE -->
        <div class="col-lg-6">

            <div class="row g-4 left-side">

                <!-- CONTACT -->
                <div class="col-md-6">
                    <div>
                        <i class="fa-regular fa-envelope fs-3 mb-3"></i>
                        <h5>Contacts</h5>
                        <p class="text-dark opa-text">Our friendly team is here to help.</p>
                        <p class="mb-1 sip-para">sipinfo@sipacademyindia.com</p>
                        <p>044-42023331/42605609</p>
                    </div>
                </div>

                <!-- LIVE CHAT -->
                <div class="col-md-6">
                    <div>
                        <i class="fa-regular fa-comment fs-3 mb-3"></i>
                        <h5>Live chat</h5>
                        <p class="text-dark opa-text">Our friendly team is here to help.</p>
                        <p class= "contacts-sip-para">Start new chat</p>
                    </div>
                </div>

                <!-- WORKING HOURS -->
                <div class="col-md-6 mt-6">
                    <div>
                        <i class="fa-regular fa-hourglass fs-3 mb-3"></i>
                        <h5>Working hours</h5>
                        <p class="font-tthoves opa-text">Come say hello at our office HQ.</p>
                        <p class="text-dark">
                            Monday to Friday <br>
                            9:00 AM to 6:00 PM
                        </p>
                    </div>
                </div>

            </div>

        </div>


        <!-- RIGHT SIDE MAP -->
        <div class="col-lg-6 mt-4 mt-lg-0">

            <div class="ratio ratio-16x9 rounded-4 overflow-hidden shadow iframe">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3683.9375722925997!2d88.46740147507799!3d22.58143807948548!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a0275e3dd0d0521%3A0x793d595f75f2984f!2sSIP%20Abacus%20New%20Town!5e0!3m2!1sen!2sin!4v1771843825270!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>

        </div>

    </div>

</div>
<!-- ================= FOOTER MAIN ================= -->
<div class="container pt-5 mt-8">

  <!-- LOGO + TEXT ROW -->
  <div class="row mb-5">
    <div class="col-lg-4 col-md-12">
      <img src="<?= BASE_URL ?>assets/images/logo.png" width="160" class="mb-3">
      <p class="text-dark main-text">
        Empowering innovation and creativity through cutting-edge robotics.
      </p>
    </div>
  </div>


  <!-- LIST SECTION ROW -->
  <div class="row">

    <!-- PRODUCT -->
    <div class="col-lg-2 col-md-4">
      <ul class="list-unstyled footer-links">
        <li><a href="#">Home</a></li>
        <li><a href="#">Why SIP Abacus?</a></li>
        <li><a href="#">Our courses</a></li>
        <li><a href="#">Alumni</a></li>
        <li><a href="#">About Us</a></li>
      </ul>
    </div>

    <!-- LEGAL -->
    <div class="col-lg-2 col-md-4 gap-6-custom">
      <ul class="list-unstyled footer-links">
        <li><a href="#">FAQ's</a></li>
        <li><a href="#">Blog</a></li>
        <li><a href="#">Be our Franchise</a></li>
        <li><a href="#">SIP ABACUS near me</a></li>
        <li><a href="#">Franchisee Login</a></li>
      </ul>
    </div>

  </div>

</div>


  <!-- COPYRIGHT -->
  <div class="row mt-5 align-items-center">

    <div class="col-lg-8 col-md-12 mb-3 mb-lg-0 footer-cred">
      <h3>Developed by <a href="https://www.linkedin.com/in/suvam-bhadra/" target="_blank">Suvam</a><br> © 2023 SIP Academy India Pvt. Ltd. | All rights reserved.</h3>
    </div>


    <!-- SOCIAL ICONS -->
    <div class="col-lg-4 col-md-12 social">

      <a href="https://www.facebook.com/SIPabacusIndia/" class="me-3 footer-icon text-decoration-none">
        <i class="fa-brands fa-facebook-f"></i>
      </a>

      <a href="https://www.instagram.com/sipabacusindia/" class="me-3 footer-icon text-decoration-none">
        <i class="fa-brands fa-instagram"></i>
      </a>

      <a href="https://www.youtube.com/@sipabacusindia" class="footer-icon text-decoration-none">
        <i class="fa-brands fa-youtube"></i>
      </a>

    </div>

  </div>

</div>
</section>
<?php endif ;?>
<!-- GLOBAL JS CDN -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
<!-- Page-specific JS -->
<?php if (!empty($PAGE_SCRIPT)): ?>
  <script src="<?= BASE_URL ?>assets/js/<?= $PAGE_SCRIPT ?>"></script>
<?php endif; ?>
<?php if (!empty($NAVBAR_SCRIPT)): ?>
  <script src="<?= BASE_URL ?>assets/js/<?= $NAVBAR_SCRIPT ?>"></script>
<?php endif; ?>
</body>
</html>