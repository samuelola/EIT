<?php

include '../../db.php';

$id = $_POST['id'];

$get_allcat = "SELECT * FROM subcategories WHERE category_id = $id";

$query = mysqli_query($conn,$get_allcat);

while($row = mysqli_fetch_assoc($query)){

    echo '
    
            <option value="'.$row['id'].'">'.$row['subcategory'].'</option>
    
         ';
}

?>