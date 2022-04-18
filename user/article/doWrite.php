<?php
$dbConn = mysqli_connect("127.0.0.1","root","","phpstudy") or die("DB CONNECTION ERROR");

if(isset($_POST['title']) == false){
    echo "제목을 입력해주세요";
    exit;
}

if(isset($_POST['body']) == false){
    echo "내용을 입력해주세요";
    exit;
}

$title = $_POST['title'];
$body = $_POST['body'];

$sql = "INSERT INTO article 
SET regDate = now(),
updateDate = now(),
title = ${title},
`body` = ${body}";

mysqli_query($dbConn,$sql);

$id = mysqli_insert_id($dbConn);

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>게시물 생성</title>
</head>
<body>
<h1>게시물 생성</h1>
<div>
    <span><a href="detail.php?id=<?=$id?>"><?=$id?>번 게시글이 생성되었습니다.</a></span>
</div>
</body>
</html>


