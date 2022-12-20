<!DOCTYPE html>

<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>ななまる農園</title>
</head>
<body>
    <?php
    $pro_code=$_POST['code'];
    $pro_name=$_POST['name'];
    $pro_price=$_POST['price'];
    $pro_price2=$_POST['price2'];

    $pro_code=htmlspecialchars($pro_code,ENT_QUOTES,'UTF-8');
    $pro_name=htmlspecialchars($pro_name,ENT_QUOTES,'UTF-8');
    $pro_price=htmlspecialchars($pro_price,ENT_QUOTES,'UTF-8');
   

    if ($pro_name=='') 
    {
        print'商品名が入力されていません。<br/>';
    }
    else
    {
        print'商品名';
        print$pro_name;
        print'<br/>';
    }
    if($pro_price==''){
        print'パスワードが入力されていません。<br/>';
    }
    if($pro_price!=$pro_price2){
        print'パスワードが一致しません。<br/>';
    }
    if($pro_name==''||$pro_price=''||$pro_price!=$pro_price2){
        print'<form>';
        print'<input type="button" onclick="history.back()" value = "戻る">';
        print'<form>';
    }
    else{
        $pro_price=md5( $pro_price) ;
        print '上記のように変更します。<br/>';
        print' <form method="post" action="pro_edit_done.php">';
        print'<input type="hidden" name="code" value="'.$pro_code.'">';
        print'<input type="hidden" name="name" value="'.$pro_name.'">';
        print'<input type="hidden" name="price" value="'.$pro_price.'">';
        print'<br/>';
        print'<input type="button" onclick="history.back()" value="戻る">';
        print'<input type="submit" value="ＯＫ">';
        print'</form>';
    }
    ?>
</body>
</html>
