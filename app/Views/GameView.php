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
<form method="post" action="../../Result.php">
    <h2>Game of Rock Paper Scissors</h2>
    <p>Choose your weapon</p>
    <input type="radio" id="rock" name="choice" value="Rock" required>
    <label for="rock"><span style='font-size:30px;'>&#9994;&#127996;</span></label><br>
    <input type="radio" id="paper" name="choice" value="Paper">
    <label for="paper"><span style='font-size:30px;'>&#9995;&#127996;</span></label><br>
    <input type="radio" id="scissors" name="choice" value="Scissors">
    <label for="scissors"><span style='font-size:30px;'>&#9996;&#127996;</span></label><br><br>
    <input type="submit" value="Submit"><br>
</form>
</div>
</body>
</html>
