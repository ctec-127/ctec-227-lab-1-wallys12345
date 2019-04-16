<!-- Authored in HTML Developer Kit -->
<!DOCTYPE html>
<html>
<head>

<title>destroy all session</title>
<?php


session_start();

echo "End the session";

session_destroy();

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