<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AJAX type:html url:php(html)</title>
</head>

<body>
    <!-- HTML -->
    <h1>Push Button</h1>
    <div>
        <input class="btn" id="btn1" type="button" value="ボタン1">
        <input class="btn" id="btn2" type="button" value="ボタン2">
    </div>
    <div>
        <p id="target1">通信結果：</p>
        <p>この下に読み込んだHTMLを表示します</p>
        <p>-----------------------------</p>
        <div id="target2"></div>
    </div>


    <!-- Script -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script>
        $(function() {

            //.btnをクリックしてajax通信を行う
            $('.btn').click(function() {
                $.ajax({
                        url: './called.php',
                        type: 'GET',
                        dataType: 'html',
                        data: {
                            data1: $('.btn').val()
                        }

                    })
                    /* 通信成功時 */
                    .done(function(res) {

                        // 通信結果を表示
                        $('#target1').text('成功');

                        //取得したHTMLを指定したidのタグに反映
                        $('#target2').html(res);

                    })
                    /* 通信失敗時 */
                    .fail(function() {

                        // 通信結果を表示
                        $('#target1').text('失敗');

                    })
                    /* 必ず実行 */
                    .always(function() {

                        // CSSを変更
                        $('#target1').css('color', 'orange');

                    });
            });
        });
    </script>
</body>

</html>