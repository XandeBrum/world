<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="world/style.css">
    <title>Document</title>
</head>
<body>

<?php 


    function create_table($dataset, $from){

    if(is_array($dataset) && !empty($dataset)){

        ?>
        <table class="table table-striped">
        <?php 
        $columns = array_keys($dataset[0]);
        ?>
        <tr>
            <?php foreach($columns as $column){ ?>
                <th scope="col">
                    <strong>
                        <?php echo $column; ?>
                    </strong>

                </th>
                <?php } ?>
                <th scope="col">
                    Action
                </th>
        </tr>
        <?php foreach($dataset as $rows=>$row){
            $row_id = $row[$from];?>
        <tr>
            <?php foreach($row as $rowdata){ ?>

                <td>
                    <?php echo $rowdata ?>
                </td>
                <?php } ?>
                <td>
                    <a href="edit-stad.php?id=<?php echo $row_id?>
                    &pop=<?php echo $row['Population'];?>
                    &name=<?php echo $row['Name'];?>" class="btn btn-primary">Edit</a>
                </td>
        </tr>
        <?php } 
    }
}
        ?>

        </table>

</body>
</html>
