<?php
    include 'header.php';
?>
   
    <main class="main">
      <div class="banner_login">	
        <div class="container" style="padding-top: 25px;"> 		
          <h1 class="tiitle">Đăng ký tài khoản miễn phí!</h1>  
        </div>
      </div>
      <div class="text-note">
        <div class="container"> 
          <p>Quý khách vui lòng nhập đủ các trường thông tin dưới dây để tiến hành tạo tài khoản. Tài khoản được sử dụng để sử dụng các dịch vụ và nhận thông tin nhắc lịch thanh toán cùng các khuyến mại từ Nencer.Sau khi đăng ký thành công, vui lòng check mail để lấy thông tin đăng nhập.</p>
        </div>		
      </div>
      <div class="container">
        <div class="main-form-login">
          <div class="container p-0">
            <div class="row">
              <div class="col-12 col-md-0 col-lg-6 col-login-left">
                <div class="image">
                  <img src="img/image-in-background.6094111e.png" alt="">
                  <div class="privace-content">
                    <div class="row privace-row">
                      <div class="col-3 col-leftt">
                        <img src="img/protected.png" alt="">
                      </div>
                      <div class="col-9 col-rightt">
                        <p class="align-left top titlee">Bảo mật tài khoản của bạn</p>
                        <p class="align-left bottom des">Mọi thông tin của quý khách sẽ được bảo mật an toàn</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-12 col-md-12 col-lg-6 col-login-right">
                <div class="box-login">
                  <div class="content-login-right">
                    <div class="register-title">
                      <h2 class="gh-home-title gh-border-center uk-h4 py-md-4 py-3 text-blue-main">Nhập thông tin khách hàng</h2>
                    </div>
                    <div class="ct-login">
                      <div class="frm-login">
                        <form action="#" method="post" id="registerFormLogin" name="registerFormLogin">
                          <div class="form-item">
                            <span class="form-input">
                              <span class="label-input"><label>Tên đăng nhâp<span>*</span></label></span>
                              <input type="text" placeholder="VD:nencer@gmail.com" data-placeholder="Tên đăng nhâp*" required="" id="username" class="form-control-input" value="">
                            </span>
                          </div>
                          <div class="form-item">
                            <span class="form-input">
                              <span class="label-input"><label>Mật khẩu<span>*</span></label></span>
                              <input type="password" required="" id="repassword" data-placeholder="Mật Khẩu*" class="form-control-input" value="">
                              <span class="form-input-icon show-password">
                                <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 576 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M288 80c-65.2 0-118.8 29.6-159.9 67.7C89.6 183.5 63 226 49.4 256c13.6 30 40.2 72.5 78.6 108.3C169.2 402.4 222.8 432 288 432s118.8-29.6 159.9-67.7C486.4 328.5 513 286 526.6 256c-13.6-30-40.2-72.5-78.6-108.3C406.8 109.6 353.2 80 288 80zM95.4 112.6C142.5 68.8 207.2 32 288 32s145.5 36.8 192.6 80.6c46.8 43.5 78.1 95.4 93 131.1c3.3 7.9 3.3 16.7 0 24.6c-14.9 35.7-46.2 87.7-93 131.1C433.5 443.2 368.8 480 288 480s-145.5-36.8-192.6-80.6C48.6 356 17.3 304 2.5 268.3c-3.3-7.9-3.3-16.7 0-24.6C17.3 208 48.6 156 95.4 112.6zM288 336c44.2 0 80-35.8 80-80s-35.8-80-80-80c-.7 0-1.3 0-2 0c1.3 5.1 2 10.5 2 16c0 35.3-28.7 64-64 64c-5.5 0-10.9-.7-16-2c0 .7 0 1.3 0 2c0 44.2 35.8 80 80 80zm0-208a128 128 0 1 1 0 256 128 128 0 1 1 0-256z"/></svg>                                
                              </span>
                            </span>
                          </div>
                          <div class="form-item">
                            <span class="form-input">
                              <span class="label-input"><label>Nhập lại mật khẩu<span>*</span></label></span>
                              <input type="password" required="" id="password" data-placeholder="Nhập lại mật khẩu*" class="form-control-input" value="">
                              <span class="form-input-icon show-password">
                                <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 576 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M288 80c-65.2 0-118.8 29.6-159.9 67.7C89.6 183.5 63 226 49.4 256c13.6 30 40.2 72.5 78.6 108.3C169.2 402.4 222.8 432 288 432s118.8-29.6 159.9-67.7C486.4 328.5 513 286 526.6 256c-13.6-30-40.2-72.5-78.6-108.3C406.8 109.6 353.2 80 288 80zM95.4 112.6C142.5 68.8 207.2 32 288 32s145.5 36.8 192.6 80.6c46.8 43.5 78.1 95.4 93 131.1c3.3 7.9 3.3 16.7 0 24.6c-14.9 35.7-46.2 87.7-93 131.1C433.5 443.2 368.8 480 288 480s-145.5-36.8-192.6-80.6C48.6 356 17.3 304 2.5 268.3c-3.3-7.9-3.3-16.7 0-24.6C17.3 208 48.6 156 95.4 112.6zM288 336c44.2 0 80-35.8 80-80s-35.8-80-80-80c-.7 0-1.3 0-2 0c1.3 5.1 2 10.5 2 16c0 35.3-28.7 64-64 64c-5.5 0-10.9-.7-16-2c0 .7 0 1.3 0 2c0 44.2 35.8 80 80 80zm0-208a128 128 0 1 1 0 256 128 128 0 1 1 0-256z"/></svg>                                
                              </span>
                            </span>
                          </div>
                          <div class="form-item">
                            <span class="form-input">
                              <span class="label-input"><label>Tên tổ chức/ Cá nhân<span>*</span></label></span>
                              <input type="text" required="" id="person" data-placeholder="Tên tổ chức/ Cá nhân*" class="form-control-input" value="">
                            </span>
                          </div>
                          <div class="form-item">
                            <span class="form-input">
                              <span class="label-input"><label>Điện thoại<span>*</span></label></span>
                              <input type="number" required="" id="phone" data-placeholder="Điện thoại*" class="form-control-input" value="">
                            </span>
                          </div>
                          <div class="form-item">
                            <span class="form-input">
                              <span class="label-input"><label>Email<span>*</span></label></span>
                              <input type="email" required="" id="email" data-placeholder="Email*" class="form-control-input" value="">
                            </span>
                          </div>
                          <div class="form-item form-item-submit">
                            <div class="col-0-submit"></div>
                            <span class="form-submit">
                              <button type="submit" class="ant-btn login-form-button"><span>Đăng ký</span></button>
                            </span>
                            <div class="col-7-submit">
                              <p>Bạn đã có tài khoản? <a href="" class="btn-td Regiter">Đăng nhập ngay!</a></p>
                            </div>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            
          </div>
        </div>
      </div>
    </main>
    
    <?php
        include 'footer.php';
    ?>