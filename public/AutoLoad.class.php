<?php


/**
 * 自定义自动加载
 */

class AutoLoad {
    //存储自动加载是否注册成功的结果
    private static $register;
    
    /**
     * 返回执行结果
     * 
     * @return boolean
     */
    public static function getInstance(){
        if( !isset(self::$register) ) {
            new self;
        }
        return self::$register;
    }

    /**
     * 构造方法
     */
    private function __construct() {
        self::$register = $this->register();
    }
    
    protected static function userAutoLoad($class_name){
        //先处理确定的类（框架核心类）
        //类名与类文件映射数组
        $framework_class_list = array(
            //'类名'=>'类文件地址',
            'Controller' => './framework/Controller.class.php',
            'Factory'    => './framework/Factory.class.php',
            'Model'      => './framework/Model.class.php',
            'MySQLDB'    => './framework/MySQLDB.class.php',
            'MySmarty'     => './framework/MySmarty.class.php',
            'Upload'     => './framework/Upload.class.php',
        );
        //判断是否为框架核心类
        if(isset($framework_class_list[$class_name])) {
            require $framework_class_list[$class_name];
        }
        //判断是否为可增加类
        //控制器类
        elseif(substr($class_name, -10) == 'Controller') {
            require './application/' . PLATFORM . '/controllers/' . $class_name . '.class.php';
        }
        //模型类
        elseif(substr($class_name, -5) == 'Model') {
            require './application/' . PLATFORM . '/models/' . $class_name . '.class.php';
        }
    }
    
    /**
     * 注册自定义自动加载
     * @return boolean 返回值
     */
    private function register(){
        $register = spl_autoload_register(array('AutoLoad','userAutoLoad'));
        return $register;
    }
}