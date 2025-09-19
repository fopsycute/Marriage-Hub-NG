
// Toggle between calendar & list
  document.getElementById("calendarBtn").addEventListener("click", function () {
    document.getElementById("calendarView").classList.remove("d-none");
    document.getElementById("listView").classList.add("d-none");
  });

  document.getElementById("listBtn").addEventListener("click", function () {
    document.getElementById("listView").classList.remove("d-none");
    document.getElementById("calendarView").classList.add("d-none");
  });

  // Initialize Calendar using events from HTML
  document.addEventListener('DOMContentLoaded', function () {
    let events = [];
    document.querySelectorAll('#sessionData .session').forEach(el => {
      events.push({
        id: el.dataset.id,
        title: el.dataset.title,
        start: el.dataset.start,
        end: el.dataset.end,
        url: el.dataset.url
      });
    });

    var calendarEl = document.getElementById('calendar');
    var calendar = new FullCalendar.Calendar(calendarEl, {
      initialView: 'dayGridMonth',
      height: 500,
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