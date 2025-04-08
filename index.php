<?php
$name = "Izzan Itsna Rafif";
$biodata = "'Loves to ngoprak oprek motor, tapi gabisa balikin.'";
$skills = [
    "Ngedit" => "70%",
    "Yapping" => "100%",
    "Mabar" => "40%"
];
$funfact = "Funfact, Allah mewajibkan hambanya berpuasa selama bulan ramadhan. Barangsiapa yang mokel maka nanti akan ada mulut yang dirobek sama malekat";
$copyr = "--Kata-Kata Bijak Oecoep--";
$loremipsum = "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quasi adipisci sint dolor nesciunt soluta cupiditate facilis eaque minus ratione hic. Nobis aut tempora repellat laborum earum ea maxime illum eum.";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <nav class="navbar">
        <ul>
            <li><a href="https://instagram.com/rafizzn" target="_blank">Instagram</a></li>
            <li><a href="https://github.com/rafizzn" target="_blank">GitHub</a></li>
        </ul>
    </nav>

    <img src="./img/stravisco.png" alt="bg" class="bg">

    <div class="wrap1">
        <div class="container">
            <img src="./img/world.png" alt="world" class="world">
            <img class="pfp" src="./img/pfpgue.jpeg" alt="pfp">
            <div class="text">
                <h1 id="name"><?php echo $name; ?></h1>
                <p id="bio"><?php echo $biodata; ?></p>
            </div>
        </div>

        <h3 style="color: aliceblue;">Kemampuan Saya</h3>
        <div class="mySkill">
            <div class="kemampuan">
                <?php foreach ($skills as $skill => $level): ?>
                    <p><?php echo $skill; ?> - <?php echo $level; ?></p>
                    <div class="skill-bar">
                        <div class="skill-level" style="width: <?php echo $level; ?>;"></div>
                    </div>
                <?php endforeach; ?>
            </div>
            <img id="meng" src="./img/meng.jpg" alt="meng">
        </div>
    </div>

    <div class="wrap2">
        <img id="wiwad" src="./img/wiwad.jpg" alt="fotowiwad">
        <div>
            <p id="funfact"> <?php echo $funfact; ?> </p>
            <h1 id="copyreg"><?php echo $copyr; ?></h1>
        </div>
    </div>

    <div class="wrap3">
        <h1 style="color: white; text-decoration-line: underline;">Apa kata mereka?</h1>
        <p id="lorem"><?php echo $loremipsum; ?></p>

    </div>

</body>

</html>