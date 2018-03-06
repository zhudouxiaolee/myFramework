<?php

/**
 * @encoding UTF-8 
 * @author 猪都笑了e 
 * @copyright Copyright (C) 2016 猪都笑了e 
 * @datetime 2017-2-1  19:59:53
 * @version 1.0
 * @Description of Model.class.php
 **/

/**
 * 基础模型类
 */

class Model {
    //存储dao对象的属性，可在子类中访问
    protected $_dao;
    
    /**
     * 初始化DAO
     */
    protected function _initDAO(){
        //实例化对象pdo
        $config = array(
            'dsn'=>'mysql:host=localhost;dbname=transactions;',
            'username'=>'root',
            'password'=>'root',
            'options'=>array(
                PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING,
                PDO::ATTR_CASE =>  PDO::CASE_NATURAL,
                PDO::ATTR_DEFAULT_FETCH_MODE =>  PDO::FETCH_ASSOC,
                PDO::MYSQL_ATTR_INIT_COMMAND =>'set names utf8'
            )
        );
        $this->_dao = MySQLDB::getInstance($config);
    }
    
    /**
     * 构造方法
     */
    public function __construct() {
        $this->_initDAO();
    }
}

