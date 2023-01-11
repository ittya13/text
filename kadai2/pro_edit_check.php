<!DOCTYPE html>

<html lang="ja">
<head>
    <meta charset="UTF-8">
    <link href="./kadai2.css" rel="stylesheet">
    <title>ななまる農園</title>
</head>
<body>
    <?php
    $pro_id=$_POST['id'];
    $pro_title=$_POST['title'];
    $pro_description=$_POST['description'];
    $pro_file_name_old=$_POST['file_name_old'];
    $pro_file=$_FILES['file'];

    $pro_id=htmlspecialchars($pro_id,ENT_QUOTES,'UTF-8');
    $pro_title=htmlspecialchars($pro_title,ENT_QUOTES,'UTF-8');
    $pro_description=htmlspecialchars($pro_description,ENT_QUOTES,'UTF-8');
   

    if ($pro_title=='') 
    {
        print'タイトルが入力されていません。<br/>';
    }
    else
    {
        print'タイトル';
        print$pro_title;
        print'<br/>';
    }
    if($pro_description==''){
        print'パスワードが入力されていません。<br/>';
    }
    
    if($pro_file['size'] > 0){
        if($pro_file['size'] > 1000000){
        print'画像が大き過ぎます';
        }
        else{
            move_uploaded_file($pro_file['tmp_name'],'./image/'.$pro_file['name']);
            print'<img src="./image/'.$pro_file['name'].'">';
            print'<br/>';
        }
    }
    if($pro_title==''||$pro_description==''||$pro_file['size'] > 1000000){
        print'<form>';
        print'<input type="button" onclick="history.back()" value = "戻る">';
        print'<form>';
    }
    else{
        print '上記のように変更します。<br/>';
        print' <form method="post" action="pro_edit_done.php">';
        print'<input type="hidden" name="id" value="'.$pro_id.'">';
        print'<input type="hidden" name="title" value="'.$pro_title.'">';
        print'<input type="hidden" name="description" value="'.$pro_description.'">';

        print'<input type="hidden" name="file_name_old" value="'.$pro_file_name_old.'">';
        print'<input type="hidden" name="file_name"'.$pro_file['name'].'">';
        print'<br/>';
        print'<input type="button" onclick="history.back()" value="戻る">';
        print'<input type="submit" value="ＯＫ">';
        print'</form>';
    }
    ?>
</body>
</html>