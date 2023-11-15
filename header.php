<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="css/reset.css">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.2/css/bootstrap.min.css" integrity="sha512-rt/SrQ4UNIaGfDyEXZtNcyWvQeOq0QLygHluFQcSjaGB04IxWhal71tKuzP6K8eYXYB6vJV4pHkXcmFGGQ1/0w==" crossorigin="anonymous" referrerpolicy="no-referrer" /> -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/stylesheet.css">
</head>
<body>
    <div class="wrapper">
        <header class="header-destop">
            <div class="header_menu">
              <div class="container">
                <div class="row">
                    <div class="col-md-2 col-1 d-block d-lg-none">
                        <div class="nav-toggle">
                            <i class="fa fa-bars" aria-hidden="true"></i>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-6 col-6">
                        <div class="logo-header">
                            <div class="logo_pc ">
                                <a href="index.php"><img src="img/nencer_creative.png" alt="" class="w-100"></a>
                            </div>
                            <div class="header-language position-relative">
                                <div role="button" class="header-language_btn link-default hstack">
                                    <div class="header-language_btn__item">
                                        <img src="https://nencer.com/storage/userfiles/images/vn.png" alt="">
                                    </div>
                                    <i class="fas fa-angle-down d-none d-xl-inline"></i>
                                </div>
                                <ul class="list-unstyled mb-0 header-language_list position-absolute">
                                    <li>
                                        <a href="" class="language-item language-item_active hstack align-items-center">
                                            <img src="https://nencer.com/storage/userfiles/images/vn.png" alt="Tiếng Việt"> Tiếng Việt
                                        </a>
                                    </li>
                                    <li>
                                        <a href="" class="language-item language-item_active hstack align-items-center">
                                            <img src="https://nencer.com/storage/userfiles/images/en.png" alt="English"> English
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                  <div class="col-xl-10 col-lg-9 col-sm-8 menu_mb">
                      <nav class="menu_main nav is-fixed" role="navigation">
                          <div class="nav-container">
                              <svg class="icon_close d-block d-lg-none" viewBox="0 0 16 14"> 
                                  <path d="M15 0L1 14m14 0L1 0" stroke="currentColor" fill="none" fill-rule="evenodd"></path> 
                              </svg>
                              <ul class="nav-menu menu clearfix list-inline">       
                                <li class="menu-item ">
                                    <a href="gioithieu.php" class="menu-link">Giới thiệu</a>
                                </li>     
                                <li class="menu-item has-dropdown">
                                    <a href="" class="menu-link">Phần mềm </a>
                                    <ul class="nav-dropdown menu">
                                        <li class="menu-item">
                                            <a href="soft.php" class="menu-link">Thiết kế phần mềm bán hàng</a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="soft.php" class="menu-link">Thiết kế  phần mềm </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-item has-dropdown">
                                    <a href="#" class="menu-link ">Thiết kế web</a>
                                    <ul class="nav-dropdown menu">
                                        <li class="menu-item">
                                            <a href="webdesign.php" class="menu-link">Thiết kế website bán hàng</a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="webdesign.php" class="menu-link">Thiết kế website bất động sản</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-item has-dropdown">
                                    <a href="" class="menu-link">Dịch vụ số</a>
                                    <ul class="nav-dropdown menu">
                                        <li class="menu-item">
                                            <a href="service..php" class="menu-link">Dịch vụ hosting</a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="service.php" class="menu-link">Dịch vụ cho thuê web</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-item">
                                    <a href="" class="menu-link">Cho thuê web</a>
                                </li>
                               
                                <li class="menu-item">
                                    <a href="post.php" class="menu-link">Blog</a>
                                </li>
                                <li class="menu-item hotline_header d-none ">
                                    <a href="tel:0123456789">0123456789</a>
                                </li>
                                <li class="menu-item btn_acount d-flex">
                                    <a href="login.php">Đăng nhập</a>
                                </li>
                                <li class="menu-item btn_acount d-flex">
                                    <a href="register.php">Đăng ký</a>
                                </li>
                                <li class="menu-item d-none d-flex align-items-center logined-acc">
                                    <a class="account">Tài khoản</a>
                                    <div class="logined">
                                        <div class="username-logined">
                                            <span class="hello">Xin chào</span>
                                            <span class="username">Nguyễn Văn Nghĩa</span>
                                        </div>
                                        <ul class="logined-list">
                                            <li>
                                                <a href="">Các dịch vụ</a>
                                            </li>
                                            <li>
                                                <a href="">Các hóa đơn</a>
                                            </li>
                                            <li>
                                                <a href="">Thông tin tài khoản</a>
                                            </li>
                                            <li>
                                                <a href="">Quỹ số dư</a>
                                            </li>
                                            <li>
                                                <a href="">Bảo mật</a>
                                            </li>
                                            <li>
                                                <a href="">Hoa hồng</a>
                                            </li>
                                            <li>
                                                <a href="">Đổi mật khẩu</a>
                                            </li>
                                        </ul>
                                        <div class="logout">
                                            <span>Đăng xuất</span>
                                        </div>
                                    </div>
                                </li>
                                
                            </ul>
                          </div>
                      </nav>
                  </div>
                </div>
              </div>
            </div>
            <div class="opacity_menu"></div>
        </header>
        <header class="header-mobile visible-sm">
            <div class="container">
                <div class="row">
                  <div class="col-md-2 col-2 d-block d-lg-none">
                    <button class="nav-toggle">
                        <span></span>
                    </button>
                  </div>
                  <div class="col-xl-2 col-lg-3 col-md-6 col-8 justify-content-center">
                      <div class="logo_pc text-center">
                          <a href=""><img src="img/nencer_creative.png" alt="" class="w-100"></a>
                      </div>
                  </div>
                  <div class="col-md-2 col-lg-0 col-2 d-lg-none">
                    <div class="user">

                    </div>
                  </div>
                  <div class="col-xl-10 col-lg-9 col-sm-8 menu_mb">
                      <nav class="menu_main nav is-fixed" role="navigation">
                          <div class="nav-container">
                              <div class="menuMobile__header">
                                <div class="menuMobile__avatar"><img src="img/default-avatar.png" alt="user"></div>
                                    <div class="menuMobile__btn">
                                        <button type="button" class="btn btn_outlineOrange btn_sm formLogin__click"><span>Đăng nhập</span></button>
                                        <button type="button" class="btn btn_orange btn_sm formLogin__click"><span>Đăng ký</span></button>
                                    </div>
                                </div>
                              <ul class="nav-menu menu clearfix list-inline">       
                                <li class="menu-item active">
                                    <a href="gioithieu.php" class="menu-link">giới thiệu</a>
                                </li>     
                                <li class="menu-item has-dropdown">
                                    <a href="soft.php" class="menu-link">Phần mềm </a>
                                    <ul class="nav-dropdown menu">
                                        <li class="menu-item">
                                            <a href="soft.php" class="menu-link">Thiết kế phần mềm bán hàng</a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="soft.php" class="menu-link">Thiết kế  phần mềm </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-item has-dropdown">
                                    <a href="#" class="menu-link ">Thiết kế web</a>
                                    <ul class="nav-dropdown menu">
                                        <li class="menu-item">
                                            <a href="webdesign.php" class="menu-link">Thiết kế website bán hàng</a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="webdesign.php" class="menu-link">Thiết kế website bất động sản</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-item has-dropdown">
                                    <a href="" class="menu-link">Dịch vụ số</a>
                                    <ul class="nav-dropdown menu">
                                        <li class="menu-item">
                                            <a href="service.php" class="menu-link">Dịch vụ hosting</a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="service.php" class="menu-link">Dịch vụ cho thuê web</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-item">
                                    <a href="" class="menu-link">Cho thuê web</a>
                                </li>
                               
                                <li class="menu-item">
                                    <a href="post.php" class="menu-link">Blog</a>
                                </li >
                                <li class="menu-item">
                                    <div class="dropdown language">
                                        <button class="ant-dropdown-trigger dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                            <img src="img/vn.png" alt=""><span>Tiếng Việt</span> 
                                        </button>
                                        <div class="">
                                            <div class="ant-dropdown ant-dropdown-placement-bottomLeft ant-dropdown-hidden">
                                                <ul class="ant-dropdown-menu ant-dropdown-menu-light">
                                                    <li class="ant-dropdown-menu-item ant-dropdown-menu-item-only-child ant-dropdown-menu-item-selected">
                                                        <button class="language__link">
                                                            <img src="img/vn.png" alt=""><span>Tiếng Việt</span>
                                                        </button>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="menu-item hotline_header  ">
                                    <a href="tel:0123456789">0123456789</a>
                                </li>
                                <li class="menu-item hotline_header mail-mobi">
                                    <a href="tel:0123456789">Nencer@gmail.com</a>
                                </li>
                            </ul>
                          </div>
                      </nav>
                  </div>
                </div>
              </div>
        </header>