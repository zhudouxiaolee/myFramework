<?php

/*
 *      验证码类的编写
 */

/*
 *      原理：
 *          1、创建画布。
 *          2、创建各种需求的颜色。
 *          3、装饰——多像素点、直线。
 *          4、背景色的填充。
 *          5、验证码内容（默认纯数字）
 *          6、内容的填充。
 *          7、输出与释放。)
 */

class VerifyCode {

    //成员属性
    private $verify_ima;//画布资源
    private $verify_wid;//画布宽度
    private $verify_hei;//画布高度
    private $bg_color;//背景色
    private $text_color;//字体填充色
    private $pixel_color;//像素填充色
    private $line_color;//装饰线颜色
    private $code;//存储验证码数据，存在session中作判断
    private $code_size;//验证码长度
    private $verify_fontfile = "../public/font/Rio Frescata Demo.ttf";//字体
    
    
    //构造方法
    public function __construct($codeSize = 4,$wid = 70,$hei = 34) {
        
        $this->code_size      =   $codeSize;//验证码长度
        $this->verify_wid   =   $wid;//宽度
        $this->verify_hei   =   $hei;//高度
    }




    //成员方法
    private function verify_create_code() {//创建画布
        $this->verify_ima = imagecreatetruecolor($this->verify_wid, $this->verify_hei);
    }

    
    
    private function verify_create_color() {//创建颜色
        
        $this->bg_color = imagecolorallocate($this->verify_ima, rand(190, 240), rand(190, 240), rand(190, 240));//背景色
        $this->text_color = imagecolorallocate($this->verify_ima, rand(50, 150), rand(50, 150), rand(50, 150));//文字颜色
        $this->pixel_color = imagecolorallocate($this->verify_ima, rand(150, 180), rand(150, 180), rand(150, 180));//像素点颜色
        $this->line_color = imagecolorallocate($this->verify_ima, rand(60, 110), rand(60, 110), rand(60, 110));//线颜色
    }

    
    
    private function verify_create_pixel() {//创建多像素点
        
        $i = 1;
        do {
            imagesetpixel($this->verify_ima, rand(0, $this->verify_wid), rand(0, $this->verify_hei), $this->pixel_color);
            $i++;
        } while ($i < $this->verify_wid);
    }

    
    
    private function verify_padding_color() {//背景填充颜色
        
        imagefill($this->verify_ima, 0, 0, $this->bg_color);
    }

    
    
    private function verify_line() {//装饰线
        
        $x1 = $this->verify_wid / 4;
        $y1 = $this->verify_hei * 4 / 6;
        $x2 = $this->verify_wid * 4 / 5;
        $y2 = $this->verify_hei * 4 / 6;
        for ($i = 1; $i < 3; $i++) {
            imageline($this->verify_ima, rand($x1 - 20, $x1), rand($y1 - 20, $y1), rand($x2 - 20, $x2), rand($y2 - 20, $y2), $this->line_color);
        }
    }
    
    

    protected function verify_getdata() { //验证码文字的创建
        
        $arr = array();
        while (count($arr) < $this->code_size) {
            $arr[] = rand(0, 9);
            $arr = array_unique($arr);
        }
        $new_arr = implode(" ", $arr);
        return $new_arr;
    }

    
    
    function verify_getCode() { //将验证码文字存储在session中
        
        if (!isset($_SESSION)) {
            session_start(); //开启session
        }
        $new_arr = $this->code; //获取验证码数据
        $preg = "/[^0-9a-zA-Z]/"; //匹配非数字、字母等
//        var_dump(preg_match_all($preg, $new_arr,$ar));
        $test = preg_replace($preg, '', $new_arr); //替换掉匹配到的空字符并去掉
//        setcookie('test', $test, time() + 60); //用cookie短暂存储验证码数据
        $_SESSION['verify'] = $test;
    }


    private function verify_padding_text() {//文字填充颜色
        
        $this->code = $this->verify_getdata();//获取验证码数据
        $box = imagettfbbox(20, 0, $this->verify_fontfile, $this->code);
        $box_up_x = $this->verify_wid - $box[6] - $box[4];
        $box_up_y = $this->verify_hei - $box[1] - $box[7];
        imagettftext($this->verify_ima, 18, rand(1, 6), ($box_up_x / 2) + 0.06 * $this->verify_wid, $box_up_y / 2 +0.01 * $this->verify_hei, $this->text_color, $this->verify_fontfile, $this->code);
    }

    
    
    function verify_show() {

        header("content-type:image/jpeg");
        $this->verify_create_code();
        $this->verify_create_color();
        $this->verify_create_pixel();
        $this->verify_padding_color();
        $this->verify_line();
        $this->verify_padding_text();
        $this->verify_getCode(); //将验证码文字存储在session中
        imagejpeg($this->verify_ima);
        imagedestroy($this->verify_ima);
    }

}
$v = new VerifyCode();
$v->verify_show();
//echo $_SESSION['verify'];