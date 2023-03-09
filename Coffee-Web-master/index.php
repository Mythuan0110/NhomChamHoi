<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- Bootstrap CSS -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
      integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="./CSS/font-awesome.css" />
    <link rel="stylesheet" href="./CSS/style.css" />
    <title>Coffee House A Cafe</title>
  </head>

  <body>
    <header class="header">
      <div class="container">
        <nav class="navbar navbar-expand-lg navbar-dark pt-0">
          <a class="navbar-brand p-0" href="#">
            <img src="./img/logo.png" />
          </a>
          <button
            class="navbar-toggler"
            type="button"
            data-toggle="collapse"
            data-target="#navbarNav"
            aria-controls="navbarNav"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
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
                <a class="nav-link text-white px-4" href="./menu.php" target="_blank"> Sản Phẩm</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white px-4" href="#">Chuyện Caffee</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white px-4" href="#contact">Liên Lạc</a>
              </li>
            </ul>
          </div>
        </nav>
      </div>
    </header>
    
    <section class="my-carousel">
      <div
        id="carousel"
        class="carousel slide carousel-fade"
        data-ride="carousel"
      >
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
                <h1 class="display-4">Thương Hiệu Coffee Elite </h1>
                <p class="mt-4">
                    Coffee Elite là nơi bạn có thể thưởng thức những dòng cà phê đậm đà hương vị từ các thương hiệu và nhà rang xay tinh hoa toàn cầu với giá cả rất phải chăng.
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
                  Coffee Elite là nơi bạn có thể thưởng thức những dòng cà phê đậm đà hương vị từ các thương hiệu và nhà rang xay tinh hoa toàn cầu với giá cả rất phải chăng.
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
                  Coffee Elite là nơi bạn có thể thưởng thức những dòng cà phê đậm đà hương vị từ các thương hiệu và nhà rang xay tinh hoa toàn cầu với giá cả rất phải chăng.
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
                  Coffee Elite là nơi bạn có thể thưởng thức những dòng cà phê đậm đà hương vị từ các thương hiệu và nhà rang xay tinh hoa toàn cầu với giá cả rất phải chăng.
              </p>
              <div class="carousel-item__button mt-4">
                <button class="btn-orange">Read More</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="services py-5">
      <div class="container py-lg-5 py-md-4 py-2">
        <div class="row">
          <div class="col-lg-4 about-right-faq align-self">
            <span class="title-small mb-2">Best for you</span>
            <h3 class="title-big mx-0">Chúng Tôi Là Ai.</h3>
            <p class="mt-lg-4 mt-3">
                Chúng tôi tạo ra cà phê ngon cho những người yêu thích cà phê. Chúng tôi là một nhóm những người hâm mộ cà phê tận tâm, những người tôn vinh các thương hiệu cà phê đặc biệt và các nhà rang xay.
            </p>
            <div class="carousel-item__button mt-4">
              <button class="btn-orange">Read More</button>
            </div>
          </div>
          <div class="col-lg-8">
            <div class="row">
              <div class="col-md-4 col-6 left-img mt-lg-0 mt-5">
                <img src="./img/a1.jpg" alt="" class="img-fluid radius-image" />
              </div>
              <div class="col-md-4 col-6 left-img mt-lg-0 mt-5">
                <img src="./img/a2.jpg" alt="" class="img-fluid radius-image" />
              </div>
              <div class="col-md-4 col-6 left-img mt-lg-0 mt-md-5 mt-4">
                <img src="./img/a3.jpg" alt="" class="img-fluid radius-image" />
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="products">
      <div class="features py-5">
        <div class="container py-lg-5 py-md-4 py-2">
            <h5 class="title-small text-center">DỊCH VỤ CỦA CHÚNG TÔI</h5>
          <h3 class="title-big text-center mb-md-5 mb-4">Sản Phẩm</h3>
          <div class="fea-gd-vv text-center row">
            <div class="float-top col-lg-4 col-md-6">
              <a href="#url"
                ><img src="./img/1.jpg" class="img-products" alt=""
              /></a>
              <div class="float-lt feature-gd">
                <h3><a href="#url">Espresso Americano</a></h3>
                <p>Cà phê (nóng / lạnh) pha loãng kiểu Ý, vị nhẹ nhàng, không đường và không có sữa</p>
              </div>
            </div>
            <div class="float-top col-lg-4 col-md-6 mt-md-0 mt-5">
              <a href="#url"
                ><img src="./img/2.jpg" class="img-products" alt=""
              /></a>
              <div class="float-lt feature-gd">
                <h3><a href="#url">Cappuccino coffee</a></h3>
                <p>Cà phê sữa nóng kiểu Ý, vị cà phê đậm đà, không đường, dùng với sữa tươi và bọt sữa</p>
              </div>
            </div>
            <div class="float-top col-lg-4 col-md-6 mt-lg-0 mt-5">
              <a href="#url"
                ><img src="./img/3.jpg" class="img-products" alt=""
              /></a>
              <div class="float-lt feature-gd">
                <h3><a href="#url">Cold brew coffee</a></h3>
                <p>Một thức uống yêu thích được kết hợp bởi giữa sốt sô cô la ngọt ngào, sữa tươi và đặc biệt là cà phê espresso đậm đà. Bạn có thể tùy thích lựa chọn uống nóng hoặc dùng chung với đá</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="homeblock py-5">
      <div class="container py-lg-5 py-md-4">
        <div class="grids-area-hny main-cont-wthree-fea row">
          <div class="col-lg-5 align-self">
            <span class="title-small">Blend Coffee</span>
            <h3 class="title-big mx-0">Our Services.</h3>
            <p class="mt-3">
                Qua một chặng đường dài, chúng tôi đã không ngừng mang đến những sản phẩm cà phê thơm ngon, sánh đượm trong không gian thoải mái và lịch sự với mức giá hợp lý. Những ly cà phê của chúng tôi không chỉ đơn thuần là thức uống quen thuộc mà còn mang trên mình một sứ mệnh văn hóa phản ánh một phần nếp sống hiện đại của người Việt Nam.
            </p>
            <p class="mt-3">
                Chúng tôi tạo ra cà phê ngon cho những người yêu thích cà phê. Chúng tôi là một nhóm những người hâm mộ cà phê tận tâm, những người tôn vinh các thương hiệu cà phê và nhà rang xay đặc biệt
            </p>
            <div class="carousel-item__button mt-4">
              <button class="btn-orange">Read More</button>
            </div>
          </div>
          <div class="col-lg-7 pl-lg-5 mt-lg-0 mt-5">
            <div class="row">
              <div class="col-sm-6 grids-feature">
                <div class="area-box">
                  <i class="fa fa-coffee" aria-hidden="true"></i>
                  <h4><a href="#f" class="title-head">Types of Coffee</a></h4>
                  <p>
                      "Tạo khác biệt từ chất nguyên bản" là câu chuyện tôi muốn gửi gắm đến bạn trong mẻ phối trộn giới hạn từ Robusta Đắk Nông và Arabica Cầu Đất Việt Nam. Giữ trọn vị nguyên bản, khác biệt bởi sự kết hợp của 2 hương vị, 2 “cá tính” từ 2 vùng thổ nhưỡng khác nhau, tạo nên những nốt hương đượm vị mà bạn chỉ có thể tìm kiếm được tại quán.
                  </p>
                </div>
              </div>
              <div class="col-sm-6 grids-feature mt-sm-0 mt-5">
                <div class="area-box">
                  <i class="fa fa-glass" aria-hidden="true"></i>
                  <h4><a href="#" class="title-head">Bean Varieties</a></h4>
                  <p>
                      Từng nốt hương mang vị mặn, đắng, chát, chua thanh hay ngọt ngào,... tất cả hoà quyện tạo thành những bản sắc khác biệt trong mỗi ngụm cà phê, hãy sẵn sàng "nghe" câu chuyện đằng sau tách cà phê bạn đang thưởng thức nhé.
                  </p>
                </div>
              </div>
              <div class="col-sm-6 grids-feature mt-5 pt-lg-2">
                <div class="area-box">
                  <i class="fa fa-pagelines" aria-hidden="true"></i>
                  <h4><a href="#" class="title-head">Coffee & Pastry</a></h4>
                  <p>
                      Còn gì tuyệt vời hơn khi kết hợp thưởng thức đồ uống của bạn cùng với những chiếc bánh ngọt ngon tinh tế được làm thủ công ngay tại bếp. Những chiếc bánh của chúng tôi mang hương vị đặc trưng của ẩm thực Việt và còn là sự Tận Tâm, gửi gắm mà chúng tôi dành cho Quý khách hàng.
                  </p>
                </div>
              </div>
              <div class="col-sm-6 grids-feature mt-5 pt-lg-2">
                <div class="area-box">
                  <i class="fa fa-envira" aria-hidden="true"></i>
                  <h4><a href="#" class="title-head">Coffe to go</a></h4>
                  <p>
                      Bạn muốn trổ tài pha chế những ly cà phê đậm đà, thơm ngon ngay tại nhà; hay chỉ đơn giản là đang tìm một món quà không quá cầu kì, nhưng đậm chất nghĩa tình dành cho những người bạn quan tâm. Vậy thì dòng sản phẩm Cà phê đóng gói đa dạng về thể loại đây sẽ là một gợi ý hay ho đáng để bạn lưu tâm đấy.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="gallery">
      <div class="destionation-innf py-5">
        <div class="container py-lg-5 py-md-4 py-2">
          <div class="title-content">
            <h5 class="title-small text-center mb-1">Coffee gallery</h5>
            <h3 class="title-big text-center mb-md-5 mb-4">
              Sản Phẩm Bán Chạy Nhất Quán
            </h3>
          </div>
          <ul class="gallery__items">
            <li>
              <div class="portfolio">
                <a href="./img/blog1.jpg">
                  <img
                    src="./img/blog1.jpg"
                    alt=" "
                    class="img-fluid radius-image"
                  />
                  <div class="portfolio__content">
                    <div class="portfolio__text">
                      <h3>Perfect Cup</h3>
                      <p>Cup of Coffee / Filtered</p>
                    </div>
                  </div>
                </a>
              </div>
            </li>
            <li>
              <div class="portfolio">
                <a href="./img/blog2.jpg">
                  <img
                    src="./img/blog2.jpg"
                    alt=" "
                    class="img-fluid radius-image"
                  />
                  <div class="portfolio__content">
                    <div class="portfolio__text">
                      <h3>Baked Beans</h3>
                      <p>Cup of Coffee / Filtered</p>
                    </div>
                  </div>
                </a>
              </div>
            </li>
            <li>
              <div class="portfolio">
                <a href="./img/blog3.jpg">
                  <img
                    src="./img/blog3.jpg"
                    alt=" "
                    class="img-fluid radius-image"
                  />
                  <div class="portfolio__content">
                    <div class="portfolio__text">
                      <h3>Mocha</h3>
                      <p>Filtered / Mornings</p>
                    </div>
                  </div>
                </a>
              </div>
            </li>

            <li>
              <div class="portfolio">
                <a href="./img/blog4.jpg">
                  <img
                    src="./img/blog4.jpg"
                    alt=" "
                    class="img-fluid radius-image"
                  />
                  <div class="portfolio__content">
                    <div class="portfolio__text">
                      <h3>Cappuccino</h3>
                      <p>Cup of Coffee / Filtered</p>
                    </div>
                  </div>
                </a>
              </div>
            </li>
            <li>
              <div class="portfolio">
                <a href="./img/blog5.jpg">
                  <img
                    src="./img/blog5.jpg"
                    alt=" "
                    class="img-fluid radius-image"
                  />
                  <div class="portfolio__content">
                    <div class="portfolio__text">
                      <h3>Macchiatio</h3>
                      <p>Aroma / Filtered</p>
                    </div>
                  </div>
                </a>
              </div>
            </li>
            <li>
              <div class="portfolio">
                <a href="./img/blog6.jpg">
                  <img
                    src="./img/blog6.jpg"
                    alt=" "
                    class="img-fluid radius-image"
                  />
                  <div class="portfolio__content">
                    <div class="portfolio__text">
                      <h3>Coffee Cup</h3>
                      <p>Cup of Coffee / Filtered</p>
                    </div>
                  </div>
                </a>
              </div>
            </li>
            <li>
              <div class="portfolio">
                <a href="./img/blog1.jpg">
                  <img
                    src="./img/blog1.jpg"
                    alt=" "
                    class="img-fluid radius-image"
                  />
                  <div class="portfolio__content">
                    <div class="portfolio__text">
                      <h3>Filtered Coffee</h3>
                      <p>Cup of Coffee / Filtered</p>
                    </div>
                  </div>
                </a>
              </div>
            </li>
            <li>
              <div class="portfolio">
                <a href="./img/blog2.jpg">
                  <img
                    src="./img/blog2.jpg"
                    alt=" "
                    class="img-fluid radius-image"
                  />
                  <div class="portfolio__content">
                    <div class="portfolio__text">
                      <h3>Cappuccino</h3>
                      <p>Cup of Coffee / Filtered</p>
                    </div>
                  </div>
                </a>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </section>

    <section class="contact" id="contact">
      <div class="contact__form">
        <div class="contact__form__content">
          <h3 class="title-big text-center mb-md-5 mb-4">Liên Lạc</h3>
          <form>
            <div class="contact__form__control contact__form__control--50">
              <input type="text" placeholder="Name" />
            </div>

            <div class="contact__form__control contact__form__control--50">
              <input type="text" placeholder="Last Name" />
            </div>

            <div class="contact__form__control contact__form__control--50">
              <input type="email" placeholder="Email" />
            </div>

            <div class="contact__form__control contact__form__control--50">
              <input type="text" placeholder="Phone" />
            </div>

            <div class="contact__form__control">
              <span>Gender: </span>
              <input id="male" type="radio" name="gender" />
              <label for="male">Male</label>

              <input id="female" type="radio" name="gender" />
              <label for="female">Female</label>
            </div>

            <div class="contact__form__control">
              <textarea rows="5" placeholder="Message"></textarea>
            </div>

            <div class="contact__form__control">
              <input type="checkbox" />
              <label>Do you want to receive Advertisement?</label>
            </div>

            <div class="contact__form__control mt-4">
              <button class="btn-orange btn-submit">Send</button>
            </div>
          </form>
        </div>
      </div>
    </section>

    <section class="map">
      <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3918.792587213692!2d106.69679901461471!3d10.827178892287087!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x317528f4a62fce9b%3A0xc99902aa1e26ef02!2zVHLGsOG7nW5nIMSQ4bqhaSBo4buNYyBWxINuIExhbmcgLSBDxqEgc-G7nyAz!5e0!3m2!1svi!2s!4v1622047240965!5m2!1svi!2s"
        style="border: 0"
        allowfullscreen=""
        loading="lazy"
      ></iframe>
    </section>

    <footer class="footer text-center">
      <div class="container p-4">
        <section class="mb-4">
          <a
            class="btn btn-primary btn-floating m-1 btn-facebook"
            href="#"
            role="button"
            ><i class="fa fa-facebook-official" aria-hidden="true"></i
          ></a>
          <a
            class="btn btn-primary btn-floating m-1 btn-twitter"
            href="#"
            role="button"
            ><i class="fa fa-twitter" aria-hidden="true"></i
          ></a>
          <a
            class="btn btn-primary btn-floating m-1 btn-google"
            href="#"
            role="button"
            ><i class="fa fa-google" aria-hidden="true"></i
          ></a>
          <a
            class="btn btn-primary btn-floating m-1 btn-instagram"
            href="#"
            role="button"
            ><i class="fa fa-instagram" aria-hidden="true"></i
          ></a>
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
      <div class="text-center p-3 footer__content ">
        <p>©2020 Coffee Cafe. All rights reserved</p>
      </div>
    </footer>

    <script
      src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
      integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
