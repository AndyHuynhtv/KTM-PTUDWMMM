
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
    <link rel="stylesheet" href="/template/admin/dist/css/detailProduct.css">
    <link rel="stylesheet" href="/template/admin/dist/css/register.css">

  </head>
  <body>
    <div class="menu1">
      <div class="nav-bar1">
        <ul class="nav justify-content-end">
          <li class="nav-item" >
            <a class="nav-link" href="#">Hotline: 0906711005</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">LIÊN HỆ</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="#">BLOG</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('login')}}">
              LOGIN
            </a>
          </li>
        </ul>
      </div>
      <div class="menu-container">
        <div class="menu-bar">
          <nav class="navbar navbar-expand-sm">
            @if(auth()->check())
                  <a class="navbar-brand" href="{{ route('user') }}">
                    <img
                    src="https://sanhruou.com/media/8387/content/logo-sanh-ruou-2022.png"
                    alt="logo"
                    style="width: 300px; height: 150px"
                  /></a>
              @else
                  <a class="navbar-brand" href="{{ route('index') }}">              <img
                    src="https://sanhruou.com/media/8387/content/logo-sanh-ruou-2022.png"
                    alt="logo"
                    style="width: 300px; height: 150px"
                  /></a>
              @endif

            <form class="form-inline">
              <div class="input-group">
                <input
                  class="search-bar"
                  type="text"
                  class="form-control"
                  placeholder="Bạn đang tìm kiếm cái gì?"
                />
                <div class="input-group-prepend">
                  <a class="input-group-text" href="#">
                    <i
                      class="fa fa-search"
                      style="font-size: 35px; color: #af9c60; padding-left: 5px"
                    ></i>
                  </a>
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
      {{-- <div class="menu1-line-icon">
        <div
          clas="menu1-line-icon-contain"
          style="
            padding-left: 300px;
            color: white;
            font-size: 20px;
            padding-top: 8px;
          "
        >
          <a href="index.html" style="color: white; text-decoration: none">
            <i class="fa fa-home" aria-hidden="true"></i>
            <span>Trang chủ</span>
          </a>
          <span> > </span>
          <a href="#" style="color: white; text-decoration: none">Rượu vang</a>
          <span> > </span>
          <span>Champagne</span>
        </div>
      </div> --}}
    </div>
    <div class="icon-title-line"></div>
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
    </div>
    <div class="product-show">
        <div class="product-show-detail">
            <div class="container"  style="height: 550px; width: 100%;">
                @if ($errors->any())
                <div class="alert alert-danger">
                    {{ $errors->first() }}
                </div>
                @endif
                <div class="register-form">
                    <h3>ĐĂNG KÝ</h3>
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="form-group">
                            <label for="fullname">Họ và tên:</label>
                            <input type="text" id="fullname" name="fullname" value="{{ old('fullname') }}" required autofocus>
                        </div>
                
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" id="email" name="email" value="{{ old('email') }}" required>
                        </div>
                
                        <div class="form-group">
                            <label for="password">Mật khẩu:</label>
                            <input type="password" id="password" name="password" required>
                        </div>
                
                        <div class="form-group">
                            <label for="phone_number">Số điện thoại:</label>
                            <input type="text" id="phone_number" name="phone_number" value="{{ old('phone_number') }}" required>
                        </div>
                
                        <button type="submit">Đăng ký</button>
                    </form>
                </div>
                
        </div>
</div>

</body>
</html>

