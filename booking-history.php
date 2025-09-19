<?php include "header.php"; ?>
<?php include "sidebar-header.php"; ?>

<div class="container mt-4 mb-4">
  <div class="d-flex justify-content-end mb-3">
    <a href="upcoming.php" class="btn btn-primary">
      <i class="fa fa-calendar-alt me-2"></i> Upcoming Session
    </a>
  </div>
    <div class="card mt-4">
  <div class="card-header d-flex justify-content-between align-items-center">
    <h4 class="card-title">📖 Booking History</h4>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table id="allTable" class="table table-striped table-bordered">
        <thead>
          <tr>
            <th>#</th>
            <th>Date & Time</th>
            <th>Session Title</th>
            <th>Facilitator</th>
            <th>Location / Link</th>
            <th>Status</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>05 Aug 2025 <br> 02:00 PM</td>
            <td>Marriage Workshop</td>
            <td>Dr. Tolu</td>
            <td>Lagos, Ikeja Centre</td>
            <td><span class="badge bg-success">Confirmed</span></td>
            <td>
              <a href="session-single.php?id=5" class="btn btn-sm btn-primary">View</a>
            </td>
          </tr>
          <tr>
            <td>2</td>
            <td>15 Jul 2025 <br> 11:00 AM</td>
            <td>Parenting Session</td>
            <td>Mrs. Johnson</td>
            <td><a href="#">Zoom Link</a></td>
            <td><span class="badge bg-danger">Cancelled</span></td>
            <td>
              <a href="session-single.php?id=6" class="btn btn-sm btn-primary">View</a>
            </td>
          </tr>
          <tr>
            <td>3</td>
            <td>10 Jul 2025 <br> 04:00 PM</td>
            <td>Counseling Session</td>
            <td>John Doe</td>
            <td>Abuja Centre</td>
            <td><span class="badge bg-warning text-dark">Pending</span></td>
            <td>
              <a href="session-single.php?id=7" class="btn btn-sm btn-primary">View</a>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>
</div>
<?php include "footer.php"; ?>