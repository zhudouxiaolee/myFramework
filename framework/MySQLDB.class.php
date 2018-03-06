<?php

/**
 * @encoding UTF-8 
 * @author 猪都笑了e 
 * @copyright Copyright (C) 2016 猪都笑了e 
 * @datetime 2017-2-1  18:54:04
 * @version 1.0
 * @Description of MySQLDB.class.php
 **/

/**
 * 数据库连接类
 */

class MySQLDB {
    public $dsn;
    public $username;
    public $password;
    public $options;
    //连接结果
    private static $link;
    /**
     * 实现单利模式
     * 遵循三私一公原则（私：连接结果[属性]、构造方法[方法]、禁止克隆[方法]；公：单利方法[方法]）
     * @param type $config 配置信息
     * @return object 返回值
     */
    public static function getInstance($config) {
        if( !isset(self::$link) ) {
            new self( $config );
        }
        return self::$link;
    }

    /**
     * 构造方法（初始化DAO）
     */
    private function __construct($config) {
        $this->dsn      =  isset($config['dsn']) ? $config['dsn'] : 'mysql:host=localhost;dbname=';
        $this->username =  isset($config['username']) ? $config['username'] : 'root';
        $this->password =  isset($config['password']) ? $config['password'] : '';
        $this->options  =  isset($config['options']) ? $config['options'] : '';
        
        //连接操作
        self::$link = $this->connect();
        
    }
    /**
     * 禁止克隆
     */
    private function __clone() {}
    /**
     * 连接数据库
     */
    public function connect() {
        $link = new PDO($this->dsn,  $this->username,  $this->password,  $this->options);
        return $link;
    }
}

