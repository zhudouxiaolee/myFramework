<?php
/* Smarty version 3.1.30, created on 2017-02-26 14:58:33
  from "D:\wamp\www\tstc.edu.shop\application\back\views\goodsList.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58b27c9998fc68_79189566',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '06513a580049eac02ac2b12d960221644f519500' => 
    array (
      0 => 'D:\\wamp\\www\\tstc.edu.shop\\application\\back\\views\\goodsList.html',
      1 => 1488037722,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:contentUp.html' => 1,
    'file:contentDown.html' => 1,
  ),
),false)) {
function content_58b27c9998fc68_79189566 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:contentUp.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="page-content">
<div class="row">
    <div class="col-xs-12">
        <!-- PAGE CONTENT BEGINS -->
        <div>
            <ul class="ace-thumbnails clearfix">
                
                <?php
$__section_key_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_key']) ? $_smarty_tpl->tpl_vars['__smarty_section_key'] : false;
$__section_key_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['goodsInfo']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_key_0_total = $__section_key_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_key'] = new Smarty_Variable(array());
if ($__section_key_0_total != 0) {
for ($__section_key_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_key']->value['index'] = 0; $__section_key_0_iteration <= $__section_key_0_total; $__section_key_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_key']->value['index']++){
?>
                <!-- #section:pages/gallery.caption -->
                <li>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['goodsInfo']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_key']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_key']->value['index'] : null)]['goods_Image'];?>
" data-rel="colorbox" class="cboxElement">
                        <img alt="150x150" src="<?php echo $_smarty_tpl->tpl_vars['goodsInfo']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_key']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_key']->value['index'] : null)]['goods_Image'];?>
" height="150" width="150">
                        <div class="text">
                            <div class="inner"><?php echo $_smarty_tpl->tpl_vars['goodsInfo']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_key']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_key']->value['index'] : null)]['goods_Name'];?>
</div>
                        </div>
                    </a>

                    <div class="tools tools-bottom">
                        <a href="index.php?p=back&c=goods&a=moreGoods&goods_ID=<?php echo $_smarty_tpl->tpl_vars['goodsInfo']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_key']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_key']->value['index'] : null)]['goods_ID'];?>
" title='添加更多关于该物品图片'>
                            <i class="ace-icon glyphicon glyphicon-plus"></i>
                        </a>

                        <a href="index.php?p=back&c=goods&a=update&goods_ID=<?php echo $_smarty_tpl->tpl_vars['goodsInfo']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_key']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_key']->value['index'] : null)]['goods_ID'];?>
" title='修改物品信息'>
                            <i class="ace-icon fa fa-pencil"></i>
                        </a>

                        
                        <a href="index.php?p=back&c=goods&a=delete&goods_ID=<?php echo $_smarty_tpl->tpl_vars['goodsInfo']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_key']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_key']->value['index'] : null)]['goods_ID'];?>
" title="删除">
                            <i class="ace-icon glyphicon glyphicon-remove red"></i>
                        </a>
                    </div>
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
    </div><!-- /.col -->
</div>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:contentDown.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
