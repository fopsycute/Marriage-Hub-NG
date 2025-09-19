
<?php include "header.php"; ?>
<main class="main">

  <!-- Page Title -->
  <div class="page-title light-background">
    <div class="container d-lg-flex justify-content-between align-items-center">
      <h1 class="mb-2 mb-lg-0">Register</h1>
      <nav class="breadcrumbs">
        <ol>
          <li><a href="index.php">Home</a></li>
          <li class="current">Register</li>
        </ol>
      </nav>
    </div>
  </div><!-- End Page Title -->

  <!-- Enroll Section -->
  <section id="enroll" class="enroll section">
    <div class="container" data-aos="fade-up" data-aos-delay="100">
      <div class="row">
        <div class="col-lg-10 mx-auto">
          <div class="enrollment-form-wrapper">

            <form class="enrollment-form" action="process_enrollment.php" method="POST" enctype="multipart/form-data">

              <!-- SECTION 1: Personal & Business Information -->
              <h4 class="mb-4">Section 1: Personal and Business Information</h4>

              <h5>Personal Details</h5>
              <div class="row mb-3">
                <div class="col-md-3">
                  <label for="title" class="form-label">Title *</label>
                  <select id="title" name="title" class="form-select" required>
                    <option value="">Select</option>
                        <option value="mr">Mr</option>
                        <option value="mrs">Mrs</option>
                        <option value="miss">Miss</option>
                        <option value="ms">Ms</option>
                        <option value="mx">Mx</option>
                        <option value="sir">Sir</option>
                        <option value="dr">Dr</option>
                        <option value="lady">Lady</option>
                        <option value="lord">Lord</option>
                        <option value="professor">Professor</option>
                        <option value="esq">Esq.</option>
                        <option value="hon">Hon.</option>
                        <option value="messrs">Messrs.</option>
                        <option value="msgr">Msgr.</option>
                        <option value="prof">Prof.</option>
                        <option value="rev">Rev.</option>
                        <option value="rt_hon">Rt. Hon.</option>
                        <option value="other">Other</option>
                  </select>
                </div>
                <div class="col-md-3">
                  <label class="form-label">First Name *</label>
                  <input type="text" name="first_name" class="form-control" required>
                </div>
                <div class="col-md-3">
                  <label class="form-label">Middle Name</label>
                  <input type="text" name="middle_name" class="form-control">
                </div>
                <div class="col-md-3">
                  <label class="form-label">Last Name *</label>
                  <input type="text" name="last_name" class="form-control" required>
                </div>
              </div>

              <div class="row mb-3">
                <div class="col-md-4">
                  <label class="form-label">Photo</label>
                  <input type="file" name="photo" class="form-control">
                </div>
                <div class="col-md-4">
                  <label class="form-label">Date of Birth</label>
                  <input type="date" name="dob" class="form-control">
                </div>
                <div class="col-md-4">
                  <label class="form-label">Gender</label>
                  <select name="gender" class="form-select">
                    <option value="">Select</option>
                    <option>Male</option>
                    <option>Female</option>
                  </select>
                </div>
              </div>

              <div class="row mb-3">
                <div class="col-md-6">
                  <label class="form-label">Nationality</label>
                  <input type="text" name="nationality" class="form-control">
                </div>
                <div class="col-md-6">
                  <label class="form-label">Languages Spoken Fluently</label>
                  <input type="text" name="languages" class="form-control" placeholder="e.g. English, French">
                </div>
              </div>

              
              <h5 class="mt-4">Contact Information</h5>
              <div class="row mb-3">
                <div class="col-md-6">
                  <label class="form-label">Phone Numbers</label>
                  <input type="text" name="phone" class="form-control">
                </div>
                <div class="col-md-6">
                  <label class="form-label">Website (Optional)</label>
                  <input type="url" name="website" class="form-control">
                </div>
              </div>
              <div class="row mb-3">
                <div class="col-md-6">
                  <label class="form-label">Email Address</label>
                  <input type="email" name="email" class="form-control">
                </div>
                <div class="col-md-6">
                  <label class="form-label">State of Residence</label>
                  <input type="text" name="state" class="form-control" placeholder="LGA | State">
                </div>
              </div>
              <div class="row mb-3">
                <div class="col-12">
                  <label class="form-label">Practice Full Address</label>
                  <textarea name="address" rows="2" class="form-control"></textarea>
                </div>
              </div>

              <h5 class="mt-4">Social Media Handles</h5>
              <div class="row mb-3">
                <div class="col-md-3"><input type="url" name="facebook" class="form-control" placeholder="Facebook"></div>
                <div class="col-md-3"><input type="url" name="twitter" class="form-control" placeholder="Twitter"></div>
                <div class="col-md-3"><input type="url" name="instagram" class="form-control" placeholder="Instagram"></div>
                <div class="col-md-3"><input type="url" name="linkedin" class="form-control" placeholder="LinkedIn"></div>
              </div>

              <!-- SECTION 2: Professional Qualifications
              <h4 class="mt-5 mb-2"></h4>
                 -->
            
              <div class="row mb-3">
                <label class="form-label">Area of Expertise</label>
                <div class="col-12">
                    <select id="expertise" name="expertise" class="form-select" required>
                    <option value="">Select your area of expertise</option>
                    </select>
                </div>
              </div>
              <div class="row mb-3">
                <div class="col-12">
                  <label class="form-label">Brief Bio (Max. 200 words)</label>
                  <textarea name="bio" rows="4" maxlength="200" class="form-control"></textarea>
                </div>
              </div>

              <!-- SECTION 3: Agreement & Consent -->
              <h4 class="mt-5 mb-2">Section 3: Agreement & Consent</h4>
              <div class="form-check mb-2">
                <input class="form-check-input" type="checkbox" name="agreement[]" value="info_accuracy" required>
                <label class="form-check-label">I confirm that all information provided is accurate to the best of my knowledge.</label>
              </div>
              <div class="form-check mb-3">
                <input class="form-check-input" type="checkbox" name="agreement[]" value="terms" required>
                <label class="form-check-label">I agree to the terms and conditions.</label>
              </div>
              <div class="text-center">
                <button type="submit" class="btn btn-enroll">
                  <i class="bi bi-check-circle me-2"></i> Submit
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
