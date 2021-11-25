$(function () {

    //.btnをクリックしてajax通信を行う
    $('.btn').click(function () {
        $.ajax({
            url: './called.php',
            type: 'GET',
            dataType: 'html',
            data: {
                data1: $(this).val()
            }

        })
            /* 通信成功時 */
            .done(function (res) {

                // 通信結果を表示
                $('#target1').text('成功');

                //取得したHTMLを指定したidのタグに反映
                $('#target2').html(res);

            })
            /* 通信失敗時 */
            .fail(function () {

                // 通信結果を表示
                $('#target1').text('失敗');

            })
            /* 必ず実行 */
            .always(function () {

                // CSSを変更
                $('#target1').css('color', 'orange');

            });
    });
});