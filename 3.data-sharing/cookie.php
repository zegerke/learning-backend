<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>COOKIE</title>
</head>
<body>
    <textarea id="x" cols="30" rows="10" required></textarea>
    <button id="make">make a cookie</button>
    <br>
    <?php echo  htmlspecialchars($_COOKIE["thisjoke"])    ?>
</body>
<script>
document.getElementById("make").addEventListener("click", makeCookie);
function makeCookie() {
    document.cookie = "thisjoke = " + document.getElementById("x").value;
    console.log(document.cookie);
    
}

</script>
</html>