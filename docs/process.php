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

<div class="p_icon">
        <h2 id="m_title">menu</h2>
        <ul>
            <li><a href="<?php echo G5_URL?>/docs/about.php"><img src="<?php echo G5_URL?>/images/visual_icon1.jpg" alt="기업소개"></a></li>
            <li class="pre"><a href="#"><img src="<?php echo G5_URL?>/images/visual_icon2.jpg" alt="사업안내"></a></li>
            <li class="pre"><a href="#"><img src="<?php echo G5_URL?>/images/visual_icon3.jpg" alt="제품정보"></a></li>
            <li class="pre"><a href="#"><img src="<?php echo G5_URL?>/images/visual_icon4.jpg" alt="커뮤니티"></a></li>
        </ul>
    </div>
    <div class="p_mainimg">
        <img src="<?php echo G5_URL?>/images/process_list.jpg" alt="stylefoodyummy">
    </div>
    <div class="factory">
        <h1>야미푸드 생산공정</h1>
        <h2><i class="fas fa-chevron-circle-right"></i> 야미푸드 이천공장 소개</h2>
        <img src="<?php echo G5_URL?>/images/process_1.jpg" alt="factory">
    </div>
    <div class="haccp">
        <h2><i class="fas fa-chevron-circle-right"></i> 이천공장 HACCP 인증서</h2>
        <img src="<?php echo G5_URL?>/images/haccp1.jpg" alt="haccp">
        <img src="<?php echo G5_URL?>/images/haccp2.jpg" alt="haccp">
    </div>
    <div class="factory_in">
        <h2><i class="fas fa-chevron-circle-right"></i> 이천공장 내부</h2>
        <img src="<?php echo G5_URL?>/images/process_2.jpg" alt="공장내부">
    </div>


<?php
include_once(G5_PATH.'/tail.php');
?>