<!-- Authored in HTML Developer Kit -->
<!DOCTYPE html>
<html>
<head>
<title>read session</title>
<?php

session_start();

echo "Read the session variables";

echo '<br><br>';

echo $_SESSION["views"];

echo "<br><br>";

echo $_SESSION["role"];

echo "<br><br>";

echo $_SESSION["browse"];

echo "<br><br>";

//single qoutes for the html statement
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