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
     $pro_id=$_POST['id'];
     $pro_file_name=$_POST['file_name'];
    $dsn='mysql:dbname=shop;host=localhost;charset=utf8';
    $user='root';
    $descriptionword='';
    $dbh=new PDO($dsn,$user,$descriptionword);
    $dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        $sql='DELETE FROM image WHERE id=?';
    $stmt=$dbh->prepare($sql);
    $data[] = $pro_id;
    $stmt->execute($data);
    $dbh=null;

    if($pro_file_name!=''){
        unlink('./image/'.$pro_file_name);
    }
}
catch(Exception $e)
{
    print'ただいま障害により大変ご迷惑をお掛けしております。';
    exit();
}
header("location:done.php?mess=削除が完了しました");

    ?>
    削除しました。<br>
    <br/>
    <a href="pro_list.php">戻る</a>
</body>
</html>