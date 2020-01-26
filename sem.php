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

        <TITLE>学期</TITLE>
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
                    <li><a href="top.html">トップ</a></li>
                    <li><a href="sems.html">セメスター一覧</a></li>
                    <li><a href="new.html">新規入力</a></li>
                    
                </ul>
            </div>
        </nav>
        <?php 
          header('Content-Type: text/html; charset=UTF-8');
          ini_set('mbstring.internal_encoding' , 'UTF-8');
          $sem=$_GET['semester'];
          $dbh = new PDO('mysql:host=localhost;dbname=lecture_review','root','');
          $sql = 'SELECT * FROM review where semester='.$sem;
          # sql 結果を変数に格納
          $res = $dbh->query($sql);
          foreach($res as $row){
              echo '<p><a href="show.php?id='.$row['id'].'">'.$row['department'].'/'.$row['lecture'].'</a></p>';
              echo '<br>';
          }
        ?>
    </body>
</html>