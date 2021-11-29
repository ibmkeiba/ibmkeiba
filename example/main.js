function ajax_date(info) {

    // ajax date start
    $.ajax({
        url: './contents/race/race-ajax.php',
        type: 'GET',
        dataType: 'html',
        data: {
            ymd: info.dateStr.replace(/-/g, ''),
        }

    })
        /* 通信成功時 */
        .done(function (res) {

            // 通信結果を表示
            $('#target-d1').text('成功');

            //取得したHTMLを指定したidのタグに反映
            $('#target-d2').html(res);

        })
        /* 通信失敗時 */
        .fail(function () {

            // 通信結果を表示
            $('#target-d1').text('失敗');

        })
        /* 必ず実行 */
        .always(function () {

            // CSSを変更
            $('#target-d1').css('color', 'pink');
            $('#target-d3').text(info.dateStr.replace(/-/g, ''));

        });
    // ajax date end
};

function ajax_event(info) {

    // ajax date start
    $.ajax({
        url: './contents/card/div.php',
        type: 'GET',
        dataType: 'html',
        data: {
            title: info.event.title.split(': ').pop(),
        }

    })
    /* 通信成功時 */
    .done(function(res) {

        // 通信結果を表示
        $('#target-e1').text('成功');

        //取得したHTMLを指定したidのタグに反映
        $('#target-e2').html(res);

    })
    /* 通信失敗時 */
    .fail(function() {

        // 通信結果を表示
        $('#target-e1').text('失敗');

    })
    /* 必ず実行 */
    .always(function() {

        // CSSを変更
        $('#target-e1').css('color', 'yellow');
        // $('#target-e3').text(info.event.title);
        $('#target-e3').text(info.event.title.split(': ').pop());

    });

// ajax date end
};



$(function() {
    $('#mybutton').click(function(){
        $('#mybutton').val('OK');

    });
});

