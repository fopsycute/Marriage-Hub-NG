

<?php include "header.php"; ?>
<main class="main">

  <!-- Page Title -->
  <div class="page-title light-background">
    <div class="container d-lg-flex justify-content-between align-items-center">
      <h1 class="mb-2 mb-lg-0">Reset Password</h1>
      <nav class="breadcrumbs">
        <ol>
          <li><a href="index.php">Home</a></li>
          <li class="current">Reset Password</li>
        </ol>
      </nav>
    </div>
  </div><!-- End Page Title -->

  <!-- Reset Password Section -->
  <section id="reset-password" class="enroll section">
    <div class="container" data-aos="fade-up" data-aos-delay="100">
      <div class="row">
        <div class="col-lg-6 mx-auto">
          <div class="enrollment-form-wrapper">

            <div class="enrollment-header text-center mb-4">
              <h2>Reset Your Password</h2>
              <p>Enter your new password below to update your account.</p>
            </div>

            <form class="enrollment-form" action="process_reset_password.php" method="POST">

              <!-- Hidden Token (from email link) -->
              <input type="hidden" name="token" value="<?php echo $_GET['token'] ?? ''; ?>">

              <!-- New Password -->
              <div class="mb-3">
                <label for="new_password" class="form-label">New Password *</label>
                <input type="password" id="new_password" name="new_password" class="form-control" required>
              </div>

              <!-- Confirm Password -->
              <div class="mb-3">
                <label for="confirm_password" class="form-label">Confirm Password *</label>
                <input type="password" id="confirm_password" name="confirm_password" class="form-control" required>
              </div>

              <!-- Submit -->
              <div class="text-center">
                <button type="submit" class="btn btn-enroll w-100">
                  <i class="bi bi-lock-fill me-2"></i> Update Password
                </button>
              </div>

            </form>

          </div>
        </div>
      </div>
    </div>
  </section>

</main>
<?php include "footer.php"; ?>
