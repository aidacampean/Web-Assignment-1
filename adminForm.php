<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Chollerton Tearooms</title>
    <link rel="stylesheet" href="website.css">
    <link href="https://fonts.googleapis.com/css?family=Exo" rel="stylesheet">
</head>
<body>
<header>
    <div class="title">
        <!--TITLE OF THE PAGE-->
        <h1>Admin</h1>
        <!--FONT USED FOR THE TITLE-->
        <link href="https://fonts.googleapis.com/css?family=Playfair+Display" rel="stylesheet">
    </div>
    <nav>
        <!--NAVIGATION BAR-->
        <ul>
            <li><a href="index.html">HOME</a></li>
            <li><a href="findOutMore.html">FIND OUT MORE</a></li>
            <li><a href="adminForm.php">ADMIN</a></li>
            <li><a href="credits.html">CREDITS</a></li>
            <li><a href="wireframe.pdf">WIREFRAME</a></li>
        </ul>
    </nav>
</header>

<?php
include 'database_conn.php';      // make db connection

$sql = "SELECT expressInterestID, forename, surname, postalAddress, landLineTelNo, mobileTelNo, email, sendMethod, CT_expressedInterest.catID, catDesc
        FROM CT_expressedInterest
        INNER JOIN CT_category
        ON CT_category.catID = CT_expressedInterest.catID
        ORDER BY surname";

$queryResult = $dbConn->query($sql);
// Check for and handle query failure
if ($queryResult === false) {
    echo "<p>Query failed: " . $dbConn->error . "</p>\n</body>\n</html>";
    exit;
} // Otherwise fetch all the rows returned by the query one by one

else {
    while ($rowObj = $queryResult->fetch_object()) {
        echo "<div class='Expressed Interest'>
                <span class='forename'>{$rowObj->forename}</span>
                <span class='surname'>{$rowObj->surname}</span>
                <span class='postalAddress'>{$rowObj->postalAddress}</span>
                <span class='landLineTelNo'>{$rowObj->landLineNumber}</span>
                <span class='mobileTelNo'>{$rowObj->mobileNumber}</span>  
                <span class='email'>{$rowObj->email}</span>
                <span class='sendMethod'>{$rowObj->sendMethod}</span>
                <span class='catDesc'>{$rowObj->catDesc}</span>
              </div>\n";
    }
}
$queryResult->close();
$dbConn->close();
?>
</body>
<!--FOOTER INFO-->
<footer>
    <section class="section section-dark">
        <h2>Contact</h2>
        <p>The Collherton Tearooms Company, Copyright &copy; </p>
        <p>Northumberland, Newcastle upon Tyne, Pilgrim Street, NE78HL</p>
        <p>E-mail : collhertontea@colinc.com</p>
        <p>Phone : 01956660934</p>
    </section>
</footer>
</html>
<!--END-->
</html>