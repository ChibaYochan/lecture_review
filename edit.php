<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <title>レビュー編集
        </title>
    </head>
    <body>
      <?php 
      $review_id=$_GET['id'];
      $db = new PDO('mysql:host=localhost;dbname=lecture_review','root','',
                     array(PDO::MYSQL_ATTR_INIT_COMMAND =>'SET NAMES utf8'));
      
                     
      $stmt = $db->prepare('SELECT * FROM review WHERE id ='.$review_id);
      $stmt->execute();
      
      
      while($row = $stmt->fetch()){
              $Department = htmlspecialchars($row['department'],ENT_QUOTES,'UTF-8');
              $Semester = htmlspecialchars($row['semester'],ENT_QUOTES,'UTF-8');
              $Lecture = htmlspecialchars($row['lecture'],ENT_QUOTES,'UTF-8');
              $Score = htmlspecialchars($row['score'],ENT_QUOTES,'UTF-8');
              $Review = htmlspecialchars($row['review'],ENT_QUOTES,'UTF-8');
      }
      ?>
      <nav class="navbar navbar-default">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#nav1">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="sems.html">レビューアプリ</a>
        </div>
        <div id="nav1" class="collapse navbar-collapse" >
            <ul class="nav navbar-nav">
              <li><a href="sems.html">トップ</a></li>
              <li><a href="sems.html">セメスター一覧</a></li>
              <li><a href="new.html">新規入力</a></li>
            </ul>
        </div>
      </nav>
        <div class="container">
          <div class="row">
            <div class="container">
              <div class="row">
                <div class="row" style="background:skyblue;">
                  <h2><p style="text-align:center">レビュー編集</p></h2>
                </div>
              </div>
            </div>
            <form action="update.php" method="post">                
              <h3>学科：<?php echo $Department; ?></h3> 
              <h3>セメスター：<?php echo $Semester; ?></h3>
              <h3>授業名：<?php echo $Lecture; ?></h3>
              <div class="input-group">
                <h3>
                <label for="score">授業の点数を入力：</label>
                <select name="score">
                  <option value="1">1点</option>
                  <option value="2">2点</option>
                  <option value="3">3点</option>
                  <option value="4">4点</option>
                  <option value="5">5点</option>
                  <option value="6">6点</option>
                  <option value="7">7点</option>
                  <option value="8">8点</option>
                  <option value="9">9点</option>
                  <option value="10">10点</option>
                </select>
                </h3>
              </div>
              <h3>
              <label for="review">レビューを入力：</label><br>
              <textarea name="review" rows="10" cols="80"><?php echo $Review; ?> </textarea>
              </h3>
              <?php echo '<input type="hidden" name="id" value="'.$review_id.'" />'?>
              <input type="submit" value="送信" />
            </form>
          </div>
        </div>
    </body>
</html>