<?php include "header.php"; ?>
<?php include "sidebar-header.php"; ?>

<div class="container mt-4 mb-4">
  <div class="row">
    <div class="col-lg-11 mx-auto">

      <div class="card mt-4">
        <div class="card-header d-flex justify-content-between align-items-center">
          <h4 class="card-title">🎟️ My Events & Programs</h4>

          <!-- Toggle Buttons -->
          <div class="btn-group" role="group" aria-label="View Switch">
            <button type="button" class="btn btn-outline-primary active" id="btnList">📋 List</button>
            <button type="button" class="btn btn-outline-primary" id="btnCalendar">📅 Calendar</button>
          </div>
        </div>

        <div class="card-body">

          <!-- List View -->
          <div id="listView">
            <div class="table-responsive">
              <table class="table table-bordered table-hover align-middle">
                <thead class="thead-light">
                  <tr>
                    <th>#</th>
                    <th>Date & Time</th>
                    <th>Event Title</th>
                    <th>Facilitator</th>
                    <th>Location / Link</th>
                    <th>Status</th>
                    <th>Actions</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>12 Sept 2025 <br> 10:00 AM</td>
                    <td>Marriage Enrichment Seminar</td>
                    <td>Dr. Adewale</td>
                    <td>Lagos, Nigeria</td>
                    <td><span class="badge bg-success">Confirmed</span></td>
                    <td>
                      <a href="course-details.html" class="btn btn-sm btn-primary">View</a>
                      <button class="btn btn-sm btn-warning">Feedback</button>
                    </td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>02 Oct 2025 <br> 02:00 PM</td>
                    <td>Parenting Workshop</td>
                    <td>Mrs. Johnson</td>
                    <td><a href="#">Zoom Link</a></td>
                    <td><span class="badge bg-warning text-dark">Pending</span></td>
                    <td>
                      <a href="course-details.html" class="btn btn-sm btn-primary">View</a>
                      <button class="btn btn-sm btn-warning">Feedback</button>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>

          <!-- Calendar View (hidden initially) -->
          <div id="calendarView" style="display:none;">
            <!-- Hidden Events Data -->
            <div id="events-data" style="display:none;">
              <div class="fc-event"
                data-title="Marriage Enrichment Seminar (Confirmed)"
                data-start="2025-09-12T10:00:00"
                data-end="2025-09-12T12:00:00"
                data-color="#28a745"></div>

              <div class="fc-event"
                data-title="Parenting Workshop (Pending)"
                data-start="2025-10-02T14:00:00"
                data-end="2025-10-02T16:00:00"
                data-color="#ffc107"></div>
            </div>
            <div id="calendar"></div>
          </div>

        </div>
      </div>

    </div>
  </div>
</div>

<script>
  document.addEventListener('DOMContentLoaded', function () {
    var calendarEl = document.getElementById('calendar');

    // Collect events from HTML
    var events = [];
    document.querySelectorAll('#events-data .fc-event').forEach(function (el) {
      events.push({
        title: el.dataset.title,
        start: el.dataset.start,
        end: el.dataset.end,
        color: el.dataset.color
      });
    });

    var calendar = new FullCalendar.Calendar(calendarEl, {
      initialView: 'dayGridMonth',
      events: events
    });

    calendar.render();

    // Toggle Views
    document.getElementById('btnList').addEventListener('click', function () {
      document.getElementById('listView').style.display = 'block';
      document.getElementById('calendarView').style.display = 'none';
      this.classList.add('active');
      document.getElementById('btnCalendar').classList.remove('active');
    });

    document.getElementById('btnCalendar').addEventListener('click', function () {
      document.getElementById('listView').style.display = 'none';
      document.getElementById('calendarView').style.display = 'block';
      this.classList.add('active');
      document.getElementById('btnList').classList.remove('active');
      calendar.render(); // fix rendering issue when hidden
    });
  });
</script>

<?php include "footer.php"; ?>
