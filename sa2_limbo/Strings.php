<!DOCTYPE html>
<html lang="en">
<head>
    <title>Strings</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="technical.css">
    <link rel="icon" href="pics/string.png" type="image/gif">
    <style>
        @font-face {
            src:url(fonts/Simplifica-Typeface.ttf);
            font-family:simplifica;
        }
        input[type=text]{
            border-radius:5px;
            border-color:#fff;
            width:500px;
            height:40px;
            background-color:#111;
            color:#fff;
            font-size:20px;
            font-weight:300;
            text-align:center;
        }
        input[type=submit],input[type=reset]{
            border-radius:50px;
            border:0;
            width:200px;
            height:48px;
            font-size:20px;
            font-weight:700;
            background-color:#F4A950;
            font-family:Poppins,sans-serif;
            color:#161B21;
            text-align:center;
            cursor:pointer;
        }
        input[type=text]{
            margin-top:30px;
            margin-left:310px;
        }
        input[type=submit]{
            margin-top:50px;
            margin-left:340px;
        }
        input[type=reset]{
            margin-top:-200px;
            margin-left:40px;
        }
        .string_select input[type=submit]:hover{
            box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),
            0 17px 50px 0 rgba(0,0,0,0.30);
        }
        .string_select input[type=reset]:hover{
            box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),
            0 17px 50px 0 rgba(0,0,0,0.30);
        }

    </style>
</head>
<body>
<?php include 'MainMenu.php' ?>
<div class="string">
<div class="title_string">
    <h1>STRING FUNCTIONS </h1>
    <h1>in PHP </h1>
</div>
<div class="string_select">
    <?php
    $string = isset($_POST['string']) ? $_POST['string'] : '';
    echo '<form method=post action="Strings.php">';
    echo '<input type="text" 
                 placeholder="Enter text" 
                 name="string" 
                 size="100" 
                 style="font-style:italic; 
                        font-family: Poppins,sans-serif">';
    echo '<input type="submit" value="APPLY FUNCTIONS">&nbsp;';
    echo '<input type="reset" value="RESET">';
    echo '</form>';
    ?>
</div>
    <br><br><br>
<div class='string_table'>
    <table>
        <tr>
            <th style="width:5%">No.</th>
            <th style="width:50%">Description</th>
            <th  style="width:50%">Output</th>
        </tr>
        <tr>
            <td>1</td>
            <td>Original value of $string</td>
            <td><?php echo '*'.htmlspecialchars($string) .'*'; ?></td>
        </tr>
        <tr>
            <td>2</td>
            <td>Number of characters</td>
            <td><?php echo "*".htmlspecialchars(strlen($string))."*"; ?></td>
        </tr>
        <tr>
            <td>3</td>
            <td>Number of words</td>
            <td><?php echo "*".htmlspecialchars(str_word_count($string))."*"; ?></td>
        </tr>
        <tr> <!--check-->
            <td>4</td>
            <td>First character to uppercase</td>
            <td><?php echo "*".htmlspecialchars(ucfirst($string))."*"; ?></td>
        </tr>
        <tr>
            <td>5</td>
            <td>First character of each word to uppercase</td>
            <td><?php echo "*".htmlspecialchars(ucwords($string))."*"; ?></td>
        </tr>
        <tr>
            <td>6</td>
            <td>To lowercase</td>
            <td><?php echo "*".htmlspecialchars(strtolower($string))."*"; ?></td>
        </tr>
        <tr>
            <td>7</td>
            <td>To uppercase</td>
            <td><?php echo "*".htmlspecialchars(strtoupper($string))."*"; ?></td>
        </tr>
        <tr>
            <td>8</td>
            <td>Without leading spaces</td>
            <td><?php echo "*".htmlspecialchars(ltrim($string))."*"; ?></td>
        </tr>
        <tr>
            <td>9</td>
            <td>Without trailing spaces</td>
            <td><?php echo "*".htmlspecialchars(rtrim($string))."*"; ?></td>
        </tr>
        <tr>
            <td>10</td>
            <td>Without leading and trailing spaces</td>
            <td><?php echo "*".htmlspecialchars(trim($string))."*"; ?></td>
        </tr>
        <tr>
            <td>11</td>
            <td>MD5 value of $string</td>
            <td><?php echo "*".htmlspecialchars(md5($string))."*"; ?></td>
        </tr>
        <tr>
            <td>12</td>
            <td>Base64 value of $string</td>
            <td><?php echo "*".htmlspecialchars(base64_encode($string))."*"; ?></td>
        </tr>
        <tr>
            <td>13</td>
            <td>First 16 characters</td>
            <td><?php echo "*".htmlspecialchars(substr($string, 0, 16))."*"; ?></td>
        </tr>
        <tr>
            <td>14</td>
            <td>Last 4 characters</td>
            <td><?php echo "*".htmlspecialchars(substr($string, -4))."*"; ?></td>
        </tr>
        <tr>
            <td>15</td>
            <td>4 characters starting from the 20th Position</td>
            <td><?php echo "*".htmlspecialchars(substr($string, 20,4))."*"; ?></td>
        </tr>
        <tr>
            <td>16</td>
            <td>Position of the word "guide"</td>
            <td><?php echo "*";
                echo htmlspecialchars(var_dump((int) strpos($string, 'guide')));
                echo "*";
                ?>
            </td>
        </tr>
        <tr>
            <td>17</td>
            <td>Position of the word "UE"</td>
            <td><?php echo "*";
                strpos($string, 'UE') ? htmlspecialchars(var_dump((bool) 1)) : htmlspecialchars(var_dump((bool) ""));
                echo "*";
                ?>
            </td>
        </tr>
        <tr>
            <td>18</td>
            <td>"HTML" word in uppercase</td>
            <td><?php echo "*";
                $x = str_replace("html","HTML",$string);
                echo htmlspecialchars($x);
                echo "*";
                ?>
            </td>
        </tr>
        <tr>
            <td>19</td>
            <td>"< INPUT >"word in uppercase</td>
            <td><?php echo "*";
                $x = str_replace("input","INPUT",$string);
                echo htmlspecialchars($x);
                echo "*";
                ?>
            </td>
        </tr>
        <tr>
            <td>20</td>
            <td>String converted to array</td>
            <td><?php
                $arr = explode(' ', $string);
                $new_str = '';
                foreach ($arr as $value) {
                    echo "*".htmlspecialchars($value)."*"."<br>";
                }
                ?>
            </td>
        </tr>
    </table>
</div>
</div>
</body>
</html>