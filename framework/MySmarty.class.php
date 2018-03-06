<?php

/**
 * @encoding UTF-8 
 * @author 猪都笑了e 
 * @copyright Copyright (C) 2016 猪都笑了e 
 * @datetime 2017-2-2  13:51:12
 * @version 1.0
 * @Description of Smarty.class.php
 * */

/**
 * smarty模版配置
 */
class MySmarty {
    //存储smarty配置资源
    public static $_smarty;
    /**
     * 单例对象
     * @return  object 返回值
     */
    public static function getSmartyObj(){
        if( !isset(self::$_smarty)) {
            new self;
        }
        return self::$_smarty;
    }

    /**
     * 配置应用类别（前台、后台）
     */
    private function __construct() {
        $this->initPlatform();
    }

    /**
     * 选择应用平台，并对smarty类作相应的配置
     */
    protected function initPlatform() {
        //实例化smarty类
        $smarty = new Smarty();
        //配置smarty类
        //模板目录、编译目录、缓存目录、配置文件目录、边界符号
        $smarty->setTemplateDir(APP . '/views');
        $smarty->setCompileDir(APP . '/cache/cache_tpl_c');
        $smarty->setCacheDir(APP . '/cache');
        $smarty->setConfigDir(APP . '/config');
        //$smarty ->setLeftDelimiter('<{');
        //$smarty ->setRightDelimiter('}>');
        $smarty->left_delimiter = "<{";
        $smarty->right_delimiter = "}>";

        $smarty->caching = FALSE;
        $smarty->debugging = FALSE;
        self::$_smarty = $smarty;
    }

}
