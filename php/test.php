<?php
    date_default_timezone_set('Asia/Tokyo');
    $now_hour = (int)date("G");
    
    $name = "名無し";
    if ( array_key_exists('target_name', $_POST)) {
        $name = $_POST['target_name'];
    }
?>

<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>タイトル</title>
    </head>
    <body>
        <form action="index.php" method="POST">
            <label>名前: <input type="text" name="target_name" required> </label>
            <input type="submit" value="送信">
        </form>
    </body>
</html>