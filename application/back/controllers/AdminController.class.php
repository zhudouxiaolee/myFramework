<?php
/**
 * 管理员操作控制器
 */

class AdminController extends Controller {

	
    /**
     * 登录界面
     */
    public function loginAction() {
        $memberModel = Factory::M('MemberModel');
        //判断用户是否已经登录，若登陆则直接跳转后台首页
        if($memberModel->isLogin()){
            $this->_redirect('index.php?p=back&c=index&a=index');
        }
        global $web;
        
	//调用继承父类的方法，渲染视图
    	$this->_render(['login.html','titleName'=>$web['titleName'],'title'=>$web['title'],'name'=>$web['name']]);
    }

    /**
     * 注册方法
     */
    public function registerAction() {
    	//获取表单提交post数据
    	$post = $_POST;
    	//工厂模式生产模型对象
    	$memberModel = Factory::M('MemberModel');
    	if(!$memberModel->isRegister($post['IDCard'])) {
    		if($memberModel->registerAction($post)){
    			$msg = 'index.php?p=back&c=admin&a=login';
	    	}else{
	    		$msg = '注册失败';
	    	}
    	}else{
    		$msg = '学生卡号已存在';
    	}
    	echo json_encode($msg);
    }

    /**
     * 验证登录动作（ajax方式）
     */
    public function checkAction() {
    	//判断所提交的数据是否存在
    	if(isset($_POST['username']) && isset($_POST['pwd'])){
    		$post = &$_POST;
                if($post['verifyCode'] == $_SESSION['verify']){
                    $memberModel = Factory::M('MemberModel');
                    $result = $memberModel->checkUser($post['username'],md5($post['pwd']));
                    if($result) {
                            $_SESSION['username'] = $post['username'];
                            $msg = json_encode('index.php?p=back&c=index&a=index');
                    }else{
                            $msg =  json_encode('用户名或密码有误');
                    }
                }else{
                    $msg = json_encode('验证码错误');
                }
	        echo $msg;
                
               
    	}
    }
    
    /**
     * 修改头像
     */
    public function updateUserAction(){
        if(isset($_FILES['file']['error'][0])){
            $file = &$_FILES;
            $isUpload = $_FILES['file']['error'][0];
            if($isUpload == 4 ){
                $this->_redirect('index.php?p=back&c=index&a=index');
            }else{
                $memberModel = Factory::M('MemberModel');
                $tmpPath = APP . 'web/upload';
                $upload = new Upload($file['file'], 5, $tmpPath);
                $upload->upload();
                
                if($memberModel->updateUser($upload->userfiles,$_SESSION['userInfo']['member_ID'])){
                    $_SESSION['userInfo']['member_Info'] = $upload->userfiles;
                    $this->_redirect('index.php?p=back&c=index&a=index');
                }else{
                    $this->_redirect('index.php?p=back&c=index&a=index');
                }
            }
        }
    }

        /**
     * 退出登录
     */
    public function logoutAction(){
        if(session_destroy()){
            
            $this->_redirect('index.php?p=back&c=admin&a=login');
        }else{
            $this->_redirect('index.php?p=back&c=index&a=index');
        }
        
    }
}