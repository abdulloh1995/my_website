<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <title>Xabar berish</title>
</head>
<body>
<?php require "blocks/header.php" ?>
<div class="container mt-5">
<form action="check.php" method="post">
    <input class="form-control" type="email" name="email" placeholder="Email kiriting"><br>
    <textarea class="form-control" name="message" placeholder="Xabaringizni kiriting"></textarea><br>
    <button class="btn btn-success" type="submit" name="send">Yuborish</button>
</form>
</div>


<?php require "blocks/footer.php" ?>
</body>
</html>