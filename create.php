<?php include 'db_config.php'; ?>
<!DOCTYPE html>
<html>
<head>
<title>Add Item</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="styles.css">
</head>
<body>
<?php include 'navbar.php'; ?>
<div class="container mt-4">
  <div class="card shadow">
    <div class="card-header bg-success text-white">
      <h3>Add Item</h3>
    </div>
    <div class="card-body">
      <form method="POST">
        <label class="form-label">Name:</label>
        <input type="text" class="form-control" name="name" required>
        <label class="form-label mt-3">Description:</label>
        <textarea class="form-control" name="description" required></textarea>
        <button class="btn btn-success mt-3" name="submit">Save</button>
      </form>
      <?php
      if (isset($_POST['submit'])) {
        $name = mysqli_real_escape_string($conn,$_POST['name']);
        $desc = mysqli_real_escape_string($conn,$_POST['description']);
        mysqli_query($conn,"INSERT INTO items(name,description) VALUES('$name','$desc')");
        echo "<script>window.location='index.php'</script>";
      }
      ?>
    </div>
  </div>
</div>
</body>
</html>
