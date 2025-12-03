<?php include 'db_config.php'; ?>
<!DOCTYPE html>
<html>
<head>
<title>CRUD – Home</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="styles.css">
</head>
<body>
<?php include 'navbar.php'; ?>
<div class="container mt-4">
  <div class="card shadow">
    <div class="card-header bg-primary text-white">
      <h3 class="text-center">Items List</h3>
    </div>
    <div class="card-body">
      <table class="table table-bordered table-hover">
        <thead class="table-primary">
          <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Description</th>
            <th width="200">Actions</th>
          </tr>
        </thead>
        <tbody>
        <?php
        $result = mysqli_query($conn,"SELECT * FROM items");
        while ($row = mysqli_fetch_assoc($result)) {
          echo "<tr>
            <td>{$row['id']}</td>
            <td>{$row['name']}</td>
            <td>{$row['description']}</td>
            <td>
              <a href='update.php?id={$row['id']}' class='btn btn-success btn-sm'>Edit</a>
              <a href='delete.php?id={$row['id']}' class='btn btn-danger btn-sm' onclick=\"return confirm('Delete?')\">Delete</a>
            </td>
          </tr>";
        }
        ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
</body>
</html>
