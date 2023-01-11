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
    $pro_title=$_POST['title'];
    $pro_description=$_POST['description'];
    $pro_file_name_old=$_POST['file_name_old'];
    $pro_file_name=$_POST['file_name'];
    
    $pro_id=htmlspecialchars($pro_id,ENT_QUOTES,'UTF-8');
    $pro_title=htmlspecialchars($pro_title,ENT_QUOTES,'UTF-8');
    $pro_description=htmlspecialchars($pro_description,ENT_QUOTES,'UTF-8');
    $dsn='mysql:dbname=shop;host=localhost;charset=utf8';
    $user='root';
    $descriptionword='';
    $dbh=new PDO($dsn,$user,$descriptionword);
    $dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $sql='UPDATE image SET title=?,description=?,file=? WHERE id=?';
    $stmt=$dbh->prepare($sql);
    $data[] = $pro_title;
    $data[] = $pro_description;
    $data[] = $pro_file_name;
    $data[] = $pro_id;
    $stmt->execute($data);
    $dbh=null;
    if($pro_file_name_old!=$pro_file_name_old){
    if($pro_file_name_old!=''){
        unlink('./file/'.$pro_file_name_old);
    }
}
    print '修正しました。<br/>';
    }
catch(Exception $e)
{
    print'ただいま障害により大変ご迷惑をお掛けしております。';
    exit();
}
    
    ?>

    <br/>
    <a href="pro_list.php">戻る</a>
</body>
</html>