<!DOCTYPE html>
<html lang="ja">
<head>
<link href="./kadai2.css" rel="stylesheet">
    <meta charset="UTF-8">
    <title>ろくまる農園</title>
</head>
<body>
    <table></table>
    画像追加<br/>
    <br/>
    <form method="post" action="pro_add_cheak.php" enctype="multipart/form-data">
        タイトルを入力してください。<br/>
        <input type="text" name="title" style="width:200px"><br/>
        
        説明を入力してください。<br/>
        <input type="text" name="description" style="width:400px"><br/>
        画像を選んでください。<br/>
        <input type="file" name="file" style="width:400px"><br/>
      <br/>
      <button type="button" onclick="history.back()">戻る</button>
      <button type="submit">ＯＫ</button>
    </form>
</body>
</html>