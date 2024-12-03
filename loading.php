<!--仮想的なロード用の画面-->
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <!--時間経過により画面遷移させることで仮想的なロードを実現-->
    <!--この例では1.8秒後に遷移させた-->
    <script>
        setTimeout("location.href='loaded.php'",1000*1.8);
    </script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>loading</title>
    <link rel="stylesheet" type="text/css" href="css/style.css"></link>
</head>

<body>
    <header class="header">
        <h1>早大生向け抽選会</h1>
    </header>
    <img src = "images/illust.png" width=25%><img src = "images/yaguchi.png" width=15%>
    <?php
        for($i = 0; $i < 3; $i++){
            echo '<br>';
        }
    ?>
    <div class="container">
        <div class="loader"></div>
        <p>抽選中...</p>
    </div>
</body>
</html>