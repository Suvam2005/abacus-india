<?php
include('includes/header.php');
require __DIR__ . '../config/dbcon.php';
require __DIR__ .'../config/paths.php';
?>

<div class="container-fluid py-4">
    <div class="row justify-content-center">
        <div class="col-lg-10 col-xl-8">
            <div class="card shadow-sm border-0">
                <!-- Card Header -->
                 <div class="card-header text-white d-flex justify-content-between align-items-center" style="background-color: #340348;">
                    <h4 class="mb-0 text-white">Create New User</h4>
                    <a href="users.php" class="btn btn-outline-light btn-sm">
                        <i class="fas fa-arrow-left me-1"></i> Back to users
                    </a>
                 </div>

                 <div class="card-body">
                    <? alertMessage(); ?>

                    <form method="POST" action= "users-create-code.php">
                        <div class="row g-4">
                            <!-- Left Column -->
                             <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label fw-bold"> Full Name <span class="text-danger">*</span></label>
                                    <input type="text"
                                           name="name"
                                           class="form-control"
                                           required
                                           placeholder="Enter full name"
                                           autofocus>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label fw-bold"> Email Address <span class="text-danger">*</span></label>
                                    <input type="email"
                                           name="email"
                                           class="form-control"
                                           required
                                           placeholder="user@example.com">
                                </div>

                                <div class="mb-3">
                                    <label class="form-label fw-bold"> Phone Number <span class="text-danger">*</span></label>
                                    <input type="text"
                                           name="phone"
                                           class="form-control"
                                           required
                                           placeholder="Enter phone number">
                                </div>
                             </div>

                             <!-- Right Column -->
                             <div class="col-md-6">
                                <div class="mb-4">
                                    <label class="form-label fw-bold"> Password <span class="text-danger">*</span></label>
                                    <input type="password"
                                           name="password"
                                           class="form-control"
                                           required
                                           placeholder="Minimum 8 characters">
                                    <small class="form-text text-muted mt-1">
                                        Password should be strong (letters, numbers, special characters)
                                    </small>
                                </div>

                                <div class="mb-4">
                                    <label class="form-label fw-bold"> User Role <span class="text-danger">*</span></label>
                                    <select name="role" class="form-select" required>
                                        <option value="">-- Select Role --</option>
                                        <option value="admin">Admin</option>
                                        <option value="instructor">Instructor</option>
                                        <option value="staff">Staff</option>
                                    </select>
                                </div>

                                <div class="mb-4 form-check form-switch">
                                    <input type="checkbox"
                                           name="is_ban"
                                           class="form-check-input"
                                           id="banSwitch"
                                           style="width 3rem; height: 1.5rem;"
                                           placeholder="Minimum 8 characters">
                                    <label class="form-check-label fw-bold ms-2" for="banSwitch"> 
                                        Ban this user (block access immediately)
                                    </label>
                                </div>
                            </div>

                            <!-- Submit Button -->
                             <div class="col-12 mt-3">
                                <button type="submit"
                                        name="saveUser"
                                        class="btn btn-primary btn-lg px-5">
                                    <i class="fas fa-user-plus me-2"></i>
                                    Create user
                                </button>
                            </div>
                        </div>
                    </form>
                 </div>
            </div>
        </div>
    </div>
</div>

<?php
include('includes/footer.php');
?>