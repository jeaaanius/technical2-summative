<!DOCTYPE html>
<html lang="en">
<head>
    <title>Shapes</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="technical.css">
    <link rel="icon" href="pics/shapes.png" type="image/gif">
    <style>
        @font-face {
            src:url(fonts/Simplifica-Typeface.ttf);
            font-family:simplifica;
        }
    </style>
</head>
<body>
<?php include 'MainMenu.php'; ?>
<div class="shapes">
<div class="title_shapes">
    <h1>VOLUME OF SHAPES</h1>
</div>
    <?php
        // Cube formula
        function cube($s) {
            return $s ** 3;
        }
        // Right rectangular prism formula
        function right_rectangular_prism($w, $h, $l) {
            return $w * $h * $l;
        }
        // Prism formula
        function prism($b,$h){
            return $b * $h;
        }
        // Cylinder formula
        function cylinder($r, $h) {
            return round(pi() * $r ** 2 * $h,2);
        }
        // Pyramid formula
        function pyramid($l,$w,$h){
            return round (($l * $w * $h) / 3,2);
        }
        // Cone formula
        function cone($r, $h) {
            return round (pi() * $r ** 2 * ($h / 3),2);
        }
        // Sphere formula
        function sphere($r) {
            return round ((4 / 3) * pi() * $r ** 3,2);
        }
    ?>
    <?php
        $s = 5;
        $w = 10;
        $l = 2;
        $h = 7;
        $r = 6;
        $b = 3;
    ?>
<div class="shape_table">
    <table>
        <tr>
            <th style='width:25%;'>Shape</th>
            <th style='width:25%;'>Values</th>
            <th style='width:25%;'>Formula</th>
            <th style='width:100%;'>Answer</th>
        </tr>
        <?php
            // Cube
            echo "<tr>";
            echo "<td>Cube</td>";
            echo "<td>s = $s</td>";
            echo "<td>V = s<sup>3</sup></td>";
            echo "<td>" . cube($s) . "</td>";
            echo "</tr>";
            // Right Rectangular Prism
            echo "<tr>";
            echo "<td>Right Rectangular Prism</td>";
            echo "<td>w = $w <br> h = $h <br> l = $l</td>";
            echo "<td>V = w * h * l</td>";
            echo "<td>" . right_rectangular_prism($w,$h,$l) . "</td>";
            echo "</tr>";
            // Prism
            echo "<tr>";
            echo "<td>Prism</td>";
            echo "<td>b = $b <br> h = $h </td>";
            echo "<td>V = b * h</td>";
            echo "<td>" . prism($b,$h) . "</td>";
            echo "</tr>";
            // Cylinder
            echo "<tr>";
            echo "<td>Cylinder</td>";
            echo "<td> π <br> r = $r <br> h = $h</td>";
            echo "<td>V = πr<sup>2</sup>h</td>";
            echo "<td>" . cylinder($r,$h) . "</td>";
            echo "</tr>";
            // Cone
            echo "<tr>";
            echo "<td>Cone</td>";
            echo "<td> π <br> r = $r <br> h = $h</td>";
            echo "<td>V = <sup>1</sup>&frasl;<sub>3</sub> (πr<sup>2</sup>h)</td>";
            echo "<td>" . cone($r,$h) . "</td>";
            echo "</tr>";
            // Sphere
            echo "<tr>";
            echo "<td>Sphere</td>";
            echo "<td>π <br> r = $r</td>";
            echo "<td>V = <sup>4</sup>&frasl;<sub>3</sub>(πr<sup>3</sup>)</td>";
            echo "<td>" . sphere($r) . "</td>";
            echo "</tr>";
            // Pyramid
            echo "<tr>";
            echo "<td>Pyramid</td>";
            echo "<td>l = $l <br> w = $w <br>h = $h <br> b = $b</td>";
            echo "<td>V =  l * w * h <hr style='width:80px;
                                                border-color:black;
                                                margin-left:50px'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3</td>";
            echo "<td>" . pyramid($l,$w,$h) . "</td>";
            echo "</tr>";
        ?>
    </table>
</div>
</div>
</body>
</html>