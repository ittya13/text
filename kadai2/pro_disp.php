<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <link href="./disp.css" rel="stylesheet">
    <title>ろくまる農園</title>
</head>
<header>
    <h1>画像の表示</h1>
</header>
<body>
    <div class="gazo">
<?php
    try{
        $pro_id=$_GET['proid'];
        $dsn='mysql:dbname=shop;host=localhost;charset=utf8';
        $user='root';
        $descriptionword='';
        $dbh=new PDO($dsn,$user,$descriptionword);
        $dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        $sql='SELECT title,description,file FROM image WHERE id=?';
        $stmt=$dbh->prepare($sql);
        $data[]=$pro_id;
        $stmt->execute($data);

        $rec=$stmt->fetch(PDO::FETCH_ASSOC);
        $pro_title=$rec['title'];
        $pro_description=$rec['description'];
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
        
        
        <br/>
        【タイトル】
        <?php print $pro_title;?>
        <br/>
        【説明】<br/>
        <div class="zisage">
        <?php print $pro_description;?>
        </div>
        <br/>
        <?php print $disp_file;?>
        <br/>
        <br/>
       <form>
       <button type="button" onclick="history.back()">戻る</button>
        </form>
        </div>
</body>
</html>