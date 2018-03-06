<?php

/**
 * @encoding UTF-8 
 * @author 猪都笑了e 
 * @copyright Copyright (C) 2016 猪都笑了e 
 * @datetime 2017-2-1  18:21:01
 * @version 1.0
 * @Description of index.php
 **/

/**
 * 入口文件
 */
//唯一访问入口
//define('IN_UNIQUE','in_unique');

//引入自动加载并执行
require_once './public/AutoLoad.class.php';
AutoLoad::getInstance();

//引入配置公共文件
require_once './public/config.php';
require_once './public/libs/Smarty.class.php';


//确定分发参数
//应用平台
define('PLATFORM', isset($_REQUEST['p']) ? $_REQUEST['p'] : $default_platform );
define('CONTROLLER', isset($_REQUEST['c']) ? $_REQUEST['c'] : $default_controller );
define('ACTION', isset($_REQUEST['a']) ? $_REQUEST['a'] : $default_action );

//路径常量
//应用路径
define('APP', './application/'. PLATFORM .'/');
//验证码常量
define('VERIFYCODE','./framework/VerifyCode.class.php');

//控制器ID与动作ID首字母大写
$controller_name = ucwords( CONTROLLER . 'Controller' );
$action_name     = ucwords( ACTION . 'Action' );
//echo $controller_name.',';
//echo $action_name;
//单例模式（入口）
$p = new $controller_name;
$p->$action_name();

