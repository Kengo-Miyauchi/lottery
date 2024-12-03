<!--在庫確認用画面(縦一列表示)-->
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>list</title>
</head>

<body>
    <!--homeへ遷移可能-->
    <header class="header">
        <nav class="nav">
            <ul>
                <li><a href="home.php">home</a></li>
                <li><a href="list.php">list</a></li>
            </ul>
    </header>
    <span style="font-size:60px; color:hwb(26 2% 3%);font-weight:bold;">残り個数一覧</span><br>
    <ul class = "list">
        <?php
        $command = "python ./show.py";
        exec($command, $output);
        $output = mb_convert_encoding($output, "UTF-8", "SJIS");
        $i=0;
        foreach ($output as $item) {
            echo sprintf("%40s",$item);
            echo '<br>';
        };
        ?>
    </p>

</body>

</html>