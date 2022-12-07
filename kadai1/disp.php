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
        $sql='SELECT code,name,pass FROM kojin WHERE code=?';
        $stmt=$dbh->prepare($sql);
        $data[]=$kadai_code;
        $stmt->execute($data);
        $rec=$stmt->fetch(PDO::FETCH_ASSOC);
        $kadai_name=$rec['name'];
        $kadai_pass=$rec['pass'];
        $dbh=null;
    }
        catch(Exception $e)
        {
            print'ただいま障害により大変ご迷惑をお掛けしております。';
            exit();
            print $e->getMessage();

        }
        ?>
        
        一覧表示<br/>
        <br/>
        ID<br/>
        <?php print $kadai_code;?>
        <br/>
        氏名<br/>
        <?php print $kadai_name;?>
        <br/>
        ふりがな<br/>
        <?php print $kadai_pass;?>
        <br/>
        <br/>
        <br/>
       <form>
            <input type="button" onclick="history.back()" value="戻る">
        </form>
</body>
</html>