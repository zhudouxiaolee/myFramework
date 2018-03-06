<?php
/* Smarty version 3.1.30, created on 2017-02-26 15:34:47
  from "D:\wamp\www\tstc.edu.shop\application\back\views\index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58b28517dafdf1_61654275',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a56e455b2d0ae2824d4325d821523ac93448258b' => 
    array (
      0 => 'D:\\wamp\\www\\tstc.edu.shop\\application\\back\\views\\index.html',
      1 => 1488010238,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:contentUp.html' => 1,
    'file:userInfo.html' => 1,
    'file:contentDown.html' => 1,
  ),
),false)) {
function content_58b28517dafdf1_61654275 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:contentUp.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:userInfo.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:contentDown.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


        

<?php }
}
