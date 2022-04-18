<?php
$dbConn = mysqli_connect("127.0.0.1","root","","phpstudy") or die("DB CONNECTION ERROR");

$value = $_GET['id'];

$sql = "SELECT * FROM article WHERE ${value}";
$rs = mysqli_query($dbConn,$sql);

$article =mysqli_fetch_assoc($rs);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>게시물 보기</title>
</head>
<body>
<h1>게시물 보기</h1>
<hr>
<div>
    <a href="list.php">리스트로 가기</a>
</div>
<div>
    번호 : <?=$article['id']?><br>
    작성 : <?=$article['regDate']?><br>
    수정 : <?=$article['updateDate']?><br>
    제목 : <?=$article['title']?><br>
    내용 : <?=$article['body']?><br>
</div>
</body>
</html>
