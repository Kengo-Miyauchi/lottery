<!--抽選結果表示画面-->
<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8'>
        <meta charset="utf-8">
        <!--一応自動でホーム画面に戻るようにした-->
        <!--
        <script>
            setTimeout("location.href='home.php'",1000*4.0);
        </script>
        -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/style.css">
        <title>result</title>
    </head>
    <body>
        <header class="header">
            <h1>早大生向け抽選会</h1>
        </header>

        <p class ="outcome">
            <?php
                $command = "C:\Users\kengo\AppData\Local\Programs\Python\Python310\python.exe lottery.py";
                exec($command, $output);
                $output = mb_convert_encoding($output,"UTF-8","SJIS");
                echo($output[0]);
                echo('<br>');
                //壁紙当選時QR画像の表示、不要なら消してOK
                if(strpos($output[0],"壁紙") !== false){
                    echo('<br>');
                    $image_path = 'images/QR_pc.png';
                    if (file_exists($image_path)) {
                        echo '<img src="' . $image_path . '" width="15%">';
                    }
                    echo(" ");
                    $image_path = 'images/QR_sm.png';
                    if (file_exists($image_path)) {
                        echo '<img src="' . $image_path . '" width="15%">';
                    }
                }
            ?>
            <div class="qr">
            <?php
                if(strpos($output[0],"壁紙") !== false){
                    echo('<span>PC用</span>');
                    echo('<span>スマートフォン用</span>');
                }
            ?>
            </div>
        </p>
        <br>
        
        <p>
        <div class="button02">
            <a href="home.php">抽選画面へ戻る！</a>
        </div>
        </p>
        <script>
        window.document.onkeydown = function(event){
            if (event.key === 'Enter') {
                location.href = "home.php";
            }
        }
    </script>
    </body>
</html>