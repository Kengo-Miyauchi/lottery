<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>loaded</title>
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
    <div class="button02">
        <a href="lottery.php">抽選結果を見る！</a>
    </div>
    <script>
        window.document.onkeydown = function(event){
            if (event.key === 'Enter') {
                location.href = "lottery.php";
            }
        }
    </script>
</body>
</html>