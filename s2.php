<?php
session_start();
$date = $_SESSION["data"];
session_regenerate_id();
?>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    
    <title>セッション２</title>
</head>
<body>
<p>s2です。データは<?=$date ?></p>
<p><?=session_id() ?></p>
<a href="s1.php">s1へ</a>
</body>
</html>