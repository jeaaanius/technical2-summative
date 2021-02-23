<!DOCTYPE html>
<html lang="en">
<link rel="icon" href="pics/resume.png" type="image/gif">
<link rel="stylesheet" type="text/css" href="technical.css">
<head>
    <title>Resume</title>
</head>
<body>
<?php include 'MainMenu.php'; ?>
<div class="resume">
<div class="pic">
    <img src="pics/jeanius.jpg" alt="profile picture">
<div class="banner">
    <div class="app-text">
        <?php echo "<h1>Jean Limbo</h1>"; ?>
        <hr style="border-color:black;
                   margin-left:-100px;
                   margin-top:15px">
        <br>
        <?php include 'Career Objectives.php'; ?>
    </div>
</div>
<div class="container">
    <div class="item-left">
        <div class="education-text">
            <?php include 'Education.php'; ?>
            <?php include 'Affiliation.php'; ?>
        </div>
    </div>
    <div class="item-right">
        <div class="skill-text">
            <?php include 'Skills.php'; ?>
            <?php include 'Work Experience.php'; ?>
        </div>
    </div>
</div>
</div>
</div>
</body>
</html>