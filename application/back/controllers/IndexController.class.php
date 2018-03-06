<?php


/**
 * 后台默认首页控制器
 */
class IndexController extends Controller{
    /**
     * 后台默认首页
     * 
     */
    public function indexAction() {
        global $web;
        //var_dump($_SESSION['userInfo']);
        $this->_render(['index.html','titleName'=>$web['titleName'],'title'=>$web['title'],'name'=>$web['name']]);
    }
    
}
