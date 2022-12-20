<!DOCTYPE html>
<html lang="ja">
<head>
<link rel="stylesheet" href="kadai.css">
    <meta charset="UTF-8">
    <meta http-equiv="Cache-Control" content="no-cache">
    <title>課題１</title>
</head>
<body>
<?php
    try{
        $kadai_code=$_GET['kadaicode'];
        $dsn='mysql:dbname=shop;host=localhost;charset=utf8';
        $user='root';
        $password='';
        $dbh=new PDO($dsn,$user,$password);
        $dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        $sql='SELECT code,name FROM kojin WHERE code=?';
        $stmt=$dbh->prepare($sql);
        $data[]=$kadai_code;
        $stmt->execute($data);
        $rec=$stmt->fetch(PDO::FETCH_ASSOC);
        $kadai_name=$rec['name'];
        $dbh=null;
    }
        catch(Exception $e)
        {
            print'ただいま障害により大変ご迷惑をお掛けしております。';
            print $e->getMessage();

            exit();
            
        }
        ?>
        
        削除<br/>
        <br/>
        ID<br/>
        <?php print $kadai_code;?>
        <br/>
            氏名<br/>
            <?php print $kadai_name; ?>
            </br>
            このIDを削除してよろしいですか？</br>
            </br>
            <form method="post" action="delete_done.php">
            <input type="hidden" name="code" value="<?php print $kadai_code;?>">
           
            <button type="button" onclick="history.back()" >戻る</button>
            <button type="submit">ＯＫ</button>
        </form>
</body>
</html>