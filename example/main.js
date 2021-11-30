// dateClick AJAX
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
            $('#target-d1').text('成功DETH');

            //取得したHTMLを指定したidのタグに反映
            $('#race-ajax').html(res);

            //出馬表と馬券の提案結果と予算未入力の警告の表示を消す
            $('#card-ajax').html('');
            $('#recommend-ajax').hide();
            $('#budget-warning').hide();

        })
        /* 通信失敗時 */
        .fail(function () {

            // 通信結果を表示
            $('#target-d1').text('失敗DETH');

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
        url: './contents/card/card-ajax.php',
        type: 'GET',
        dataType: 'html',
        data: {
            title: info.event.title.split(': ').pop(),
        }

    })
        /* 通信成功時 */
        .done(function (res) {

            // 通信結果を表示
            $('#target-e1').text('成功だ');

            // #race-ajax を表示
            // $('#race-ajax').hide();

            //取得したHTMLを指定したidのタグに反映
            $('#card-ajax').html(res);

            // #recommend-ajax を表示
            $('#recommend-ajax').show();

            // 予算未入力の警告の表示を消す
            $('#budget-warning').hide();

            // #recommend-btn のタグ 'ymd','race-id' の属性値を設定
            $('#recommend-btn').attr('ymd', $('#keiba-card').attr('ymd'));
            $('#recommend-btn').attr('race-id', $('#keiba-card').attr('race-id'));

            $('#target-d').text($('#card-ajax').is(':visible'));

        })
        /* 通信失敗時 */
        .fail(function () {

            // 通信結果を表示
            $('#target-e1').text('失敗だ');

        })
        /* 必ず実行 */
        .always(function () {

            // CSSを変更
            $('#target-e1').css('color', 'yellow');
            // $('#target-e3').text(info.event.title);
            $('#target-e3').text(info.event.title.split(': ').pop());

        });

    // ajax date end
};


// レース一覧表のレース行がクリックされたとき
function raceClick(race_id, race_title) {
    $('#target-r1').text(race_title);

    // ajax date start
    $.ajax({
        url: './contents/card/card-ajax.php',
        type: 'GET',
        dataType: 'html',
        data: {
            title: race_title,
        }

    })
        /* 通信成功時 */
        .done(function (res) {

            // 通信結果を表示
            $('#target-e1').text('レースが選択されました');

            // #race-ajax を表示
            // $('#race-ajax').hide();

            //取得したHTMLを指定したidのタグに反映
            $('#card-ajax').html(res);

            // 予算未入力の警告の表示を消す
            $('#budget-warning').hide();

            // #recommend-ajax を表示
            $('#recommend-ajax').show();

            // #recommend-btn のタグ 'ymd','race-id' の属性値を設定
            $('#recommend-btn').attr('ymd', $('#keiba-card').attr('ymd'));
            $('#recommend-btn').attr('race-id', $('#keiba-card').attr('race-id'));

        })
        /* 通信失敗時 */
        .fail(function () {

            // 通信結果を表示
            $('#target-e1').text('レース選択による通信が失敗');

        })
        /* 必ず実行 */
        .always(function () {

            // CSSを変更
            $('#target-e1').css('color', 'blue');
            $('#target-e3').text(race_title);

        });

    // ajax date end
};


$(function () {
    // ラジオボタンが押されたとき
    $('input:radio[name="risk-btn"]').click(function () {
        $('#target-rec').text('ラジオボタンが押されました:' + $(this).val());
        $('#risk').val($(this).val());
    });

    // 提案ボタンを押された時
    $('#recommend-btn').click(function () {
        var $race_id = $(this).attr('race-id');
        var $budget = $('#budget').val();
        var $risk = $("input[name='risk-btn']:checked").val();
        $('#target-rec').text('提案します, race_id:' + $race_id + ', budget:' + $budget + ', risk:' + $risk);

        if(!$budget) {
            $('#target-b').text('予算を入力してください');
            $('#budget-warning').show();
            return;
        }

        // 予算未入力の警告の表示を消す
        $('#budget-warning').hide();
        $('#target-b').text('リセット');
    });

    // サンプル
    $('.my-tr-race').click(function () {
        $('#target-r1').text('OK');
    });
});