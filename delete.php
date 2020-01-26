<!DOCTYPE html>
<html lang="ja">
    <HEAD>
        <meta charset="utf-8">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css"/>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css"/>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        <link rel="stylesheet" media="screen" href="/xxx/public/stylesheets/bootstrap-custom.css"/>
        <link rel="stylesheet" media="screen" href="/xxx/public/stylesheets/my.css"/>

        <TITLE>学期</TITLE>
    </HEAD>
    <body>
        <p>hoge</p>
    <?php
        $sql = null;
        $res = null;
        $dbh = null;
        try {	
            $dbh = new PDO('mysql:host=localhost;dbname=lecture_review','root','');
                
            $sql = 'DELETE FROM review WHERE id ='.$_GET['id'];
            $res = $dbh->query($sql);
            } 
            catch(PDOException $e) {
              echo $e->getMessage();	
              die();
            }
        $dbh = null;
        ​
        echo'<a href="LectureReviewDetailsSumple.php">詳細へ</a>';
    ?> 
    </body>
</html>
