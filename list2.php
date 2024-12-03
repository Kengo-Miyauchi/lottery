<!--在庫確認用画面(縦1列が見づらい場合)-->
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>test</title>
</head>

<body>
    <header class="header">
        <nav class="nav">
            <ul>
                <li><a href="home.php">home</a></li>
                <li><a href="list.php">list</a></li>
    </header>
    <span style="font-size:60px; color:hwb(26 2% 3%);font-weight:bold;">残り個数一覧</span><br>
    <div class = "list">
        <?php
        $command = "python ./show.py";
        exec($command, $output);
        $output = mb_convert_encoding($output, "UTF-8", "SJIS");
        echo "<ul>";
        for($i = 0; $i < count($output); $i++){
            echo "<li>".$output[$i]."</li>";
        }
        echo "</ul>";
        ?>
    </p>

</body>

</html>