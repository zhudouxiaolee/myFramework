<?php
/* Smarty version 3.1.30, created on 2017-02-26 15:35:39
  from "D:\wamp\www\tstc.edu.shop\application\back\views\goodsMore.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58b2854b650f28_49296834',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ba2dd53b9d899b1a670bf81a5872ded2ce3a802f' => 
    array (
      0 => 'D:\\wamp\\www\\tstc.edu.shop\\application\\back\\views\\goodsMore.html',
      1 => 1488088963,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:contentUp.html' => 1,
    'file:contentDown.html' => 1,
  ),
),false)) {
function content_58b2854b650f28_49296834 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:contentUp.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class='page-content'>
    <div class='row'>

        <!-- PAGE CONTENT BEGINS -->
        <form class="form-horizontal" action="index.php?p=back&c=goods&a=moreGoods" id="goodsForm" enctype="multipart/form-data" role="form" method="POST">
            <input type="hidden" name="goods_ID" value="<?php echo $_smarty_tpl->tpl_vars['goods_ID']->value;?>
" />
            <div class="form-group">
                <label class="col-sm-3 control-label no-padding-right" for="form-field-2"> 添加相关图片信息 </label>

                <div class="col-sm-3">
                    <input id="id-input-file-2" name="file[]" type="file">
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
?>

<?php }
}
