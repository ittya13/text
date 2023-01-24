<!DOCTYPE html>
<html lang="ja">
<head>
<link href="./add.css" rel="stylesheet">
    <meta charset="UTF-8">
    <title>ろくまる農園</title>
</head>
<header>
    <h1> 画像追加</h1>
</header>
<body>
<table border="1">
   <tr>
    <form method="post" action="pro_add_cheak.php" enctype="multipart/form-data">
    <td>
        <div class="add">
        画像のタイトル<br/>
        </div>
        </td>
        <td>
            <div class="textbox">
        <textarea name="title" style="width:400px"></textarea><br/>
        </div>
        </td>
        </tr>
        <tr>
        <td>
        <div class="add">
        画像の説明<br/>
        </div>
        </td>

        <td>
        <div class="textbox">
        <textarea name="description" style="width:400px;height:200px"></textarea><br/>
        </div>
        </td>
        </tr>
        <tr>
        <td>
        <div class="add">
        画像ファイルの選択<br/>
        </div>
        </td>
        <td>
        <div class="textbox">
        <input type="file" name="file" style="width:400px"><br/>
        </div>
        </td>
</tr>
</table>
      <br/>
      <div class="button">
      <button type="button" onclick="history.back()">戻る</button>
      <button type="submit">ＯＫ</button>
      </div>
    </form>
</body>
</html>