<?php include "header.php"; ?>

<main class="main">

  <!-- Page Title -->
  <div class="page-title light-background">
    <div class="container d-lg-flex justify-content-between align-items-center">
      <h1 class="mb-2 mb-lg-0">Create Tribes & Groups</h1>
      <nav class="breadcrumbs">
        <ol>
          <li><a href="index.php">Home</a></li>
          <li class="current">Create Tribes & Groups</li>
        </ol>
      </nav>
    </div>
  </div><!-- End Page Title -->
  <section id="enroll" class="enroll section">
    <div class="container section-title" data-aos="fade-up">
        <h2>Create Tribes & Groups</h2>
        <p>Start a meaningful community around marriage, relationships, family, or parenting. Build a support system, lead a coaching group, or host learning sessions. Paid or free, open or closed — the choice is yours.</p>
      </div>
  <div class="container" data-aos="fade-up" data-aos-delay="100">
    <div class="row">
      <div class="col-lg-10 mx-auto">
        <div class="enrollment-form-wrapper">

          <form class="enrollment-form" action="process_group.php" method="POST" enctype="multipart/form-data">

            <h4 class="mb-4">Group Details</h4>

            <!-- Group/Tribe Name -->
            <div class="row mb-3">
              <div class="col-12">
                <label class="form-label">Group/Tribe Name:</label>
                <input type="text" name="group_name" class="form-control" required>
              </div>
            </div>

            <!-- Group Description -->
            <div class="row mb-3">
              <div class="col-12">
                <label class="form-label">Group Description:</label>
                <textarea name="group_description" class="form-control" rows="4" required></textarea>
              </div>
            </div>

            <!-- Group Type -->
            <div class="row mb-3">
              <div class="col-md-6">
                <label class="form-label">Group Type:</label>
                <select name="group_type" class="form-select" required>
                  <option value="">Select Type</option>
                  <option value="open">Open (Anyone can join)</option>
                  <option value="closed">Closed (Join only by approval/invitation)</option>
                </select>
              </div>

              <!-- Group Access -->
              <div class="col-md-6">
                <label class="form-label">Group Access:</label><br>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="group_access" id="access_free" value="free" required>
                  <label class="form-check-label" for="access_free">Free</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="group_access" id="access_paid" value="paid" required>
                  <label class="form-check-label" for="access_paid">Paid Subscription</label>
                </div>
              </div>
            </div>

            <!-- Paid Subscription Details -->
            <div class="row mb-3" id="paid-subscription-fields">
              <div class="col-md-6">
                <label class="form-label">1 Month - Subscription Fee (₦):</label>
                <input type="number" name="fee_1m" class="form-control" min="0" step="100">
              </div>
              <div class="col-md-6">
                <label class="form-label">3 Months - Subscription Fee (₦):</label>
                <input type="number" name="fee_3m" class="form-control" min="0" step="100">
              </div>
              <div class="col-md-6 mt-3">
                <label class="form-label">6 Months - Subscription Fee (₦):</label>
                <input type="number" name="fee_6m" class="form-control" min="0" step="100">
              </div>
              <div class="col-md-6 mt-3">
                <label class="form-label">12 Months - Subscription Fee (₦):</label>
                <input type="number" name="fee_12m" class="form-control" min="0" step="100">
              </div>
              <div class="col-12 mt-2">
                <small class="text-muted">Note: MARRIAGE.NG takes a twenty percent (20%) commission per payment.</small>
              </div>
            </div>

            <!-- Categories & Sub-Categories -->
            <div class="row mb-3">
              <div class="col-md-6">
                <label class="form-label">Category</label>
                <select name="category" class="form-select" required>
                  <option value="">Select Category</option>
                  <option value="relationships">Relationships</option>
                  <option value="marriage">Marriage</option>
                  <option value="family">Family</option>
                  <option value="health">Health</option>
                  <option value="faith">Faith</option>
                  <option value="other">Other</option>
                </select>
              </div>
              <div class="col-md-6">
                <label class="form-label">Sub-Category</label>
                <select name="subcategory" class="form-select" required>
                  <option value="">Select Sub-Category</option>
                  <option value="counseling">Counseling</option>
                  <option value="wedding">Wedding</option>
                  <option value="parenting">Parenting</option>
                  <option value="finance">Finance</option>
                  <option value="support">Support</option>
                </select>
              </div>
            </div>

            <!-- Group Rules -->
            <div class="row mb-3">
              <div class="col-12">
                <label class="form-label">Group Rules & Guidelines (Optional)</label>
                <textarea name="group_rules" class="form-control" rows="4" placeholder="Basic rules or expectations for members"></textarea>
              </div>
            </div>

            <!-- Upload Group Banner -->
            <div class="row mb-3">
              <div class="col-12">
                <label class="form-label">Upload Group Banner / Image</label>
                <input type="file" name="group_banner" class="form-control" accept="image/png, image/jpeg">
                <small class="text-muted">Recommended size: 1200 x 600px (JPG/PNG)</small>
              </div>
            </div>


                   <div class="row mb-4">
                  <div class="col-12">
                    <div class="form-group">
                    <label class="form-label">Agreement & Acknowledgement</label>
                      <div class="agreement-section">
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" name="agree_commission" id="agree_commission" required="">
                          <label class="form-check-label" for="agree_commission">
                          I understand that if I run a paid group, MARRIAGE.NG will deduct twenty percent (20%) as commission on each successful subscription.
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" id="agree_guidelines" name="agree_guidelines">
                          <label class="form-check-label" for="agree_guidelines">
                          I agree to adhere to the MARRIAGE.NG Community Guidelines and will moderate my tribe/group respectfully and responsibly.
                          </label>
                        </div>

                          <div class="form-check">
                          <input class="form-check-input" type="checkbox" id="agree_terms" name="agree_terms">
                          <label class="form-check-label" for="agree_terms">
                        I understand that MARRIAGE.NG reserves the right to remove content or disable groups that violate its terms.
                          </label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

            <!-- Submit -->
            <div class="text-center">
              <button type="submit" class="btn btn-enroll">
                <i class="bi bi-check-circle me-2"></i> SUBMIT AND CREATE
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