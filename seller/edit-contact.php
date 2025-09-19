


<?php include "header.php"; ?>


 <div class="container">
          <div class="page-inner">
            <div class="page-header">Edit contact info</h3>
              <ul class="breadcrumbs mb-3">
                <li class="nav-home">
                  <a href="#">
                    <i class="icon-home"></i>
                  </a>
                </li>
                <li class="separator">
                  <i class="icon-arrow-right"></i>
                </li>
                <li class="nav-item">
                  <a href="#">Edit contact info </a>
                </li>
              </ul>
            </div>


    <div class="row">
      <div class="col-md-12">




        <!-- Full Name -->
        <div class="form-group">
          <label for="firstname">First Name</label>
          <input type="text" class="form-control" id="firstname" placeholder="Enter your first name" name="firstname">
        </div>

            <div class="form-group">
          <label for="middleName">Middle Name</label>
          <input type="text" class="form-control" id="middleName" placeholder="Enter your middle name" name="middleName">
        </div>

        <div class="form-group">
          <label for="lastname">Last Name</label>
          <input type="text" class="form-control" id="lastname" placeholder="Enter your last name" name="lastname">
        </div>
      

        <!-- Email -->
        <div class="form-group">
          <label for="email">Email Address</label>
          <input type="email" class="form-control" id="email" placeholder="Enter your email">
        </div>

        <!-- Phone -->
        <div class="form-group">
          <label for="phone">Phone Number</label>
          <input type="text" class="form-control" id="phone" placeholder="Enter your phone number">
        </div>

        <!-- Address -->
        <div class="form-group">
          <label for="address">Full Address</label>
          <textarea class="form-control" id="address" rows="2" placeholder="Enter your address"></textarea>
        </div>

        <!-- Save Button -->
        <div class="text-end mt-3">
          <button type="submit" class="btn btn-primary">Save Changes</button>
        </div>
      </form>
    </div>
  </div>
</div>

  </div>




<?php include "footer.php"; ?>