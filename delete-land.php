<?php include"header.php"; ?>

<?php 
include_once "database.php";
$db = new database();


if(isset($_GET['id'])){
    $id = $_GET['id'];
        $sql = "DELETE FROM country WHERE Code =:id;";
            $placeholder = [
                'id'=> $id
            ];

    $db->edit($sql, $placeholder, "overzicht-landen.php");
}


?>


<?php include"footer.php"; ?>
 