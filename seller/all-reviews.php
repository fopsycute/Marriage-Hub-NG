
<?php include "header.php"; ?>
 <div class="container">
          <div class="page-inner">
            <div class="page-header">
              <h3 class="fw-bold mb-3"> All Reviews</h3>
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
                  <a href="#"> All Reviews</a>
                </li>
                <li class="separator">
                  <i class="icon-arrow-right"></i>
                </li>
                <li class="nav-item">
                  <a href="#"> All Reviews</a>
                </li>
              </ul>
            </div>
            <div class="row">
             <div class="col-md-12">
                <div class="card">
                  <div class="card-header">
                    <h4 class="card-title">All Reviews</h4>
                  </div>
                        <div class="card mt-4">
        <div class="card-header d-flex justify-content-between align-items-center">
          <h4 class="card-title"> All Reviews</h4>
      
</div>
     
                  <div class="card-body">
        
                    <div class="table-responsive">
                      <table
                        id="multi-filter-select"
                        class="display table table-striped table-hover">
                     <thead>
          <tr>
          <th>Date</th>
            <th>User</th>
            <th>Rating</th>
            <th>Review</th>
            <th>Response</th>
            <th>Action</th>
          </tr>
        </thead>
        <tfoot>
          <tr>
         <th>Date</th>
            <th>User</th>
            <th>Rating</th>
            <th>Review</th>
            <th>Response</th>
            <th>Action</th>
          </tr>
        </tfoot>
        <tbody>
          <tr>
            <td>02 Sept 2025</td>
            <td>Mary John</td>
            <td><i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i></td>
            <td>Great counseling session, very helpful!</td>
            <td>-</td>
            <td>
              <button class="btn btn-sm btn-primary m-1" data-bs-toggle="modal" data-bs-target="#respondModal">Respond</button>
           <button class="btn btn-sm btn-info m-1" data-bs-toggle="modal" data-bs-target="#viewReviewModal">
  View
</button>
            </td>
                  </tr>
                  <tr>
            <td>08 Sept 2025</td>
            <td>Peter Obi</td>
            <td><i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i></td>
            <td>It was okay, but could be better.</td>
            <td>We’ll improve, thank you for your feedback.</td>
            <td>
             
            <button class="btn btn-sm btn-primary m-1" data-bs-toggle="modal" data-bs-target="#respondModal">Respond</button>
            <button class="btn btn-sm btn-info m-1" data-bs-toggle="modal" data-bs-target="#viewReviewModal">
              View
            </button>
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
  
<!-- Respond Modal -->
<div class="modal fade" id="respondModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Respond to Review</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>
      <div class="modal-body">
        <form>
          <div class="mb-3">
            <label class="form-label">Your Response</label>
            <textarea class="form-control" rows="3" required></textarea>
          </div>
          <button type="submit" class="btn btn-success">Submit Response</button>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- View Review Modal -->
<div class="modal fade" id="viewReviewModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Review Details</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>
      <div class="modal-body">
        <div class="mb-3">
          <h6>User:</h6>
          <p id="reviewUser">John Doe</p>
        </div>
        <div class="mb-3">
          <h6>Rating:</h6>
          <p id="reviewRating">⭐⭐⭐⭐</p>
        </div>
        <div class="mb-3">
          <h6>Review:</h6>
          <p id="reviewText">The session was excellent and very helpful.</p>
        </div>
        <div class="mb-3">
          <h6>Your Response:</h6>
          <p id="reviewResponse">Thank you so much for your kind words.</p>
        </div>
      </div>
      <div class="modal-footer">
        <button class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
  </div>
</div>
<?php include "footer.php"; ?>