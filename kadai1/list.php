<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <link type="text/css" href="kadai.css" rel="stylesheet">
    <title>課題１</title>
    <meta http-equiv="Cache-Control" content="no-cache">
</head>
<body>
    <?php
    try{
        $dsn='mysql:dbname=shop;host=localhost;charset=utf8';
        $user='root';
        $password='';
        $dbh=new PDO($dsn,$user,$password);
        $dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        $sql='SELECT code,name,pass FROM kojin WHERE 1';
        $stmt=$dbh->prepare($sql);
        $stmt->execute();
        $dbh=null;
        print'個人情報<br/><br/>';
        print'<form method="post" action="branch.php">';
        while(true)
        {
            $rec=$stmt->fetch(PDO::FETCH_ASSOC);
            if($rec==false)
            {
                break;
            }
           
            print'<input type="radio" name="kadaicode" value="'.$rec['code'].'">';
            print$rec['code'];
            print'<br/>';
            print$rec['name'];
            print'<br/>';
            print$rec['pass'];
            print'<br/>';
        }
        print'<button type="submit" name="disp">個別表示</button>';
        print'<button type="submit" name="edit"> データ修正</button>';
        print'<button type="submit" name="itiran">新規登録</button>';
        print'<button type="submit" name="delete"> 削除</button>';
        print'</form>';
    }
    catch(Exception $e)
    {
        print'ただいま障害により大変ご迷惑お掛けしております。';
        print $e->getMessage();

        exit();
        
    }
    ?>
</body>
</html>