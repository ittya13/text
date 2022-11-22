<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>課題１</title>
</head>
<body>
    <?php
    try{
        $dsn='mysql:dbname=shop;host=localhost;charset=utf8';
        $user='root';
        $password='';
        $dbh=new PDO($dsn,$user,$password);
        $dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        $sql='SELECT code,name FROM mst_kadai WHERE 1';
        $stmt=$dbh->prepare($sql);
        $stmt->execute();
        $dbh=null;
        print'スタッフ一覧<br/><br/>';
        print'<form method="post" action="branch.php">';
        while(true)
        {
            $rec=$stmt->fetch(PDO::FETCH_ASSOC);
            if($rec==false)
            {
                break;
            }
            print'<input type="radio" name="kadaicode" value="'.$rec['code'].'">';
            print$rec['name'];
            print'<br/>';
        }
        print'<input type="submit" name="disp" value="個別表示">';
        print'<input type="submit" name="add" value="新規登録">';
        print'<input type="submit" name="edit" value="データ修正">';
        print'<input type="submit" name="delete" value="削除">';
        print'</form>';
    }
    catch(Exception $e)
    {
        print'ただいま障害により大変ご迷惑お掛けしております。';
        exit();
    }
    ?>
</body>
</html>