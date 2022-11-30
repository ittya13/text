<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>課題１</title>
    <meta http-equiv="Cache-Control" content="no-cache">
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
        
        データ修正<br/>
        <br/>
        ID<br/>
        <?php print $kadai_code;?>
        <br/>
        <br/>
        <form method="post" action="edit_check.php">
        <input type="hidden" name="code" value="<?php print $kadai_code;?>">
            氏名を入力してください<br/>
            <input type="text" name="name" style="width: 100px" value="<?php print $kadai_name; ?>"><br/>
           
            ふりがなを入力してください<br/>
            <input type="text" name="pass" style="width:100px"><br/>
            郵便番号を入力してください<br/>
            <input type="text" name="pass2" style="width: 200px"><br/>
            住所を入力してください<br/>
            <input type="text" name="juusyo" style="width: 200px"><br/>
            電話番号を入力してください<br/>
            <input type="text" name="denwa" style="width: 200px"><br/>
            Eメールアドレスを入力してください<br/>
            <input type="text" name="mail" style="width: 200px"><br/>
            <br/>
            <input type="button" onclick="history.back()" value="戻る">
            <input type="submit" value="ＯＫ">
        </form>
</body>
</html>