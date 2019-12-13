<?php 
    error_reporting(-1);
    ini_set("display_errors","on");
    //make arrays
    $pictures= array(
        "https://www.pixelstalk.net/wp-content/uploads/2016/08/HD-PC-Wallpaper-2016.jpg",
        "https://wallpaperaccess.com/full/190815.jpg",
        "https://images7.alphacoders.com/528/528418.jpg",
        "https://wallpaperaccess.com/full/300068.jpg",
        "https://www.hdwallpaper.nu/wp-content/uploads/2016/02/golden-gate_wallpaper_030.jpg"
        );
    $strings= array(
        "Kirito",
        "Erza",
        "Akatsuki",
        "Shiro",
        "Leo",
        "Rundel-Haus-Code",
        "Ken Kaneki",
        "Glenn Radars",
        "Momonga-Sama",
    );    
    //select a random pic
    $pic = $pictures[array_rand($pictures)];
    
    //exercise 2 loop through array and list the content in a list

    //exercise 3
    //randomnumber function
    function randomNumber($max){
        return rand(0,$max);
    };
    //rando color picker
    function randomColor($char) {
        $r = randomNumber(255);
        $g = randomNumber(255);
        $b = randomNumber(255);
        return "<span style='color:rgb($r,$g,$b);'>$char</span>";
    };


    function colorizeName($name){
        $name = explode(" ",$name);
        if (!is_array($name)) {
            $name = [$name];
        }
        foreach ($name as &$word ) {
            $chars = preg_split('//', $word, -1, PREG_SPLIT_NO_EMPTY);
            for ($i=0; $i < count($chars)/2 ; $i++) { 
                $x= randomNumber(count($chars)-1);
                $chars[$x] =randomColor(strtoupper($chars[$x]));
            }
            $word =implode("",$chars);
        }
        return implode(" ",$name);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Javascript to PHP</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script>
        // Variable with random strings
        // ============================
        var strings = [
            "Kirito",
            "Erza",
            "Akatsuki",
            "Shiro",
            "Leo",
            "Rundel-Haus-Code",
            "Ken Kaneki",
            "Glenn Radars",
            "Momonga-Sama",
        ];
        var pictures = [
            "https://www.pixelstalk.net/wp-content/uploads/2016/08/HD-PC-Wallpaper-2016.jpg",
            "https://wallpaperaccess.com/full/190815.jpg",
            "https://images7.alphacoders.com/528/528418.jpg",
            "https://wallpaperaccess.com/full/300068.jpg",
            "https://www.hdwallpaper.nu/wp-content/uploads/2016/02/golden-gate_wallpaper_030.jpg"
        ];
    </script>

</head>
<body class="bg-light">
<header id="header" style="background-image:url('<?php echo $pic; ?>')">
    <div class="overlay"></div>
    <div class="overlay-content">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h1>Welcome to the Javascript - PHP exercise</h1>
                    <p>Read the code of this page, understand it, then convert it to the same functionality in PHP!</p>
                </div>
            </div>
        </div>
    </div>
</header>
<section id="exercises">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div id="loop-while" class="my-4 p-4 bg-white shadow-sm border">
                <ul>
                <?php while (count($strings) > 0):?>           
                    <?php
                     $index = array_rand($strings);
                     $item = $strings[$index];
                     unset($strings[$index]);
                     ?>
                    <li><?php echo $item; ?></li>
                    <?php endwhile;?>
                </ul>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div id="username-generator" class="my-4 p-4 bg-white shadow-sm border">
                <?php echo colorizeName("Zeger Kenis")?>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    // Executables
    // ===========
   // changeImage(document.getElementById("header"));
    //loopWhile(strings);
    //createUsername("Rafael Lambelin Selene Nijst");
    // ====================================================================
    // ========================== Functions ===============================
    // ====================================================================
    // Exercise 1: Changing attributes
    // ===============================
    // function changeImage(img) {
    //     img.style.backgroundImage = "url('"+pictures[getRandomNumber(5)]+"')";
    // }
    
    // Exercise 2: Loops and randoms
    // =============================
    // function loopWhile(arr) {
    //     let arr_tracker = arr.slice(0, arr.length-1);
    //     let list = document.createElement("ul");
    //     while(arr_tracker.length > 0) {
    //         let list_item = document.createElement("li");
    //         list_item.innerText = arr[getRandomNumber(arr.length-1)];
    //         list.appendChild(list_item);
    //         if(arr_tracker.includes(list_item.innerText)) {
    //             arr_tracker.splice(arr_tracker.indexOf(list_item.innerText), 1);
    //         }
    //     }
    //     let holder = document.getElementById("loop-while");
    //     holder.innerHTML = "<h2>Exercise 1: Loops and stuff</h2>";
    //     holder.appendChild(list);
    // }
    // Exercise 3: String manipulation - cookies and printing
    // ======================================================
    // function createUsername(name) {
    //     let collection;
    //     if (name.includes(" ")) {
    //         collection = name.split(" ");
    //     }
    //     else {
    //         collection = [name]
    //     }
    //     for (let i = 0; i < collection.length; i++) {
    //         collection[i] = collection[i].split("");
    //         for (let ii = 0; ii < collection[i].length/2; ii++) {
    //             let x = getRandomNumber(collection[i].length - 1) + 1;
    //             collection[i][x] = addRandomColorSpan(collection[i][x].toUpperCase());
    //         }
    //         collection[i] = collection[i].join("");
    //     }
    //     let holder = document.getElementById("username-generator"),
    //         p = document.createElement("p");
    //     p.innerHTML = collection.join(" - ");
    //     holder.appendChild(p);
    // }
    // // Utility functions
    // // =================
    // function getRandomNumber(max) {
    //     return Math.floor(Math.random() * max);
    // }

    // function addRandomColorSpan(char) {
    //     let r = getRandomNumber(255),
    //         g = getRandomNumber(255),
    //         b = getRandomNumber(255);
    //     return "<span style='color:rgb("+r+","+g+","+b+");'>" + char + "</span>";
    // }
</script>
</body>
</html>
