<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>

<?php
$dbConn = new mysqli('localhost', 'unn_w18002348', 'akatsuki07', 'unn_w18002348');

if ($dbConn->connect_error) {
    echo "<p>Connection failed: ".$dbConn->connect_error."</p>\n";
    exit;
}
?>


</body>
</html>
