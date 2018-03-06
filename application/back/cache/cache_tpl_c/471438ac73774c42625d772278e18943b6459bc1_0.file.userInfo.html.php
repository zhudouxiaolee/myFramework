<?php
/* Smarty version 3.1.30, created on 2017-02-26 20:54:13
  from "D:\wamp\www\tstc.edu.shop\application\back\views\userInfo.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58b2cff589cc21_92427745',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '471438ac73774c42625d772278e18943b6459bc1' => 
    array (
      0 => 'D:\\wamp\\www\\tstc.edu.shop\\application\\back\\views\\userInfo.html',
      1 => 1488113651,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58b2cff589cc21_92427745 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once 'D:\\wamp\\www\\tstc.edu.shop\\public\\libs\\plugins\\modifier.date_format.php';
?>

<div>
    <div id="user-profile-1" class="user-profile row">
        <div class="col-xs-12 col-sm-3 center">
            <div>
                <!-- #section:pages/profile.picture -->
                <span class="profile-picture">
                    <img id="avatar" height="150" width="150" class="editable img-responsive editable-click editable-empty" alt="用户头像" src="<?php echo $_SESSION['userInfo']['member_Info'];?>
">
                </span>

                <!-- /section:pages/profile.picture -->
                <div class="space-4"></div>


            </div>

            <div class="space-6"></div>

            <!-- #section:pages/profile.contact -->
            <div class="profile-contact-info">
                <div class="profile-contact-links align-center">

                    <button class="btn btn-link" id="bootbox-regular">
                        <i class="ace-icon fa fa-plus-circle bigger-120 green"></i>
                        修改头像
                    </button>

                </div>

                <div class="space-6"></div>


            </div>


            <!-- /section:pages/profile.contact -->



            <div class="hr hr16 dotted"></div>
        </div>

        <div class="col-xs-12 col-sm-9">


            <div class="space-12"></div>

            <!-- #section:pages/profile.info -->
            <div class="profile-user-info profile-user-info-striped">
                <div class="profile-info-row">
                    <div class="profile-info-name"> 姓名 </div>

                    <div class="profile-info-value">
                        <span class="editable editable-click" id="username"><?php echo $_SESSION['userInfo']['member_Name'];?>
</span>
                    </div>
                </div>

                <div class="profile-info-row">
                    <div class="profile-info-name"> 学号 </div>

                    <div class="profile-info-value">

                        <span class="editable editable-click" ><?php echo $_SESSION['userInfo']['member_IDCard'];?>
</span>

                    </div>
                </div>

                <div class="profile-info-row">
                    <div class="profile-info-name"> 院系 </div>

                    <div class="profile-info-value">
                        <span class="editable editable-click" id="age"><?php echo $_SESSION['userInfo']['member_Departments'];?>
</span>
                    </div>
                </div>

                <div class="profile-info-row">
                    <div class="profile-info-name"> 邮箱 </div>

                    <div class="profile-info-value">
                        <span class="editable editable-click" id="signup"><?php echo $_SESSION['userInfo']['member_Email'];?>
</span>
                    </div>
                </div>

                <div class="profile-info-row">
                    <div class="profile-info-name"> 联系电话 </div>

                    <div class="profile-info-value">
                        <span class="editable editable-click" id="login"><?php echo $_SESSION['userInfo']['member_LinkTel'];?>
</span>
                    </div>
                </div>

                <div class="profile-info-row">
                    <div class="profile-info-name"> 住址 </div>

                    <div class="profile-info-value">
                        <span class="editable editable-click" id="about"><?php echo $_SESSION['userInfo']['member_Address'];?>
</span>
                    </div>
                </div>

                <div class="profile-info-row">
                    <div class="profile-info-name"> 最后一次登录 </div>

                    <div class="profile-info-value">
                        <span class="editable editable-click" id="login"><?php echo smarty_modifier_date_format($_SESSION['userInfo']['member_LastTime'],"%Y-%m-%d %H:%M:%S");?>
</span>
                    </div>
                </div>
            </div>

            <!-- /section:pages/profile.info -->
            <div class="space-20"></div>




            <div class="hr hr2 hr-dotted"></div>

            <div class="space-6"></div>

            <!--头像上传-->
            <div class="hide" id="showFile">
                <div class="bootbox modal fade bootbox-prompt in"  role="dialog" style="display: block; padding-right: 17px;">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="bootbox-close-button close" data-dismiss="modal" aria-hidden="true">×</button>
                                <h4 class="modal-title">仅允许最大1M，类型为jpeg、jpg、gif格式的图片</h4>
                            </div>
                            <div class="modal-body">
                                <div class="bootbox-body">
                                    <form class="bootbox-form" action="index.php?p=back&c=admin&a=updateUser" method="POST" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <!--<div class="col-xs-12">-->
                                            <!-- #section:custom/file-input -->

                                            <input id="id-input-file-2" type="file" name="file[]">

                                            <!--</div>-->
                                        </div>
                                        <div class="modal-footer">
                                            <button data-bb-handler="cancel" id="hideFile" type="button" class="btn btn-default">取消</button>
                                            <button data-bb-handler="confirm" type="submit" class="btn btn-primary">确认修改</button>
                                        </div>
                                    </form>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="modal-backdrop fade in"></div>
            </div>
        </div>
    </div>
</div>
<?php }
}
