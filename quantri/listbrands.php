<?php
require('includes/header.php');
?>

<div>
    <h1>Danh sách thương hiệu</h1>

    <?php
    require('../db/conn.php');
    $sql_str = "SELECT * FROM brands ORDER BY name";
    $result = mysqli_query($conn, $sql_str);
    while ($row = mysqli_fetch_assoc($result)){
        echo $row['name'];
    }
    ?>
</div>

<?php
require('includes/footer.php');
?>
