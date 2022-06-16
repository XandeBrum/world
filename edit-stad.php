<?php include"header.php"; ?>

<?php 

include_once "database.php";
$db = new database();

if($_SERVER['REQUEST_METHOD'] == 'POST')

?>


<div class="container-sm">
    <div class="card">
        <form action="edit-stad.php" method="post">

            <div>
                <input type="hidden" name="id" value="<?php echo $_GET['id'];?>">
            </div>
            
            <div class="mb-3">
                <label for="Name" class="form-label">Name</label>
                <input type="text" class="form-control" placeholder="<?php echo $_GET['name'];?>" >
            </div>            
            <div class="mb-3">
                <label for="Population" class="form-label">Population</label>
                <input type="number" class="form-control" placeholder="<?php echo $_GET['pop'];?>" >
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>

        </form>
    </div>
</div>
<?php include"footer.php"; ?>