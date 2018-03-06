<?php
/* Smarty version 3.1.30, created on 2017-02-26 15:34:10
  from "D:\wamp\www\tstc.edu.shop\application\back\views\goodsUpdate.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58b284f21f73f1_82122218',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '28d5c1e7383ad1c4c2282e5ee020e460e47d9e32' => 
    array (
      0 => 'D:\\wamp\\www\\tstc.edu.shop\\application\\back\\views\\goodsUpdate.html',
      1 => 1488094448,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:contentUp.html' => 1,
    'file:contentDown.html' => 1,
  ),
),false)) {
function content_58b284f21f73f1_82122218 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:contentUp.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="page-content">
    <div class="row">


        <!-- PAGE CONTENT BEGINS -->
        <form class="form-horizontal" action="index.php?p=back&c=goods&a=update" id="goodsForm" enctype="multipart/form-data" role="form" method="POST">
            <!-- #section:elements.form -->

            <div class="form-group">
                <label class="col-sm-3 control-label no-padding-right" for="form-field-2"> 物品分类 </label>

                <div class="col-sm-2">
                    <select class="form-control" name='cat_ID'>
                        <?php
$__section_key_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_key']) ? $_smarty_tpl->tpl_vars['__smarty_section_key'] : false;
$__section_key_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['catList']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_key_0_total = $__section_key_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_key'] = new Smarty_Variable(array());
if ($__section_key_0_total != 0) {
for ($__section_key_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_key']->value['index'] = 0; $__section_key_0_iteration <= $__section_key_0_total; $__section_key_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_key']->value['index']++){
?>
                            <?php if ($_smarty_tpl->tpl_vars['catList']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_key']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_key']->value['index'] : null)]['cat_ID'] == $_smarty_tpl->tpl_vars['goodsInfo']->value['cat_ID']) {?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['catList']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_key']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_key']->value['index'] : null)]['cat_ID'];?>
" selected ><?php echo $_smarty_tpl->tpl_vars['catList']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_key']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_key']->value['index'] : null)]['cat_title'];?>
</option>
                                <?php } else { ?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['catList']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_key']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_key']->value['index'] : null)]['cat_ID'];?>
"><?php echo $_smarty_tpl->tpl_vars['catList']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_key']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_key']->value['index'] : null)]['cat_title'];?>
</option>
                            <?php }?>
                        <?php
}
}
if ($__section_key_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_key'] = $__section_key_0_saved;
}
?>
                    </select>

                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 物品名称 </label>

                <div class="col-sm-6">
                    <input id="goods_Name" name='goods_Name' value="<?php echo $_smarty_tpl->tpl_vars['goodsInfo']->value['goods_Name'];?>
" class="col-xs-10 col-sm-5" type="text">
                </div>
            </div>
            <!-- /section:elements.form -->
            <div class="space-4"></div>
            
            <div class="form-group">
                <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 物品价格 </label>

                <div class="col-sm-6">
                    <input id="goods_Price" name='goods_Price' value="<?php echo $_smarty_tpl->tpl_vars['goodsInfo']->value['goods_Price'];?>
" class="col-xs-10 col-sm-5" type="text">
                </div>
            </div>
            <!-- /section:elements.form -->
            <div class="space-4"></div>
            
            
            <div class="form-group">
                <label class="col-sm-3 control-label no-padding-right" for="form-field-2"> 物品简介 </label>

                <div class="col-sm-6">
                    <textarea id='goods_Info' name="goods_Info" class='col-sm-6' style='resize: none;'><?php echo $_smarty_tpl->tpl_vars['goodsInfo']->value['goods_Info'];?>
</textarea>

                </div>
            </div>

            <div class="space-4"></div>


            <div class="form-group">
                <label class="col-sm-3 control-label no-padding-right" for="form-field-2"> 物品大图 </label>

                <div class="col-sm-3">
                    <input id="id-input-file-2" name="file[]" type="file">
                    <img alt="150x150" src="<?php echo $_smarty_tpl->tpl_vars['goodsInfo']->value['goods_Image'];?>
" height="150" width="150">
                    <input type="hidden" name="file" value="<?php echo $_smarty_tpl->tpl_vars['goodsInfo']->value['goods_Image'];?>
">
                    <input type="hidden" name="goods_ID" value="<?php echo $_smarty_tpl->tpl_vars['goodsInfo']->value['goods_ID'];?>
">
                </div>
            </div>

            <div class="space-4"></div>

            <div class="clearfix form-actions">
                <div class="col-md-offset-3 col-md-9">
                    <button class="btn btn-info" type="submit">
                        <i class="ace-icon fa fa-check bigger-110"></i>
                        提交
                    </button>

                    &nbsp; &nbsp; &nbsp;
                    <button class="btn" type="reset">
                        <i class="ace-icon fa fa-undo bigger-110"></i>
                        重置
                    </button>
                </div>
            </div>

        </form>



    </div>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:contentDown.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
