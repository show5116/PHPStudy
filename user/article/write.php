<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>게시물 작성</title>
</head>
<body>
<h1>게시물 작성</h1>
<form action="doWrite.php" method="post">
    <div>
        <label>제목</label>
        <input required type="text" name="title" placeholder="제목">
    </div>
    <div>
        <label>내용</label>
        <textarea required type="text" name="body" placeholder="내용"></textarea>
    </div>
    <div>
        <input type="submit" value="글작성">
    </div>
</form>
</div>
</body>
</html>
