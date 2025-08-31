<?php include "header.php"; ?>
<main class="main">

  <!-- Page Title -->
  <div class="page-title light-background">
    <div class="container d-lg-flex justify-content-between align-items-center">
      <h1 class="mb-2 mb-lg-0">Forgot Password</h1>
      <nav class="breadcrumbs">
        <ol>
          <li><a href="index.php">Home</a></li>
          <li class="current">Forgot Password</li>
        </ol>
      </nav>
    </div>
  </div><!-- End Page Title -->

  <!-- Forgot Password Section -->
  <section id="forgot-password" class="enroll section">
    <div class="container" data-aos="fade-up" data-aos-delay="100">
      <div class="row">
        <div class="col-lg-6 mx-auto">
          <div class="enrollment-form-wrapper">

            <div class="enrollment-header text-center mb-4">
              <h2>Forgot Password</h2>
              <p>Enter your registered email address to receive a reset link.</p>
            </div>

            <form class="enrollment-form" action="process_forgot_password.php" method="POST">

              <!-- Email -->
              <div class="mb-3">
                <label for="email" class="form-label">Email Address *</label>
                <input type="email" id="email" name="email" class="form-control" required>
              </div>

              <!-- Submit -->
              <div class="text-center">
                <button type="submit" class="btn btn-enroll w-100">
                  <i class="bi bi-envelope me-2"></i> Send Reset Link
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
