<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <link href="./kadai2.css" rel="stylesheet">
    <title>ろくまる農園</title>
</head>
<header>
    <h1>画像一覧</h1>
</header>
<body>
    <?php
    try{
        $pro_title=$_POST['title'];
        $pro_file=$_FILES['file'];
        $pro_title=htmlspecialchars($pro_title,ENT_QUOTES,'UTF-8');
       

        $dsn='mysql:dbname=shop;host=localhost;charset=utf8';
        $user='root';
        $descriptionword='';
        $dbh=new PDO($dsn,$user,$descriptionword);
        $dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        $sql='SELECT id,title,description FROM image WHERE 1';
        $stmt=$dbh->prepare($sql);
        $stmt->execute();
        $dbh=null;

        $data[] = $pro_title;
        $data[] = $pro_file;
        print'商品一覧<br/><br/>';
        print'<form method="post" action="pro_branch.php">';
        while(true)
        {
            $rec=$stmt->fetch(PDO::FETCH_ASSOC);
            if($rec==false)
            {
                break;
            }
            $pro_id=$pro_id;
            $pro_title=$pro_title;
            $pro_file=$pro_file;
            print'<input type="radio" name="proid" value="'.$rec['id'].'">';
            print$rec['title'].'';
            print$rec['description'].'';
            print'<br/>';
        }
        print'<input type="submit" name="disp" value="参照">';
        print'<input type="submit" name="add" value="追加">';
        print'<input type="submit" name="edit" value="修正">';
        print'<input type="submit" name="delete" value="削除">';
        print'</form>';
    }
    catch(Exception $e)
    {
        print'ただいま障害により大変ご迷惑お掛けしております。';
        print $e->getMessage();
        exit();
    }
    ?>
    <table border="1">
        <tr>
            <td>ID</td>
            <td>タイトル</td>
            <td>サムネイル</td>
        </tr>
    <?php for($i=0;$i<count($pro_file);$i++)
    {
        ?>
        <tr>
            <td><?php   print$pro_id[$i];?></td>
            <td><?php   print$pro_title[$i];?></td>
            <td><?php   print$pro_file[$i];?></td>
        </tr>
        <?php
    }
    ?>
    </table>
</body>
</html>
<!-- /*for文で配列取り出し */ -->
