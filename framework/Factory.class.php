<?php

/**
 * @encoding UTF-8 
 * @author 猪都笑了e 
 * @copyright Copyright (C) 2016 猪都笑了e 
 * @datetime 2017-2-1  19:58:47
 * @version 1.0
 * @Description of Factory.class.php
 **/

/**
 * 工厂类（获取单例对象）
 */

class Factory {
    /**
     * 生产模型的单利对象
     * 
     * @param string $model_name 模型名称
     * @return object 返回值
     */
    public static function M($model_name){
        //存储已经实例化好的模型对象列表，key：模型名；value：模型对象
        static $model_list = array();
        //判断该模型对象是否存在
        if( !isset($model_list[$model_name]) ) {
            $model_list[$model_name] = new $model_name;
        }
        return $model_list[$model_name];
    }
    
    
}
