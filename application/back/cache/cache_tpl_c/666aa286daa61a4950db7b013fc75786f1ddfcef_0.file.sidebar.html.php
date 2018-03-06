<?php
/* Smarty version 3.1.30, created on 2017-02-26 14:53:20
  from "D:\wamp\www\tstc.edu.shop\application\back\views\sidebar.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58b27b608a5c41_18566087',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '666aa286daa61a4950db7b013fc75786f1ddfcef' => 
    array (
      0 => 'D:\\wamp\\www\\tstc.edu.shop\\application\\back\\views\\sidebar.html',
      1 => 1488008709,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58b27b608a5c41_18566087 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- #section:basics/sidebar -->
<div id="sidebar" class="sidebar                  responsive">
    <?php echo '<script'; ?>
 type="text/javascript">
        try {
            ace.settings.check('sidebar', 'fixed')
        } catch (e) {
        }
    <?php echo '</script'; ?>
>

    <div class="sidebar-shortcuts" id="sidebar-shortcuts">
        <div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
            <button class="btn btn-success">
                <i class="ace-icon fa fa-signal"></i>
            </button>

            <button class="btn btn-info">
                <i class="ace-icon fa fa-pencil"></i>
            </button>

            <!-- #section:basics/sidebar.layout.shortcuts -->
            <button class="btn btn-warning">
                <i class="ace-icon fa fa-users"></i>
            </button>

            <button class="btn btn-danger">
                <i class="ace-icon fa fa-cogs"></i>
            </button>

            <!-- /section:basics/sidebar.layout.shortcuts -->
        </div>

        <div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
            <span class="btn btn-success"></span>

            <span class="btn btn-info"></span>

            <span class="btn btn-warning"></span>

            <span class="btn btn-danger"></span>
        </div>
    </div><!-- /.sidebar-shortcuts -->

    <ul class="nav nav-list">
        <li class="active">
            <a href="index.php?p=back&c=index&a=index">
                <i class="menu-icon fa fa-tachometer"></i>
                <span class="menu-text"> 控制台 </span>
            </a>

            <b class="arrow"></b>
        </li>
        <?php if ($_SESSION['userInfo']['role_Permission'] == 0) {?>
            <li class="">
                <a href="#" class="dropdown-toggle">
                    <i class="menu-icon fa fa-list"></i>
                    <span class="menu-text"> 物品管理 </span>

                    <b class="arrow fa fa-angle-down"></b>
                </a>

                <b class="arrow"></b>

                <ul class="submenu">
                    <li class="">
                        <a href="index.php?p=back&c=goods&a=list">
                            <i class="menu-icon fa fa-caret-right"></i>
                            物品信息
                        </a>

                        <b class="arrow"></b>
                    </li>

                    <li class="">
                        <a href="index.php?p=back&c=goods&a=add">
                            <i class="menu-icon fa fa-caret-right"></i>
                            添加物品
                        </a>

                        <b class="arrow"></b>
                    </li>
                </ul>
            </li>
        <?php } else { ?>
        <li class="">
            <a href="#" class="dropdown-toggle">
                <i class="menu-icon fa fa-desktop"></i>
                <span class="menu-text">
                    用户管理
                </span>

                <b class="arrow fa fa-angle-down"></b>
            </a>

            <b class="arrow"></b>

            <ul class="submenu">
                <li class="">
                    <a href="typography.html">
                        <i class="menu-icon fa fa-caret-right"></i>
                        用户信息
                    </a>

                    <b class="arrow"></b>
                </li>

                <li class="">
                    <a href="typography.html">
                        <i class="menu-icon fa fa-caret-right"></i>
                        权限管理
                    </a>
                    <b class="arrow"></b>
                </li>
            </ul>
        </li>

        



        <li class="">
            <a href="widgets.html">
                <i class="menu-icon fa fa-list-alt"></i>
                <span class="menu-text"> 反馈信息 </span>
            </a>

            <b class="arrow"></b>
        </li>





        <li class="">
            <a href="#" class="dropdown-toggle">
                <i class="menu-icon fa fa-tag"></i>
                <span class="menu-text"> 角色管理 </span>

                <b class="arrow fa fa-angle-down"></b>
            </a>

            <b class="arrow"></b>

            <ul class="submenu">
                <li class="">
                    <a href="profile.html">
                        <i class="menu-icon fa fa-caret-right"></i>
                        角色信息
                    </a>

                    <b class="arrow"></b>
                </li>


            </ul>
        </li>
    <?php }?>

    </ul><!-- /.nav-list -->

    <!-- #section:basics/sidebar.layout.minimize -->
    <div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
        <i class="ace-icon fa fa-angle-double-left" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
    </div>

    <!-- /section:basics/sidebar.layout.minimize -->
    <?php echo '<script'; ?>
 type="text/javascript">
        try {
            ace.settings.check('sidebar', 'collapsed')
        } catch (e) {
        }
    <?php echo '</script'; ?>
>
</div>

<!-- /section:basics/sidebar --><?php }
}
