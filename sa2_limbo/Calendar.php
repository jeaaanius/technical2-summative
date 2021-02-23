<!DOCTYPE html>
<html lang="en">
<head>
    <title>Calendar</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="technical.css">
    <link rel="icon" href="pics/calendar.png" type="image/gif">
    <style>
        @font-face {
            src:url(fonts/Aemstel-Regular.ttf);
            font-family:aem;
        }
    </style>
</head>
<body>
<div class="calendar">
<?php error_reporting(0); ?>
<?php include 'MainMenu.php'; ?>
<div class="title_calendar">
    <h1>CALENDAR</h1>
</div>
    <br><br><br>
<div class="selector">
    <form action="Calendar.php" method="POST">
        <select name="selectMonth" style="font-style:italic">
            <option selected="selected" style="font-style:italic">Select Month</option>
            <?php
            $months = array('January'=> 31, 'February'=> 28, 'March'=>31, 'April'=>30,
                'May'=>31, 'June'=>30,'July'=>31,'August'=>31,
                'September'=>30,'October'=>31,'November'=>30,'December'=>31);
            foreach($months as $m => $d){
                echo "<option value='$m'>$m</option>";
            }
            ?>
        </select>
        <input type='submit'
               name='submit'
               value='DISPLAY'
               style="font-family:'Poppins',sans-serif">
    </form>
</div>
<div class="cal_out">
    <?php
    if(isset($_POST['selectMonth'])){
        $selectMonth = $_POST['selectMonth'];
        calendar($selectMonth,$months[$selectMonth]);
    }
    ?>
    <?php
    function calendar($month,$day){
        $count = 1;
        $row = $day/7;
        $noRow = ceil($row);
        echo "<table>";
        echo "
					<tr>
						<th>Mon</th>
						<th>Tue</th>
						<th>Wed</th>
						<th>Thu</th>
						<th>Fri</th>
						<th>Sat</th>
						<th>Sun</th>
					</tr>";
        if ($month=='September'){
            for ($i = 0; $i < $noRow; $i++) {
                echo '<tr>';
                for ($y = 0; $y < 7; $y++) {
                    if ($count == $day+1){
                        break;
                    }
                    if($count==15){
                        echo "<td style='background-color:#cc6666'>";
                        echo $count;
                        echo '</td>';
                        $count+=1;
                    }
                    else {
                        echo '<td>';
                        echo $count;
                        echo '</td>';
                        $count+=1;
                    }
                }
                echo '</tr>';
            }
        }
        else{
            for ($i = 0; $i < $noRow; $i++) {
                echo '<tr>';
                for ($y = 0; $y < 7; $y++) {
                    if ($count == $day+1){
                        break;
                    } else {
                        echo '<td>';
                        echo $count;
                        echo '</td>';
                        $count+=1;
                    }
                }
                echo '</tr>';
            }
        }
        echo "</table>";
    } ?>
</div>
</div>
</body>
</html>