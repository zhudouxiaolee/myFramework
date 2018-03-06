<?php

/**
 * 前台首页控制器
 */
class IndexController extends Controller{
    //默认首页动作
    public function indexAction(){
        $goodsModel = Factory::M('GoodsModel');
        $goodsInfo = $goodsModel->goodsCatInfo();
        $catList = $goodsModel->catList();
        $this->_render(['index.html',
            'title'=>'二手交易网站',
            'goodsInfo'=>$goodsInfo ,
            'catList'=>$catList]);
    }
    
    /**
     * 根据分类ID查找商品信息
     */
    public function sordListAction(){
        if(isset($_GET['cat_ID'])){
            $cat_ID = &$_GET['cat_ID'];
            
            $goodsModel = Factory::M('GoodsModel');
            $goodsInfo = $goodsModel->catGoods($cat_ID);
            $catList = $goodsModel->catList();
            $this->_render(['index.html',
            'title'=>'二手交易网站',
            'goodsInfo'=>$goodsInfo ,
            'catList'=>$catList]);
        }
    }
    
    /**
     * 物品详细信息
     */
    public function detailsAction(){
        if(isset($_GET['goods_ID'])){
            $goods_ID = &$_GET['goods_ID'];
            //实例化
            $goodsModel = Factory::M('GoodsModel');
            $memberModel = Factory::M('MemberModel');
            
            $catList = $goodsModel->catList();
            $detailGoods = $goodsModel->detailGoods($goods_ID);
            $imageGoods = $goodsModel->imageGoods($goods_ID);
            $memberInfo = $memberModel->selectUser($detailGoods['member_ID']);
            //var_dump($detailGoods);
            //var_dump($imageGoods);
            //var_dump($memberInfo);
            $this->_render(['details.html',
            'title'=>'二手交易网站',
            'detailGoods'=>$detailGoods,
            'imageGoods'=>$imageGoods,
            'memberInfo'=>$memberInfo,
            'catList'=>$catList]);
        }
    }
}