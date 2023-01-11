<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <link href="./kadai2.css" rel="stylesheet">
    <title>ろくまる農園</title>
</head>
<header>
    <h1>画像一覧</h1>
</header>
<body>
    <?php
    try{
        $dsn='mysql:dbname=shop;host=localhost;charset=utf8';
        $user='root';
        $descriptionword='';
        $dbh=new PDO($dsn,$user,$descriptionword);
        $dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        $sql='SELECT id,title,description FROM image WHERE 1';
        $stmt=$dbh->prepare($sql);
        $stmt->execute();
        $dbh=null;
        print'商品一覧<br/><br/>';
        print'<form method="post" action="pro_branch.php">';
        while(true)
        {
            $rec=$stmt->fetch(PDO::FETCH_ASSOC);
            if($rec==false)
            {
                break;
            }
            print'<input type="radio" name="proid" value="'.$rec['id'].'">';
            print$rec['title'].'';
            print$rec['description'].'';
            print'<br/>';
        }
        print'<input type="submit" name="disp" value="参照">';
        print'<input type="submit" name="add" value="追加">';
        print'<input type="submit" name="edit" value="修正">';
        print'<input type="submit" name="delete" value="削除">';
        print'</form>';
    }
    catch(Exception $e)
    {
        print'ただいま障害により大変ご迷惑お掛けしております。';
        print $e->getMessage();
        exit();
    }
    ?>

    <table>
        <tr>
            <th>ID</th><th>タイトル</th><th>サムネイル</th>
        </tr>
        <tr>
            <th><?=$title?></th>
        </tr>
    </table>
    /*for文で配列取り出し */
</body>
</html>