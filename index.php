<?php
include_once('./_common.php');

define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if(defined('G5_THEME_PATH')) {
    require_once(G5_THEME_PATH.'/index.php');
    return;
}

if (G5_IS_MOBILE) {
    include_once(G5_MOBILE_PATH.'/index.php');
    return;
}

include_once(G5_PATH.'/head.php');
?>

<div class="mainimg">
    <img src="<?php echo G5_URL?>/images/visual.jpg" alt="stylefoodyummy">
</div>
<div class="icon">
    <ul>
        <li><a href="about.html"><img src="<?php echo G5_URL?>/images/visual_icon1.jpg" alt="기업소개"></a></li>
        <li class="pre"><a href="#"><img src="<?php echo G5_URL?>/images/visual_icon2.jpg" alt="사업안내"></a></li>
        <li class="pre"><a href="product.html"><img src="<?php echo G5_URL?>/images/visual_icon3.jpg" alt="제품정보"></a></li>
        <li class="pre"><a href="#"><img src="<?php echo G5_URL?>/images/visual_icon4.jpg" alt="커뮤니티"></a></li>
    </ul>
</div>
<div class="product">
    <p>product</p>
    <ul>
        <li class="pre"><a href="#"><img src="<?php echo G5_URL?>/images/prd_img1.jpg" alt="chicken" id="prd1"></a></li>
        <li class="pre"><a href="#"><img src="<?php echo G5_URL?>/images/prd_img2.jpg" alt="bbq" id="prd2"></a></li>
        <li class="pre"><a href="#"><img src="<?php echo G5_URL?>/images/prd_img3.jpg" alt="potato" id="prd3"></a></li>
    </ul>
</div>

<?php
include_once(G5_PATH.'/tail.php');
?>