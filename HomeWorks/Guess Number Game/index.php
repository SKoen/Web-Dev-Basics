<!DOCTYPE html>
<html>

<head>
    <title>Write Player Name</title>
</head>

<body>
<p>Write Player Name:</p>
<form action="play.php" name="startGame" method="POST">
    <table border="0" cellspacing="10">
        <tr>
            <td>Player Name: </td>
            <td><input name="fullname" type="text" size="20" maxlength="80"></td>

        </tr>
        <tr>
            <td>&nbsp;</td>
            <td><input type="submit" name="submit" value="Start Game"></td>
        </tr>
    </table>
</form>


<?php session_start();
$_SESSION['secretNumber'] = rand(1,100);
?>

</body>
</html>
