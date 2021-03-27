<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        <?php require_once 'app/css/style.css' ?>
    </style>
</head>
<body>
<div class="center">
    <?php if (!empty($choice)): ?>
        <b>Your Choice : <?= $choice ?></b><br>
        <b>Pc Choice : <?= $pcChoice ?></b><br>
        <b><?php if ($value == 'win'): ?>
            You win!
        <?php elseif ($value == 'lose'): ?>
            Pc win!
        <?php else: ?>
            Its a draw!
            </b>
        <?php endif ?>
    <?php endif; ?>
    <br>
    <form action="../../index.php" method="post">
        <button name="again" type="submit">Play Again?</button>
    </form>
</div>
</body>
</html>