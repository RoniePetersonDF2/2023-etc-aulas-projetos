<?php
# https://www.php.net/manual/pt_BR/features.file-upload.php
# https://www.php.net/manual/pt_BR/reserved.variables.files.php

const UPLOAD_DIR = "img/";
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_FILES['file'])) {
        $tmp = $_FILES['file']['tmp_name'];
        $type = explode('.', $_FILES['file']['name'])[1];
        $filename = uniqid("", true) . '.'. $type;
        $filenamewithpath = UPLOAD_DIR . $filename;
        $success = move_uploaded_file($tmp, $filenamewithpath);
        if ($success) {
            $image = UPLOAD_DIR. $filename;
        }
    }
}

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="file" accept="image/png, image/jpeg" required autofocus>
        <button type="submit">Enviar</button>
    </form>
    <?php if (isset($image)) : ?>
        <img src="<?= $image ?>" alt="imagem de teste" width="50px">
    <?php endif ?>
    <hr>

</body>

</html>
