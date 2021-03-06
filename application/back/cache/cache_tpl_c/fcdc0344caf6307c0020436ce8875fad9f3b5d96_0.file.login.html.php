<?php
/* Smarty version 3.1.30, created on 2017-03-04 16:15:28
  from "D:\wamp\www\tstc.edu.shop\application\back\views\login.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58ba77a04fd971_88680117',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fcdc0344caf6307c0020436ce8875fad9f3b5d96' => 
    array (
      0 => 'D:\\wamp\\www\\tstc.edu.shop\\application\\back\\views\\login.html',
      1 => 1488615318,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58ba77a04fd971_88680117 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <meta charset="utf-8" />
        <title><?php echo $_smarty_tpl->tpl_vars['titleName']->value;?>
</title>

        <meta name="description" content="User login page" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

        <!-- bootstrap & fontawesome -->
        <link rel="stylesheet" href="./application/back/web/assets/css/bootstrap.css" />
        <link rel="stylesheet" href="./application/back/web/assets/css/font-awesome.css" />

        <!-- text fonts -->
        <link rel="stylesheet" href="./application/back/web/assets/css/ace-fonts.css" />

        <!-- ace styles -->
        <link rel="stylesheet" href="./application/back/web/assets/css/ace.css" />

        <!--[if lte IE 9]>
                <link rel="stylesheet" href="./application/back/web/assets/css/ace-part2.css" />
        <![endif]-->
        <link rel="stylesheet" href="./application/back/web/assets/css/ace-rtl.css" />

        <!--[if lte IE 9]>
          <link rel="stylesheet" href="./application/back/web/assets/css/ace-ie.css" />
        <![endif]-->

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->

        <!--[if lt IE 9]>
        <?php echo '<script'; ?>
 src="./application/back/web/assets/js/html5shiv.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="./application/back/web/assets/js/respond.js"><?php echo '</script'; ?>
>
        <![endif]-->
    </head>

    <body class="login-layout">
        <div class="main-container">
            <div class="main-content">
                <div class="row">
                    <div class="col-sm-10 col-sm-offset-1">
                        <div class="login-container">
                            <div class="center">
                                <h1>
                                    <i class="ace-icon fa fa-leaf green"></i>
                                    <span class="red"><?php echo $_smarty_tpl->tpl_vars['titleName']->value;?>
</span>
                                    <span class="white" id="id-text2"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</span>
                                </h1>
                                <h4 class="blue" id="id-company-text">&copy; <?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</h4>
                            </div>

                            <div class="space-6"></div>

                            <div class="position-relative">
                                <div id="login-box" class="login-box visible widget-box no-border">
                                    <div class="widget-body">
                                        <div class="widget-main">
                                            <h4 class="header blue lighter bigger">
                                                <i class="ace-icon fa fa-coffee green"></i>
                                                请输入您的信息
                                            </h4>

                                            <div class="space-6"></div>

                                            <form id="loginForm">
                                                <fieldset>
                                                    <label class="block clearfix">
                                                        <span class="block input-icon input-icon-right">
                                                            <input type="text" class="form-control" placeholder="姓名" name="username" />
                                                            <i class="ace-icon fa fa-user"></i>
                                                        </span>
                                                    </label>

                                                    <label class="block clearfix">
                                                        <span class="block input-icon input-icon-right">
                                                            <input type="password" class="form-control" placeholder="密码" name="pwd" />
                                                            <i class="ace-icon fa fa-lock"></i>
                                                        </span>
                                                    </label>
                                                    
                                                    <label class="block clearfix">
                                                        <span class="block">
                                                            验证码：<input id="verifyCode" type="text" name="verifyCode" style="width: 60px;"/>
                                                            <img id="Img" src="<?php echo @constant('VERIFYCODE');?>
" onclick="refresh()" /><a href="#2" onclick="refresh()">看不清，换一张</a>
                                                        </span>
                                                    </label>
                                                    <?php echo '<script'; ?>
 type="text/javascript">
                                                        function refresh() {
                                                            var img = document.getElementById("Img");
                                                            img.src = "<?php echo @constant('VERIFYCODE');?>
?num=" + Math.random();

                                                        }
                                                    <?php echo '</script'; ?>
>
                                                    <div class="space"></div>
                                                    
                                                    <div class="clearfix">
                                                        
                                                        <button type="reset" class="width-25 pull-right btn btn-sm ">
                                                            <i class="ace-icon fa fa-refresh"></i>
                                                            <span class="bigger-110">重置</span>
                                                        </button>
                                                        <button id="login" type="button" class="width-25 pull-right btn btn-sm btn-primary" style="margin-right: 5px;">
                                                            <i class="ace-icon fa fa-key"></i>
                                                            <span class="bigger-110">登录</span>
                                                        </button>
                                                        
                                                    </div>

                                                    <div class="space-4"></div>
                                                </fieldset>
                                            </form>

                                            <div class="social-or-login center">
                                                <span class="bigger-110"></span>
                                            </div>

                                            <div class="space-6"></div>
                                            <!--登录错误信息显示 start-->
                                            <div class="social-login center" id="loginError" style="color:red;">
                                                
                                            </div>
                                            <!--登录错误信息显示 end-->
                                        </div><!-- /.widget-main -->

                                        <div class="toolbar clearfix">
                                            <div>
                                                
                                            </div>

                                            <div>
                                                <a href="#" data-target="#signup-box" class="user-signup-link">
                                                    立即注册
                                                    <i class="ace-icon fa fa-arrow-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div><!-- /.widget-body -->
                                </div><!-- /.login-box -->

                                

                                <div id="signup-box" class="signup-box widget-box no-border">
                                    <div class="widget-body">
                                        <div class="widget-main">
                                            <h4 class="header green lighter bigger">
                                                <i class="ace-icon fa fa-users blue"></i>
                                                新用户注册
                                            </h4>

                                            <div class="space-6"></div>
                                            <p> 开始输入具体信息: </p>

                                            <form id="registerForm" >
                                                <fieldset>
                                                    <label class="block clearfix">
                                                        <span class="block input-icon input-icon-right">
                                                            <input type="text" class="form-control" placeholder="邮箱" name="email" />
                                                            <i class="ace-icon fa fa-envelope"></i>
                                                        </span>
                                                    </label>
                                                    
                                                    <label class="block clearfix">
                                                        <span class="block input-icon input-icon-right">
                                                            <input type="text" class="form-control" placeholder="学号" name="IDCard" />
                                                            <i class="ace-icon fa fa-credit-card"></i>
                                                        </span>
                                                    </label>
                                                    
                                                    <label class="block clearfix">
                                                        <span class="block input-icon input-icon-right">
                                                            <input type="text" class="form-control" placeholder="姓名" name="username" />
                                                            <i class="ace-icon fa fa-user"></i>
                                                        </span>
                                                    </label>

                                                    <label class="block clearfix">
                                                        <span class="block input-icon input-icon-right">
                                                            <input type="password" class="form-control" placeholder="密码" name="pwd" />
                                                            <i class="ace-icon fa fa-lock"></i>
                                                        </span>
                                                    </label>

                                                    <label class="block clearfix">
                                                        <span class="block input-icon input-icon-right">
                                                            <input type="password" class="form-control" placeholder="重复密码" name="repwd" />
                                                            <i class="ace-icon fa fa-retweet"></i>
                                                        </span>
                                                    </label>
                                                    
                                                    <label class="block clearfix">
                                                        <span class="block input-icon input-icon-right">
                                                            <input type="text" class="form-control" placeholder="联系电话" name="linkTel" />
                                                            <i class="ace-icon fa fa-comments-o"></i>
                                                        </span>
                                                    </label>
                                                    
                                                    <label class="block clearfix">
                                                        <span class="block input-icon input-icon-right">
                                                            <select class="form-control" id="department" name="department">
                                                                <option value="" disabled selected hidden>请选择院系</option>
                                                                <option value="数学与信息科学系">数学与信息科学系</option>
                                                                <option value="中文系">中文系</option>
                                                                <option value="外语系">外语系</option>
                                                                <option value="物理系">物理系</option>
                                                                <option value="化学系">化学系</option>
                                                                <option value="生命科学系">生命科学系</option>
                                                                <option value="经济管理系">经济管理系</option>
                                                                <option value="史法系">史法系</option>
                                                                <option value="音乐系">音乐系</option>
                                                                <option value="美术系">美术系</option>
                                                            </select>
                                                        </span>
                                                    </label>
                                                    
                                                    <label class="block clearfix">
                                                        <span class="block input-icon input-icon-right">
                                                            <input type="text" class="form-control" placeholder="住址" name="address" />
                                                            <i class="ace-icon fa fa-home"></i>
                                                        </span>
                                                    </label>
                                                    
                                                    

                                                    <div class="space-24"></div>

                                                    <div class="clearfix">
                                                        <button type="reset" class="width-30 pull-left btn btn-sm">
                                                            <i class="ace-icon fa fa-refresh"></i>
                                                            <span class="bigger-110">重置</span>
                                                        </button>

                                                        <button id="register" type="button" class="width-65 pull-right btn btn-sm btn-success">
                                                            <span class="bigger-110">注册</span>

                                                            <i class="ace-icon fa fa-arrow-right icon-on-right"></i>
                                                        </button>
                                                    </div>
                                                </fieldset>
                                            </form>
                                            <div class="social-or-login center">
                                                <span class="bigger-110"></span>
                                            </div>
                                            <!--注册错误信息显示 start-->
                                            <div class="social-login center" id="registerError" style="color:red;">
                                                
                                            </div>
                                            <!--注册错误信息显示 end-->
                                        </div>
                                        
                                        <div class="toolbar center">
                                            <a href="#" data-target="#login-box" class="back-to-login-link">
                                                <i class="ace-icon fa fa-arrow-left"></i>
                                                返回登录
                                            </a>
                                        </div>
                                    </div><!-- /.widget-body -->
                                </div><!-- /.signup-box -->
                            </div><!-- /.position-relative -->

                            <div class="navbar-fixed-top align-right">
                                <br />
                                &nbsp;
                                <a id="btn-login-dark" href="#">经典黑</a>
                                &nbsp;
                                <span class="blue">/</span>
                                &nbsp;
                                <a id="btn-login-blur" href="#">渐变蓝</a>
                                &nbsp;
                                <span class="blue">/</span>
                                &nbsp;
                                <a id="btn-login-light" href="#">高亮白</a>
                                &nbsp; &nbsp; &nbsp;
                            </div>
                        </div>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.main-content -->
        </div><!-- /.main-container -->

        <!-- basic scripts -->

        <!--[if !IE]> -->
        <?php echo '<script'; ?>
 type="text/javascript">
            window.jQuery || document.write("<?php echo '<script'; ?>
 src='./application/back/web/assets/js/jquery.js'>" + "<" + "/script>");
        <?php echo '</script'; ?>
>

        <!-- <![endif]-->

        <!--[if IE]>
<?php echo '<script'; ?>
 type="text/javascript">
window.jQuery || document.write("<?php echo '<script'; ?>
 src='./application/back/web/assets/js/jquery1x.js'>"+"<"+"/script>");
<?php echo '</script'; ?>
>
<![endif]-->
        <?php echo '<script'; ?>
 type="text/javascript">
            if ('ontouchstart' in document.documentElement)
                document.write("<?php echo '<script'; ?>
 src='./application/back/web/assets/js/jquery.mobile.custom.js'>" + "<" + "/script>");
        <?php echo '</script'; ?>
>

        <!-- inline scripts related to this page -->
        <?php echo '<script'; ?>
 type="text/javascript">
            jQuery(function ($) {
                $(document).on('click', '.toolbar a[data-target]', function (e) {
                    e.preventDefault();
                    var target = $(this).data('target');
                    $('.widget-box.visible').removeClass('visible');//hide others
                    $(target).addClass('visible');//show target
                });
            });



            //you don't need this, just used for changing background
            jQuery(function ($) {
                $('#btn-login-dark').on('click', function (e) {
                    $('body').attr('class', 'login-layout');
                    $('#id-text2').attr('class', 'white');
                    $('#id-company-text').attr('class', 'blue');

                    e.preventDefault();
                });
                $('#btn-login-light').on('click', function (e) {
                    $('body').attr('class', 'login-layout light-login');
                    $('#id-text2').attr('class', 'grey');
                    $('#id-company-text').attr('class', 'blue');

                    e.preventDefault();
                });
                $('#btn-login-blur').on('click', function (e) {
                    $('body').attr('class', 'login-layout blur-login');
                    $('#id-text2').attr('class', 'white');
                    $('#id-company-text').attr('class', 'light-blue');

                    e.preventDefault();
                });

            });
        <?php echo '</script'; ?>
>
        
        <?php echo '<script'; ?>
 type="text/javascript">
            $(function(){
                var preg;
                //登录
                $('#login').click(function(){
                    var username = $('#loginForm').find("input[name='username']").val();
                    var password = $('#loginForm').find("input[name='pwd']").val();
                    var verifyCode = $('#verifyCode').val();
                    if(username == ''){
                        $('#loginError').text('姓名不能为空');
                        return false;
                    }
                    if(password == ''){
                        $('#loginError').text('密码不能为空');
                        return false;
                    }
                    if(verifyCode == ''){
                        $('#loginError').text('验证码不能为空');
                        return false;
                    }
                    $('#loginError').text('');

                    var form = $('#loginForm').serialize();
                    $.ajax({
                        type:'post',
                        url:'index.php?p=back&c=admin&a=check',
                        data:form,
                        dataType:'json',
                        success:function(msg){
                            if(msg.length === 8) {
                                $('#loginError').text(msg);
                            }else if(msg.length === 5){
                                $('#loginError').text(msg);
                            }else{
                                window.location.href = msg;
                            }
                        }
                    });
                });

                //注册
                $('#register').click(function(){
                    var input = $('#registerForm').find('input,select');
                    var error;
                    input.each(function(index,item){
                        if(index != 6){
                            if(item.value == ''){
                                $('#registerError').text(item.placeholder+'不能为空');
                                return false;
                            }
                        }else{
                            if($('#department').val() == null){
                                $('#registerError').text('未选择院系');
                                return false;
                            }
                        }
                        switch(index){
                            case 0:
                                preg = /^([a-z0-9_\.-]+)@([\da-z\.-]+)\.([a-z\.]{2,6})$/;
                                if(!preg.test(item.value)){
                                    $('#registerError').text('邮箱格式非法');
                                    return false;
                                }
                                break;
                            case 1:
                                preg = /^\d{12}$/;
                                if(!preg.test(item.value)){
                                    $('#registerError').text('学生卡号非法');
                                    return false;
                                };
                                break;
                            case 2:
                                preg = /^[\u2E80-\u9FFF]{2,5}$/;
                                if(!preg.test(item.value)){
                                    $('#registerError').text('姓名非法，请输入正确的姓名');
                                    return false;
                                }
                                break;
                            case 3:
                                preg = /^[a-z0-9_-]{6,18}$/;
                                if(!preg.test(item.value)){
                                    $('#registerError').text('密码由6-18位数字字母下划线组成');
                                    return false;
                                }
                                break;
                            case 4:
                                if(item.value != input[index-1].value){
                                    $('#registerError').text('重复密码与第一次密码不符');
                                    return false;
                                }
                                break;
                            case 5:
                                preg = /^[+]{0,1}(\d){1,3}[ ]?([-]?((\d)|[ ]){1,12})+$/; 
                                if(!preg.test(item.value)){
                                    $('#registerError').text('手机号码非法');
                                    return false;
                                }
                                break;
                            
                            case 7:
                                preg = /^[a-zA-Z0-9\u4e00-\u9fa5 ]{3,}$/;
                                if(!preg.test(item.value)){
                                    $('#registerError').text('请输入正确的详细地址（至少3字以上）');
                                    return false;
                                }
                                break;
                        }
                        $('#registerError').text('');
                   });
                    error = $('#registerError').text();
                    if(error == ''){
                        var form = $('#registerForm').serialize();
                        $.ajax({
                            type:'post',
                            url:'index.php?p=back&c=admin&a=register',
                            data:form,
                            dataType:'json',
                            success:function(msg){
                                
                                if(msg.length !== 7 && msg.length !== 4) {
                                    window.location.href = msg;
                                }else{
                                    $('#registerError').text(msg);
                                }
                            }
                        });
                    }else{
                        return false;
                    }
                    
                    
                    
                });

            });
        <?php echo '</script'; ?>
>
    </body>
</html>

<?php }
}
