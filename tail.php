<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if(defined('G5_THEME_PATH')) {
    require_once(G5_THEME_PATH.'/tail.php');
    return;
}

if (G5_IS_MOBILE) {
    include_once(G5_MOBILE_PATH.'/tail.php');
    return;
}
?>

<div class="f_menu">
    <ul>
        <li><a href="about.html">야미소개</a></li>
        <li class="pre"><a href="#">개인정보취급방침</a></li>
        <li class="pre"><a href="#">이용약관</a></li>
        <li class="pre"><a href="#">이메일무단수신거부</a></li>
        <li class="pre"><a href="#">고객센터</a></li>
    </ul>
</div>
<div class="footer">
    <img src="<?php echo G5_URL?>/images/footer_logo.gif" alt="footer_logo">
    <p>copyright(c) 2019 cucuham all rights reserved</p>
</div>

<?php
if(G5_DEVICE_BUTTON_DISPLAY && !G5_IS_MOBILE) { ?>
<?php
}

if ($config['cf_analytics']) {
    echo $config['cf_analytics'];
}
?>

<!-- } 하단 끝 -->

<script>
$(function() {
    // 폰트 리사이즈 쿠키있으면 실행
    font_resize("container", get_cookie("ck_font_resize_rmv_class"), get_cookie("ck_font_resize_add_class"));
});
</script>

<?php
include_once(G5_PATH."/tail.sub.php");
?>