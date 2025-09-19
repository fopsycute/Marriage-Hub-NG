
<?php include "header.php"; ?>


 <div class="container">
          <div class="page-inner">
            <div class="page-header">
              <h3 class="fw-bold mb-3">Change Password</h3>
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
                  <a href="#"> Change Password </a>
                </li>
              </ul>
            </div>

    <div class="row">
      <div class="col-md-12">

        <!-- Choice -->
        <div class="card mb-4">
          <div class="card-body">
<div class="form-group">
              <label for="oldpass">Old Password</label>
              <input type="password" id="oldpass" class="form-control" placeholder="Enter your Old Password" name="oldpass">
            </div>

            <div class="form-group">
              <label for="newpass">New Password</label>
              <input type="password" id="newpass" class="form-control" placeholder="Enter your New Password" name="newpass">
            </div>

            <div class="form-group">
              <label for="confirmpass">Confirm New Password</label>
              <input type="password" id="confirmpass" class="form-control" placeholder="Confirm your New Password" name="confirmpass">
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</div>




<?php include "footer.php"; ?>