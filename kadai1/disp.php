<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
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
        $sql='SELECT code,name FROM mst_kadai WHERE code=?';
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
            exit();
        }
        ?>
        
        一覧表示<br/>
        <br/>
        ID<br/>
        <?php print $kadai_code;?>
        <br/>
        <br/>
       <form>
            <input type="button" onclick="history.back()" value="戻る">
        </form>
</body>
</html>