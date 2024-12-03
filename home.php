<!--ホーム画面-->
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>home</title>
</head>

<body>
    <!--listへ遷移可能-->
    <header class="header">
        <nav class="nav">
            <ul>
                <li><a href="home.php">home</a></li>
                <li><a href="list.php">list</a></li>
            </ul>
    </header>
    <h1>早大生向け抽選会</h1>
    <img src = "images/yaguchi.png" width=25%>
    
    <br><br>
    <!--ボタンのクリックによる画面遷移-->
    <p>
    <div class="button01">
        <a href="loading.php">抽選する！</a>
    </div>
    </p>

    <!--Enterキーの押下による画面遷移-->
    <script>
        window.document.onkeydown = function(event){
            if (event.key === 'Enter') {
                location.href = "loading.php";
            }
        }
    </script>

</body>

</html>