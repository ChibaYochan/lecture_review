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
                <a class="navbar-brand" href="new.html">レビューアプリ</a>
            </div>
            <div id="nav1" class="collapse navbar-collapse" >
                <ul class="nav navbar-nav">
					<li><a href="top.html">トップ</a></li>
					<li><a href="sems.html">セメスター一覧</a></li>
                    <li><a href="new.html">新規入力</a></li>
                </ul>
            </div>
        </nav>
		<div class="row" style="background:skyblue;">
		<h2><p style="text-align:center"> レビュー詳細</p></h2>
		</div>
		<div class="container-fluid">
		<div class="col-auto">
		<div class="table-responsive">
			  
			  <table class="table table table-hover table-bordered text-nowrap">
			 <caption>review details</caption>
			 <thead>
			 <tr>
			   <th>学科</th>
			   <th>学期</th>
               <th>授業名</th>
			   <th>点数</th>
			 </tr>
	    </thead>
			 
			  <tbody>
              <tr>
		
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
				
				
				echo '<tr>';
				echo'<td>'.$Department.'</td>';
				echo'<td>'.$Semester.'</td>';
				echo'<td>'.$Lecture.'</td>';
				echo'<td>'.$Score.'</td>';
				
				echo'</tr>';
			}
		
     ?>
</tr>
</tbody>
​
</div>
</div>
</div>
</table>
<table class="table table table-hover text-nowrap">
<thead>
<tr>
<th style="text-align:center"><h3>レビュー</h3></th>
 </tr>
	    </thead>
<tr>
​
<?php
echo'<tr>';
echo'<td>'.$Review.'</td>';
echo'</tr>';
echo'<a class="btn btn-lg btn-danger" href="delete.php?id='.$review_id.'" role="button">削除</a>';
echo'<a class="btn btn-lg btn-success" href="edit.php?id='.$review_id.'" role="button">編集</a>';
?>
​
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
​
		
</body>
</html>