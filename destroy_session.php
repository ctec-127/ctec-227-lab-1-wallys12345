<!-- Authored in HTML Developer Kit -->
<!DOCTYPE html>
<html>
<head>

<title>destroy session</title>
<?php


echo "Unset the session variables.";

echo "<br><br>";

session_start();

session_unset();

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