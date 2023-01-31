<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    
    <title>ろくまる農園</title>
</head>
<body>
<?php
if (isset($_GET["error"])) {
    $err=explode("<>", $_GET["error"]);
    foreach($err as $message) {
        print "{$message}<br>";
       
    }
    
}


?>
<br>
 <a href="pro_add.php">戻る</a>
 </body>
 </html>
    