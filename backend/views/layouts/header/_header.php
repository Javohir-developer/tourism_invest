
<?php
use yii\helpers\Url;
use yii\helpers\StringHelper;
$lang = Yii::$app->language;
$url = $_SERVER['REQUEST_URI'];
if ($lang == 'ru' || $lang == 'en'){
    $url2 = StringHelper::byteSubstr($url,26,100);
}else{
    $url2 = StringHelper::byteSubstr($url,23,100);
}

?>
<!--  BEGIN NAVBAR  -->
<div class="header-container">
    <header class="header navbar navbar-expand-sm">

        <a href="javascript:void(0);" class="sidebarCollapse" data-placement="bottom"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-menu"><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg></a>

        <div class="nav-logo align-self-center">
            <a class="navbar-brand" href="#"><img alt="logo" src="<?=Yii::getAlias('@web/demo7/assets/img/logo.svg');?>"> <span class="navbar-brand-name">TOURISM</span></a>
        </div>

        <ul class="navbar-item flex-row mr-auto">

        </ul>
        <?php if (Yii::$app->controller->action->id == 'index' || Yii::$app->controller->action->id == 'view'): ?>
            <ul class="navbar-item flex-row nav-dropdowns">
                <li class="nav-item dropdown language-dropdown more-dropdown">
                    <div class="dropdown custom-dropdown-icon">
                        <a class="dropdown-toggle btn" href="index.html#" role="button" id="customDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img src="<?=Yii::getAlias('@web/demo7/assets/img/uzbekistan.svg');?>" class="flag-width" alt="flag">
                            <span>O'ZBEK</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg></a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="customDropdown">
                            <a class="dropdown-item" data-img-value="flag-de" data-value="O'ZBEK" href="<?= Url::to([$url2, 'language' => 'uz']); ?>"><img src="<?=Yii::getAlias('@web/demo7/assets/img/uzbekistan.svg'); ?>" class="flag-width" alt="flag"> O'ZBEK</a>
                            <a class="dropdown-item" data-img-value="flag-fr" data-value="ENGLISH" href="<?= Url::to([$url2, 'language' => 'en']); ?>"><img src="<?=Yii::getAlias('@web/demo7/assets/img/inglish.svg'); ?>" class="flag-width" alt="flag"> ENGLISH </a>
                            <a class="dropdown-item" data-img-value="flag-sp" data-value="РУССКИЙ" href="<?= Url::to([$url2, 'language' => 'ru']); ?>"><img src="<?=Yii::getAlias('@web/demo7/assets/img/russia.svg'); ?>" class="flag-width" alt="flag"> РУССКИЙ</a>
                        </div>
                    </div>
                </li>


                <li class="nav-item dropdown user-profile-dropdown order-lg-0 order-1">
                    <a href="javascript:void(0);" class="nav-link dropdown-toggle user" id="user-profile-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <div class="media">
                            <div class="media-body align-self-center">
                                <h6>Admin</h6>
                            </div>
                            <img src="<?=Yii::getAlias('@web/demo7/assets/img/profile-12.jpeg');?>" class="img-fluid" alt="admin-profile">
                            <span class="badge badge-success"></span>
                        </div>
                    </a>

                    <div class="dropdown-menu position-absolute" aria-labelledby="userProfileDropdown">
                        <div class="dropdown-item">
                            <a href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg> <span> Profile</span>
                            </a>
                        </div>
                        <div class="dropdown-item">
                            <a href="<?=\yii\helpers\Url::to(['site/logout'])?>">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-log-out"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg> <span>Log Out</span>
                            </a>
                        </div>
                    </div>
                </li>
            </ul>
        <?php endif; ?>

    </header>
</div>
<!--  END NAVBAR  -->




<!--  BEGIN MAIN CONTAINER  -->
<div class="main-container" id="container">

    <div class="overlay"></div>
    <div class="search-overlay"></div>

    <!--  BEGIN TOPBAR  -->
    <div class="topbar-nav header navbar" role="banner">
        <nav id="topbar">
            <ul class="navbar-nav theme-brand flex-row  text-center">
                <li class="nav-item theme-logo">
                    <a href="#">
                        <img src="assets/img/logo2.svg" class="navbar-logo" alt="logo">
                    </a>
                </li>
                <li class="nav-item theme-text">
                    <a href="#" class="nav-link"> TOURISM </a>
                </li>
            </ul>

            <ul class="list-unstyled menu-categories" id="topAccordion">

                <li class="menu single-menu active">
                    <a href="<?=\yii\helpers\Url::to(['/'])?>" aria-expanded="true" class="dropdown-toggle autodroprown">
                        <div class="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                            <span>Bosh sahifa</span>
                        </div>
                    </a>
                </li>

                <li class="menu single-menu">
                    <a href="<?=\yii\helpers\Url::to(['/invest'])?>"  aria-expanded="true" class="dropdown-toggle">
                        <div class="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-box"><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path><polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline><line x1="12" y1="22.08" x2="12" y2="12"></line></svg>
                            <span>Invest</span>
                        </div>
                    </a>
                </li>

                <li class="menu single-menu">
                    <a href="<?=\yii\helpers\Url::to(['/news'])?>"  aria-expanded="true" class="dropdown-toggle">
                        <div class="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-box"><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path><polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline><line x1="12" y1="22.08" x2="12" y2="12"></line></svg>
                            <span>Yangiliklar</span>
                        </div>
                     </a>
                </li>

                <li class="menu single-menu">
                    <a href="<?=\yii\helpers\Url::to(['/contacts'])?>"  aria-expanded="true" class="dropdown-toggle">
                        <div class="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-box"><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path><polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline><line x1="12" y1="22.08" x2="12" y2="12"></line></svg>
                            <span>Xabarlar</span>
                        </div>
                     </a>
                </li>




            </ul>
        </nav>
    </div>
    <!--  END TOPBAR  -->

    <style>
        .buy-btn{
            display: none;
        }
    </style>