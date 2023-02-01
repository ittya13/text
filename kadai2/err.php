<!DOCTYPE html>
<html lang="ja">
<head>
<link href="./err.css" rel="stylesheet">
    <meta charset="UTF-8">
    
    <title>ろくまる農園</title>
</head>
<body>
    <div class="err">
<?php
if (isset($_GET["error"])) {
    $err=explode("<>", $_GET["error"]);
    foreach($err as $message) {
        print "{$message}<br>";
       
    }
    
}


?>
<br>
 <a href="pro_add.php"><button>戻る</button> </a>
 </div>
 </body>
 </html>
    