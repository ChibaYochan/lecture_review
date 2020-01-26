<!DOCTYPE html>
<html lang="ja">
  <body>
    <?php
      $department = $_POST['department'];
      $score = $_POST['score'];
      $lecture = $_POST['lecture'];
      $semester = $_POST['semester'];
      $review = $_POST['review'];
      
     $score = intval($score);
     $semester = intval($semester);
    
     echo $department;
     echo $score;
     echo $lecture;
     echo $semester;
     echo $review;

      
      $dbh = new PDO('mysql:host=localhost;dbname=lecture_review','root','',
             array(PDO::MYSQL_ATTR_INIT_COMMAND =>'SET NAMES utf8'));

      $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

      $sql = "INSERT INTO review (department, score, lecture, semester, review) VALUES (:department, :score, :lecture, :semester, :review)";
      $stmt = $dbh->prepare($sql);

      $params = array(':department' => $department, ':score' => $score, ':lecture' => $lecture, ':semester' => $semester, ':review' => $review);

      $stmt -> execute($params);

      header('Location: sems.html');
          ?>
    </form>
  <body>
</html>
