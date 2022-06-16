<?php include"header.php"; ?>

<?php 

require "database.php";


    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $db = new database();
        $id = $_POST['id'];
        $continent = $_POST['continent'];
        $name = $_POST['name'];

        $sql = "INSERT INTO country(Code, Continent, Name) VALUES(:id, :continent, :name)";
        $placeholder = [
            'id'    => $id,
            'continent' => $continent,
            'name'  => $name
        ];

        $db->insert($sql, $placeholder);
        header("Location:overzicht-landen.php");
    }
?>



<div class="container-sm">
    <div class="card">
        <form action="" method="post">
            
        <div class="mb-3">
            <label for="landcode" class="form-label">LandCode</label>
            <input type="Text" class="form-control" name="id" required>
        </div>
        <div class="mb-3">
            <label for="continent" class="form-label">Continent</label>
            <input type="text" class="form-control" name="continent" required>
        </div>
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" name="name" required>
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-primary">Toevoegen</button>
        </div>
        </form>
    </div>
</div>

<?php include"footer.php"; ?>