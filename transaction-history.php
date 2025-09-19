

<?php include "header.php"; ?>
<?php include "sidebar-header.php"; ?>
<div class="container mt-4 mb-4">

<div class="card mt-4">
  <div class="card-header">
    <h5>💳 Payment History</h5>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-striped table-hover align-middle">
        <thead class="table-light">
          <tr>
            <th>#</th>
            <th>Date</th>
            <th>Type</th>
            <th>Description</th>
            <th>Amount (₦)</th>
            <th>Status</th>
            <th>Receipt</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>2025-08-15</td>
            <td>Booking</td>
            <td>Marriage Counseling Session</td>
            <td>10,000</td>
            <td><span class="badge bg-success">Paid</span></td>
            <td><a href="receipt.php?id=1" class="btn btn-sm btn-outline-primary">Download</a></td>
          </tr>
          <tr>
            <td>2</td>
            <td>2025-09-01</td>
            <td>Subscription</td>
            <td>3 Months Group Membership</td>
            <td>15,000</td>
            <td><span class="badge bg-success">Paid</span></td>
            <td><a href="receipt.php?id=2" class="btn btn-sm btn-outline-primary">Download</a></td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>


</div>
<?php include "footer.php"; ?>