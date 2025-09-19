

<?php include "header.php"; ?>

 <div class="container">
          <div class="page-inner">
            <div class="page-header">
              <h3 class="fw-bold mb-3"> Payment history</h3>
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
                  <a href="#">Payment history</a>
                </li>
                <li class="separator">
                  <i class="icon-arrow-right"></i>
                </li>
                <li class="nav-item">
                  <a href="#">Payment history</a>
                </li>
              </ul>
            </div>
            <div class="row">
             <div class="col-md-12">
                <div class="card">
                        <div class="card mt-4">
        <div class="card-header d-flex justify-content-between align-items-center">
          <h4 class="card-title"> Payment history</h4>
      
</div>
     
                  <div class="card-body">
  <div class="row">
    <!-- Earnings Summary -->
    <div class="col-md-3">
      <div class="card text-center">
        <div class="card-body">
          <h6 class="text-muted">Total Earnings</h6>
          <h4 class="fw-bold"> ₦250,000</h4>
        </div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="card text-center">
        <div class="card-body">
          <h6 class="text-muted">Withdrawable Balance</h6>
          <h4 class="fw-bold"> ₦180,000</h4>
        </div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="card text-center">
        <div class="card-body">
          <h6 class="text-muted">Pending Withdrawals</h6>
          <h4 class="fw-bold"> ₦50,000</h4>
        </div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="card text-center">
        <div class="card-body">
          <h6 class="text-muted">Commission Paid</h6>
          <h4 class="fw-bold"> ₦20,000</h4>
        </div>
      </div>
    </div>
  </div>

  <!-- Payment History -->
  <div class="card mt-4">
    <div class="card-header">
      <h5>Payment History</h5>
    </div>
    <div class="card-body table-responsive">
      <table  id="multi-filter-select"
                        class="display table table-striped table-hover">
        <thead class="table-light">
          <tr>
            <th>Date</th>
            <th>Transaction ID</th>
            <th>Amount (₦)</th>
            <th>Status</th>
            <th>Commission</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>01 Sept 2025</td>
            <td>#TXN001</td>
            <td>₦50,000</td>
            <td><span class="badge bg-success">Completed</span></td>
            <td>₦5,000</td>
          </tr>
          <tr>
            <td>10 Sept 2025</td>
            <td>#TXN002</td>
            <td>₦30,000</td>
            <td><span class="badge bg-warning text-dark">Pending</span></td>
            <td>₦3,000</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>
</div>
    </div>
  </div>
</div>
</div>


<?php include "footer.php"; ?>