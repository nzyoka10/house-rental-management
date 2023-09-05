<script>
        document.addEventListener('DOMContentLoaded', function() {
          var calendarEl = document.getElementById('calendar');
          var calendar = new FullCalendar.Calendar(calendarEl, {
            // Your calendar configuration options go here
            initialView: 'dayGridMonth', // Change the initial view as needed
            events: [
              // Sample events, replace with your own event data
              {
                title: 'Event 1',
                start: '2023-09-10T10:00:00',
                end: '2023-09-10T12:00:00'
              },
              {
                title: 'Event 2',
                start: '2023-09-15T14:00:00',
                end: '2023-09-15T16:00:00'
              }
            ]
          });
          calendar.render();
        });
      </script>