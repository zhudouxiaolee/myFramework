<?php

/**
 * 物品管理控制器
 */
class GoodsController extends Controller{
    /**
     * 物品信息
     */
    public function listAction(){
        //工厂类生产对象
        $goodsModel = Factory::M('GoodsModel');
        //获取该用户所有物品信息
        $goodsInfo = $goodsModel->selectAll();
        global $web;
        //var_dump($_SESSION['userInfo']);
        $this->_render(['goodsList.html',
            'titleName'=>$web['titleName'],
            'title'=>$web['title'],
            'name'=>$web['name'],
            'goodsInfo'=>$goodsInfo]);
    }

    /**
     * 添加二手物品
     */
    public function addAction(){
        $goodsModel = Factory::M('GoodsModel');
        
        if(!empty($_POST)){
            $post = &$_POST;
            $file = &$_FILES;
            //自定义上传路径
            $tmpPath = APP . 'web/upload';
            $upload = new Upload($file['file'], 5, $tmpPath);
            $upload->upload();
            
            if($goodsModel->addGoods($post,$upload->userfiles)){
                $this->_redirect('index.php?p=back&c=goods&a=list');
            }else{
                $this->_redirect('index.php?p=back&c=index&a=index');
            }
            
        }
        $catList = $goodsModel->catList();
        
        global $web;
        //渲染试图
        $this->_render(['goodsAdd.html',
            'titleName'=>$web['titleName'],
            'title'=>$web['title'],
            'name'=>$web['name'],
            'catList'=>$catList,
            ]);
    }
    
    /**
     * 添加更多该物品的相关图片
     */
    public function moreGoodsAction(){
        if(!empty($_POST)){
            $goodsModel = Factory::M('GoodsModel');
            $goods_ID = &$_POST['goods_ID'];
            $file = &$_FILES;
            //自定义上传路径
            $tmpPath = APP . 'web/upload';
            $upload = new Upload($file['file'], 5, $tmpPath);
            $upload->upload();
            if($goodsModel->addMore($goods_ID,$upload->userfiles)){
                $this->_redirect('index.php?p=back&c=goods&a=list');
            }else{
                $this->_redirect('index.php?p=back&c=index&a=index');
            }
        }
        if(isset($_GET['goods_ID'])){
            $goods_ID = &$_GET['goods_ID'];
            global $web;
            //渲染试图
            $this->_render(['goodsMore.html',
                'titleName'=>$web['titleName'],
                'title'=>$web['title'],
                'name'=>$web['name'],
                'goods_ID'=>$goods_ID]);
        }
        
        
    }
    /**
     * 修改物品信息
     */
    public function updateAction(){
        $goodsModel = Factory::M('GoodsModel');
        if(!empty($_POST)){
            $post = &$_POST;
            $file = &$_FILES;
            $isUpload = $_FILES['file']['error'][0];//上传文件错误类型
            //判断是否有新上传图片
            if($isUpload != 4){
                //自定义上传路径
                $tmpPath = APP . 'web/upload';
                $upload = new Upload($file['file'], 5, $tmpPath);
                $upload->upload();
                $post['file'] = $upload->userfiles;
            }
            if($goodsModel->updateGoods($post)){
                $this->_redirect('index.php?p=back&c=goods&a=list');
            }else{
                $this->_redirect('index.php?p=back&c=index&a=index');
            }
            
        }
        $catList = $goodsModel->catList();
        if(isset($_GET['goods_ID'])){
            $goodsInfo = $goodsModel->selectSingle($_GET['goods_ID']);
        }
        
        global $web;
        //渲染试图
        $this->_render(['goodsUpdate.html',
            'titleName'=>$web['titleName'],
            'title'=>$web['title'],
            'name'=>$web['name'],
            'catList'=>$catList,
            'goodsInfo'=>$goodsInfo,
            ]);
    }
    /**
     * 删除该物品所有相关信息
     */
    public function deleteAction(){
        if(isset($_GET['goods_ID'])){
            $goodsModel = Factory::M('GoodsModel');
            if($goodsModel->deleteGoods($_GET['goods_ID'])){
                $this->_redirect('index.php?p=back&c=goods&a=list');
            }else{
                $this->_redirect('index.php?p=back&c=index&a=index');
            }
        }
    }
}
