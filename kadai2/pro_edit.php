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
        
        $sql='SELECT id,title,description,file FROM image WHERE id=?';
        $stmt=$dbh->prepare($sql);
        $data[]=$pro_id;
        $stmt->execute($data);
        $rec=$stmt->fetch(PDO::FETCH_ASSOC);
        $pro_title=$rec['title'];
        $pro_description=$rec['description'];
        $pro_file_name_old=$rec['file'];
        $dbh=null;

        if($pro_file_name_old==''){
            $disp_file='';
        }
        else{
            $disp_file='<img src="./image/'.$pro_file_name_old.'">';
        }
    }
        catch(Exception $e)
        {
            print'ただいま障害により大変ご迷惑をお掛けしております。';
            exit();
        }
        ?>
        
        商品修正<br/>
        <br/>
        商品コード<br/>
        <?php print $pro_id;?>
        <br/>
        <br/>
        <form method="post" action="pro_edit_check.php"enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?php print $pro_id;?>">
            <input type="hidden" name="file_name_old" value="<?php print $pro_file_name_old; ?>">
            タイトル<br/>
            <input type="text" name="title" style="width: 200px" value="<?php print $pro_title; ?>"><br/>
            説明<br/>
            <input type="text" name="description" style="width:50px" value="<?php print$pro_description;?>">円<br/>
          
            <br/>
            <?php print $disp_file; ?>
            <br/>
            画像を選んでください。<br/>
            <input type="file"name="file"style="width:400px"><br/>
            <br/>
            <input type="button" onclick="history.back()" value="戻る">
            <input type="submit" value="ＯＫ">
        </form>
</body>
</html>