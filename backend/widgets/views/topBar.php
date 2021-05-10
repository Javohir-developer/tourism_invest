<?php
/**
 * Created by PhpStorm.
 * User: OKS
 * Date: 12.10.2018
 * Time: 23:02
 */

use yii\helpers\Html;

?>
<div id="main-navbar" class="navbar navbar-inverse" role="navigation">
    <!-- Main menu toggle -->
    <button type="button" id="main-menu-toggle"><i class="navbar-icon fa fa-bars icon"></i><span class="hide-menu-text">HIDE MENU</span></button>

    <div class="navbar-inner">
        <!-- Main navbar header -->
        <div class="navbar-header">

            <!-- Logo -->
            <a href="index" class="navbar-brand">
                <div><img alt="" src="../../assets/admin/html/assets/images/pixel-admin/main-navbar-logo.png"></div>
                OKS
            </a>

            <!-- Main navbar toggle -->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-navbar-collapse"><i class="navbar-icon fa fa-bars"></i></button>

        </div> <!-- / .navbar-header -->

        <div id="main-navbar-collapse" class="collapse navbar-collapse main-navbar-collapse">
            <div>
                <div class="right clearfix">
                    <ul class="nav navbar-nav pull-right right-navbar-nav">

                        <!-- 3. $NAVBAR_ICON_BUTTONS =======================================================================

                                                    Navbar Icon Buttons

                                                    NOTE: .nav-icon-btn triggers a dropdown menu on desktop screens only. On small screens .nav-icon-btn acts like a hyperlink.

                                                    Classes:
                                                    * 'nav-icon-btn-info'
                                                    * 'nav-icon-btn-success'
                                                    * 'nav-icon-btn-warning'
                                                    * 'nav-icon-btn-danger'
                        -->
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle user-menu" data-toggle="dropdown">
                                <img src="../../assets/admin/html/assets/demo/avatars/1.jpg" alt="">

                                <span><?= Yii::$app->user->identity->username ?></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="#"><i class="dropdown-icon fa fa-cog"></i>&nbsp;&nbsp;Settings</a></li>
                                <li class="divider"></li>
                                <li><?= Html::a(__('Chiqish'), '/site/logout', [
                                            'data' => [
                                                'method' => 'post'
                                            ],
                                            ['class' => 'before3']
                                        ]
                                    ) ?>
                                    </li>
                            </ul>
                        </li>
                    </ul> <!-- / .navbar-nav -->
                </div> <!-- / .right -->
            </div>
        </div> <!-- / #main-navbar-collapse -->
    </div> <!-- / .navbar-inner -->
</div>
