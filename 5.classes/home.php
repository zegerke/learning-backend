<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blackjack</title>
</head>
<body>
    <form action="" method="post">
        <h1>choose your move</h1>
        <select name="move" id="">
            <option value="Hit">Hit</option>
            <option value="Stand">Stand</option>
            <option value="Surrender">Surrender</option>
        </select>
        <button>Make Move</button>
    </form>
    <p>your score is :</p><?php echo $score ?>
</body>
</html>