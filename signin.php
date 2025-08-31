
<?php include "header.php"; ?>
<main class="main">

  <!-- Page Title -->
  <div class="page-title light-background">
    <div class="container d-lg-flex justify-content-between align-items-center">
      <h1 class="mb-2 mb-lg-0">Sign In</h1>
      <nav class="breadcrumbs">
        <ol>
          <li><a href="index.php">Home</a></li>
          <li class="current">Sign In</li>
        </ol>
      </nav>
    </div>
  </div><!-- End Page Title -->

  <!-- Sign In Section -->
  <section id="signin" class="enroll section">
    <div class="container" data-aos="fade-up" data-aos-delay="100">
      <div class="row">
        <div class="col-lg-6 mx-auto">
          <div class="enrollment-form-wrapper">

            <div class="enrollment-header text-center mb-4">
              <h2>Sign In</h2>
              <p>Access your account to continue.</p>
            </div>

            <form class="enrollment-form" action="process_signin.php" method="POST">

              <!-- Email -->
              <div class="mb-3">
                <label for="email" class="form-label">Email Address *</label>
                <input type="email" id="email" name="email" class="form-control" required>
              </div>

              <!-- Password -->
              <div class="mb-3">
                <label for="password" class="form-label">Password *</label>
                <input type="password" id="password" name="password" class="form-control" required>
              </div>

              <!-- Submit -->
              <div class="text-center">
                <button type="submit" class="btn btn-enroll w-100">
                  <i class="bi bi-box-arrow-in-right me-2"></i> Sign In
                </button>
              </div>

              <!-- Forgot Password -->
              <div class="text-center mt-3">
                <a href="forgot_password.php" class="text-decoration-none">Forgot Password?</a>
              </div>

            </form>

          </div>
        </div>
      </div>
    </div>
  </section>

</main>
<?php include "footer.php"; ?>
