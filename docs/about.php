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

<div class="a_icon">
        <h2 id="m_title">menu</h2>
        <ul>
            <li><a href="<?php echo G5_URL?>/docs.about.php"><img src="<?php echo G5_URL?>/images/visual_icon1.jpg" alt="기업소개"></a></li>
            <li class="pre"><a href="#"><img src="<?php echo G5_URL?>/images/visual_icon2.jpg" alt="사업안내"></a></li>
            <li class="pre"><a href="#"><img src="<?php echo G5_URL?>/images/visual_icon3.jpg" alt="제품정보"></a></li>
            <li class="pre"><a href="#"><img src="<?php echo G5_URL?>/images/visual_icon4.jpg" alt="커뮤니티"></a></li>
        </ul>
    </div>
    <div class="a_mainimg">
        <img src="<?php echo G5_URL?>/images/about_list.jpg" alt="stylefoodyummy">
    </div>
    <div class="intro">
        <h1>야미푸드 회사 소개</h1>
        <p>야미푸드는 "스타일 푸드, 오붓한 식탁"을 지향합니다.</p>
        <h3>스마일푸드 야미는 고객에게<br><span>행복한 미소</span>를 전하고자 합니다.</h3>
        <h2><i class="fas fa-chevron-circle-right"></i> smile food yami</h2>
        <p>(주)야미푸드의 대표브랜드 스마일푸드 야미는 건강하고 맛있는 자연을 담은 제품을 통해<br>세상 모든 가족의 식탁에 즐거움을 선물하고 싶은 야미의 철학이 담긴 브랜드 입니다.</p>
        <img src="<?php echo G5_URL?>/images/company0.jpg" alt="logo소개">
        <h2><i class="fas fa-chevron-circle-right"></i> character yami</h2>
        <p>(주)야미푸드의 캐릭터인 프랜대디(Freidaddy)는 우리 아이들에게 더 좋은 것을 먹이고 싶은<br>아빠의 마음과 엄마의 정성처럼 최선을 다하겠다는 야미의 철학이 담겨있습니다.</p>
        <img src="<?php echo G5_URL?>/images/company1.jpg" alt="logo소개">
        <h2><i class="fas fa-chevron-circle-right"></i> yami factory</h2>
        <p>야미푸드는 HACCP 인증 등 선진화 된 생산공장과 전문가들에 의한 합리적인 생산, 관리, 유통시스템으로<br>가공에서 소비자에 이르기까지 믿을 수 있는 최상의 서비스를 실천합니다.</p>
        <img src="<?php echo G5_URL?>/images/company2_0.jpg" alt="logo소개">
        <img src="<?php echo G5_URL?>/images/company2_2.jpg" alt="logo소개">
    </div>

<?php
include_once(G5_PATH.'/tail.php');
?>