<!DOCTYPE html PUBLIC ">
<HTML lang="ja">
​
	<HEAD>
		<META http-equiv="Content-Type" content="text/html.charset=UTF-8"/>
		<TITLE>DATABESE SAMPLE</TITLE>
	</HEAD>
	
	<BODY>
		<form action="Ex_Accounts.html"method="post">
			<table border=0>
<?php
	$db = new PDO('mysql:host=localhost;dbname=lecture_review', 'root','',
		array(PDO::MYSQL_ATTR_INIT_COMMAND =>'SET NAMES utf8'));
	$stmt = $db->prepare('SELECT*FROM accounts');
	$stmt->execute();
/* データベース内容を1件ずつ処理*/
	while($row = $stmt->fetch()){
		$Department = htmlspecialchars($row['department'],ENT_QUOTES,'UTF-8');
		$Semester = htmlspecialchars($row['semester'],ENT_QUOTES,'UTF-8');
		$Lecture = htmlspecialchars($row['lecture'],ENT_QUOTES,'UTF-8');
		$Score = htmlspecialchars($row['score'],ENT_QUOTES,'UTF-8');
		$Review = htmlspecialchars($row['review'],ENT_QUOTES,'UTF-8');
		echo'<tr>';
		echo'<th>'.$Department.'</th>';
		echo'<th>'.$Semester.'</th>';
		echo'<th>'.$Lecture.'</th>';
		
		
		echo'<th>'.$Score.'</th>';
		echo'<th>'.$Review.'</th>';
		echo'</tr>';
	}
?>
</table>
<div><input type="submit" value="戻る" /></div>
</form>
</BODY>
</HTML>