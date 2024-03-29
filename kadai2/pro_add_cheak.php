<?php

?>

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
    $pro_title = $_POST['title'];
    $pro_description = $_POST['description'];
    $pro_file = $_FILES['file'];
    $pro_title = htmlspecialchars($pro_title, ENT_QUOTES, 'UTF-8');
    $pro_description = htmlspecialchars($pro_description, ENT_QUOTES, 'UTF-8');
    $err = [];
    ?>
    <table border="1">
        <tr>
            <td class="yoko1">
                <?php
                if ($pro_title == '') {
                    $err[] = 'タイトルが入力されていません。<br/>';
                } else {
                    print 'タイトル';
                ?>
            </td>
            <td>
            <?php
                    print $pro_title;
                }
            ?>
            </td>
        </tr>
        <tr>

            <td class="yoko1">
                <?php
                if ($pro_description == '') {
                    $err[] = '説明をきちんと入力してください。<br/>';
                } else {
                    print '説明';
                ?>
            </td>
            <td>
            <?php
                    print $pro_description;
                }
            ?>
            </td>
        </tr>
        <?php
        if ($pro_file['size'] > 0) {
        ?>
            <tr>
                <td class="yoko1">
                    <?php
                    if ($pro_file['size'] > 1000000) {
                        $err[] = '画像が大き過ぎます。<br/>';
                    } else {
                        print '画像';
                    ?>
                </td>

                <td class="imgdayo">
                    <?php
                        move_uploaded_file($pro_file['tmp_name'], './image/' . $pro_file['name']);
                        print '<img src="./image/' . $pro_file['name'] . '">';
                    ?>
                </td>
            </tr>
    <?php
                    }
                }
    ?>
    </table>
    <?php
    if ($pro_title == '' || $pro_description == '' || $pro_file['size'] > 1000000) {
        print '<form>';
        print '<button type="button" onclick="history.back()">戻る</button>';
        print '<form>';
    } else {
        print 'この画像を登録しますか<br/>';
        print ' <form method="post" action="pro_add_done.php">';
        print '<input type="hidden" name="title" value="' . $pro_title . '">';
        print '<input type="hidden" name="description" value="' . $pro_description . '">';
        print '<input type="hidden" name="file_name" value="' . $pro_file['name'] . '">';
        print '<br/>';
        print '<button type="button" onclick="history.back()">戻る</button>';
        print '<button type="submit">ＯＫ</button>';
        print '</form>';
    }

    if (count($err) > 0) {
        $errMessage = implode("<>", $err);
        header(
            "location:err.php?error={$errMessage}"
        );
    }
   
    ?>
</body>

</html>