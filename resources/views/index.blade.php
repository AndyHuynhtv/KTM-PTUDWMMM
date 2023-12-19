<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
    />
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
      integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="/template/admin/dist/css/index.css" />
    <title>Sảnh Rượu</title>
    <script src="/template/admin/dist/js/index.js"></script>
  </head>
  <body>
    <div class="menu">
      <div class="nav-bar1">
        <ul class="nav justify-content-end">
          <li class="nav-item">
            <a class="nav-link" href="#">Hotline: 0906711005</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">LIÊN HỆ</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="#">BLOG</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('login') }}">
              LOGIN
            </a>
          </li>
        </ul>
      </div>
      <div class="menu-container">
        <div class="menu-bar">
          <nav class="navbar navbar-expand-sm">
            <a class="navbar-brand" href="{{ route('user') }}">
              <img
                src="https://sanhruou.com/media/8387/content/logo-sanh-ruou-2022.png"
                alt="logo"
                style="width: 300px; height: 150px"
              />
            </a>
            <form class="form-inline" action="{{ route('products.search') }}" method="GET">
              <div class="input-group">
                <input
                  class="search-bar"
                  type="text"
                  class="form-control"
                  name="q"
                  placeholder="Bạn đang tìm kiếm cái gì?"
                />
                <div class="input-group-prepend">
                  <button type="submit" class="input-group-text" href="#">
                    <i
                      class="fa fa-search"
                      style="font-size: 35px; color: #af9c60; padding-left: 5px"
                    ></i>
                  </button>
                </div>
              </div>
            </form>
            <button class="ss-button" href="#">
              <div class="extra-icon">
                <i class="fa fa-retweet"></i>
              </div>
              <div class="menu-note">
                <p class="abow-content" style="padding-right: 20px">So sánh</p>
                <p class="below-content">Sản phẩm</p>
              </div>
            </button>

            <button class="wish-button" href="#">
              <div class="extra-icon">
                <i class="fa fa-cart-plus"></i>
              </div>
              <div class="menu-note">
                <p class="abow-content">Mua hàng</p>
                <p class="below-content">Giỏ hàng</p>
              </div>
            </button>
          </nav>
        </div>
      </div>
      <div class="wine">
        <div class="navbar-wine">
          <div class="navbar-wine-content-1">VANG/CHAMPAGNE</div>
          <div class="navbar-wine-content-2">WHISKY</div>
          <div class="navbar-wine-content-3">SPIRITS & LIQUEUR</div>
          <div class="navbar-wine-content-4">SAKE & BIA</div>
          <div class="navbar-wine-content-5">FOODS</div>
          <div class="navbar-wine-content-6">PHỤ KIỆN & QUÀ TẶNG</div>
        </div>  
      </div>

      <div class="info">
        <div class="navbar-km">
          <div class="navbar-km-content">
            <div class="km-content-icon">
              <i class="fa fa-gift" aria-hidden="true"></i>
            </div>
            <div class="km-content-info">
              <p class="km-abow-text">HỘP QUÀ TẾT 2024</p>
              <p class="km-below-text">Các sản phẩm hộp quà tết Sành Rượu</p>
            </div>
          </div>
          <div class="navbar-km-content">
            <div class="km-content-icon">
              <img
                src="//sanhruou.com/media/5262/contentslider/18-mang-thai.svg?size=41"
              />
            </div>
            <div class="km-content-info">
              <p class="km-abow-text">SÀNH RƯỢU KHÔNG DÀNH CHO</p>
              <p class="km-below-text">
                Người dưới 18 tuổi và phụ nữ mang thai
              </p>
            </div>
          </div>
          <div class="navbar-km-content">
            <div class="km-content-icon">
              <i class="fa fa-globe"></i>
            </div>
            <div class="km-content-info">
              <p class="km-abow-text">KÝ GỬI & TRAO ĐỔI</p>
              <p class="km-below-text">Macallan, Chivas,...</p>
            </div>
          </div>
          <div class="navbar-km-content">
            <div class="km-content-icon">
              <i class="fas fa-shipping-fast"></i>
            </div>
            <div class="km-content-info">
              <p class="km-abow-text">GIAO HÀNG & ĐỔI TRẢ</p>
              <p class="km-below-text">Giao hàng toàn quốc</p>
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="img-container">
      <div class="image-center">
        <img
          src="https://sanhruou.com/media/14869/pagebuilder/tet-2024-logo.png"
        />
      </div>
      <div class="img-intro">
        <img
          src="https://sanhruou.com/media/14868/pagebuilder/tet-2024-dragon-bg.png?gidzl=q66eQMwTm2dMVg1iRO70BTHufcTnqCSjmokWPYxVnd2L8Q5Z9zJ4TSujeZyXWSTudYtrF6IBpL5oQPhAAG"
        />
      </div>
      <div class="text-hpny">
        <p><b>Chúc mừng năm mới</b></p>
      </div>
    </div>
    <div class="navbar-hover-c1">
      <div class="navbar-hover-1">
        <div class="hover1-cot1">
          <a href="#">
            <i class="fas fa-home"></i>
            <span>VANG/CHAMPAGNE</span>
          </a>
        </div>
        <div class="hover1-cot1">
          <a href="#">
            <i class="fas fa-home"></i>
            <span>A - Z VANG & CHAMPAGNE</span>
          </a>
        </div>
        <div class="hover1-cot1">
          <a href="#">
            <i class="fas fa-home"></i>
            <span>HỘP QUÀ TẾT</span>
          </a>
        </div>
        <div class="hover1-cot1">
          <a href="#">
            <i class="fas fa-home"></i>
            <span>VANG ORGANIC</span>
          </a>
        </div>
        <div class="hover1-cot1">
          <a href="#">
            <i class="fas fa-home"></i>
            <span>VANG BỊCH</span>
          </a>
        </div>
        <div class="hover1-cot1">
          <a href="#">
            <i class="fas fa-home"></i>
            <span>GRAND CRU CLASSE 1855</span>
          </a>
        </div>
        <div class="hover1-cot1">
          <a href="#">
            <i class="fas fa-home"></i>
            <span>GRAND CRU CLASSE - SAINT EMILION</span>
          </a>
        </div>
        <div class="hover1-cot1">
          <a href="#">
            <i class="fas fa-home"></i>
            <span>OLD VINTAGE</span>
          </a>
        </div>
      </div>
      <div class="navbar-hover-2">
        <h5>LOẠI VANG</h5>
        <br />
        <a href="champagne.html" class="hover-label">CHAMPAGNE</a><br />
        <a href="#" class="hover-name-wine">Brut</a><br />
        <a href="#" class="hover-name-wine">Rose</a><br />
        <a href="{{ route('redWines') }}" class="hover-label">VANG ĐỎ</a><br />
        <a href="#" class="hover-label">VANG TRẮNG</a><br />
        <a href="#" class="hover-label">VANG HỒNG</a><br />
        <a href="#" class="hover-label">VANG NGỌT</a><br />
        <a href="#" class="hover-label">VANG NỔ/SPARKLING</a><br />
        <a href="#" class="hover-name-wine">Brut, Rose, Sweet</a><br />
        <a href="#" class="hover-name-wine">Prosecco</a><br />
        <a href="#" class="hover-name-wine">Cava</a><br />
        <a href="#" class="hover-label">FORTIFIED WINE</a><br />
        <a href="#" class="hover-name-wine">Port</a><br />
        <a href="#" class="hover-name-wine">Sherry</a><br />
        <a href="#" class="hover-label">VANG TRÁI CÂY</a><br />
      </div>
      <div class="navbar-hover-3">
        <h5>XUẤT XỨ</h5>
        <br />
        <a href="#" class="hover-label">VANG PHÁP</a><br />
        <a href="#" class="hover-label">VANG CHILE</a><br />
        <a href="#" class="hover-label">VANG Ý</a><br />
        <a href="#" class="hover-label">VANG ÚC</a><br />
        <a href="#" class="hover-label">VANG MỸ</a><br />
        <a href="#" class="hover-label">VANG TÂY BAN NHA</a><br />
        <a href="#" class="hover-label">VANG NEW ZEALAND</a><br />
        <a href="#" class="hover-label">VANG ARGENTINA</a><br />
        <a href="#" class="hover-label">VANG NAM PHI</a><br />
        <a href="#" class="hover-label">VANG BỒ ĐÀO NHA</a><br />
        <a href="#" class="hover-label">VANG ĐỨC</a><br />
      </div>
      <div class="navbar-hover-4">
        <h5>VÙNG LÀM VANG</h5>
        <br />
        <a href="#" class="hover-label">BORDEAUX</a><br />
        <a href="#" class="hover-label">BURGUNDY</a><br />
        <a href="#" class="hover-label">TUSCANY</a><br />
        <a href="#" class="hover-label">NAPA VALLY</a><br />
        <a href="#" class="hover-label">BAROSSA VALLEY</a><br />
        <a href="#" class="hover-label">COLCHAGUA VALLY</a><br />
        <a href="#" class="hover-label">MENZODA</a><br />
        <a href="#" class="hover-label">PUGLIA</a><br />
        <a href="#" class="hover-label">RIOJA</a><br />
        <a href="#" class="hover-label">MARLBOROUGH</a><br />
      </div>
      <div class="navbar-hover-5">
        <h5>GIỐNG NHO</h5>
        <br />
        <a href="#" class="hover-label">CABERNET SAUVIGNON</a><br />
        <a href="#" class="hover-label">CHARDONNAY</a><br />
        <a href="#" class="hover-label">MERLOT</a><br />
        <a href="#" class="hover-label">NEGROAMARO</a><br />
        <a href="#" class="hover-label">PINOT NOIR</a><br />
        <a href="#" class="hover-label">SAUVIGNON BLANC</a><br />
        <a href="#" class="hover-label">SHIRAZ/SYRAH</a><br />
        <a href="#" class="hover-label">CARMENERE</a><br />
        <a href="#" class="hover-label">Xem Tất Cả Giống Nho >></a><br />
        <a href="#" class="hover-label">MALBEC</a><br />
        <a href="#" class="hover-label">TEMPRANILLO</a><br />
      </div>
    </div>
    <div class="navbar-hover-c2">
      <div class="navbar-hover-1">
        <div class="hover1-cot1">
          <a href="#">
            <i class="fas fa-home"></i>
            <span>VANG/CHAMPAGNE</span>
          </a>
        </div>
        <div class="hover1-cot1">
          <a href="#">
            <i class="fas fa-home"></i>
            <span>A - Z VANG & CHAMPAGNE</span>
          </a>
        </div>
        <div class="hover1-cot1">
          <a href="#">
            <i class="fas fa-home"></i>
            <span>HỘP QUÀ TẾT</span>
          </a>
        </div>
        <div class="hover1-cot1">
          <a href="#">
            <i class="fas fa-home"></i>
            <span>VANG ORGANIC</span>
          </a>
        </div>
        <div class="hover1-cot1">
          <a href="#">
            <i class="fas fa-home"></i>
            <span>VANG BỊCH</span>
          </a>
        </div>
        <div class="hover1-cot1">
          <a href="#">
            <i class="fas fa-home"></i>
            <span>GRAND CRU CLASSE 1855</span>
          </a>
        </div>
        <div class="hover1-cot1">
          <a href="#">
            <i class="fas fa-home"></i>
            <span>GRAND CRU CLASSE - SAINT EMILION</span>
          </a>
        </div>
        <div class="hover1-cot1">
          <a href="#">
            <i class="fas fa-home"></i>
            <span>OLD VINTAGE</span>
          </a>
        </div>
      </div>
      <div class="navbar-hover-2">
        <h5>LOẠI VANG</h5>
        <br />
        <a href="#" class="hover-label">CHAMPAGNE</a><br />
        <a href="#" class="hover-name-wine">Brut</a><br />
        <a href="#" class="hover-name-wine">Rose</a><br />
        <a href="#" class="hover-label">VANG ĐỎ</a><br />
        <a href="#" class="hover-label">VANG TRẮNG</a><br />
        <a href="#" class="hover-label">VANG HỒNG</a><br />
        <a href="#" class="hover-label">VANG NGỌT</a><br />
        <a href="#" class="hover-label">VANG NỔ/SPARKLING</a><br />
        <a href="#" class="hover-name-wine">Brut, Rose, Sweet</a><br />
        <a href="#" class="hover-name-wine">Prosecco</a><br />
        <a href="#" class="hover-name-wine">Cava</a><br />
        <a href="#" class="hover-label">FORTIFIED WINE</a><br />
        <a href="#" class="hover-name-wine">Port</a><br />
        <a href="#" class="hover-name-wine">Sherry</a><br />
        <a href="#" class="hover-label">VANG TRÁI CÂY</a><br />
      </div>
      <div class="navbar-hover-3">
        <h5>XUẤT XỨ</h5>
        <br />
        <a href="#" class="hover-label">VANG PHÁP</a><br />
        <a href="#" class="hover-label">VANG CHILE</a><br />
        <a href="#" class="hover-label">VANG Ý</a><br />
        <a href="#" class="hover-label">VANG ÚC</a><br />
        <a href="#" class="hover-label">VANG MỸ</a><br />
        <a href="#" class="hover-label">VANG TÂY BAN NHA</a><br />
        <a href="#" class="hover-label">VANG NEW ZEALAND</a><br />
        <a href="#" class="hover-label">VANG ARGENTINA</a><br />
        <a href="#" class="hover-label">VANG NAM PHI</a><br />
        <a href="#" class="hover-label">VANG BỒ ĐÀO NHA</a><br />
        <a href="#" class="hover-label">VANG ĐỨC</a><br />
      </div>
      <div class="navbar-hover-4">
        <h5>VÙNG LÀM VANG</h5>
        <br />
        <a href="#" class="hover-label">BORDEAUX</a><br />
        <a href="#" class="hover-label">BURGUNDY</a><br />
        <a href="#" class="hover-label">TUSCANY</a><br />
        <a href="#" class="hover-label">NAPA VALLY</a><br />
        <a href="#" class="hover-label">BAROSSA VALLEY</a><br />
        <a href="#" class="hover-label">COLCHAGUA VALLY</a><br />
        <a href="#" class="hover-label">MENZODA</a><br />
        <a href="#" class="hover-label">PUGLIA</a><br />
        <a href="#" class="hover-label">RIOJA</a><br />
        <a href="#" class="hover-label">MARLBOROUGH</a><br />
      </div>
      <!-- <div class="navbar-hover-5">
        <h5>GIỐNG NHO</h5>
        <br />
        <a href="#" class="hover-label">CABERNET SAUVIGNON</a><br />
        <a href="#" class="hover-label">CHARDONNAY</a><br />
        <a href="#" class="hover-label">MERLOT</a><br />
        <a href="#" class="hover-label">NEGROAMARO</a><br />
        <a href="#" class="hover-label">PINOT NOIR</a><br />
        <a href="#" class="hover-label">SAUVIGNON BLANC</a><br />
        <a href="#" class="hover-label">SHIRAZ/SYRAH</a><br />
        <a href="#" class="hover-label">CARMENERE</a><br />
        <a href="#" class="hover-label">Xem Tất Cả Giống Nho >></a><br />
        <a href="#" class="hover-label">MALBEC</a><br />
        <a href="#" class="hover-label">TEMPRANILLO</a><br />
      </div> -->
    </div>
    <div class="intro-info">
      <div class="d-flex flex-column" style="margin-right: 20px">
        <div class="p-2">
          <img
            src="https://sanhruou.com/media/14743/pagebuilder/Hop-qua-tet-whisky-2024.jpg"
            alt="quatet"
          />
        </div>
        <div class="p-2">
          <h3>BỘ SƯU TẬP HỘP QUÀ WHISKY TẾT 2024</h3>
          <p>Bộ sưu tập hộp quà Tết Giáp Thìn 2024</p>
        </div>
        <div class="p-2">
          <a href="#">Single malt</a>
          <a href="#">Blended Whisky</a>
        </div>
      </div>
      <div class="d-flex flex-column">
        <div class="p-2">
          <img
            src="https://sanhruou.com/media/14855/pagebuilder/Christmas-2023.jpg"
            alt="quatet"
          />
        </div>
        <div class="p-2">
          <h3>MERRY CHRISMAS</h3>
          <p>Giáng Sinh/Noel 2023</p>
        </div>
        <div class="p-2">
          <a href="#">Single malt</a>
          <a href="#">Vang Đỏ</a>
        </div>
      </div>
    </div>
    <div class="content-body">
      <div class="container">
        <br />
        <hr
          style="
            color: #b39851;
            border: solid 1px;
            position: relative;
            z-index: 6;
            width: 1420px;
            margin-left: -180px;
            margin-top: 50px;
          "
        />
        <div class="content-header">
          <h3 style="color: #b39851">MÙA ĐÔNG & NĂM MỚI</h3>
        </div>
        <div class="content-new">
          <div class="d-flex flex-column" style="margin-right: 20px">
            <div class="p-2">
              <img
                src="https://sanhruou.com/media/14745/pagebuilder/Hop-qua-Cognac-Vodka-Gin-Spirits-2024.jpg"
                alt="quatet"
              />
            </div>
            <div class="p-2">
              <h3>
                HỘP QUÀ TẾT COGNAC & SPIRITS<br />
                KHÁC 2024
              </h3>
              <p>
                Bộ sưu tập hộp quà Tết Cognac, Vodka, Gin,.. Tết Giáp Thìn 2024
              </p>
            </div>
            <div class="p-2">
              <a href="#">Cognac</a>
              <a href="#">Vodka</a>
            </div>
          </div>
          <div class="d-flex flex-column">
            <div class="p-2">
              <img
                src="https://sanhruou.com/media/6802/pagebuilder/winter-drams-whisky.jpg"
                alt="quatet"
              />
            </div>
            <div class="p-2">
              <h3>WHISKY MÙA ĐÔNG KHÓI LỬA</h3>
              <p>Bộ sưu tập hộp quà Tết Giáp Thìn 2024</p>
            </div>
            <div class="p-2">
              <a href="#">Whisky khói</a>
              <a href="#">Singgle malt</a>
            </div>
          </div>
        </div>
        <div class="content-detail">
          <div class="d-flex flex-column">
            <div class="p-2">
              <img
                src="https://sanhruou.com/media/14626/pagebuilder/Top-10-The-Scotch-Whisky-Master-2023.jpg"
                alt="quatet"
              />
            </div>
            <div class="p-2">
              <h3>
                TOP 10 SCOTCH<br />
                WHISKY MASTER KHÁC 2024
              </h3>
              <p>
                Bộ sưu tập hộp quà Tết Cognac, Vodka, Gin,.. Tết Giáp Thìn 2024
              </p>
            </div>
            <div class="p-2">
              <a href="#">Cognac</a>
              <a href="#">Vodka</a>
            </div>
          </div>
          <div class="d-flex flex-column">
            <div class="p-2">
              <img
                src="https://sanhruou.com/media/13707/pagebuilder/Umeshu-ruou-mo-Nhat-Ban.jpg"
                alt="quatet"
              />
            </div>
            <div class="p-2">
              <h3>
                HỘP QUÀ TẾT COGNAC & SPIRITS<br />
                KHÁC 2024
              </h3>
              <p>
                Bộ sưu tập hộp quà Tết Cognac, Vodka, Gin,.. Tết Giáp Thìn 2024
              </p>
            </div>
            <div class="p-2">
              <a href="#">Cognac</a>
              <a href="#">Vodka</a>
            </div>
          </div>
          <div class="d-flex flex-column" style="margin-right: 20px">
            <div class="p-2">
              <img
                src="https://sanhruou.com/media/14904/pagebuilder/Johnnie-Walker-Blue-Rong-2024.jpg"
                alt="quatet"
              />
            </div>
            <div class="p-2">
              <h3>
                HỘP QUÀ TẾT COGNAC & SPIRITS<br />
                KHÁC 2024
              </h3>
              <p>
                Bộ sưu tập hộp quà Tết Cognac, Vodka, Gin,.. Tết Giáp Thìn 2024
              </p>
            </div>
            <div class="p-2">
              <a href="#">Cognac</a>
              <a href="#">Vodka</a>
            </div>
          </div>
          <div class="d-flex flex-column">
            <div class="p-2">
              <img
                src="https://sanhruou.com/media/14848/pagebuilder/Penfolds-vang-cua-nam-2023.jpg"
                alt="quatet"
              />
            </div>
            <div class="p-2">
              <h3>
                HỘP QUÀ TẾT COGNAC & SPIRITS<br />
                KHÁC 2024
              </h3>
              <p>
                Bộ sưu tập hộp quà Tết Cognac, Vodka, Gin,.. Tết Giáp Thìn 2024
              </p>
            </div>
            <div class="p-2">
              <a href="#">Cognac</a>
              <a href="#">Vodka</a>
            </div>
          </div>
        </div>
        <div class="content-other">
            <div class="d-flex flex-column">
    
              <div class="p-2">
                  <img
                    src="https://sanhruou.com/Themes/OffShoreNet/Content/images/rong-png-quick-link-bg-2.png"
                    alt="quatet"
                  />
                </div>
        </div>

      </div>
      <hr
      style="
        color: #b39851;
        border: solid 1px;
        position: relative;
        z-index: 6;
        width: 1420px;
        margin-left: -180px;
        margin-top: 50px;
      "
    />
    <div class="content-header">
      <h3 style="color: #b39851">MÙA ĐÔNG & TẾT</h3>
    </div>
    <br>
      <div class="content-product">
        @foreach($products as $index => $product)
        @if($index % 6 == 0)
        <div class="content-product-detail">
        @endif
        <div class="col-md-2">
            <div class="d-flex flex-column">
                <div class="p-2">
                    <img src="{{ asset($product->thumbnail) }}" alt="{{ $product->title }}" />
                </div>
                <div class="p-2">
                  <a href="{{ route('detailProduct', ['id' => $product->id]) }}">{{$product->title}}</a>
                    <br>
                    <p style="margin-bottom:0px;">Giá gốc: {{ number_format($product->price) }}đ</p>
                    <p>Giá giảm:{{ number_format($product->discount) }}đ</p> <!-- Hiển thị thông tin discount -->
                </div>
            </div>
        </div>
        @if(($index + 1) % 6 == 0 || $loop->last)
            </div>
        @endif
    @endforeach

      
      </div>
      <hr
      style="
        color: #b39851;
        border: solid 1px;
        position: relative;
        z-index: 6;
        width: 1420px;
        margin-left: -180px;
        margin-top: 50px;
      "
    />
    <div class="content-header">
      <h3 style="color: #b39851">THƯƠNG HIỆU</h3>
    </div>
    <br>
    <div class="brand">
        <div class="content-brand">
            <div class="d-flex flex-column mb-3">
                <div class="p-2">
                    <a href="#">
                        <img src="https://sanhruou.com/media/370/catalog/moet-chandon.jpg?size=250">
                    </a>
                    
                </div>
                <div class="p-2">MOET & CHANDON</div>
            </div>
            <div class="d-flex flex-column mb-3">
                <div class="p-2">
                    <img src="https://sanhruou.com/media/370/catalog/moet-chandon.jpg?size=250">
                </div>
                <div class="p-2">MOET & CHANDON</div>
            </div>
            <div class="d-flex flex-column mb-3">
                <div class="p-2">
                    <img src="https://sanhruou.com/media/370/catalog/moet-chandon.jpg?size=250">
                </div>
                <div class="p-2">MOET & CHANDON</div>
            </div>
            <div class="d-flex flex-column mb-3">
                <div class="p-2">
                    <img src="https://sanhruou.com/media/370/catalog/moet-chandon.jpg?size=250">
                </div>
                <div class="p-2">MOET & CHANDON</div>
            </div>
            <div class="d-flex flex-column mb-3">
                <div class="p-2">
                    <img src="https://sanhruou.com/media/370/catalog/moet-chandon.jpg?size=250">
                </div>
                <div class="p-2">MOET & CHANDON</div>
            </div>
            <div class="d-flex flex-column mb-3">
                <div class="p-2">
                    <img src="https://sanhruou.com/media/370/catalog/moet-chandon.jpg?size=250">
                </div>
                <div class="p-2">MOET & CHANDON</div>
            </div>
        </div>
        <button>Hiển thị tất cả</button>
        <br>
        <!-- <div class="content-brand-1">
            <div class="d-flex flex-column mb-3">
                <div class="p-2">
                    <a href="#">
                        <img src="https://sanhruou.com/media/370/catalog/moet-chandon.jpg?size=250">
                    </a>
                    
                </div>
                <div class="p-2">MOET & CHANDON</div>
            </div>
            <div class="d-flex flex-column mb-3">
                <div class="p-2">
                    <img src="https://sanhruou.com/media/370/catalog/moet-chandon.jpg?size=250">
                </div>
                <div class="p-2">MOET & CHANDON</div>
            </div>
            <div class="d-flex flex-column mb-3">
                <div class="p-2">
                    <img src="https://sanhruou.com/media/370/catalog/moet-chandon.jpg?size=250">
                </div>
                <div class="p-2">MOET & CHANDON</div>
            </div>
            <div class="d-flex flex-column mb-3">
                <div class="p-2">
                    <img src="https://sanhruou.com/media/370/catalog/moet-chandon.jpg?size=250">
                </div>
                <div class="p-2">MOET & CHANDON</div>
            </div>
            <div class="d-flex flex-column mb-3">
                <div class="p-2">
                    <img src="https://sanhruou.com/media/370/catalog/moet-chandon.jpg?size=250">
                </div>
                <div class="p-2">MOET & CHANDON</div>
            </div>
            <div class="d-flex flex-column mb-3">
                <div class="p-2">
                    <img src="https://sanhruou.com/media/370/catalog/moet-chandon.jpg?size=250">
                </div>
                <div class="p-2">MOET & CHANDON</div>
            </div>
        </div> -->

        
    </div>
    <div class="footer">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <h3>BÁN KÝ GỬI</h3>
            <p>
              Vấn đề quan ngại của bạn là gì? Tôi chắc rằng đó là bán được giá tốt nhất, tính bảo mật và an toàn trong giao dịch. Để bán được chai rượu ngoại cũ với giá tốt nhất đó là đúng nhu cầu và đúng thời điểm và đúng khách hàng. Vậy chúng tôi có phải là người mua giá tốt nhất? Tôi chắc là có thể với giá phù hợp nhất.
Chúng tôi sinh ra không phải để chuyên thu mua rượu ngoại cũ tại Tp.HCM, Hà Nội cũng như cả nước. Mà chúng tôi mở ra chuyên mục này như là dịch vụ cộng thêm nhằm đáp ứng cho khách hàng thân thuộc của chúng tôi với giá tốt nhất có thể và sưu tầm.
            </p>
          </div>
          <div class="col-md-6">
            <img src="https://sanhruou.com/media/8137/pagebuilder/Thu-mua-ruou-ngoai-cu-ruou-tay.jpg" alt="">
          </div>
        </div>
      </div>
    </div>
    </div>


  </body>
</html>
