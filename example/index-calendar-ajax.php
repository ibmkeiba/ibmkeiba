<!DOCTYPE html>
<html lang="ja">

<!-- Header -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>AIしか勝たん</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700">
    <!-- https://fonts.google.com/specimen/Roboto -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/ibmkeiba/ibmkeiba@main/styles/css/all.min.css">
    <!-- https://fontawesome.com/ -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TÍX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <!-- https://getbootstrap.com/ -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/ibmkeiba/ibmkeiba@main/styles/css/templatemo-style.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fullcalendar@5.10.0/main.css">
    <script src='https://cdn.jsdelivr.net/npm/fullcalendar@5.10.1/main.js'></script>
    <!-- https://fullcalendar.io/ -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- ajax -->

    <script src="main.js"></script>

    <!-- Product Admin CSS Template https://templatemo.com/tm-524-product-admin -->


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
</head>

<body>
    <!-- Main Contents -->
    <div class="container">
        <div class="row">
            <div class="col">
                <p class="text-white mt-5 mb-5">Welcome back, <b>Admin</b></p>
            </div>
        </div>

        <!-- row -->
        <div class="row tm-content-row">

            <!-- Block #2 -->
            <div class="col-12 tm-block-col">
                <div class="tm-bg-primary-dark tm-block tm-block-avatar tm-block-scroll">
                    <h2 class="tm-block-title">Calendar</h2>

                    <!-- FullCalendar HTML -->
                    <div id="my-full-calendar">
                        <div id='script-warning'>
                            <code>php/get-events.php</code> must be running.
                        </div>

                        <div id='loading'>loading...</div>

                        <div id='calendar'></div>
                    </div>
                </div>
            </div>

            <!-- Target Block -->
            <div class="col-12 tm-block-col">

                <div class="tm-bg-primary-dark tm-block tm-block-avatar tm-block-scroll">
                    <h2 class="tm-block-title">AJAX Result</h2>


                    <h1 id="target-d1">Date AJAX通信結果：</h1>
                    <div id="target-d2"></div>
                    <h3 id="target-d3">Date 送信data：</h3>

                    <h1 id="target-e1">Event AJAX通信結果：</h1>
                    <div id="target-e2"></div>
                    <h3 id="target-e3">Event 送信data：</h3>

                </div>
            </div>


        </div>
    </div>

</body>

</html>