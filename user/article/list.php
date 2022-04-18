<?php
$dbConn = mysqli_connect("127.0.0.1","root","","phpstudy") or die("DB CONNECTION ERROR");

$sql = "SELECT * FROM article";
$rs = mysqli_query($dbConn,$sql);

$articles = [];

while (true){
    $article =mysqli_fetch_assoc($rs);
    if($article == null){
        break;
    }

    $articles[] = $article;
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>게시물 리스트</title>
</head>
<body>
    <h1>게시물 리스트</h1>
    <hr>

    <div>
        <?php foreach ( $articles as $item) { ?>
            <?php
            $detailUri = "detail.php?id=${item['id']}";
            ?>
            <a href="<?=$detailUri?>">번호 : <?=$item['id']?></a><br>
            작성 : <?=$item['regDate']?><br>
            수정 : <?=$item['updateDate']?><br>
            제목 : <?=$item['title']?><br>
            내용 : <?=$item['body']?><br>
            <hr>
        <?php } ?>
    </div>
</body>
</html>
