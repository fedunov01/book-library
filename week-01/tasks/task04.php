<?php

$name = $_POST["name"] ?? "";

if ($name == "") {
?> 
    <form method="POST">
        <label for="name">名前を入力してください:</label>
        <input type="text" name="name" id="name">
        <button type="submit" value="送信">送信</button>
    </form>
<?php
} else {
    echo "こんにちは、" . htmlspecialchars($name) . "さん！";
}
?>