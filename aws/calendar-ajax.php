<script>
    document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('calendar');

        var calendar = new FullCalendar.Calendar(calendarEl, {
            headerToolbar: {
                left: 'prev,next today',
                center: 'title',
                right: 'dayGridMonth,timeGridWeek,timeGridDay,listWeek'
            },
            // initialDate: '2020-09-12',
            editable: true,
            navLinks: true, // can click day/week names to navigate views
            dayMaxEvents: true, // allow "more" link when too many events
            events: {
                url: 'contents/calendar/php/get-events.php',
                failure: function() {
                    document.getElementById('script-warning').style.display = 'block'
                }
            },
            loading: function(bool) {
                document.getElementById('loading').style.display =
                    bool ? 'block' : 'none';
            },

            // Event Display の設定（https://fullcalendar.io/docs/event-display）
            eventDisplay: 'block',
            timeZone: 'Asia/Tokyo',
            eventColor: '#ffff00',
            eventTextColor: '#000000',
            displayEventTime: false,
            // eventBackgroundColor: '#ff0000',


            // イベントクリック設定

            // dateClick (https://fullcalendar.io/docs/date-clicking-selecting)
            dateClick: function(info) {

                // alert('Clicked on: ' + info.dateStr);

                // main.js のAJAX関数を呼び出し
                ajax_date(info);
            },

            // eventClick (https://fullcalendar.io/docs/eventClick)
            eventClick: function(info) {

                // main.js のAJAX関数を呼び出し
                ajax_event(info);

            },

        });

        calendar.render();
    });
</script>

<style>
    body {
        margin: 0;
        padding: 0;
        font-family: Arial, Helvetica Neue, Helvetica, sans-serif;
        font-size: 14px;
    }

    #script-warning {
        display: none;
        background: #eee;
        border-bottom: 1px solid #ddd;
        padding: 0 10px;
        line-height: 40px;
        text-align: center;
        font-weight: bold;
        font-size: 12px;
        color: red;
    }

    #loading {
        display: none;
        position: absolute;
        top: 10px;
        right: 10px;
    }

    #calendar {
        max-width: 1100px;
        margin: 40px auto;
        padding: 0 10px;
    }

    /* My CSS Setting */
    #my-full-calendar {
        background-color: white;
        padding: 20px;
    }

    .fc-col-header-cell-cushion {
        color: white;
    }
</style>

<!-- Block #Calendar -->
<div class="col-12 tm-block-col">
    <div class="tm-bg-primary-dark tm-block tm-block-avatar">
        <h2 class="tm-block-title">競馬カレンダー</h2>

        <!-- FullCalendar HTML -->
        <div id="my-full-calendar" class="w-75 mx-auto">
            <div id='script-warning'>
                <code>php/get-events.php</code> must be running.
            </div>

            <div id='loading'>loading...</div>

            <div id='calendar'></div>
        </div>
    </div>
</div>