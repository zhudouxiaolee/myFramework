<?php

/**
 * @encoding UTF-8 
 * @author 猪都笑了e 
 * @copyright Copyright (C) 2016 猪都笑了e 
 * @datetime 2017-2-1  20:00:27
 * @version 1.0
 * @Description of Controller.class.php
 **/

/**
 * 基础控制器类
 */

class Controller {
    protected static $_smarty;
    /**
     * 构造方法
     */
    public function __construct() {

        $this->_initContentType();
    }

    /**
     * 初始化Content-Type:text/html;charset=utf-8;
     */
    protected function _initContentType() {
        header('Content-Type:text/html;charset=utf-8;');
    }

    /**
     * 跳转方法
     * @param string $url 跳转URL
     * @param string $info 提示信息
     * @param int $time 延迟时间跳转
     * @return void 无返回值
     */
    protected function _redirect($url,$info = null,$time = 3) {
        //判断直接跳转or延时刷新跳转
        if(is_null($info)) {
            header('Location:'.$url);
        } else {
            header("Refresh: $time; URL= $url;");
            echo $info;
        }
        //终止程序执行
        exit;
    }
    /**
     * 获取smarty对象方法
     * @return object 返回值
     */
    protected function _getSmartyObj() {
        //smarty类的配置+实例化对象
        self::$_smarty = MySmarty::getSmartyObj();
        
    }

    /**
     * 渲染视图，绑定变量
     * @param  string|array $param 如果为字符串则直接跳转到所传输的URL地址；
     *                             若为数组，第一个参数为URL地址；第二个为所要在模版上输出的变量（key=>value，
     *                             key:模版中输出的变量；value:要输出的值；）
     * @return  void 无返回值
     */
    protected function _render($param) {
        if(!isset(self::$_smarty)) {
            $this->_getSmartyObj();
        }
        $smarty = self::$_smarty;
        if(is_array($param)){
            reset($param);
            $page = array_shift($param);
            foreach($param as $key => $value) {
                $smarty->assign($key,$value);
            }
            $smarty->display($page);
        }else{
            $smarty->display($param);
        }
    }
}