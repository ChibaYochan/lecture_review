<!DOCTYPE html>
<html lang="ja">
    <HEAD>
        <meta charset="utf-8">
    </HEAD>
    <body>
    <?php
        $id = $_GET['id'];
        $dbh = new PDO('mysql:host=localhost;dbname=lecture_review','root','',
        array(PDO::MYSQL_ATTR_INIT_COMMAND =>'SET NAMES utf8'));
        
        $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 
        $sql = "DELETE FROM review WHERE id = :id";
        
        $stmt = $dbh->prepare($sql);

        $params = array(':id'=> $id);
        $stmt -> execute($params);
    ?> 
    <h1>削除しました</h1>
    <a href="sems.html">topへ</a>
    </body>
</html>
