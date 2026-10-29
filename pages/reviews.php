<?php
    $PAGE_CSS = 'reviews.css';
    $NAVBAR_SCRIPT = 'navbar.js';
    include __DIR__ .'/../includes/header.php';
    include __DIR__ .'/../includes/navbar.php';
?>
<div class="container-fluid reviews-form">
    <?php if (isset($_GET['form']) && $_GET['form'] === 'success'): ?>
        <div class="form-success">
          <div class="box-success">
            <p>Your review has been successfully submitted.</p>
          </div>
        </div>
    <?php else: ?>
        <form action= "reviews_code.php" method= "POST" enctype= "multipart/form-data">
            <label for= "name">Name</label>
            <input type= "text" name= "name" placeholder= "Name" required>
            <label for= "message"></label>
            <textarea name= "message" placeholder= "Review Message"></textarea>
            <label for= "image_path">Image</label>
            <input type= "file" name= "image_path" required>
            <button type= "submit">
                Submit
            </button>
        </form>
    <?php endif; ?>
</div>
<?php
    include __DIR__ .'/../includes/footer.php';
?>