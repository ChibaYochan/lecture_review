<!DOCTYPE html>
<html lang="ja">
    <HEAD>
        <meta charset="utf-8">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        <link rel="stylesheet" media="screen" href="/xxx/public/stylesheets/bootstrap-custom.css">
        <link rel="stylesheet" media="screen" href="/xxx/public/stylesheets/my.css">

        <TITLE>学科一覧</TITLE>
    </HEAD>
    <body>
        <nav class="navbar navbar-default">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#nav1">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="itiran.php">レビューアプリ</a>            
            </div>
            <div id="nav1" class="collapse navbar-collapse" >
                <ul class="nav navbar-nav">
                    <li><a href="itiran.php">トップ</a></li>
                    <li><a href="sinki.php">新規入力</a></li>
                    <li><a href="henshuu.php">編集</a></li>
                </ul>
            </div>
        </nav>
        <div class="bg-primary">
          <h1 class="text-center">学科一覧画面</h1>
        </div>
        <?php 
        header('Content-Type: text/html; charset=UTF-8');
        $sql = null;
        $res = null;
        $dbh = null;
        # DB に接続
        $dbh = new PDO('mysql:host=localhost;dbname=lecture_review','root','');

        $sql = 'SELECT * FROM review';
        # sql 結果を変数に格納
        $res = $dbh->query($sql);
        foreach($res as $row){
            echo $row['department'].'/'.$row['lecture'].'/';
            echo '<br>';
        }
        ?>
    </body> 
</html>