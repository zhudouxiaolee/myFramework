<?php
/**
 * 二手物品信息模型
 */
class GoodsModel extends Model{
  
    /**
     * 查询物品分类信息
     */
    public function catList(){
        $sql = "select * from goods_cat";
        $stmt = $this->_dao->query($sql);
        $result = $stmt->fetchAll();
        if($result){
            return $result;
        }else{
            return false;
        }
    }

    /**
     * 查找所有物品信息(前台显示)
     */
    public function allGoods(){
        $sql = "select * from goods";
        $stmt = $this->_dao->query($sql);
        $result = $stmt->fetchAll();
        if($result){
            return $result;
        }else{
            return false;
        }
    }
    
    /**
     * 物品信息与所属分类信息
     */
    public function goodsCatInfo(){
        $sql = "select g.*,c.cat_title from goods g left join goods_cat c on c.cat_ID=g.cat_ID order by g.goods_ID desc;";
        $stmt = $this->_dao->query($sql);
        $result = $stmt->fetchAll();
        if($result){
            return $result;
        }else{
            return false;
        }
    }
    
    /**
     * 根据分类ID查找物品
     */
    public function catGoods($cat_ID){
        $sql = "select g.*,c.cat_title from goods g left join goods_cat c on c.cat_ID=g.cat_ID where g.cat_ID='{$cat_ID}' order by g.goods_ID desc;";
        $stmt = $this->_dao->query($sql);
        $result = $stmt->fetchAll();
        if($result){
            return $result;
        }else{
            return false;
        }
    }
    
    /**
     * 根据goods_ID查找物品的所有相关信息
     */
    public function detailGoods($goods_ID){
        $sql = "select * from goods where goods_ID = '{$goods_ID}';";
        $stmt = $this->_dao->query($sql);
        $result = $stmt->fetch();
        if($result){
            return $result;
        }else{
            return false;
        }
    }
    
    /**
     * 根据goods_ID查找物品相关的图片
     */
    public function imageGoods($goods_ID){
        $sql = "select image_URL from goods_image where goods_ID = '{$goods_ID}'";
        $stmt = $this->_dao->query($sql);
        $result = $stmt->fetchAll();
        if($result){
            return $result;
        }else{
            return false;
        }
    }
}
