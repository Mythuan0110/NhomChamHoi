<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous" />
  <link rel="stylesheet" href="../css/font-awesome.css" />
  <link rel="stylesheet" href="../css/menu.css" />
  <title>Add product example</title>
</head>

<body>
  
  <div class="container-fluid">
    <div class="card">
      <div class="card-header">
        <h2>Thêm Sản phẩm</h2>
      </div>
      <div class="card-body">
        <form action="processform.php" method="POST" enctype="multipart/form-data">
          <div class="form-group">
            <label for="name">Tên sản phẩm</label>
            <input type="text" name="name" class="form-control" required>
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
            <input type="text" name="price" class="form-control" required>
          </div>

          <div class="form-group">
            <input type="file" id="fileToUpload" name="fileToUpload" required />
          </div>

          <button name="sbm" class="btn btn-success btn-lg btn-block" type="submit">Thêm</button>
        </form>
      </div>

    </div>
  </div>
  <footer class="footer text-center">
    <div class="container p-4">
      <section class="mb-4">
        <a class="btn btn-primary btn-floating m-1 btn-facebook" href="#" role="button"><i class="fa fa-facebook-official" aria-hidden="true"></i></a>
        <a class="btn btn-primary btn-floating m-1 btn-twitter" href="#" role="button"><i class="fa fa-twitter" aria-hidden="true"></i></a>
        <a class="btn btn-primary btn-floating m-1 btn-google" href="#" role="button"><i class="fa fa-google" aria-hidden="true"></i></a>
        <a class="btn btn-primary btn-floating m-1 btn-instagram" href="#" role="button"><i class="fa fa-instagram" aria-hidden="true"></i></a>
      </section>
      <section class="mb-4">
        <p class="footer__text">
          We make the delicious coffee for the coffee lovers. We are a team of
          dedicated coffee fans who celebrate exceptional coffee brands and
          roasters by providing our guests the unique opportunity to try
          coffee drinks
        </p>
      </section>
    </div>
    <div class="text-center p-3 footer__content">
      <p>©2020 Coffee Cafe. All rights reserved</p>
    </div>
  </footer>
</body>

</html>