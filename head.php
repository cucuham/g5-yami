<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if(defined('G5_THEME_PATH')) {
    require_once(G5_THEME_PATH.'/head.php');
    return;
}

if (G5_IS_MOBILE) {
    include_once(G5_MOBILE_PATH.'/head.php');
    return;
}

include_once(G5_PATH.'/head.sub.php');
include_once(G5_LIB_PATH.'/latest.lib.php');
include_once(G5_LIB_PATH.'/outlogin.lib.php');
include_once(G5_LIB_PATH.'/poll.lib.php');
include_once(G5_LIB_PATH.'/visit.lib.php');
include_once(G5_LIB_PATH.'/connect.lib.php');
include_once(G5_LIB_PATH.'/popular.lib.php');
?>

<!-- 상단 시작 { -->
<div class="popup">
    <p><i class="far fa-times-circle"></i>죄송합니다<br>준비중입니다</p>
</div>
<div class="header">
    <div id="h_logo">
        <a href="<?php echo G5_URL?>/index.php"><img src="<?php echo G5_URL?>/images/logo.gif" alt="stylefood"></a>
    </div>
    <div id="member">
        <ul>
            <li><a href="<?php echo G5_BBS_URL?>/login.php">로그인</a></li>
            <li><a href="<?php echo G5_BBS_URL?>/register.php">회원가입</a></li>
            <li class="pre"><a href="#">장바구니</a></li>
            <li><a href="<?php echo G5_BBS_URL?>/member_confirm.php?url=<?php echo G5_BBS_URL ?>/register_form.php">마이페이지</a></li>
        </ul>
    </div>
</div>
<div class="nav">
    <ul>
        <li><a href="about.html">야미소개</a></li>
        <li><a href="process.html">생산공정</a></li>
        <li class="pre"><a href="#">제품소개</a></li>
        <li class="pre"><a href="#">고객센터</a></li>
    </ul>
</div>
<!-- } 상단 끝 -->