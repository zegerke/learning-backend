<?php



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
    <label for="">Username : </label>
    <input name="name" type="text">
    <button>Submit</button>
    </form>
    <div>
    <?php echo "Welcome, ". $_POST["name"]; ?></div>
</body>
</html>