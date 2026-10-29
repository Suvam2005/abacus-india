<?php
    $PAGE_CSS = 'book_class.css';
    $PAGE_SCRIPT = 'book_class.js';
    $NAVBAR_SCRIPT = 'navbar.js';
    include __DIR__ . '/../includes/header.php';
    include __DIR__ . '/../includes/navbar.php';
?>
    <div class="containor">
        <img src= "<?= BASE_URL?>assets/images/footer/footer-top.png" class="top-image">
    </div>
    <div class="containor">
        <div class="row justify-content-center">
            <div class="col-4 content1">
                <img src="<?= BASE_URL?>assets/images/logo-content.png" class="content-img">
                <h1>Make your child
                sharper and smarter
                with SIP Abacus</h1>
            </div>
            <div class="col-4">
                <img src="<?= BASE_URL ?>assets/images/banner/students.png" class= "content-stdn">
                <form>
                    <h1>Book a free trial class now</h1>
                    <input type= "text" placeholder= "Parent's Name*" required>
                    <input type= "email" placeholder= "Email*" required>
                    <input type= "phone" placeholder= "Phone Number*" required>
                    <select id= "state" required>
                        <option value selected= "selected">State*</option>
                        <option value= "Andaman & Nicobar Island">Andaman & Nicobar Island</option>
                        <option value= "Andhra Pradesh">Andhra Pradesh</option>
                        <option value= "Assam">Assam</option>
                        <option value= "Bihar">Bihar</option>
                        <option value= "Chattisgarh">Chattisgarh</option>
                        <option value= "Dadra and Nagar Haveli">Dadra and Nagar Haveli</option>
                        <option value= "Delhi">Delhi</option>
                        <option value= "Haryana">Haryana</option>
                        <option value= "Himachal Pradesh">Himachal Pradesh</option>
                        <option value= "India">India</option>
                        <option value= "Jharkhand">Jharkhand</option>
                        <option value= "Karnataka">Karnataka</option>
                        <option value= "Kerala">Kerala</option>
                        <option value= "Madhya Pradesh">Madhya Pradesh</option>
                        <option value= "Maharashtra">Maharashtra</option>
                        <option value= "Meghalaya">Meghalaya</option>
                        <option value= "New Delhi">New Delhi</option>
                        <option value= "Odhisa">Odhisa</option>
                        <option value= "Puducherry">Puducherry</option>
                        <option value= "Punjab">Punjab</option>
                        <option value= "Rajasthan">Rajasthan</option>
                        <option value= "Sikkim">Sikkim</option>
                        <option value= "Tamil Nadu">Tamil Nadu</option>
                        <option value= "Telangana">Telangana</option>
                        <option value= "Tripura">Tripura</option>
                        <option value= "Uttar Pradesh">Uttar Pradesh</option>
                        <option value= "Uttarakhand">Uttarakhand</option>
                        <option value= "West_bengal">West Bengal</option>
                    </select>
                    <select id= "district">
                        <option value= "select_district">Select District</option>
                    </select>
                    <select id = "center_location">
                        <option value= "">Select Center Location</option>
                    </select>
                </form>
                <button type= "submit">
                    Sign Up Now
                </button>
            </div>
        </div>
    </div>

    </div>

<?php 
    include('../includes/footer.php'); 
?>