<?php include "header.php"; ?>
<?php include "sidebar-header.php"; ?>

<!-- Button to trigger modal -->
<div class="container mt-4">
  <button class="btn bg-success position-relative" data-bs-toggle="modal" data-bs-target="#chatModal">
   <i class="bi bi-chat"></i>Messages
    <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
      5 <!-- unread count -->
    </span>
  </button>
</div>

<!-- Chat Modal -->
<div class="modal fade" id="chatModal" tabindex="-1" aria-labelledby="chatModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl modal-dialog-scrollable">
    <div class="modal-content" style="border-radius:15px;">
      <div class="modal-header">
        <h5 class="modal-title" id="chatModalLabel"><i class="bi bi-chat"></i>Chat with Therapists & Vendors</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body" style="background-color:#f8f9fa;">

        <div class="row">
          <!-- Chat List -->
          <div class="col-md-4 border-end">
            <h6 class="p-2">Chats</h6>
            <div style="max-height:400px;overflow-y:auto;">
              <ul class="list-unstyled mb-0">
                <!-- Therapist -->
                <li class="p-2 border-bottom chat-item" data-user="Dr. Adewale">
                  <a href="javascript:void(0);" class="d-flex justify-content-between">
                    <div class="d-flex flex-row">
                      <div>
                        <img src="assets/" class="rounded-circle me-2">
                        <span class="badge bg-success badge-dot"></span>
                      </div>
                      <div class="pt-1">
                        <p class="fw-bold mb-0">Dr. Adewale</p>
                        <p class="small text-muted">Therapist</p>
                      </div>
                    </div>
                    <div class="pt-1 text-end">
                      <p class="small text-muted mb-1">Just now</p>
                      <span class="badge bg-danger rounded-pill">3</span>
                    </div>
                  </a>
                </li>
                <!-- Vendor -->
                <li class="p-2 border-bottom chat-item" data-user="Mrs. Johnson">
                  <a href="javascript:void(0);" class="d-flex justify-content-between">
                    <div class="d-flex flex-row">
                      <div>
                        <img src="https://via.placeholder.com/50" class="rounded-circle me-2">
                        <span class="badge bg-warning badge-dot"></span>
                      </div>
                      <div class="pt-1">
                        <p class="fw-bold mb-0">Mrs. Johnson</p>
                        <p class="small text-muted">Vendor</p>
                      </div>
                    </div>
                    <div class="pt-1 text-end">
                      <p class="small text-muted mb-1">2 mins ago</p>
                      <span class="badge bg-danger rounded-pill">1</span>
                    </div>
                  </a>
                </li>
              </ul>
            </div>
          </div>

          <!-- Chat Window -->
          <div class="col-md-8 d-flex flex-column">
            <div class="border-bottom p-2">
              <h6 id="chatHeader">Select a chat</h6>
            </div>
            <div id="chatMessages" class="flex-grow-1 p-3 overflow-auto" style="height:400px;">
              <p class="text-muted text-center">No conversation selected</p>
            </div>
            <div class="border-top p-2 d-flex align-items-center">
              <input type="text" class="form-control" id="chatInput" placeholder="Type a message..." disabled>
              <button class="btn btn-primary ms-2" id="sendBtn" disabled>Send</button>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
</div>

<script>
  
</script>

<?php include "footer.php"; ?>
