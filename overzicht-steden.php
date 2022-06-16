<?php include "header.php"; ?>

<?php 
require_once "database.php";
$db = new database();

$cities = $db->select("SELECT * FROM city");

include "table_generator_overzicht/table_generator_overzicht_steden.php";

?>

<div class="container">
    <div class="card">
    <?php 
        create_table($cities, 'CountryCode');
    ?>
    </div>
</div>

<?php include "footer.php"; ?>