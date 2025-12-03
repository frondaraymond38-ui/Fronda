<?php
include 'db_config.php';
$id = isset($_GET['id']) ? intval($_GET['id']) : 0;
mysqli_query($conn,"DELETE FROM items WHERE id=$id");
echo "<script>window.location='index.php'</script>";
?>
