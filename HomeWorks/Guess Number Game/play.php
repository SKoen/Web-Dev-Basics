<!DOCTYPE html>
<html>

<head>
    <title>Choose Number Between 0 and 100</title>
</head>

<body>


<?php session_start();
if(!isset($_SESSION['fullname']))
$_SESSION['fullname'] = $_POST['fullname'];

?>

<?php// echo $_SESSION['secretNumber'];?>



<form action="play.php" name="checkNumber" method="POST">
    <table border="0" cellspacing="10">
        <?php
        if(isset($_POST['Number'])) {
            if (($_POST['Number'] <0||$_POST['Number']>100)) {
                echo "
                      <tr>
                        <td>You number is invalid must be between 0 and 100. </td>
                      </tr>
                      ";
            }
            else {
                if ($_POST['Number'] == $_SESSION['secretNumber']) {
                    echo "
                    <tr>
                        <td>Congratulations,  " . $_SESSION['fullname'] . " you Win the GAME!!!</td>
                    </tr>
                    <tr><td><a href='index.php'>Play Again</a></td></tr>";
                    session_unset();
                    die;
                }

                if ($_POST['Number'] > $_SESSION['secretNumber']) {
                    echo "
                      <tr>
                        <td>You number is greater than the secret number, </td>
                      </tr>
                      ";
                }

                if ($_POST['Number'] < $_SESSION['secretNumber']) {
                    echo "
                      <tr>
                        <td>You number is less than the secret number, </td>
                      </tr>
                      ";
                }
            }
        }
            include 'echoNumberTextAndSubmit.php';
            die;
        ?>



    </table>
</form>
</body>

</html>
