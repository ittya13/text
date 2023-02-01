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
$message = $_GET["mess"];
print $message;
?>
<br>
<br>
<a href="pro_list.php"><button type="button">戻る</button></a>
</div>
 </body>
 </html>