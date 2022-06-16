<?php include "header.php" ?>

<?php
require_once 'database.php';
$db = new database();

$landen = $db->select("SELECT * FROM country");

include "table_generator_overzicht/table_generator_overzicht_landen.php";


create_table($landen,'Code');
?>


<?php include "footer.php" ?>