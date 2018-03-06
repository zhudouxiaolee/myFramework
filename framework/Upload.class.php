<?php

/* 
 *            多文件上传类的编写
 */

/*
 *              原理：
 *                  1、获取表单上传文件
 *                  2、获取文件（$files['tmp_name']）
 *                  3、检测文件（类型、大小、上传路径）
 *                  4、上传
 */
class Upload{
    
    private $files;     //获取上传文件
    private $tmpPath;   //上传路径
    private $error;     //错误类型
    private $filesize;  //上传文件大小
    private $errorMsg;  //错误信息
    private $allowSize; //允许上传文件大小
    private $allowType; //允许上传文件类型
    private $userfiles; //上传后的文件名称
    
    
    //构造方法
    public function __construct($files, $allowSize=20, $tmpPath ="./tmp") {

        $this->files = $files;//资源文件
        $this->tmpPath = $tmpPath;//自定义上传路径
        $this->allowSize = $allowSize *1024 *1024; //限制上传文件大小默认20M
        $this->allowType = array('image/jpg', 'image/jpeg', 'image/png', 'image/gif');
    }
    
    
    //错误类型判断
    private function checkError($errorNum) {

        switch ($errorNum) {
            
            case 0:
                $errorMsg = '';
                break;
            case 1:
                $errorMsg = '上传文件超过了约定值';
                break;
            case 2:
                $errorMsg = '上传文件超过了表单隐藏域属性的最大值';
                break;
            case 3:
                $errorMsg = '文件只被部分上传';
                break;
            case 4:
                $errorMsg = '没有上传任何文件';
                break;
            case 5:
                $errorMsg = "上传文件超过{$this->allowSize}限制";
                break;
            case 6:
                $errorMsg = "上传文件类型不正确，仅支持" . implode($this->allowType, ',');
            
        }
        return $errorMsg;
    }
    
    
    //检测上传类型
    private function checkType() {
        
        //遍历文件类型
        foreach ($this->files['type'] as $k => $v) {
            
            //检测该上传文件类型是否符合允许文件类型
            if (!in_array($v, $this->allowType)) {
                
                if ($this->files['error'][$k] == 4) {
                    
                    $this->files['errorMsg'][$k] = $this->checkError(4);
                } else {
                    
                    $this->files['errorMsg'][$k] = $this->checkError(6);
                }
            } else {

                $this->files['errorMsg'][$k] = $this->checkError(0);
            }
        }
    }
    
    
    //检查上传文件大小是否符合限制大小
    private function checkSize() {
        
        //遍历文件大小
        foreach ($this->files['size'] as $k => $v) {
            
            //判断文件大小是否超出限制
            if ($v > $this->allowSize) {
                
                //如果超出，则调用检测错误方法5
                $this->errorMsg = $this->checkError(5);
                $this->files['errorMsg'][$k] = $this->errorMsg;
            }else{
                
                //防止 检测文件的大小的结果 覆盖掉 类型检测的结果
                $this->files['errorMsg'][$k] = $this->files['errorMsg'][$k] . $this->checkError(0);
            }
        }
    }
    
    
    //检测上传路径
    private function checkPath() {
        
        //获取成员属性上传路径
        $tmpPath = $this->tmpPath;
        
        //判断此路径是否存在
        if (!is_dir($tmpPath)) {
            
            //若不存在，则创建目录
            $tmpPath = mkdir($tmpPath, 0777, TRUE);//创建新路径   第三个参数代表  开启  多路径创建
        }
        return $tmpPath;
    }
    
    
    //上传
    public function upload() {
        
        $this->checkType(); //检测类型
        $this->checkSize(); //检测大小
        $this->checkPath(); //检测路径
        
        $tmpPath = $this->checkPath(); //调取上传路径
        
        $files = $this->files;
        
        //判断是否为上传文件(多个文件，考虑遍历)
        foreach ($files['errorMsg'] as $k => $v) { 
            
            //设定用户自定义文件路径
            $userfiles = $tmpPath . '/' . date('ymd') . rand(100, 999) . strstr($files['name'][$k],'.'); 
            $this->userfiles = $userfiles;
            
            //判断错误信息 ($this->files['errorMsg']) 是否为上传类型 0 即为 false时;
            if (!$v) { 
                
                //判断是否为上传文件
                if (is_uploaded_file($files['tmp_name'][$k])) {  
                    
                    //移动目标文件至 新的文件路径
                    if (move_uploaded_file($files['tmp_name'][$k], $userfiles)) {  
                        
                        $files['errorMsg'][$k] = '上传成功';
                    } else {
                        
                        $files['errorMsg'][$k] = '上传失败';
                    }
                }
            }
        }
        return $files;
    }
    
    
    //魔术方法，可以外部访问到私有属性
    public function __get($name) {
        return $this->userfiles;
    }
}
//$files = $_FILES['upload'];
//var_dump($files);
//$u = new Upload($files);
//$u->upload();
