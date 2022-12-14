<!DOCTYPE html>
<html lang="ja">
<head>
    <link rel="stylesheet" href="kadai.css">
    <meta charset="UTF-8">
    <title>課題１</title>
    <meta http-equiv="Cache-Control" content="no-cache">
</head>
<body>
    
    一覧<br/>
    <br/>

    <form method="post" action="add_cheak.php">
       
        氏名<br/>
        <input type="name" name="name" style="width:100px"><br/>
        ふりがな<br/>
        <input type="pass" name="pass" style="width:200px"><br/>

        郵便番号を入力してください<br/>
            <input type="number" name="pass2" style="width: 200px"><br/>
            住所を入力してください<br/>
            <input type="text" name="juusyo" style="width: 200px"><br/>
            電話番号を入力してください<br/>
            <input type="number" name="denwa" style="width: 200px"><br/>
            Eメールアドレスを入力してください<br/>
            <input type="email" name="mail" style="width: 200px"><br/>
            <br/>
      <button type="button" onclick="history.back()">戻る</button>
      <button type="submit">ＯＫ</button>
    </form>
</body>
</html>