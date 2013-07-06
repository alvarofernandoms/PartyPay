<?php
session_start();
if (!session_is_registered(email)) {
    header("location: ../index.php");
}
function session_is_registered($x)
{
    if (isset($_SESSION['$x']))
    return true;
    else 
    return false;
}
?>

<html>
    <body>
        Login Successful
    </body>
</html>
