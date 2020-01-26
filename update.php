<!DOCTYPE html>
<html lang="ja">
  <body>
    <?php
      $score = $_POST['score'];
      $review = $_POST['review'];
      $id = $_POST['id'];
      
     $score = intval($score);
    
      
      $dbh = new PDO('mysql:host=localhost;dbname=lecture_review','root','',
             array(PDO::MYSQL_ATTR_INIT_COMMAND =>'SET NAMES utf8'));

      $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $sql = "UPDATE review SET score = :score, review = :review WHERE id = :id";
      $stmt = $dbh->prepare($sql);

      $params = array(':score' => $score, ':review' => $review, ':id' => $id);

      $stmt -> execute($params);

      header('Location: show.php?id='.$id);
          ?>
    </form>
  <body>
</html>
