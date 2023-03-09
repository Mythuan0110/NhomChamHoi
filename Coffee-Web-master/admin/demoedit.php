<?php
require("..conn.php");
$id = $_GET['id']; 
$sql_up = "SELECT FROM coffee WHERE id='$id' ";
$query_up = mysqli_query($conn, $sql_up);
$rows_up = mysqli_fetch_array($query_up);
if (isset($_POST['update_product'])) {
    $name = $_POST['name'];
    if ($_FILES['image']['name']== '') {
        $image = $rows_up['name'];
    }else{
        $image = $rows_up['name'];
    }
    $price = $_POST['price'];
    $sql = "UPDATE coffee SET name='$name', image='$image', price='$price' WHERE id='$id'";
    $query = mysqli_query($conn, $sql);
    header("location: menu.php");
}
?>
<form method="POST" enctype="multipart/form-data">
    <div class="form-group">
        <label for="name">Tên sản phẩm</label>
        <input type="text" name="name" class="form-control" required value="<?php echo $rows_up["name"] ?>">
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
        <input type="text" name="price" class="form-control" required value="<?php echo $rows_up["price"] ?>">
    </div>

    <div class="form-group">
        <input type="file" id="fileToUpload" name="fileToUpload" required />
    </div>

    <button name="sbm" class="btn btn-success btn-lg btn-block" type="submit">Sửa</button>
</form>
