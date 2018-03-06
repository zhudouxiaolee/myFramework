<?php
/* Smarty version 3.1.30, created on 2017-02-26 21:50:44
  from "D:\wamp\www\tstc.edu.shop\application\front\views\header.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58b2dd3432de00_39193788',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '983a3304073f494f777b82f1c20ff4373b3c0de2' => 
    array (
      0 => 'D:\\wamp\\www\\tstc.edu.shop\\application\\front\\views\\header.html',
      1 => 1488117034,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58b2dd3432de00_39193788 (Smarty_Internal_Template $_smarty_tpl) {
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
        <div id="navbar" class="navbar navbar-default    navbar-collapse       h-navbar">
            <?php echo '<script'; ?>
 type="text/javascript">
                try {
                    ace.settings.check('navbar', 'fixed')
                } catch (e) {
                }
            <?php echo '</script'; ?>
>

            <div class="navbar-container" id="navbar-container">
                <div class="navbar-header pull-left">
                    <!-- #section:basics/navbar.layout.brand -->
                    <a href="index.php?p=front&c=index&a=index" class="navbar-brand">
                        <small>
                            <i class="fa fa-leaf"></i>
                            商城首页
                        </small>
                    </a>


                    <!-- /section:basics/navbar.toggle -->
                </div>


                <!-- /section:basics/navbar.dropdown -->
                <nav role="navigation" class="navbar-menu pull-left collapse navbar-collapse">
                    <!-- #section:basics/navbar.nav -->
                    <ul class="nav navbar-nav" >
                        <?php
$__section_key_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_key']) ? $_smarty_tpl->tpl_vars['__smarty_section_key'] : false;
$__section_key_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['catList']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_key_0_total = $__section_key_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_key'] = new Smarty_Variable(array());
if ($__section_key_0_total != 0) {
for ($__section_key_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_key']->value['index'] = 0; $__section_key_0_iteration <= $__section_key_0_total; $__section_key_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_key']->value['index']++){
?>
                        <li>
                            <a href="index.php?p=front&c=index&a=sordList&cat_ID=<?php echo $_smarty_tpl->tpl_vars['catList']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_key']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_key']->value['index'] : null)]['cat_ID'];?>
" style="font-size: 20px;font-weight: bolder;"><?php echo $_smarty_tpl->tpl_vars['catList']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_key']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_key']->value['index'] : null)]['cat_title'];?>
</a>
                        </li>
                        <?php
}
}
if ($__section_key_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_key'] = $__section_key_0_saved;
}
?>
                    </ul>

                    <!-- /section:basics/navbar.nav -->

                    <!-- #section:basics/navbar.form -->
                    <form class="navbar-form navbar-left form-search" role="search">
                        <div class="form-group">
                            <input placeholder="search" type="text">
                        </div>

                        <button type="button" class="btn btn-mini btn-info2">
                            <i class="ace-icon fa fa-search icon-only bigger-110"></i>
                        </button>
                    </form>
                    
                    <!-- /section:basics/navbar.form -->
                </nav>
                
                <div class="navbar-header pull-right">
                    <!-- #section:basics/navbar.layout.brand -->
                    <a href="index.php?p=back&c=admin&a=login" class="navbar-brand">
                        <small>
                            <i class="ace-icon fa fa-pencil-square-o"></i>
                            去注册
                        </small>
                    </a>
                    <a href="index.php?p=back&c=admin&a=login" class="navbar-brand">
                        <small>
                            <i class="ace-icon glyphicon glyphicon-user"></i>
                            登录
                        </small>
                    </a>

                    <!-- /section:basics/navbar.toggle -->
                </div>
            </div><!-- /.navbar-container -->
        </div>



<?php }
}
