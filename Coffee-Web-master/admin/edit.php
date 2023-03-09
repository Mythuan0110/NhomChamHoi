<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous" />
    <link rel="stylesheet" href="../css/font-awesome.css" />
    <link rel="stylesheet" href="../css/menu.css" />
    <title>Sửa Sản Phẩm</title>
</head>

<body>
    <?php
    include("../conn.php");
    $id = $_GET['id'];
    $sql_up = "SELECT * FROM coffee where id='$id' ";
    $query_up = mysqli_query($conn, $sql_up);
    $row_up = mysqli_fetch_assoc($query_up);
    if (isset($_POST['sbm'])) {
        $name = $_POST['name'];

        if ($_FILES['image']['name'] == ' ') {
            $image = $row_up['image'];
        } else {
            $image = $row_up['image'];
        }
        $price = $_POST['price'];
        $sql = "UPDATE  coffee SET (name, price,image)
        VALUES ('$name', $price, '$fileName')";
        $query = mysqli_query($conn, $sql);
        header("location: menu.php");
    }
    ?>
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <h2>Sửa Sản Phẩm</h2>
            </div>
            <div class="card-body">
                <form action="processform.php" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="name">Tên sản phẩm</label>
                        <input type="text" name="name" class="form-control" required value="<?php echo $row_up["name"] ?>">
                    </div>

                    <div class="form-group">
                        <label for="name">Category</label>
                        <select class="input-group" name="category">
                            <option value="Coffee">Coffee</option>
                            <option value="Tea">Tea</option>
                            <option value="Milk">Milk</option>
                            <option value="Milk-Tea">Milk Tea</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="price">Giá Tiền</label>
                        <input type="text" name="price" class="form-control" required value="<?php echo $row_up["price"] ?>">
                    </div>

                    <div class="form-group">
                        <input type="file" id="fileToUpload" name="fileToUpload">
                    </div>

                    <button name="edit" class="btn btn-success btn-lg btn-block" type="submit">Sửa</button>
                </form>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous">
    </script>
</body>

</html>