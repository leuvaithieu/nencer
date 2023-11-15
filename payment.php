<?php
    include 'header.php';
?>
        <main class="main">
           
            <section class="cart_step hidden-sm">
                <div class="container">
                    <ul class="row">
                        <li class="col-sm-3 inactive">
                            <img src="img/cart-1-icon.png" alt="">
                            <figure>
                                <p>BƯỚC 1</p>
                                <span>Kiểm tra</span>
                            </figure>
                        </li>
                        <li class="col-sm-3 ">
                            <img src="img/cart-2-icon.png" alt="">
                            <figure>
                                <p>BƯỚC 2</p>
                                <span>Tài khoản</span>
                            </figure>
                        </li>
                        <li class="col-sm-3 inactive">
                            <img src="img/cart-3-icon.png" alt="">
                            <figure>
                                <p>BƯỚC 3</p>
                                <span>Thanh toán</span>
                            </figure>
                        </li>
                        <li class="col-sm-3 inactive">
                            <img src="img/cart-4-icon.png" alt="">
                            <figure>
                                <p>BƯỚC 4</p>
                                <span>Hoàn tất</span>
                            </figure>
                        </li>
                    </ul>
                </div>
            </section>
            <section class="cart_login pt-3">
                <div class="container">
                    <h2>Vui lòng đăng nhập để thanh toán</h2>
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <figure class="tab-content box login" id="content1">
                                <input checked="checked" type="radio" id="__login" name="login_radio" value="1" class="css-checkbox-x2 check_account">
                                <label for="__login" class="css-label-x2">Bạn đã là khách hàng </label>
                                <figure class="inner login_content">
                                    <p>Bạn đã có tài khoản? Hãy đăng nhập.</p>
                                    <div class="nav nav-tabs two_method_login">
                                        <div>
                                            <span>Thông tin đăng nhập</span>
                                        </div>
                                    </div>
                                    <div  class="tab-pane">
                                        <form action="" method="post">
                                            <ul>
                                                <li>
                                                    <img src="img/user.gif" alt="">
                                                    <input name="username" type="text" placeholder="Nhập Username hoặc Email">
                                                    <input name="referer" value="https://nhanhoa.com/?site=cart" id="1" class="css-checkbox" type="hidden">
                                                </li>
                                                <li>
                                                    <img src="img/pass.gif" alt="">
                                                    <input type="password" name="password" placeholder="Mật khẩu">
                                                </li>
                                                <li><a href="#" title="">Bạn quên mật khẩu?</a></li>
                                                <li><input type="submit" value="Đăng nhập tài khoản">
                                            </li></ul>
                                        </form>
                                    </div>    
                                </figure>
                            </figure>
                        </div>
                        <div class="col-12 col-md-6">
                            <figure class="tab-content box signup" id="content2">
                                <input type="radio" id="signup" name="login_radio" value="2" class="css-checkbox-x2 check_account">
                                <label for="signup" class="css-label-x2">Bạn chưa có tài khoản</label>
                                <figure class="inner signup_content disableddiv">
                                    <div class="login_fb_goo ">
                                    <p>Với một tài khoản duy nhất bạn có thể dễ dàng đăng ký &amp; quản lý các dịch vụ của bạn tại Nhân Hòa</p>
                                            <ul class="btns">
                                                <li><a href="javascript:;" title="" class="btn_signup btn_register">Đăng ký tài khoản miễn phí</a></li>
                                            </ul>
                                        </div>
                                    <div class="register hide">
                                        <p>Vui lòng nhập các thông tin sau:</p>
                                        <form id="form_regiter" name="register_form" method="POST">
                                            <input type="hidden" name="cus_country" value="231">
                                            <ul id="login_info" class="form_signup">
                                                <li>
                                                    <label>Địa chỉ Email <small>(*)</small></label>
                                                    <span>
                                                        <input class="form-control username" type="email" etype="email" emsg="Email không được để trống" name="username" value="" placeholder="Nhập email đăng ký">
                                                    </span>
                                                </li>
                                                <li>
                                                        <label>Mật khẩu<small>(*)</small></label>
                                                    <span>
                                                        <input class="form-control password" etype="password" type="password" placeholder="Mật khẩu" emsg="Mật khẩu không được bỏ trống">
                                                    </span>
                                                </li>
                                                <li>
                                                        <label>Xác nhận mật khẩu<small>(*)</small></label>
                                                    <span>
                                                        <input class="form-control re_password" type="password" placeholder="Xác nhận mật khẩu" name="password" emsg="Bạn phải xác nhận lại mật khẩu">
                                                    </span>
                                                </li>
                                                </ul>
                                                <ul class="form_signup">
                                                
                                                <li>
                                                    <label>Bạn là <small>(*)</small></label>
                                                    <span style="padding:10px 0px">
                                                        <input name="own_type" checked="checked" value="0" type="radio" id="btn_own_type_1" class="css-checkbox btn_own_type">
                                                        <label for="btn_own_type_1" class="css-label">Cá nhân</label>
                                                        <input name="own_type" type="radio" value="1" id="btn_own_type_2" class="css-checkbox btn_own_type">
                                                        <label for="btn_own_type_2" class="css-label">Tổ chức</label>
                                                    </span>
                                                </li>
                                            </ul>
                                            <ul id="personal" class="form_signup personal">
                                                <li>
                                                    <label>Họ tên <small>(*)</small></label>
                                                    <span>
                                                        <div class="custom-select hidden fa-angle-down">
                                                            <select class="form-control" name="cn_gender">                        
                                                                <option value="1">Ông</option>
                                                                <option value="2">Bà</option>
                                                            </select> 
                                                        </div>
                                                        <input style="width:100%;" type="text" name="cn_name" value="" class="sex form-control" placeholder="Tên người đăng ký" emsg="Hộ tên không được bỏ trống">
                                                        <figure class="note">
                                                                <p style="color:#3f4967">Nhập tên Tiếng Việt có dấu dầy đủ theo CMND </p>
                                                                <p><strong class="blue">VD: Nguyễn Văn A</strong></p>
                                                                <p style="color:#3f4967">Tên miền Việt Nam sẽ không đổi được tên chủ thể và cũng không sử dụng được nếu quý khách không nhập đúng và đầy đủ theo hướng dẩn.</p>
                                                            </figure>
                                                    </span>
                                                </li>
                                                
                                                </ul>
                                                <ul id="organization" class="form_signup organization hide">
                                                    <li>
                                                        <label for="tc_company">Tên tổ chức<small>(*)</small></label>
                                                            <span>
                                                            <input class="form-control" id="tc_company" maxlength="250" name="tc_company" type="text" placeholder="Tên công ty(Tổ chức)" emsg="Tên tổ chức không được bỏ trống">
                                                        </span>
                                                    </li>
                                                    <li>
                                                        <label for="tc_company">Mã số thuế<small>(*)</small></label>
                                                            <span>
                                                            <input class="form-control" id="tc_tc_mst" maxlength="250" name="tc_tc_mst" type="text" placeholder="Nhập mã số thuế" emsg="Mã số thuế không được bỏ trống">
                                                        </span>
                                                    </li>
                                                              
                                                </ul>
                                                <ul class="form_signup">
                                                <li>
                                                        <label>Điện thoại <small>(*)</small></label>
                                                    <span>
                                                        <input class="form-control cn_phone" name="cn_phone" etype="phone" type="text" placeholder="Điện thoại" emsg="Điện thoại không được bỏ trống">
                                                    </span>
                                                </li>
                                                <li class="">
                                                    <label>Khu vực hỗ trợ <small>(*)</small></label>
                                                    <span>
                                                        <select class="form-control cus_location" name="cus_location" emsg="Vui lòng chọn khu vực hỗ trợ">
                                                            
                                                            <option value="hn">Hà Nội</option>
                                                            <option value="hcm">Hồ Chí Minh</option>
                                                         </select> 
                                                    </span>
                                                </li>                                    <li>
                                                <p><strong class="blue">Thông tin địa chỉ</strong></p>
                                            </li>
        
                                            <li class="">
                                                <label>Quốc Gia <small>(*)</small></label>
                                                <span>
                                                    <select class="form-control " name="cus_country" id="" emsg="Vui lòng chọn quốc gia">
                                                        <option value="231">
                                                            Việt Nam
                                                        </option>
                                                     </select> 
                                                </span>
                                            </li>
                                            <li class="">
                                                <label>Tỉnh/Thành phố <small>(*)</small></label>
                                                <span>
                                                    <select class="form-control " name="cus_city" id="cus_city" emsg="Vui lòng chọn Tỉnh/Thành phố">
                                                        <option value="">---- Vui lòng chọn Thành Phố ----</option><option value="1">Hồ Chí Minh</option><option value="2">Hà Nội</option><option value="3">An Giang</option><option value="4">Bạc Liêu</option><option value="5">Bà Rịa - Vũng Tàu</option><option value="6">Bắc Kạn</option><option value="7">Bắc Giang</option><option value="8">Bắc Ninh</option><option value="9">Bến Tre</option><option value="10">Bình Dương</option><option value="11">Bình Định</option><option value="12">Bình Phước</option><option value="13">Bình Thuận</option><option value="14">Cao Bằng</option><option value="15">Cà Mau</option><option value="16">Cần Thơ</option><option value="17">Đà Nẵng</option><option value="18">Đắk Lắk</option><option value="19">Đồng Nai</option><option value="20">Đồng Tháp</option><option value="21">Hà Giang</option><option value="23">Hà Nam</option><option value="24">Hà tây</option><option value="25">Hà Tĩnh</option><option value="26">Hải Dương</option><option value="27">Hải Phòng</option><option value="28">Hòa Bình</option><option value="29">Hưng Yên</option><option value="30">Khánh Hòa</option><option value="31">Kiên Giang</option><option value="32">Kon Tum</option><option value="33">Lai Châu</option><option value="34">Lạng Sơn</option><option value="35">Lào Cai</option><option value="36">Lâm Đồng</option><option value="37">Long An</option><option value="38">Nam Định</option><option value="39">Nghệ An</option><option value="40">Ninh Bình</option><option value="41">Ninh Thuận</option><option value="42">Phú Thọ</option><option value="43">Phú Yên</option><option value="44">Quảng Bình</option><option value="45">Quảng Nam</option><option value="46">Quảng Ngãi</option><option value="47">Quảng Ninh</option><option value="48">Quảng Trị</option><option value="49">Sóc Trăng</option><option value="50">Sơn La</option><option value="51">Tây Ninh</option><option value="52">Thái Bình</option><option value="53">Thái Nguyên</option><option value="54">Thanh Hóa</option><option value="55">Thừa Thiên Huế</option><option value="56">Tiền Giang</option><option value="57">Trà Vinh</option><option value="58">Tuyên Quang</option><option value="59">Vĩnh Long</option><option value="60">Vĩnh Phúc</option><option value="61">Yên Bái</option><option value="62">Đắk Nông</option><option value="63">Gia Lai</option><option value="64">Điện Biên</option><option value="65">Hậu Giang</option><option value="66">Buôn Ma Thuột</option><option value="82">Thủ Đức</option><option value="85">Thành phố Biên Hoà</option><option value="93">Thành phố Hồ Chí Minh</option>
                                                     </select> 
                                                </span>
                                            </li>
                                            <li class="">
                                                <label>Quận/Huyện <small>(*)</small></label>
                                                <span>
                                                    <select class="form-control " name="cus_district" id="cus_district" emsg="Vui lòng chọn Quận/Huyện">
                                                        
                                                     </select> 
                                                </span>
                                            </li>
                                            <li class="">
                                                <label>Phường/Xã</label>
                                                <span>
                                                    <select class="form-control " name="cus_town" id="cus_town">
                                                        
                                                     </select> 
                                                </span>
                                            </li>
                                            <li class="">
                                                <label>Địa chỉ (số nhà, ...) <small>(*)</small></label>
                                                <span>
                                                    <input class="form-control" name="cus_address" id="cus_address" emsg="Địa chỉ không được bỏ trống">
                                                </span>
                                            </li>
                                            <li>
                                                <script src="https://www.google.com/recaptcha/api.js"></script>
                                                <span style="margin:0 auto;">
                                                    <div class="g-recaptcha" data-sitekey="6LcwwO0ZAAAAAJcRuSQ4cex029lo0CXIpqI6optZ"><div style="width: 304px; height: 78px;"><div><iframe title="reCAPTCHA" src="https://www.google.com/recaptcha/api2/anchor?ar=1&amp;k=6LcwwO0ZAAAAAJcRuSQ4cex029lo0CXIpqI6optZ&amp;co=aHR0cHM6Ly9uaGFuaG9hLmNvbTo0NDM.&amp;hl=en&amp;v=0hCdE87LyjzAkFO5Ff-v7Hj1&amp;size=normal&amp;cb=ozmgg3vylcb0" width="304" height="78" role="presentation" name="a-m8he9aqjwt1i" frameborder="0" scrolling="no" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox"></iframe></div><textarea id="g-recaptcha-response" name="g-recaptcha-response" class="g-recaptcha-response" style="width: 250px; height: 40px; border: 1px solid rgb(193, 193, 193); margin: 10px 25px; padding: 0px; resize: none; display: none;"></textarea></div><iframe style="display: none;"></iframe></div>
                                                </span>
                                                    
                                            </li>
                                                
        
                                                <li>
                                                        <p><strong class="blue">Ghi chú:</strong> <small>(*)</small> là thông tin bắt buộc</p>
                                                </li>
                                                <li>
                                                        <input class="submit_register" type="submit" value="Tiến hành thanh toán">
                                                </li>
                                                </ul>
                                                </form>
                                      </div>   
                                </figure>
                            </figure>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        <?php
        include 'footer.php';
    ?>