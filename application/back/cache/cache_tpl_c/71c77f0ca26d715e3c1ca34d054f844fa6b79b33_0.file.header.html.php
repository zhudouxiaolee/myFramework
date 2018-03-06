<?php
/* Smarty version 3.1.30, created on 2017-02-26 14:53:20
  from "D:\wamp\www\tstc.edu.shop\application\back\views\header.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58b27b607cee91_32022061',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '71c77f0ca26d715e3c1ca34d054f844fa6b79b33' => 
    array (
      0 => 'D:\\wamp\\www\\tstc.edu.shop\\application\\back\\views\\header.html',
      1 => 1488013933,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58b27b607cee91_32022061 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <meta charset="utf-8" />
        <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>

        <meta name="description" content="overview &amp; stats" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

        <!-- bootstrap & fontawesome -->
        <link rel="stylesheet" href="./application/back/web/assets/css/bootstrap.css" />
        <link rel="stylesheet" href="./application/back/web/assets/css/font-awesome.css" />

        <!-- page specific plugin styles -->
        <link rel="stylesheet" href="./application/back/web/assets/css/jquery-ui.custom.css" />
        <link rel="stylesheet" href="./application/back/web/assets/css/jquery.gritter.css" />
        <link rel="stylesheet" href="./application/back/web/assets/css/colorbox.css" />
        <!-- text fonts -->
        <link rel="stylesheet" href="./application/back/web/assets/css/ace-fonts.css" />

        <!-- ace styles -->
        <link rel="stylesheet" href="./application/back/web/assets/css/ace.css" class="ace-main-stylesheet" id="main-ace-style" />

        <!--[if lte IE 9]>
                <link rel="stylesheet" href="./application/back/web/assets/css/ace-part2.css" class="ace-main-stylesheet" />
        <![endif]-->

        <!--[if lte IE 9]>
          <link rel="stylesheet" href="./application/back/web/assets/css/ace-ie.css" />
        <![endif]-->

        <!-- inline styles related to this page -->

        <!-- ace settings handler -->
        <?php echo '<script'; ?>
 src="./application/back/web/assets/js/ace-extra.js"><?php echo '</script'; ?>
>

        <!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

        <!--[if lte IE 8]>
        <?php echo '<script'; ?>
 src="./application/back/web/assets/js/html5shiv.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="./application/back/web/assets/js/respond.js"><?php echo '</script'; ?>
>
        <![endif]-->
    </head>

    <body class="no-skin">
        <!-- #section:basics/navbar.layout -->
        <div id="navbar" class="navbar navbar-default">
            <?php echo '<script'; ?>
 type="text/javascript">
                try {
                    ace.settings.check('navbar', 'fixed')
                } catch (e) {
                }
            <?php echo '</script'; ?>
>

            <div class="navbar-container" id="navbar-container">
                <!-- #section:basics/sidebar.mobile.toggle -->
                <button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler" data-target="#sidebar">
                    <span class="sr-only">Toggle sidebar</span>

                    <span class="icon-bar"></span>

                    <span class="icon-bar"></span>

                    <span class="icon-bar"></span>
                </button>

                <!-- /section:basics/sidebar.mobile.toggle -->
                <div class="navbar-header pull-left">
                    <!-- #section:basics/navbar.layout.brand -->
                    <a href="#" class="navbar-brand">
                        <small>
                            <i class="fa fa-leaf"></i>
                            <?php echo $_smarty_tpl->tpl_vars['titleName']->value;?>

                        </small>
                    </a>

                    <!-- /section:basics/navbar.layout.brand -->

                    <!-- #section:basics/navbar.toggle -->

                    <!-- /section:basics/navbar.toggle -->
                </div>

                <!-- #section:basics/navbar.dropdown -->
                <div class="navbar-buttons navbar-header pull-right" role="navigation">
                    <ul class="nav ace-nav">
                        <li class="grey">
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                <i class="ace-icon fa fa-tasks"></i>
                                <span class="badge badge-grey"></span>
                            </a>

                            
                        </li>

                       

                        

                        <!-- #section:basics/navbar.user_menu -->
                        <li class="light-blue">
                            <a data-toggle="dropdown" href="#" class="dropdown-toggle">
                                <img class="nav-user-photo" src="<?php echo $_SESSION['userInfo']['member_Info'];?>
" alt="用户头像" />
                                <span class="user-info">
                                    <small>欢迎,</small>
                                    <?php echo $_SESSION['username'];?>

                                </span>

                                <i class="ace-icon fa fa-caret-down"></i>
                            </a>

                            <ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
                                <li>
                                    <a href="#">
                                        <i class="ace-icon fa fa-cog"></i>
                                        个人设置
                                    </a>
                                </li>

                               <li>
                                    <a href="index.php?p=back&c=admin&a=logout">
                                        <i class="ace-icon fa fa-power-off"></i>
                                        退出
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <!-- /section:basics/navbar.user_menu -->
                    </ul>
                </div>

                <!-- /section:basics/navbar.dropdown -->
            </div><!-- /.navbar-container -->
        </div>

        <!-- /section:basics/navbar.layout -->
        <div class="main-container" id="main-container">
            <?php echo '<script'; ?>
 type="text/javascript">
                try {
                    ace.settings.check('main-container', 'fixed')} catch (e) {
                }
            <?php echo '</script'; ?>
><?php }
}
