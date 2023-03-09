<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous" />
  <link rel="stylesheet" href="./CSS/font-awesome.css" />
  <link rel="stylesheet" href="./CSS/menu.css" />
  <title>Coffee House A Cafe</title>
</head>

<body>
  <header class="header">
    <div class="container">
      <nav class="navbar navbar-expand-lg navbar-dark pt-0">
        <a class="navbar-brand p-0" href="#">
          <img src="./img/logo.png" />
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link text-white px-4" href="./index.php" target="_blank"> Trang Chủ</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white px-4" href="#"> Tin Tức</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white px-4" href="#menu"> Sản Phẩm</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white px-4" href="#">Chuyện Caffee</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white px-4" href="#">Liên Lạc</a>
            </li>
          </ul>
        </div>
      </nav>
    </div>
  </header>

  <section class="my-carousel">
    <div id="carousel" class="carousel slide carousel-fade" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carousel" data-slide-to="0" class="active"></li>
        <li data-target="#carousel" data-slide-to="1"></li>
        <li data-target="#carousel" data-slide-to="2"></li>
        <li data-target="#carousel" data-slide-to="3"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="./img/banner1.jpg" class="d-block w-100" alt="..." />
          <div class="carousel-item__overlay"></div>
          <div class="carousel-item__caption container text-white">
            <h1 class="display-4">Thương Hiệu Coffee Elite</h1>
            <p class="mt-4">
              Coffee Elite là nơi bạn có thể thưởng thức những dòng cà phê đậm
              đà hương vị từ các thương hiệu và nhà rang xay tinh hoa toàn cầu
              với giá cả rất phải chăng.
            </p>
            <div class="carousel-item__button mt-4">
              <button class="btn-orange">Read More</button>
            </div>
          </div>
        </div>

        <div class="carousel-item">
          <img src="./img/banner2.jpg" class="d-block w-100" alt="..." />
          <div class="carousel-item__overlay"></div>
          <div class="carousel-item__caption container text-white">
            <h1 class="display-4">Coffee nóng ngon tuyệt vời</h1>
            <p class="mt-4">
              Coffee Elite là nơi bạn có thể thưởng thức những dòng cà phê đậm
              đà hương vị từ các thương hiệu và nhà rang xay tinh hoa toàn cầu
              với giá cả rất phải chăng.
            </p>
            <div class="carousel-item__button mt-4">
              <button class="btn-orange">Read More</button>
            </div>
          </div>
        </div>

        <div class="carousel-item">
          <img src="./img/banner3.jpg" class="d-block w-100" alt="..." />
          <div class="carousel-item__overlay"></div>
          <div class="carousel-item__caption container text-white">
            <h1 class="display-4">Người Yêu Cà Phê Đích Thực</h1> 
            <p class="mt-4">
              Coffee Elite là nơi bạn có thể thưởng thức những dòng cà phê đậm
              đà hương vị từ các thương hiệu và nhà rang xay tinh hoa toàn cầu
              với giá cả rất phải chăng.
            </p>
            <div class="carousel-item__button mt-4">
              <button class="btn-orange">Read More</button>
            </div>
          </div>
        </div>

        <div class="carousel-item">
          <img src="./img/banner4.jpg" class="d-block w-100" alt="..." />
          <div class="carousel-item__overlay"></div>
          <div class="carousel-item__caption container text-white">
            <h1 class="display-4">Tôn vinh các thương hiệu cà phê</h1>
            <p class="mt-4">
              Coffee Elite là nơi bạn có thể thưởng thức những dòng cà phê đậm
              đà hương vị từ các thương hiệu và nhà rang xay tinh hoa toàn cầu
              với giá cả rất phải chăng.
            </p>
            <div class="carousel-item__button mt-4">
              <button class="btn-orange">Read More</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="menu py-5" id="menu">
    <div class="menu_wrap">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 stikySidebar">
            <aside class="sidebar_menu">
              <ul>
                <li>
                  <a class="menu_scroll_link" href="#ca-phe-viet-nam">CÀ PHÊ VIỆT NAM</a>
                </li>
                <li>
                  <a class="menu_scroll_link" href="#ca-phe-may">CÀ PHÊ MÁY</a>
                </li>
                <li>
                  <a class="menu_scroll_link" href="#cold-brew">COLD BREW</a>
                </li>
                <li>
                  <a class="menu_scroll_link" href="#ca-phe-da-xay">CÀ PHÊ ĐÁ XAY</a>
                </li>
                <li>
                  <a class="menu_scroll_link" href="#ca-phe-goi">CÀ PHÊ GÓI</a>
                </li>
              </ul>
            </aside>
          </div>
          <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12 border_right_before">
            <div class="block_menu_item" id="ca-phe-viet-nam">
              <h3 class="block_menu_item_title">
                <span class="line_after_heading section_heading">CÀ PHÊ VIỆT NAM</span>
              </h3>
              <div class="d-flex flex-wrap menu_lists">
                <?php
                require('conn.php');
                $sql = "SELECT * FROM coffee";
                $result = $conn->query($sql);
                while ($row = $result->fetch_assoc()) {
                ?>
                  <div class="menu_item">
                    <div class="menu_item_image">
                      <a href="#"><img src="<?php echo $row["image"] ?>" alt=""></a>
                    </div>
                    <div class="menu_item_info bg_white">
                      <h3>
                        <a href="#"><?php echo $row["name"] ?></a>
                      </h3>
                      <div class="price_product_item">
                        <h5><?php echo $row["price"] ?> Đ </h5>
                        <button class="menu_item_action">MUA NGAY</button>

                      </div>
                    </div>
                  </div>
                <?php
                }
                ?>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
    </div>
  </section>

  <section class="map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3918.792587213692!2d106.69679901461471!3d10.827178892287087!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x317528f4a62fce9b%3A0xc99902aa1e26ef02!2zVHLGsOG7nW5nIMSQ4bqhaSBo4buNYyBWxINuIExhbmcgLSBDxqEgc-G7nyAz!5e0!3m2!1svi!2s!4v1622047240965!5m2!1svi!2s" style="border: 0" allowfullscreen="" loading="lazy"></iframe>
  </section>

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

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous">
  </script>
</body>

</html>
