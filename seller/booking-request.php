

<?php include "header.php"; ?>


 <div class="container">
          <div class="page-inner">
            <div class="page-header">
              <h3 class="fw-bold mb-3">Booking Requests</h3>
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
                  <a href="#">Booking Requests</a>
                </li>
                <li class="separator">
                  <i class="icon-arrow-right"></i>
                </li>
                <li class="nav-item">
                  <a href="#">Booking Requests</a>
                </li>
              </ul>
            </div>
            <div class="row">

             <div class="col-md-12">
                <div class="card">
                  <div class="card-header">
                    <h4 class="card-title">Booking Requests</h4>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table
                        id="multi-filter-select"
                        class="display table table-striped table-hover">
                     <thead>
                    <tr>
                  <th>#</th>
                  <th>User</th>
                  <th>Date & Time</th>
                  <th>Session Title</th>
        
                  <th>Location / Link</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
        </thead>
        <tfoot>
                    <tr>
                  <th>#</th>
                    <th>User</th>
                  <th>Date & Time</th>
                  <th>Session Title</th>
             
                  <th>Location / Link</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
        </tfoot>
        <tbody>
          <tr>
            <td>1</td>
            <td>John Doe</td>
            <td>05 Sept 2025<br>10:00 AM</td>
            <td>Pre-Marital Counseling</td>
            <td><a href="#">Zoom Link</a></td>
            <td><span class="badge bg-warning text-dark status">Pending</span></td>
            <td>
                    <button class="btn btn-success btn-sm btn-approve">Approve</button>
                  <button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#rejectModal">Reject</button>
                  </td>
          </tr>
          <tr>
            <td>2</td>
            <td>Jane Smith</td>
            <td>05 Sept 2025<br>10:00 AM</td>
            <td>Pre-Marital Counseling</td>
            <td><a href="#">Zoom Link</a></td>
            <td><span class="badge bg-warning text-dark status">Pending</span></td>
            <td>
              <button class="btn btn-success btn-sm btn-approve">Approve</button>
              <button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#rejectModal">Reject</button>
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
<!-- Reject Modal -->
<div class="modal fade" id="rejectModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Reject Booking Request</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form>
          <div class="mb-3">
            <label for="rejectReason" class="form-label">Reason for Rejection</label>
            <textarea class="form-control" id="rejectReason" rows="3" required></textarea>
          </div>
          <button type="submit" class="btn btn-danger">Submit Rejection</button>
        </form>
      </div>
    </div>
  </div>
</div>

</div>

<?php include "footer.php"; ?>