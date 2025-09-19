
<?php include "header.php"; ?>
<?php include "sidebar-header.php"; ?>

<div class="container mt-4 mb-4">
    <div class="row">
        <div class="col-lg-12 mx-auto">
       
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
 <!-- Hidden div containing session data -->
<!-- Calendar Container -->
<div id="calendar" class="mt-3"></div>

<!-- Hidden div containing session data -->
<div id="calendarView" style="display:none;">
  <div class="session" 
       data-id="1" 
       data-title="Marriage Counseling Session" 
       data-start="2025-09-15T10:00:00" 
       data-end="2025-09-15T11:00:00" 
       data-status="Confirmed" 
       data-facilitator="John Doe"
       data-location="Zoom Link"
       data-url="session-single.php?id=1">
  </div>
  <div class="session" 
       data-id="2" 
       data-title="Parenting Workshop" 
       data-start="2025-09-20T14:00:00" 
       data-end="2025-09-20T16:00:00" 
       data-status="Pending" 
       data-facilitator="Jane Smith"
       data-location="Lagos, Nigeria"
       data-url="session-single.php?id=2">
  </div>
</div>


    <!-- List View -->
    <div id="listView" class="d-none">
      <div class="table-responsive">
        <table id="allTable" class="table table-bordered table-hover align-middle">
          <thead class="thead-light">
            <tr>
              <th>#</th>
              <th>Date & Time</th>
              <th>Session Title</th>
              <th>Facilitator</th>
              <th>Location / Link</th>
              <th>Status</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1</td>
              <td>15 Sept 2025 <br> 10:00 AM</td>
              <td>Marriage Counseling Session</td>
              <td>Dr. Adewale</td>
              <td><a href="#">Zoom Link</a></td>
              <td><span class="badge bg-success">Confirmed</span></td>
              <td>
                <button class="btn btn-sm btn-warning">Reschedule</button>
                <button class="btn btn-sm btn-danger">Cancel</button>
                <a href="session-single.html" class="btn btn-sm btn-primary">View</a>
              </td>
            </tr>
            <tr>
              <td>2</td>
              <td>20 Sept 2025 <br> 02:00 PM</td>
              <td>Parenting Workshop</td>
              <td>Mrs. Johnson</td>
              <td>Lagos, Ikeja Centre</td>
              <td><span class="badge bg-warning text-dark">Pending</span></td>
              <td>
                <button class="btn btn-sm btn-warning">Reschedule</button>
                <button class="btn btn-sm btn-danger">Cancel</button>
                <a href="session-single.html" class="btn btn-sm btn-primary">View</a>
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

<script>

 document.getElementById("calendarBtn").addEventListener("click", function () {
  document.getElementById("calendar").classList.remove("d-none");
  document.getElementById("listView").classList.add("d-none");
});

document.getElementById("listBtn").addEventListener("click", function () {
  document.getElementById("listView").classList.remove("d-none");
  document.getElementById("calendar").classList.add("d-none");
});

</script>
<script>

    document.addEventListener('DOMContentLoaded', function () {
  let eventElements = document.querySelectorAll('#calendarView .session');
  let events = [];

  eventElements.forEach(el => {
    events.push({
      id: el.dataset.id,
      title: el.dataset.title,
      start: el.dataset.start,
      end: el.dataset.end,
      url: el.dataset.url,
      extendedProps: {
        status: el.dataset.status,
        facilitator: el.dataset.facilitator,
        location: el.dataset.location
      }
    });
  });

  // Init FullCalendar
  var calendar = new FullCalendar.Calendar(document.getElementById('calendar'), {
    initialView: 'dayGridMonth',
    headerToolbar: {
      left: 'prev,next today',
      center: 'title',
      right: 'dayGridMonth,timeGridWeek,timeGridDay,listWeek'
    },
    events: events,
    eventClick: function(info) {
      info.jsEvent.preventDefault();
      if (info.event.url) window.location.href = info.event.url;
    }
  });

  calendar.render();
});
</script>
<?php include "footer.php"; ?>