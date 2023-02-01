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
<table border="1">
        <tr>
            <td></td>
            <td>ID</td>
            <td>タイトル</td>
            <td>サムネイル</td>
        </tr>
      
    <?php
    try{
        $dsn='mysql:dbname=shop;host=localhost;charset=utf8';
        $user='root';
        $descriptionword='';
        $dbh=new PDO($dsn,$user,$descriptionword);
        $dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        $sql='SELECT id,title,description,file FROM image WHERE 1';
        $stmt=$dbh->prepare($sql);
        $stmt->execute();
        $dbh=null;

        print'<form method="post" action="pro_branch.php">';
        
        while(true)
        {
            $rec=$stmt->fetch(PDO::FETCH_ASSOC);
            if($rec==false)
            {
                break;
            }
            ?>
          <tr>
            <td><?php print'<input type="radio" name="proid" value="'.$rec['id'].'">';?></td>
            <td><?php   print$rec['id'].'<br />';?></td>
            <td><?php   print$rec['title'].'<br />';?></td>
            
            <td><?php   print'<img class="images"src="./image/'.$rec['file'].'">';?></td>
           </tr>

            <?php
           
        }
       
    }
    catch(Exception $e)
    {
        print'ただいま障害により大変ご迷惑お掛けしております。';
        print $e->getMessage();
        exit();
    }
    ?>
   
    </table>
    <?php
     print'<button type="submit" name="disp">参照</button>';
     print'<button type="submit" name="add">追加</button>';
     print'<button type="submit" name="delete">削除</button>';
     print'</form>';
    ?>
</body>
</html>
<!-- /*for文で配列取り出し
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
     */ -->
