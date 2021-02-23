<!DOCTYPE html>
<html lang="en">
<head>
    <title>Fruits</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="technical.css">
    <link rel="icon" href="pics/fruits.png" type="image/gif">
    <style>
        @font-face {
            src:url(fonts/Simplifica-Typeface.ttf);
            font-family:simplifica;
        }
    </style>
</head>
<body>
<?php include 'MainMenu.php'; ?>
<div class="fruits">
    <?php
    $fruits = array (
        array('<img src="pics/apple.png">','Apple','Fleshy red','Apples are fat, sodium, and cholesterol free.'),
        array('<img src="pics/banana.png">','Banana','Lengthy yellow','The banana is actually classified as a berry.'),
        array('<img src="pics/grapes.png">','Grapes','Small and rounded','Grapes are botanically classed as berries.'),
        array('<img src="pics/orange.png">','Orange','Round and orange','Oranges are the largest citrus 
            fruit in the world.'),
        array('<img src="pics/strawberry.png">','Strawberry','Red and sawtooth-edged','Strawberries are members 
            of the rose family. '),
        array('<img src="pics/pineapple.png">','Pineapple','Tough outer shell and edible yellow fruit inside','A pineapple 
            is not a pine or an apple.'),
        array('<img src="pics/lemon.png">','Lemon','Rounded and slightly elongated','Lemons contain very little fat 
            and protein.'),
        array('<img src="pics/mango.png">','Mango','Soft and bright yellow-orange','Mangoes are related to cashews and pistachios.'),
        array('<img src="pics/kiwi.png">','Kiwi','Furry brownish green skin','Kiwi fruits have high fiber content. '),
        array('<img src="pics/watermelon.png">', 'Watermelon', 'Smooth, light to dark green in color','Watermelons can help prevent cancer.')
    );
    sort($fruits);
    ?>
<div class="title_fruits">
    <h1>FRUITS</h1>
</div>
<div class="fruits_tab">
    <table>
        <tr>
            <th style='width:25%;'>Image</th>
            <th style='width:15%'>Name</th>
            <th style='width:25%'>Description</th>
            <th style='width:100%'>Facts</th>
        </tr>
        <?php
        for ($i = 0; $i < count($fruits); $i++) {
            echo "<tr>";
            for ($j = 0; $j < count($fruits[$i]); $j++) {
                echo "<td>" . $fruits[$i][$j] . "</td>";
            }
            echo "</tr>";
        }
        ?>
    </table>
</div>
</div>
</body>
</html>