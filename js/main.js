$(function(){
  var html=$('html, body'),navContainer=$('.nav-container'),navToggle=$('.nav-toggle'),navDropdownToggle=$('.has-dropdown');
  navToggle.on('click',function(e){
    var $this=$(this);
    e.preventDefault();
    $this.toggleClass('is-active');
    navContainer.toggleClass('is-visible');
    html.toggleClass('nav-open')});
    navDropdownToggle.on('click',
    function(){
      var $this=$(this);
      $this.toggleClass('is-active')});
      navDropdownToggle.on('click','*',
      function(e){e.stopPropagation()
      }
      )
    })
if (window.innerWidth < 1200) {
    $(document).ready(function() {
        $('.nav-toggle').click(function() {
            $('.header').toggleClass('z_index');
            $('.opacity_menu').addClass('open_opacity');
        });
        $('.btn_filter').click(function() {
            $('.group_filter').toggleClass('is-visible');
            $('.opacity_menu').addClass('open_opacity');
        });
        $('.opacity_menu').click(function() {
            $('.nav-container').removeClass('is-visible');
            $('.group_filter').removeClass('is-visible');
            $('.opacity_menu').removeClass('open_opacity');
            $('.header').removeClass('z_index');
            $('.sticky_right').removeClass('active');
        });
    });
}
function increaseValue(id) {
    var value = +document.getElementById(id).value || 0;
    value++;
    document.getElementById(id).value = value;
}
function decreaseValue(id) {
    var value = +document.getElementById(id).value || 0;
    value--;
    if (value < 1) {
        value = '1';
    }
    document.getElementById(id).value = value;
}
$('.input-value-button').change(function(){
    if((this.value) < 1 || (this.value == '')){
        $(this).val(1);
    }
});
$(document).ready(function() {
    $("a[href='#top']").click(function() {
        $("html, body").animate({ scrollTop: 0 }, "slow");
        return false;
    });
    $(window).scroll(function () {
        if ($(window).scrollTop() >=60) {
            $('#go_top').show();
            $('body').addClass('scroll_body');
        }
        else {
            $('#go_top').hide();
            $('body').removeClass('scroll_body');
        }
    });
    $('.box_icon').click(function(e){
        if ($(this).parent().parent().hasClass('action_show')) {
            $('.top_action').removeClass('action_show');
        } else {
            $('.top_action').removeClass('action_show');
            $(this).parent().parent().addClass('action_show');
        }
    });
    $('.select_time').click(function(e){
        $('.sub_choose').toggleClass('active');
    });
    $('.icon_close').click(function() {
        $('.opacity_menu').click();
    });
    $('.count_order').click(function() {
        $('.sticky_right').toggleClass('active');
        $('.opacity_menu').toggleClass('open_opacity');
    });
    $('.select_type li').click(function() {
        $('.select_type li').removeClass('active');
        $(this).addClass('active');
        var data_select = $(this).find('label').attr("data-filter");
        $(".type_selected").html(data_select);
    });
    $('.open-close').click(function(){
        $(this).parent().find('.lv2').toggleClass('show')
    })
    // có dropdown ẩn linh=k
    $(".menu-item.has-dropdown > a.menu-link").removeAttr("href");
    
    var $ulList = $('.custom-pricing-box ul,.pricing-table-wrapper ul');
    var maxHeight = 0;

    $ulList.each(function() {
      var ulHeight = $(this).height();
      if (ulHeight > maxHeight) {
        maxHeight = ulHeight;
      }
    });
    $ulList.height(maxHeight);

    var $titles = $('.pricing-table-header h3.title');
    var maxHeightTitle = 0;
    
    $titles.each(function() {
      var currentHeight = $(this).height();
      
      if (currentHeight > maxHeightTitle) {
        maxHeightTitle = currentHeight;
      }
    });

    $titles.height(maxHeightTitle);

    //
    var scrollPosition = $(window).scrollTop();
    if (scrollPosition >= 250) {
      $('.header').addClass('fixed');
    } else {
      $('.header').removeClass('fixed');
    }

    // ẩn hiện password
    var btn = $('.show-password')
    btn.click(function(){
      var inputField = $(this).parent().find('input'); 
      var currentType = inputField.attr('type');
      if (currentType === 'password') {
        inputField.attr('type', 'text'); 
      } else {
        inputField.attr('type', 'password'); 
      }
    });
    


    //hiện placeholder = label trang đăng ký /
    var screenWidth = $(window).width();
    updatePlaceholders(screenWidth);
    $(window).resize(function() {
      screenWidth = $(window).width();
      updatePlaceholders(screenWidth);
    });
    function updatePlaceholders(width) {
      $('input[data-placeholder]').each(function() {
        var inputElement = $(this);
        var newPlaceholder = inputElement.data('placeholder');

        if (width < 768) {
          inputElement.attr('placeholder', newPlaceholder);
        } else {
          inputElement.removeAttr('placeholder'); 
        }
      });
    }
   //checkbox radio tab
    $('.btn_signup').click(function(){
        $(this).addClass('hide')
        $('.register').removeClass('hide')
    })
    $(".check_account").on("click", function() {
        var tabID = $(this).attr("id");
        $(".tab-content").removeClass("show");
        $("#content" + tabID.substr(-1)).addClass("show");
    });

    $('.dropdown.language').click(function(){
      $(this).toggleClass('open')
    })

  
      $('.slider_main').slick({
          autoplay: true,
          autoplaySpeed: 4000,
          dots: false,
          arrows: true,
          prevArrow:"<button type='button' class='slick-prev pull-left'><i class='fa fa-arrow-left' aria-hidden='true'></i></button>",
          nextArrow:"<button type='button' class='slick-next pull-right'><i class='fa fa-arrow-right' aria-hidden='true'></i></button>",
          infinite: false,
          speed: 300,
          slidesToShow: 1,
          slidesToScroll: 1
      });

      $('.logo_doitac').slick({
          autoplay: true,
          autoplaySpeed: 4000,
          dots: false,
          arrows: true,
          prevArrow: false,
          nextArrow: false,
          infinite: false,
          speed: 300,
          slidesToShow: 6,
          slidesToScroll: 1,
          responsive: [
          {
            breakpoint: 1024,
            settings: {
              slidesToShow: 6,
              slidesToScroll: 1
            }
          },
          {
            breakpoint: 800,
            settings: {
              slidesToShow: 4,
              slidesToScroll: 1
            }
          },
          {
            breakpoint: 480,
            settings: {
              slidesToShow: 2,
              slidesToScroll: 1,
            }
          }
        ]
      });
      $('.hotprod-carousel').slick({
          autoplay: true,
          autoplaySpeed: 2000,
          dots: false,
          arrows: false,
          prevArrow: false,
          nextArrow: false,
          infinite: true,
          speed: 1000,
          slidesToShow: 5,
          slidesToScroll: 2,
          responsive: [
          {
            breakpoint: 1024,
            settings: {
              slidesToShow: 3,
              slidesToScroll: 1
            }
          },
          {
            breakpoint: 800,
            settings: {
              slidesToShow: 2,
              slidesToScroll: 1
            }
          },
          {
            breakpoint: 480,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1,
            }
          }
        ]
      });
  

    // slider
    $('.slider_main').slick({
        autoplay: false,
        autoplaySpeed: 4000,
        dots: false,
        arrows: true,
        prevArrow:"<button type='button' class='slick-prev pull-left'><i class='fa fa-arrow-left' aria-hidden='true'></i></button>",
        nextArrow:"<button type='button' class='slick-next pull-right'><i class='fa fa-arrow-right' aria-hidden='true'></i></button>",
        infinite: false,
        speed: 300,
        slidesToShow: 1,
        slidesToScroll: 1
    });

    $('.logo_doitac').slick({
        autoplay: true,
        autoplaySpeed: 4000,
        dots: false,
        arrows: true,
        prevArrow: false,
        nextArrow: false,
        infinite: false,
        speed: 300,
        slidesToShow: 6,
        slidesToScroll: 1,
        responsive: [
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 6,
            slidesToScroll: 1
          }
        },
        {
          breakpoint: 800,
          settings: {
            slidesToShow: 4,
            slidesToScroll: 1
          }
        },
        {
          breakpoint: 480,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1,
          }
        }
      ]
    });
    $('.hotprod-carousel').slick({
        autoplay: true,
        autoplaySpeed: 2000,
        dots: false,
        arrows: false,
        prevArrow: false,
        nextArrow: false,
        infinite: true,
        speed: 1000,
        slidesToShow: 5,
        slidesToScroll: 2,
        responsive: [
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 1
          }
        },
        {
          breakpoint: 800,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1
          }
        },
        {
          breakpoint: 480,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
          }
        }
      ]
    });


});
$(document).on('change','.check_account',function(){
  var is_account=$(this).val();
  $('.login_content').removeClass('disableddiv');
  $('.signup_content').removeClass('disableddiv');
  if(is_account==1){
    $('.login_content').removeClass('disableddiv');
    $('.signup_content').addClass('disableddiv');
  }else{
    $('.login_content').addClass('disableddiv');
    $('.signup_content').removeClass('disableddiv');
  }
});
document.addEventListener("DOMContentLoaded",function(){var e,n=document.querySelectorAll("img.lazy");function i(){e&&clearTimeout(e),e=setTimeout(function(){var e=window.pageYOffset;n.forEach(function(n){n.offsetTop<window.innerHeight+e&&(n.src=n.dataset.src,n.classList.remove("lazy"))}),0==n.length&&(document.removeEventListener("scroll",i),window.removeEventListener("resize",i),window.removeEventListener("orientationChange",i))},20)}document.addEventListener("scroll",i),window.addEventListener("resize",i),window.addEventListener("orientationChange",i)});
