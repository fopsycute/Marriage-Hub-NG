<?php include "header.php"; ?>
 <div class="container">
          <div class="page-inner">
            <div class="page-header">
              <h3 class="fw-bold mb-3">Upcoming Sessions</h3>
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
                  <a href="#">Upcoming Sessions</a>
                </li>
                <li class="separator">
                  <i class="icon-arrow-right"></i>
                </li>
                <li class="nav-item">
                  <a href="#">Upcoming Sessions</a>
                </li>
              </ul>
            </div>
            <div class="row">
             <div class="col-md-12">
                <div class="card">
                  <div class="card-header">
                    <h4 class="card-title">Upcoming Sessions</h4>
                  </div>
                        <div class="card mt-4">
        <div class="card-header d-flex justify-content-between align-items-center">
          <h4 class="card-title">📅 Upcoming Sessions</h4>
           <div>
            <button class="btn btn-sm btn-outline-primary" id="calendarBtn">Calendar View</button>
            <button class="btn btn-sm btn-outline-secondary" id="listBtn">List View</button>
          </div>
</div>
     
                  <div class="card-body">
                        <!-- Calendar View -->
          <div id="calendarView">
            <div id="calendar"></div>
          </div>

           <!-- Hidden session data (HTML dataset attributes) -->
          <div id="sessionData" class="d-none">
            <div class="session" 
                 data-id="1" 
                 data-title="Marriage Counseling Session" 
                 data-start="2025-09-15T10:00:00" 
                 data-end="2025-09-15T11:00:00" 
                 data-url="session-single.php?id=1">
            </div>
            <div class="session" 
                 data-id="2" 
                 data-title="Parenting Workshop" 
                 data-start="2025-09-20T14:00:00" 
                 data-end="2025-09-20T16:00:00" 
                 data-url="session-single.php?id=2">
            </div>
          </div>
            <!-- List View -->
              <div id="listView" class="d-none mt-3">
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
        <th>Actions</th>
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
        <th>Actions</th>
          </tr>
        </tfoot>
        <tbody>
          <tr>
                    <td>1</td>
                    <td>John Doe</td>
                    <td>15 Sept 2025 <br> 10:00 AM</td>
                    <td>Marriage Counseling Session</td>
                    <td><a href="#">Zoom Link</a></td>
                    <td><span class="badge bg-success">Confirmed</span></td>
                    <td>
                      <button class="btn btn-sm btn-warning m-1">Reschedule</button>
                      <button class="btn btn-sm btn-danger m-1">Cancel</button>
                      <a href="session-single.php?id=1" class="btn btn-sm btn-primary m-1">View</a>
                      <a href="edit-event.php?id=1" class="btn btn-sm btn-primary m-1">Edit</a>
                    </td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>Jane Smith</td>
                    <td>20 Sept 2025 <br> 02:00 PM</td>
                    <td>Parenting Workshop</td>
                    <td>Lagos, Ikeja Centre</td>
                    <td><span class="badge bg-warning text-dark">Pending</span></td>
                    <td>
                      <button class="btn btn-sm btn-warning">Reschedule</button>
                      <button class="btn btn-sm btn-danger">Cancel</button>
                      <a href="session-single.php?id=2" class="btn btn-sm btn-primary">View</a>
                         <a href="edit-event.php?id=1" class="btn btn-sm btn-primary m-1">Edit</a>
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
<?php include "footer.php"; ?>