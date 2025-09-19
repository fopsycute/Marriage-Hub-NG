<?php include "header.php"; ?>
<!-- Dispute Section -->
<section id="dispute" class="dispute section">
  <div class="container" data-aos="fade-up" data-aos-delay="100">
    <div class="row">
      <div class="col-lg-10 mx-auto">
        <div class="enrollment-form-wrapper">

          <form class="enrollment-form" action="process_dispute.php" method="POST" enctype="multipart/form-data">

            <!-- SECTION: Create Ticket -->
            <h4 class="mb-4">Create Ticket</h4>

            <!-- Dispute Category -->
            <div class="row mb-3">
              <div class="col-md-12">
                <label for="category" class="form-label">Dispute Category *</label>
                <select id="category" name="category" class="form-select" required>
                  <option value="">Select Category</option>
                  <option value="Product Quality Issues">Product Quality Issues</option>
                  <option value="Wrong Item Received">Wrong Item Received</option>
                  <option value="Item Not Delivered">Item Not Delivered</option>
                  <option value="Refund Issues">Refund Issues</option>
                  <option value="Login/Access Problems">Login/Access Problems</option>
                  <option value="Account Security">Account Security</option>
                  <option value="Technical Bugs">Technical Bugs</option>
                  <option value="User Experience Issues">User Experience Issues</option>
                  <option value="Poor Support Experience">Poor Support Experience</option>
                  <option value="Policy Disputes">Policy Disputes</option>
                  <option value="Loyalty Program">Loyalty Program</option>
                  <option value="Affiliate Program">Affiliate Program</option>
                  <option value="Fake or Misleading Reviews">Fake or Misleading Reviews</option>
                  <option value="Payment Issues">Payment Issues</option>
                </select>
              </div>
            </div>

            <!-- Order Reference -->
            <div class="row mb-3">
              <div class="col-md-12">
                <label for="order_id" class="form-label">Order Reference *</label>
                <select id="order_id" name="order_id" class="form-select" required onchange="getOrderDetails(this.value)">
                  <option value="">Select Order</option>
                  <option value="ORD6888abbc452ac">ORD6888abbc452ac (unpaid)</option>
                   <option value="ORD687a8e4a70ffb">ORD687a8e4a70ffb (paid)</option>
                  <option value="ORD687a8da39c8cf">ORD687a8da39c8cf (paid)</option>
                  <option value="ORD685d8fe1ed707">ORD685d8fe1ed707 (paid)</option>
                </select>
              </div>
            </div>

            <!-- Recipient Involved -->
            <div class="row mb-3">
              <div class="col-md-12">
                <label for="seller" class="form-label">Recipient Involved</label>
                <div id="orderDetails">
                  <select id="seller" name="seller" class="form-select">
                    <option value="">None</option>
                    <option value="54">Financial Model for Mobile App | Mobile App Business Plan (six33four)</option>
                  </select>
                </div>
              </div>
            </div>

            <!-- Issue Title -->
            <div class="row mb-3">
              <div class="col-md-12">
                <label for="issue" class="form-label">Issue Title *</label>
                <textarea id="issue" name="issue" class="form-control" maxlength="100" rows="3" required></textarea>
              </div>
            </div>

            <!-- Upload Evidence -->
            <div class="row mb-3">
              <div class="col-md-12">
                <label for="evidence" class="form-label">Upload Evidence *</label>
                <input type="file" id="evidence" name="evidence[]" class="form-control" multiple required>
              </div>
            </div>

            <!-- Submit -->
            <div class="row mb-3">
              <div class="col-md-12">
                <button type="submit" name="create_dispute" class="btn btn-primary w-100">
                  Submit
                </button>
              </div>
            </div>

          </form>

        </div>
      </div>
    </div>
  </div>
</section>
<?php include "footer.php"; ?>