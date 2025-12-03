<?php include 'db_config.php'; ?>
<?php
$id = isset($_GET['id']) ? intval($_GET['id']) : 0;
$result = mysqli_query($conn,"SELECT * FROM items WHERE id=$id");
$row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html>
<head>
<title>Edit Item</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="styles.css">
</head>
<body>
<?php include 'navbar.php'; ?>
<div class="container mt-4">
  <div class="card shadow">
    <div class="card-header bg-warning">
      <h3>Edit Item</h3>
    </div>
    <div class="card-body">
      <form method="POST">
        <label class="form-label">Name:</label>
        <input type="text" class="form-control" name="name" value="<?php echo $row['name']; ?>" required>
        <label class="form-label mt-3">Description:</label>
        <textarea class="form-control" name="description" required><?php echo $row['description']; ?></textarea>
        <button class="btn btn-warning mt-3" name="update">Update</button>
      </form>
      <?php
      if (isset($_POST['update'])) {
        $name = mysqli_real_escape_string($conn,$_POST['name']);
        $desc = mysqli_real_escape_string($conn,$_POST['description']);
        mysqli_query($conn,"UPDATE items SET name='$name',description='$desc' WHERE id=$id");
        echo "<script>window.location='index.php'</script>";
      }
      ?>
    </div>
  </div>
</div>
</body>
</html>
