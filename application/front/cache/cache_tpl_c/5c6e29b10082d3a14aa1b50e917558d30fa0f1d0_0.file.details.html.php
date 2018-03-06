<?php
/* Smarty version 3.1.30, created on 2017-02-26 22:27:08
  from "D:\wamp\www\tstc.edu.shop\application\front\views\details.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58b2e5bc54c8d3_09882419',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5c6e29b10082d3a14aa1b50e917558d30fa0f1d0' => 
    array (
      0 => 'D:\\wamp\\www\\tstc.edu.shop\\application\\front\\views\\details.html',
      1 => 1488119226,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.html' => 1,
    'file:footer.html' => 1,
  ),
),false)) {
function content_58b2e5bc54c8d3_09882419 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once 'D:\\wamp\\www\\tstc.edu.shop\\public\\libs\\plugins\\modifier.date_format.php';
$_smarty_tpl->_subTemplateRender("file:header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="page-content">
    <div>
        <div id="user-profile-1" class="user-profile row">
            <div class="col-xs-12 col-sm-3 center">
                <div>
                    <div class="space-12"></div>
                    <!-- #section:pages/profile.picture -->
                    <span class="profile-picture">
                        <img id="avatar" class="editable img-responsive editable-click editable-empty" alt="物品大图" src="<?php echo $_smarty_tpl->tpl_vars['detailGoods']->value['goods_Image'];?>
" height="200" width="200">
                    </span>

                    <!-- /section:pages/profile.picture -->
                    <div class="space-4"></div>


                </div>

                <div class="space-6"></div>

                <div class="hr hr16 dotted"></div>
            </div>

            <div class="col-xs-12 col-sm-6">


                <div class="space-12"></div>

                <!-- #section:pages/profile.info -->
                <div class="profile-user-info profile-user-info-striped">
                    <div class="profile-info-row">
                        <div class="profile-info-name"> 物品名称 </div>

                        <div class="profile-info-value">
                            <span class="editable editable-click" id="username"><?php echo $_smarty_tpl->tpl_vars['detailGoods']->value['goods_Name'];?>
</span>
                        </div>
                    </div>



                    <div class="profile-info-row">
                        <div class="profile-info-name"> 价格 </div>

                        <div class="profile-info-value">
                            <span class="editable editable-click" id="age"><?php echo $_smarty_tpl->tpl_vars['detailGoods']->value['goods_Price'];?>
</span>
                        </div>
                    </div>


                    <div class="profile-info-row">
                        <div class="profile-info-name"> 介绍信息 </div>

                        <div class="profile-info-value">

                            <span class="editable editable-click" ><?php echo $_smarty_tpl->tpl_vars['detailGoods']->value['goods_Info'];?>
</span>

                        </div>
                    </div>

                    <div class="profile-info-row">
                        <div class="profile-info-name"> 发布人 </div>

                        <div class="profile-info-value">

                            <span class="editable editable-click" ><?php echo $_smarty_tpl->tpl_vars['memberInfo']->value['member_Name'];?>
</span>

                        </div>
                    </div>

                    <div class="profile-info-row">
                        <div class="profile-info-name"> 联系电话 </div>

                        <div class="profile-info-value">

                            <span class="editable editable-click" ><?php echo $_smarty_tpl->tpl_vars['memberInfo']->value['member_LinkTel'];?>
</span>

                        </div>
                    </div>
                    
                    <div class="profile-info-row">
                        <div class="profile-info-name"> 邮箱 </div>

                        <div class="profile-info-value">

                            <span class="editable editable-click" ><?php echo $_smarty_tpl->tpl_vars['memberInfo']->value['member_Email'];?>
</span>

                        </div>
                    </div>

                    <div class="profile-info-row">
                        <div class="profile-info-name"> 院系 </div>

                        <div class="profile-info-value">

                            <span class="editable editable-click" ><?php echo $_smarty_tpl->tpl_vars['memberInfo']->value['member_Departments'];?>
</span>

                        </div>
                    </div>

                    <div class="profile-info-row">
                        <div class="profile-info-name"> 地址 </div>

                        <div class="profile-info-value">

                            <span class="editable editable-click" ><?php echo $_smarty_tpl->tpl_vars['memberInfo']->value['member_Address'];?>
</span>

                        </div>
                    </div>

                    <div class="profile-info-row">
                        <div class="profile-info-name"> 发布时间 </div>

                        <div class="profile-info-value">
                            <span class="editable editable-click" id="signup"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['detailGoods']->value['goods_CreateTime'],"%Y-%m-%d %H:%M:%S");?>
</span>
                        </div>
                    </div>

                </div>

                <!-- /section:pages/profile.info -->
                <div class="space-20"></div>

                <div class="hr hr2 hr-dotted"></div>

                <div class="space-6"></div>

            </div>

        </div>
        <?php if ($_smarty_tpl->tpl_vars['imageGoods']->value) {?>
        <div id="user-profile-2" class="user-profile row">

            <ul class="ace-thumbnails clearfix">
                
                <?php
$__section_key_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_key']) ? $_smarty_tpl->tpl_vars['__smarty_section_key'] : false;
$__section_key_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['imageGoods']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_key_0_total = $__section_key_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_key'] = new Smarty_Variable(array());
if ($__section_key_0_total != 0) {
for ($__section_key_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_key']->value['index'] = 0; $__section_key_0_iteration <= $__section_key_0_total; $__section_key_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_key']->value['index']++){
?>
                <!-- #section:pages/gallery.caption -->
                <li>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['imageGoods']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_key']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_key']->value['index'] : null)]['image_URL'];?>
" data-rel="colorbox" class="cboxElement">
                        <img alt="150x150" src="<?php echo $_smarty_tpl->tpl_vars['imageGoods']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_key']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_key']->value['index'] : null)]['image_URL'];?>
" height="150" width="150">

                    </a>
                </li>
                <!-- /section:pages/gallery.caption -->
                <?php
}
}
if ($__section_key_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_key'] = $__section_key_0_saved;
}
?>
                
            </ul>
        </div><!-- PAGE CONTENT ENDS -->
        <?php }?>
    </div>
</div>

<?php $_smarty_tpl->_subTemplateRender("file:footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
