<?php
    $PAGE_CSS = 'gallery.css';
    $NAVBAR_SCRIPT = 'navbar.js';
    include __DIR__ .'/../includes/header.php';
    include __DIR__ .'/../includes/navbar.php';
    require_once __DIR__ .'/gallery-code.php';
?>
<div class="container-sm mt-98 ms-0 ps-0">
    <img src= "<?= BASE_URL ?>assets/images/banner/Groupcopy.png" class= "banner-common">
    <p class= "position-absolute top-40 heading-4">Our Gallery</p>
</div>
<!-- <?php if (isset($_GET['form']) && $_GET['form'] === 'success'): ?>
    <div class="form-success">
        <div class="box-success">
        <p>Success! Your franchise application is submitted. Our team will call you soon.</p>
        </div>
        <div class="normal-success">
        <h2>Application Submitted Successfully!</h2>
        </div>
    </div>
<?php else: ?>
    <form action= "gallery-code" method= "POST" enctype= "multipart/form-data">
        <label for= "message"></label>
        <input type= "text" name= "description" required>
        <label for= "image_path">Image</label>
        <input type= "file" name= "image_path" required>
        <button type= "submit">
            Submit
        </button>
    </form>
<?php endif; ?> -->
<div class="container ps-5 mt-5 mb-5 pt-5 pb-5 pe-5 ps-50">
    <div class="row m-0 p-0 gap-4 justify-content-center d-flex">
        <?php 
            while($row = mysqli_fetch_assoc($result)):
        ?>
        <div class="card" style="width: 18rem;">
            <img src="<?= BASE_URL ?>assets/uploads/<?= $row['image_path'] ?>" class="card-img-top img-card" alt="...">
            <div class="card-body">
                <h5 class="card-title"><?= $row['description'] ?></h5>
            </div>
        </div>
        <?php 
            endwhile;
        ?>
        <nav aria-label="Page navigation example">
            <ul class="pagination">
                <li class="page-item <?= ($page <= 1) ? 'disabled': '' ?>">
                    <a class="page-link" href="?page<?= $page - 1?>">Previous</a>
                </li>
                <?php for($i = 1; $i <= $total_pages; $i++): ?>
                    <li class="page-item <?= ($i == $page) ? 'active' : '' ?>">
                        <a class="page-link" href="?page=<?= $i ?>"><?= $i ?></a>
                    </li>
                <?php endfor ;?>
                <li class="page-item <?= ($page >= $total_pages) ? 'disabled': '' ?>">
                    <a class="page-link" href="?page<?= $page + 1?>">Next</a>
                </li>
            </ul>
        </nav>
    </div>
</div>
<?php 
    include __DIR__ .'/../includes/footer.php';
?>