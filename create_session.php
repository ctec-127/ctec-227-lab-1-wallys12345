<!-- Authored in HTML Developer Kit -->
<!DOCTYPE html>
<html>
<head>
<title>create session</title>
<?php

session_start();

echo  "Create the session variables.";

echo "<br><br>";

if (!isset( $_SESSION["views"]))

{
    $_SESSION["views"] = "0";

}

$_SESSION["views"]++;

echo $_SESSION["views"];

echo "<br><br>";

if (!isset( $_SESSION["role"]))

{$_SESSION["role"] = "admin";}

echo $_SESSION["role"];

echo "<br><br>";

if (!isset( $_SESSION["browse"]))

{$_SESSION["browse"] = $_SERVER ['HTTP_USER_AGENT'];}

echo $_SESSION["browse"];

echo "<br><br>";


echo '<a href="create_session.php"> create session</a>';

echo "<br><br>";

echo '<a href="destroy_session.php"> destroy session</a>';

echo "<br><br>";

echo '<a href="destroy_all_session.php"> destroy all session</a>';

echo "<br><br>";

echo '<a href="read_session.php"> read session</a>';


?>
</head>
<body>

</body>
</html>