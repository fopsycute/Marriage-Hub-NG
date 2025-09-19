
<?php include "header.php"; ?>
<?php include "sidebar-header.php"; ?>

<div class="container mt-4 mb-4">


<div class="card mt-4">
  <div class="card-header d-flex justify-content-between align-items-center">
    <h5>⭐ Past Reviews</h5>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered table-hover align-middle">
        <thead class="table-light">
          <tr>
            <th>#</th>
            <th>Booking / Service</th>
            <th>Date</th>
            <th>Rating</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          <!-- Example Row -->
          <tr>
            <td>1</td>
            <td>Marriage Counseling Session</td>
            <td>15 Sept 2025</td>
            <td>⭐⭐⭐⭐☆</td>
            <td>
              <!-- View (Modal) -->
              <button class="btn btn-sm btn-info" data-bs-toggle="modal" data-bs-target="#viewReview1">
                View
              </button>
              <!-- Edit (Redirect to page) -->
              <a href="edit-review.php?id=1" class="btn btn-sm btn-warning">Edit</a>
              <!-- Delete -->
              <button class="btn btn-sm btn-danger">Delete</button>
            </td>
          </tr>

          <!-- Modal for Review #1 -->
          <div class="modal fade" id="viewReview1" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title">Review Details</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                  <p><strong>Booking / Service:</strong> Marriage Counseling Session</p>
                  <p><strong>Rating:</strong> ⭐⭐⭐⭐☆</p>
                  <p><strong>Review:</strong> The counselor was very professional and supportive.</p>
                </div>
                <div class="modal-footer">
                  <button class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>

          <!-- Another Row -->
          <tr>
            <td>2</td>
            <td>Parenting Workshop</td>
            <td>20 Sept 2025</td>
            <td>⭐⭐⭐⭐⭐</td>
            <td>
              <button class="btn btn-sm btn-info" data-bs-toggle="modal" data-bs-target="#viewReview2">
                View
              </button>
              <a href="edit-review.php?id=2" class="btn btn-sm btn-warning">Edit</a>
              <button class="btn btn-sm btn-danger">Delete</button>
            </td>
          </tr>

          <!-- Modal for Review #2 -->
          <div class="modal fade" id="viewReview2" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title">Review Details</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                  <p><strong>Booking / Service:</strong> Parenting Workshop</p>
                  <p><strong>Rating:</strong> ⭐⭐⭐⭐⭐</p>
                  <p><strong>Review:</strong> Loved the session, very practical tips for parents.</p>
                </div>
                <div class="modal-footer">
                  <button class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>

        </tbody>
      </table>
    </div>
  </div>
</div>

</div>

<?php include "footer.php"; ?>