<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Overzicht Landen</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <br><br>
  
        <?php

        function create_table($dataset, $from){
       
        

        if(is_array($dataset) && !empty($dataset)){ 
            // NAAM VAN DE KOLOM DIE JE WILT OPHALEN NAAR DE URL
          
            ?>
            <a href="nieuw-land.php" class="btn btn-primary">Nieuw Land toevoegen</a>

            <table class="table table-striped">
            <?php 
            // DE KOLOMNAMEN WORDEN OPGEHAALD
            $columns = array_keys($dataset[0]);
            ?>
            
            <tr class="black">
                <?php foreach($columns as $column){ ?>
                    <th scope="col">
                        <strong>
                            <?php echo $column?>
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
                            <?php echo $rowdata; ?>
                        </td>
                    <?php } ?>
                        <td>
                            <a href="edit-land.php?id=<?php echo $row_id ?>
                            &name=<?php echo $row["Name"]; ?>
                            &pop=<?php echo $row["Population"]; ?> 
                            &HOS=<?php echo $row["HeadOfState"]; ?>" class="btn btn-primary">Edit</a>
                            <a href="delete-land.php?id=<?php echo $row_id ?>" class="btn btn-danger">Delete</a>
                        </td>                        
                    </tr>
            <?php }
         }
    }?>
    </table>

    <br>
    
    </body>
    
</html>