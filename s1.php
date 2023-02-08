<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>ユーザ登録</title>
    </head>
    <body>
        <?php
        try {
            $dsn = "mysql:dbname=shop;host=localhost;charset=utf8";
            $dbh = new PDO($dsn, "root", "");
            $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $sql = "insert into mst_staff(name, password) values(?, ?)";
            $stmt = $dbh->prepare($sql);
            $data[] = "wt1a";
            $data[] = md5("wt1a");
            $stmt->execute($data);

            $dbh = null;

            print "ユーザ名：wt1a、パスワード：wt1a を追加しました。<br />";
        } catch(Exception $e) {
            print "<br>" .$e->getMessage();
            exit();
        }
        ?>
        
    </body>
</html>
