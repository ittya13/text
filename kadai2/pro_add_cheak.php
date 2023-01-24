<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <link href="./chaek.css" rel="stylesheet">
    <title>ろくまる農園</title>
</head>
<header>
    <h1>画像の登録確認</h1>
</header>
<body>
    <?php
    $pro_title=$_POST['title'];
    $pro_description=$_POST['description'];
    $pro_file=$_FILES['file'];
    $pro_title=htmlspecialchars($pro_title,ENT_QUOTES,'UTF-8');
    $pro_description=htmlspecialchars($pro_description,ENT_QUOTES,'UTF-8');
   ?>
    <table border="1">
        <tr>
            <td>
                <?php
    if ($pro_title=='') 
    {
        print'タイトルが入力されていません。<br/>';
    }
    else
    {
        print'タイトル';
        ?>
        </td>
        <td>
            <?php
        print$pro_title;
    }
    ?>
    </td>
    </tr>
    <tr>
            <td>
                <?php
    if($pro_description==''){
        print'説明をきちんと入力してください。<br/>';
    }
    else{
        print'説明:';
        ?>
        </td>
        <td>
        <?php
        print$pro_description;
    }
    ?>
    </td>
    </tr>
    <tr>
    <td>
                <?php
    if($pro_file['size'] > 0){
        if($pro_file['size'] > 1000000){
        print'画像が大き過ぎます。<br/>';
        }
        else{
            print '画像';
            ?>
             </td>
            <td>
             <?php
            move_uploaded_file($pro_file['tmp_name'],'./image/'.$pro_file['name']);
            print'<img src="./image/'.$pro_file['name'].'">';
           ?>
       
        <?php
        }
    }
    ?>
    </table>
    <?php
    if($pro_title==''||$pro_description=='' ||$pro_file['size']>1000000){
        print'<form>';
        print'<input type="button" onclick="history.back()" value = "戻る">';
        print'<form>';
    }
    else{
        print'この画像を登録しますか<br/>';
        print' <form method="post" action="pro_add_done.php">';
        print'<input type="hidden" name="title" value="'.$pro_title.'">';
        print'<input type="hidden" name="description" value="'.$pro_description.'">';
        print'<input type="hidden" name="file_name" value="'.$pro_file['name'].'">';
        print'<br/>';
        print'<input type="button" onclick="history.back()" value="戻る">';
        print'<input type="submit" value="ＯＫ">';
        print'</form>';
    }
    ?>
</body>
</html>