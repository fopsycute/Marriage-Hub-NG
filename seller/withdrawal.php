
<?php include "header.php"; ?>


 <div class="container">
          <div class="page-inner">
            <div class="page-header">
              <h3 class="fw-bold mb-3">Withdrawal Requestss</h3>
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
                  <a href="#">Withdrawal Requests </a>
                </li>
                <li class="separator">
                  <i class="icon-arrow-right"></i>
                </li>
                <li class="nav-item">
                  <a href="#">Withdrawal Requests</a>
                </li>
              </ul>
            </div>
            <div class="row">

             <div class="col-md-12">
                <div class="card">
                  <div class="card-header">
                    <h4 class="card-title">Withdrawal Requests</h4>
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

      <!-- Withdrawal Request Form -->
  <div class="card mt-4">
    <div class="card-header">
      <h5> Request Withdrawal</h5>
    </div>
    <div class="card-body">
      <form>
        <div class="mb-3">
          <label class="form-label">Amount (₦)</label>
          <input type="number" class="form-control" placeholder="Enter amount" required>
        </div>
        <div class="mb-3">
          <label class="form-label">Bank Account</label>
          <select class="form-select">
            <option>GTBank - 1234567890</option>
            <option>Access Bank - 0987654321</option>
          </select>
        </div>
        <button type="submit" class="btn btn-success">Submit Withdrawal</button>
      </form>
    </div>
  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table
                        id="multi-filter-select"
                        class="display table table-striped table-hover">
    <thead>
          <tr>
            <th>Request ID</th>
            <th>Amount</th>
            <th>Status</th>
            <th>Requested Date</th>
            <th>Action</th>
          </tr>
        </thead>
        <tfoot>
          <tr>
            <th>Request ID</th>
            <th>Amount</th>
            <th>Status</th>
            <th>Requested Date</th>
            <th>Action</th>
          </tr>
        </tfoot>
        <tbody>
          <tr>
            <td>#W301</td>
            <td>₦150</td>
            <td><span class="badge bg-warning text-dark">Pending</span></td>
            <td>2025-09-12</td>
            <td>
              <div class="form-button-action">
                <button class="btn btn-link btn-success btn-lg" data-bs-toggle="tooltip" title="Approve">
                  <i class="fa fa-check"></i>
                </button>
                <button class="btn btn-link btn-danger" data-bs-toggle="tooltip" title="Reject">
                  <i class="fa fa-times"></i>
                </button>
              </div>
            </td>
          </tr>
          <tr>
            <td>#W302</td>
            <td>₦200</td>
            <td><span class="badge bg-success">Approved</span></td>
            <td>2025-09-10</td>
            <td>
              <div class="form-button-action">
                <button class="btn btn-link btn-info btn-lg" data-bs-toggle="tooltip" title="View">
                  <i class="fa fa-eye"></i>
                </button>
              </div>
            </td>
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