<?php

/**
 * @encoding UTF-8 
 * @author 猪都笑了e 
 * @copyright Copyright (C) 2016 猪都笑了e 
 * @datetime 2017-2-2  15:31:10
 * @version 1.0
 * @Description of config.php
 **/

/**
 * 配置文件
 */
session_start();
//默认时区
date_default_timezone_set('Asia/Shanghai');
//默认平台应用，控制器，动作
//$default_platform   = 'back';
//$default_controller = 'admin';
//$default_action     = 'login';

$default_platform   = 'front';
$default_controller = 'index';
$default_action     = 'index';

//网站信息
$web = array(
    'title'=>'后台管理系统',
    'titleName'=>'二手交易',
    'name'=>'猪都笑了e',
);