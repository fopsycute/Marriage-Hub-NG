
<?php include "header.php"; ?>
<?php include "sidebar-header.php"; ?>

<div class="container mt-4 mb-4">
  <h3 class="mb-3">My Orders</h3>
  <table id="allTable" class="table table-striped table-bordered">
    <thead class="table-dark">
      <tr>
        <th>Order ID</th>
        <th>Date</th>
        <th>Total Amount</th>
        <th>Status</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>#1001</td>
        <td>2025-09-01</td>
        <td>$150.00</td>
        <td><span class="badge bg-success">Paid</span></td>
        <td>
          <button class="btn btn-sm btn-primary">View</button>
        </td>
      </tr>
      <tr>
        <td>#1002</td>
        <td>2025-09-02</td>
        <td>$75.00</td>
        <td><span class="badge bg-warning text-dark">Pending</span></td>
        <td>
          <button class="btn btn-sm btn-primary">View</button>
        </td>
      </tr>
      <tr>
        <td>#1003</td>
        <td>2025-09-03</td>
        <td>$200.00</td>
        <td><span class="badge bg-danger">Failed</span></td>
        <td>
          <button class="btn btn-sm btn-primary">View</button>
        </td>
      </tr>
    </tbody>
  </table>
</div>


<?php include "footer.php"; ?>