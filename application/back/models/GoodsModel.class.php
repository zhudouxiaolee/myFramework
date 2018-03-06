<?php
/**
 * 二手物品信息模型
 */
class GoodsModel extends Model{
    /**
     * 查询该用户所有的二手物品
     */
    public function selectAll(){
        $sql = "select * from goods where member_ID = '{$_SESSION['userInfo']['member_ID']}'";
        $stmt = $this->_dao->query($sql);
        $result = $stmt->fetchAll();
        if($result){
            return $result;
        }else{
            return false;
        }
    }
    
    /**
     * 查找单一物品
     */
    public function selectSingle($goods_ID){
        $sql = "select goods_ID,goods_Name,goods_Info,goods_Price,goods_Image,cat_ID from goods where goods_ID = {$goods_ID};";
        $stmt = $this->_dao->query($sql);
        $result = $stmt->fetch();
        if($result){
            return $result;
        }else{
            return false;
        }
    }

    /**
     * 添加物品
     */
    public function addGoods($goods,$goods_image){
        $sql = "insert into goods values(null,"
                . "'{$goods['goods_Name']}',"
                . "'{$goods['goods_Info']}',"
                . "'{$goods['goods_Price']}',"
                . "'{$goods_image}',"
                . "unix_timestamp(),"
                . "'{$_SERVER['REMOTE_ADDR']}',"
                . "'{$goods['cat_ID']}',"
                . "'{$_SESSION['userInfo']['member_ID']}');";
        $result = $this->_dao->exec($sql);
        if($result){
            return true;
        }else{
            return false;
        }
    }
    
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
     * 添加物品的更多相关图片
     */
    public function addMore($goods_ID,$more_image){
        $sql = "insert into goods_image values(null,'{$more_image}','{$goods_ID}');";
        $result = $this->_dao->exec($sql);
        if($result){
            return true;
        }else{
            return false;
        }
    }
    
    /**
     * 修改物品信息
     */
    public function updateGoods($updateInfo){
        $sql = "update goods set goods_Name = '{$updateInfo['goods_Name']}',goods_Info = '{$updateInfo['goods_Info']}',"
        . "goods_Price='{$updateInfo['goods_Price']}',goods_image = '{$updateInfo['file']}',cat_ID = '{$updateInfo['cat_ID']}' "
        . "where goods_ID = {$updateInfo['goods_ID']};";
        $result = $this->_dao->exec($sql);
        if($result){
            return true;
        }else{
            return false;
        }
    }

    /**
     * 删除物品与之相关的所有信息
     */
    public function deleteGoods($goods_ID){
        try{
            $this->_dao->beginTransaction();
            $sql1 = "delete from goods where goods_ID = {$goods_ID};";
            $sql2 = "delete from goods_image where goods_ID = {$goods_ID};";
            $this->_dao->exec($sql2);
            $this->_dao->exec($sql1);
            $this->_dao->commit();
            return true;
        }  catch (Exception $exc){
            $this->_dao->rollBack();
            return false;
        }
    }
}
