<?php
$md5 = "Not computed";
if (is_numeric($_GET['encode']) != true) {
    echo "Input must be numeric\n";
}
else if(strlen($_GET['encode'])!=4) {
    echo "Input must be exactly four digits\n";
}
else if((isset($_GET['encode'])) and (is_numeric($_GET['encode']))) {
    $md5 = hash('md5', $_GET['encode']);
}

?>
<!DOCTYPE html>
<head><title>Abhishek Mundada MD5</title></head>
<body>
<h1>MD5 PIN Maker</h1>
<p>MD5 value: <?= htmlentities($md5); ?></p>
<form>
<input type="text" name="encode" size="40" />
<input type="submit" value="Compute MD5 for PIN"/>
</form>
<p><a href="md5.php">Reset this page</a></p>
<p><a href="index.php">Back to Cracking</a></p>
</body>
</html>