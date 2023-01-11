<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <link href="./kadai2.css" rel="stylesheet">
    <title>ろくまる農園</title>
</head>
<body>
<?php
    try{
        $pro_id=$_GET['proid'];
        $dsn='mysql:dbname=shop;host=localhost;charset=utf8';
        $user='root';
        $descriptionword='';
        $dbh=new PDO($dsn,$user,$descriptionword);
        $dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        $sql='SELECT title,file FROM image WHERE id=?';
        $stmt=$dbh->prepare($sql);
        $data[]=$pro_id;
        $stmt->execute($data);
        $rec=$stmt->fetch(PDO::FETCH_ASSOC);
        $pro_title=$rec['title'];
        $pro_file_name=$rec['file'];
        $dbh=null;
        if($pro_file_name=='')
        {
            $disp_file='';
        }else{
            $disp_file='<img src="./image/'.$pro_file_name.'">';
        }
    }
        catch(Exception $e)
        {
            print'ただいま障害により大変ご迷惑をお掛けしております。';
            exit();
        }
        ?>
        
        商品削除<br/>
        <br/>
        商品コード<br/>
        <?php print $pro_id;?>
        <br/>
            タイトル<br/>
            <?php print $pro_title; ?>
            </br>
            <?php print $disp_file; ?>
            </br>
            この商品を削除してよろしいですか？</br>
            </br>
            <form method="post" action="pro_delete_done.php">
            <input type="hidden" name="id" value="<?php print $pro_id;?>">
            <input type="hidden" name="file_name" value="<?php print $pro_file_name;?>">
            <input type="button" onclick="history.back()" value="戻る">
            <input type="submit" value="ＯＫ">
        </form>
</body>
</html>