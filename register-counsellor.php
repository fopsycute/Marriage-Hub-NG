
<?php include "header.php"; ?>
<main class="main">

  <!-- Page Title -->
  <div class="page-title light-background">
    <div class="container d-lg-flex justify-content-between align-items-center">
      <h1 class="mb-2 mb-lg-0">Become a Verified Counsellor</h1>
      <nav class="breadcrumbs">
        <ol>
          <li><a href="index.php">Home</a></li>
          <li class="current">Counsellor Registration</li>
        </ol>
      </nav>
    </div>
  </div><!-- End Page Title -->

  <!-- Counsellor Registration Section -->
  <section id="counsellor" class="enroll section">
    <div class="container" data-aos="fade-up" data-aos-delay="100">
      <div class="row">
        <div class="col-lg-10 mx-auto">
          <div class="enrollment-form-wrapper">

            <div class="enrollment-header text-center mb-5" data-aos="fade-up" data-aos-delay="200">
              <h2>Join MARRIAGEHUB.NG</h2>
              <p>Become a verified counsellor and support individuals, couples, and families across Nigeria and beyond. Please fill the form below to be considered for listing on our platform.</p>
            </div>

            <form class="enrollment-form" action="process_counsellor.php" method="POST" enctype="multipart/form-data">

              <!-- Section 1: Personal and Business Information -->
              <h4 class="mb-3">Section 1: Personal and Business Information</h4>

              <!-- Personal Details -->
              <div class="row mb-3">
                <div class="col-md-3">
                  <label class="form-label">Title *</label>
                  <select name="title" class="form-select" required>
                    <option value="">Select</option>
                    <option value="Mr">Mr</option>
                    <option value="Mrs">Mrs</option>
                    <option value="Miss">Miss</option>
                    <option value="Ms">Ms</option>
                    <option value="Mx">Mx</option>
                    <option value="Sir">Sir</option>
                    <option value="Dr">Dr</option>
                    <option value="Lady">Lady</option>
                    <option value="Lord">Lord</option>
                    <option value="Professor">Professor</option>
                    <option value="Esq.">Esq.</option>
                    <option value="Hon.">Hon.</option>
                    <option value="Messrs.">Messrs.</option>
                    <option value="Msgr.">Msgr.</option>
                    <option value="Prof.">Prof.</option>
                    <option value="Rev.">Rev.</option>
                    <option value="Rt. Hon.">Rt. Hon.</option>
                    <option value="Other">Other</option>
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
                <div class="col-md-6">
                  <label class="form-label">Upload Photos</label>
                  <input type="file" name="photos[]" class="form-control" multiple>
                </div>
                <div class="col-md-3">
                  <label class="form-label">Date of Birth *</label>
                  <input type="date" name="dob" class="form-control" required>
                </div>
                <div class="col-md-3">
                  <label class="form-label">Gender *</label>
                  <select name="gender" class="form-select" required>
                    <option value="">Select</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                  </select>
                </div>
              </div>

              <div class="row mb-3">
                <div class="col-md-6">
                  <label class="form-label">Nationality *</label>
                  <input type="text" name="nationality" class="form-control" required>
                </div>
                <div class="col-md-6">
                  <label class="form-label">Languages Spoken Fluently</label>
                  <input type="text" name="languages" class="form-control" placeholder="e.g. English, Yoruba, Hausa">
                </div>
              </div>

              <!-- Business Details -->
              <h5 class="mt-4">Business Details</h5>
              <div class="mb-3">
                <label class="form-label">Business Name</label>
                <input type="text" name="business_name" class="form-control">
              </div>
              <div class="mb-3">
                <label class="form-label">Registered Business Name (if different)</label>
                <input type="text" name="registered_business_name" class="form-control">
              </div>
              <div class="mb-3">
                <label class="form-label">Business Owner’s Full Name</label>
                <input type="text" name="owner_name" class="form-control">
              </div>
              <div class="mb-3">
                <label class="form-label">Upload Business Logo</label>
                <input type="file" name="business_logo" class="form-control">
              </div>
              <div class="mb-3">
                <label class="form-label">Upload Sample Work or Portfolio</label>
                <input type="file" name="portfolio[]" class="form-control" multiple>
                <small class="text-muted">(Free - 1, Classic - 5, Enterprise - 15, Premium - Unlimited)</small>
              </div>

              <!-- Contact Information -->
              <h5 class="mt-4">Contact Information</h5>
              <div class="row mb-3">
                <div class="col-md-6">
                  <label class="form-label">Phone Numbers *</label>
                  <input type="text" name="phone" class="form-control" required>
                </div>
                <div class="col-md-6">
                  <label class="form-label">Website (Optional)</label>
                  <input type="url" name="website" class="form-control">
                </div>
              </div>
              <div class="mb-3">
                <label class="form-label">Email Address *</label>
                <input type="email" name="email" class="form-control" required>
              </div>
              <div class="row mb-3">
                <div class="col-md-6">
                  <label class="form-label">State of Residence</label>
                  <input type="text" name="state" class="form-control">
                </div>
                <div class="col-md-6">
                  <label class="form-label">LGA</label>
                  <input type="text" name="lga" class="form-control">
                </div>
              </div>
              <div class="mb-3">
                <label class="form-label">Practice Full Address</label>
                <textarea name="address" class="form-control"></textarea>
              </div>

              <h5 class="mt-4">Social Media Handles</h5>
              <div class="row mb-3">
                <div class="col-md-3"><input type="url" name="facebook" class="form-control" placeholder="Facebook"></div>
                <div class="col-md-3"><input type="url" name="twitter" class="form-control" placeholder="Twitter"></div>
                <div class="col-md-3"><input type="url" name="instagram" class="form-control" placeholder="Instagram"></div>
                <div class="col-md-3"><input type="url" name="linkedin" class="form-control" placeholder="LinkedIn"></div>
              </div>

              <!-- Section 2: Professional Qualifications -->
              <h4 class="mt-5">Section 2: Professional Qualifications</h4>
              <div class="mb-3">
                <label class="form-label">Highest Academic Qualification *</label>
                <select name="qualification" class="form-select" required>
                  <option value="">Select</option>              
                </select>
              </div>
              <div class="mb-3">
                <label class="form-label">Institution Attended</label>
                <input type="text" name="institution" class="form-control">
              </div>
              <div class="mb-3">
                <label class="form-label">Year of Graduation</label>
                <input type="number" name="graduation_year" class="form-control">
              </div>
              <div class="mb-3">
                <label class="form-label">Relevant Certifications / Licenses</label>
                <input type="text" name="certifications" class="form-control">
              </div>
              <div class="mb-3">
                <label class="form-label">Professional Associations / Boards</label>
                <input type="text" name="associations" class="form-control">
              </div>

              <!-- Section 3: Practice Information -->
         <h4 class="mt-5">Section 3: Practice Information</h4>

<div class="mb-3">
  <label class="form-label">Years of Professional Experience</label>
  <input type="number" name="experience" class="form-control">
</div>

<div class="mb-3">
  <label class="form-label">Specializations</label>
    <select name="specializations[]" class="form-control" multiple required>

</select>
</div>

<div class="mb-3">
  <label class="form-label">Preferred Session Format *</label>
  <select name="session_format" class="form-control" required>
    <option value="">-- Select Format --</option>
    <option value="In-person">In-person</option>
    <option value="Online/Virtual">Online/Virtual</option>
    <option value="Phone">Phone</option>
  </select>
</div>

<div class="mb-3">
  <label class="form-label">Who do you work with? *</label>
  <select name="work_with[]" class="form-control" multiple required>
    <option value="Individuals">Individuals</option>
    <option value="Couples">Couples</option>
    <option value="Family">Family</option>
    <option value="Group">Group</option>
    <option value="Other">Other (Specify)</option>
  </select>

</div>

<div class="mb-3">
  <label class="form-label">Preferred Consultation Days & Hours</label>
  <input type="text" name="consultation_days" class="form-control" placeholder="e.g. Monday - Friday, 9am - 5pm">
</div>

<div class="mb-3">
  <label class="form-label">Session Duration</label>
  <input type="text" name="session_duration" class="form-control" placeholder="e.g. 45 mins, 1 hour">
</div>

<div class="mb-3">
  <label class="form-label">Proposed Rate per Session (NGN)</label>
  <input type="number" name="rate" class="form-control" placeholder="e.g. 15000">
</div>


              <!-- Section 4: Profile & Uploads -->
              <h4 class="mt-5">Section 4: Profile & Uploads</h4>
              <div class="mb-3">
                <label class="form-label">Professional Bio (100–200 words)</label>
                <textarea name="bio" class="form-control" rows="5"></textarea>
              </div>
              <div class="mb-3">
                <label class="form-label">Upload CV / Resume (PDF or Word)</label>
                <input type="file" name="cv" class="form-control" accept=".pdf,.doc,.docx">
              </div>
              <div class="mb-3">
                <label class="form-label">Upload Passport Photograph (JPEG or PNG)</label>
                <input type="file" name="passport" class="form-control" accept=".jpg,.jpeg,.png">
              </div>
              <div class="mb-3">
                <label class="form-label">Upload Proof of Certification / License (PDF or JPEG)</label>
                <input type="file" name="license" class="form-control" accept=".pdf,.jpg,.jpeg,.png">
              </div>

              <!-- Section 5: Declarations & Consent -->
              <h4 class="mt-5">Section 5: Declarations & Consent</h4>
              <div class="form-check mb-2">
                <input class="form-check-input" type="checkbox" name="declaration1" required>
                <label class="form-check-label">I confirm that the information provided above is accurate and truthful.</label>
              </div>
              <div class="form-check mb-2">
                <input class="form-check-input" type="checkbox" name="declaration2" required>
                <label class="form-check-label">I understand that all sessions with clients from MARRIAGE.NG must adhere to the platform’s code of ethics and confidentiality guidelines.</label>
              </div>

              <div class="text-center mt-4">
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
