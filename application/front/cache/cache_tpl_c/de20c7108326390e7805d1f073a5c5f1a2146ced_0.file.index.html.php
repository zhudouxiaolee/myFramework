<?php
/* Smarty version 3.1.30, created on 2017-02-26 21:53:44
  from "D:\wamp\www\tstc.edu.shop\application\front\views\index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58b2dde8653c39_59900581',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'de20c7108326390e7805d1f073a5c5f1a2146ced' => 
    array (
      0 => 'D:\\wamp\\www\\tstc.edu.shop\\application\\front\\views\\index.html',
      1 => 1488117222,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.html' => 1,
    'file:footer.html' => 1,
  ),
),false)) {
function content_58b2dde8653c39_59900581 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
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
                <li style='margin-right: 30px;'>
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
                        <a href="index.php?p=front&c=index&a=details&goods_ID=<?php echo $_smarty_tpl->tpl_vars['goodsInfo']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_key']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_key']->value['index'] : null)]['goods_ID'];?>
" title='查看详细信息'>
                            <i class="ace-icon glyphicon glyphicon-list"></i>
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
<?php $_smarty_tpl->_subTemplateRender("file:footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
