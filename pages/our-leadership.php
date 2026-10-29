<?php
    $PAGE_CSS = 'our-leader.css';
    $NAVBAR_SCRIPT = 'navbar.js';
    include __DIR__ .'/../includes/header.php';
    include __DIR__ .'/../includes/navbar.php';
    require_once __DIR__ .'/our-leadership_code.php';
?>
<div class="container-sm mt-98 ms-0 ps-0">
    <img src= "<?= BASE_URL ?>assets/images/banner/Banner-03.jpg" class= "banner-common">
    <p class= "position-absolute top-40 heading-4">Our Leadership</p>
</div>
<div class="container ps-5 mt-5 mb-5 pt-5 pb-5 pe-5 ps-50">
    <div class="row m-0 p-0 gap-4 justify-content-center d-flex">
        <?php
            while($row = mysqli_fetch_assoc($result)):
        ?>
        <div class="card pt-30 cards" style="width: 14rem;">
            <img src="assets/uploads/<?= $row['image_path'] ?>" class="card-img-top leader-img" alt="Leaders">
            <div class="card-body">
                <h5 class="card-title text-center"><?= $row['name'] ?></h5>
                <p class="card-text text-center card-role"><?= $row['role'] ?></p>
                <p class="card-text text-center card-branch"><?= $row['sip_abacus_branch']?></p>
                <a href="#" class="leader-btn ps-20 text-decoration-none fw-bold" data-bs-toggle="modal" data-bs-target="#leaderModal<?= $row['id'] ?>" 
                data-name= "<?= $row['name'] ?>"
                data-role= "<?= $row['role'] ?>">READ MORE<i class="fa-solid fa-angle-right ps-1 fw-bold"></i></a>
            </div>
        </div>
        <div class="modal fade" id="leaderModal<?= $row['id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-main">
                <div class="modal-content">
                    <div class="modal-body text-start">
                        <button type="button" class="modal-btn position-absolute top-0 end-0" data-bs-dismiss="modal" aria-label="Close">
                            <i class="fa-solid fa-xmark fs-4"></i>
                        </button>
                        <p class="modal-name fs-3"><?= $row['name'] ?></p>
                        <p class="modal-role m-10"><?= $row['role'] ?></p>
                        <p class="modal-branch m-15"><?= $row['sip_abacus_branch'] ?></p>
                        <p class= "para-description fs-6"><?= $row['description'] ?></p>
                    </div>
                </div>
            </div>
        </div>
        <?php 
            endwhile;
        ?>
    </div>
    
</div>
<?php include __DIR__ .'/../includes/footer.php'; ?>