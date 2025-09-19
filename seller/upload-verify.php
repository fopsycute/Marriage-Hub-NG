

<?php include "header.php"; ?>

 <div class="container">
          <div class="page-inner">
            <div class="page-header">
              <h3 class="fw-bold mb-3">Documents & Verification</h3>
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
                  <a href="#">Documents & Verification </a>
                </li>
              </ul>
            </div>

<!-- Documents & Verification -->
    <div class="col-md-6">
      <div class="card">
        <div class="card-header">
          <h5 class="card-title">Documents & Verification</h5>
        </div>
        <div class="card-body">
          <table class="table table-striped">
            <thead>
              <tr>
                <th>Document</th>
                <th>Status</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>License</td>
                <td><span class="badge bg-warning text-dark">Pending</span></td>
                <td>
                  <button class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#uploadDocModal">
                    Upload
                  </button>
                </td>
              </tr>
              <tr>
                <td>Certificate</td>
                <td><span class="badge bg-success">Approved</span></td>
                <td>
                  <button class="btn btn-sm btn-secondary" disabled>Uploaded</button>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Upload Document Modal -->
<div class="modal fade" id="uploadDocModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Upload Document</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>
      <div class="modal-body">
        <form>
          <div class="mb-3">
            <label for="docType" class="form-label">Document Type</label>
            <select id="docType" class="form-select">
              <option>License</option>
              <option>Certificate</option>
            </select>
          </div>
          <div class="mb-3">
            <label for="docFile" class="form-label">Upload File</label>
            <input type="file" class="form-control" id="docFile" />
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
    </div>
  </div>
  </div>
</div>
<?php include "footer.php"; ?>