<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <title>Title</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

</head>

<body>
  <?php
  require("../conn.php");
  $sql = "SELECT * FROM coffee";
  $query = mysqli_query($conn, $sql);
  ?>
  <div class="container-fluid">
    <div class="card">
      <div class="card-header">
        <h2>Danh sách sản phẩm</h2>
      </div>
      <div class="card-body">
        <table class="table">
          <thead>
            <tr>
              <td>#</td>
              <td>Image</td>
              <td>Name</td>
              <td>Price</td>
              <td>Edit</td>
              <td>Delete</td>
            </tr>
          </thead>
          <tbody>
            <?php
            $i = 0;
            while ($row = mysqli_fetch_assoc($query)) { ?>
              <tr>
                <td> <?php echo $i++ ?></td>
                <td><img src="<?php echo "../" . $row["image"] ?>" style="width: 100px;"></td>
                <td><?php echo $row["name"] ?></td>
                <td><?php echo $row["price"] ?></td>
                <td>
                  <a href="edit.php?id=<?php echo $row['id']; ?>">Edit</a>
                </td>
                <td>
                  <a href="delete.php?id=<?php echo $row['id']; ?>">Delete</a>
                </td>
              </tr>
            <?php }  ?>

          </tbody>
        </table>
        <a href="form.php" class="btn btn-primary">Thêm sản phẩm</a>
      </div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
 
</body>

</html>