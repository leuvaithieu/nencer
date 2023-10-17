$(function(){var html=$('html, body'),navContainer=$('.nav-container'),navToggle=$('.nav-toggle'),navDropdownToggle=$('.has-dropdown');navToggle.on('click',function(e){var $this=$(this);e.preventDefault();$this.toggleClass('is-active');navContainer.toggleClass('is-visible');html.toggleClass('nav-open')});navDropdownToggle.on('click',function(){var $this=$(this);$this.toggleClass('is-active').children('ul').toggleClass('is-visible')});navDropdownToggle.on('click','*',function(e){e.stopPropagation()})})
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
        if ($(window).scrollTop() >=200) {
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






    // $(".product_item .thumbs-list .thumbs-list-item img").click(function () {
    //     var t = $(this).attr("src");
    //     $(this).parent().siblings().removeClass("active"), $(this).parent().addClass("active");
    //     var e = $(this).parents(".product_item ").find(".image_pro img");
    //     e && $(e).attr("src", t);
    // });
    // $('.toggle_menu').click(function() {
    //     $(this).parent().toggleClass('active');
    // });
    // $('.toggle_cate').click(function() {
    //     $('.cate_child_new').toggleClass('active');
    // });
    // $('.cart_top').click(function() {
    //     $('.show_cart').toggleClass('active');
    //     $('.opacity_menu').addClass('open_opacity');
    // });
    // $('.icon_search').click(function() {
    //     $('.search_pc').toggleClass('is-visible');
    //     $('.opacity_menu').addClass('open_opacity');
    // });
    // $('.opacity_menu').click(function() {
    //     $('.show_cart').removeClass('active');
    //     $('.search_pc').removeClass('is-visible');
    //     $('.opacity_menu').removeClass('open_opacity');
    // });
    // $('.icon_close').click(function() {
    //     $('.opacity_menu').click();
    // });
    
    
    // if (window.innerWidth < 768) {
    //     $('.nav-toggle').click(function(e) {
    //         e.preventDefault();
    //         $('.box_menu_left').addClass('is-visible');
    //         $('.bg_opacity').show();
    //     });
    //     $('.close_box').click(function(e) {
    //         e.preventDefault();
    //         $('.bg_opacity').hide();
    //         $('.box_menu_left').removeClass('is-visible');
    //         $('.nav-container').removeClass('is-visible');
    //     });
    // }
});
document.addEventListener("DOMContentLoaded",function(){var e,n=document.querySelectorAll("img.lazy");function i(){e&&clearTimeout(e),e=setTimeout(function(){var e=window.pageYOffset;n.forEach(function(n){n.offsetTop<window.innerHeight+e&&(n.src=n.dataset.src,n.classList.remove("lazy"))}),0==n.length&&(document.removeEventListener("scroll",i),window.removeEventListener("resize",i),window.removeEventListener("orientationChange",i))},20)}document.addEventListener("scroll",i),window.addEventListener("resize",i),window.addEventListener("orientationChange",i)});