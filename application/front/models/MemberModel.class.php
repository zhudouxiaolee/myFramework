<?php 

/**
 * 会员管理模型
 */
class MemberModel extends Model {

    /**
     * 查找用户
     */
    public function selectUser($member_ID){
        $sql = "select member_Name,member_Departments,member_Email,member_LinkTel,member_Address from member where member_ID = '{$member_ID}';";
        $stmt = $this->_dao->query($sql);
        $result = $stmt->fetch();
        if($result){
            return $result;
        }else{
            return false;
        }
    }
}