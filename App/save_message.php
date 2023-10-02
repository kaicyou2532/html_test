<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $message = $_POST["message"];
    $timestamp = date("H:i");

    // チャットメッセージをテキストファイルに保存
    $data = "$timestamp - $username: $message\n";
    file_put_contents("chat_messages.txt", $data, FILE_APPEND);

    // リダイレクトして掲示板ページに戻る
    header("Location: board.html");
    exit();
} else {
    echo "POSTリクエストが必要です。";
}
?>
