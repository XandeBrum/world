<?php include"header.php"; ?>

<?php 

include_once "database.php";
$db = new database();



    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        // values van name atribute in de form
        $population = $_POST['pop'];
        $headofstate = $_POST['headofstate'];
        $id = $_POST['id'];
    
        $sql = "UPDATE country SET Population =:population, HeadOfState=:headofstate WHERE CODE=:id";
        $placeholder=[
            'id'            => $id,
            'population'    => $population,
            'headofstate'   => $headofstate
        ]; 
        $db->edit($sql, $placeholder,"overzicht-landen.php");

    }


?>


<div class="container-sm">
    <div class="card">
        <form action="edit-land.php" method="POST">
            <section class=" bg-light">
                <legend>Wijzig data</legend>
            </section>
            <div>
                <input type="hidden" name="id" value="<?php echo $_GET['id'];?>">
            </div>
            <div class="mb-3">
                <input type="text" class="form-control"name="name" value="<?php echo $_GET['name'];?>" disabled>
            </div>
            <div class="mb-3">
                <label for="Population" class="form-label">Population</label>
                <input type="number" class="form-control" name="pop"  value="<?php echo intval($_GET['pop']);?>" step='100'>
            </div>
            <div class="mb-3">
                <label for="HeadOfState" class="form-label">Head of State</label>
                <input type="text" class="form-control" name="headofstate" value="<?php echo $_GET['HOS'];?>" Placeholder="<?php echo $_GET['HOS'];?>">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>

<?php include"footer.php"; ?>
 