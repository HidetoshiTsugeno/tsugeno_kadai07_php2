<?php

//1. POSTデータ取得
$name = $_POST['name'];
$birthday = $_POST['birthday'];
$sex = $_POST['sex'];
$pmh = $_POST['pmh'];
$pfx = $_POST['pfx'];
$posteo = $_POST['posteo'];

//2. DB接続します
try {
    //ID:'root', Password: xamppは 空白 ''
    $pdo = new PDO('mysql:dbname=gs_db2;charset=utf8;host=localhost', 'root', '');
} catch (PDOException $e) {
    exit('DBConnectError:'.$e->getMessage());
}

//３．データ登録SQL作成

// 1. SQL文を用意
$stmt = $pdo->prepare("INSERT INTO gs_osteo(
                            id, name, birthday, sex, pmh, pfx, posteo
                        ) VALUES (
                            NULL, :name, :birthday, :sex, :pmh, :pfx, :posteo
                        )");

//  2. バインド変数を用意
$stmt->bindValue(':name', $name, PDO::PARAM_STR);
$stmt->bindValue(':birthday', $birthday, PDO::PARAM_STR);
$stmt->bindValue(':sex', $sex, PDO::PARAM_STR);
$stmt->bindValue(':pmh', $pmh, PDO::PARAM_STR);
$stmt->bindValue(':pfx', $pfx, PDO::PARAM_STR);
$stmt->bindValue(':posteo', $posteo, PDO::PARAM_STR);

//  3. 実行
$status = $stmt->execute();

//４．データ登録処理後
if($status === false) {
    //SQL実行時にエラーがある場合（エラーオブジェクト取得して表示）
    $error = $stmt->errorInfo();
    exit('ErrorMessage:'.$error[2]);
} else {
    //５．index.phpへリダイレクト
    header("Location: index.php");
}
?>
