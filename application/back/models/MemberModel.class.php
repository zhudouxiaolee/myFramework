<?php 

/**
 * 会员管理模型
 */
class MemberModel extends Model {

	/**
	 * 验证登录用户
	 * @param string $username 用户名
	 * @param string $password 密码
	 * @return boolean 返回值
	 */
	public function checkUser($username,$password) {
            if(!$this->updateInfo($username, $password)){
                return false;
            }
	    $sql = "select * from member where "
	            . "member_Name = '{$username}' and "
	            . "member_Pwd = '{$password}'";
	    $stmt = $this->_dao->query($sql);
	    $result = $stmt->fetch();
	    if($result){
                $_SESSION['userInfo'] = $result;
                return true;
            }else{
	        return false;
	    }
            
	}

	/**
	 * 检测用户是否已经登录
	 * @return boolean 返回值
	 */
	public function isLogin() {
            if(isset($_SESSION['username'])){
                return true;
            }else{
                return false;
            }
	}

	/**
	 * 检测会员IDCard是否已经注册过
	 * @param int $IDCard 学生卡号
	 * @return boolean 返回值
	 */
	public function isRegister($IDCard) {
		$sql = "select * from member where member_IDCard = {$IDCard}";
		$stmt = $this->_dao->query($sql);
		$result = $stmt->fetch();
		if($result) {
			return true;
		}else{
			return false;
		}
	}

	/**
	 * 存储会员注册信息
	 * @param array $param
	 * @return boolean 返回值
	 * 
	 */
	public function registerAction($param) {
		$sql = "insert into member values(null, '{$param['IDCard']}',
			'{$param['username']}',md5('{$param['pwd']}'),
			'{$param['department']}','{$param['email']}',
			'{$param['linkTel']}','{$param['address']}',
			 null,null,'./application/back/web/assets/avatars/profile-pic.jpg',0);";
		$result = $this->_dao->exec($sql);
		if($result) {
			return true;
		}else{
			return false;
		}
	}
        
        /**
         * 更新登录用户信息
         */
        public function updateInfo($username,$password){
            $sql = "update member set member_LastIP = '{$_SERVER['REMOTE_ADDR']}', member_LastTime = unix_timestamp() where member_Name = '{$username}' and member_Pwd = '{$password}';";
            $result = $this->_dao->exec($sql);
            if($result) {
                return true;
            }else{
                return false;
            }
        }
        
        /**
         * 更新用户头像
         */
        public function updateUser($member_image,$member_ID){
            $sql = "update member "
                    . "set member_Info = '{$member_image}' "
                    . "where member_ID = '{$member_ID}';";
            $result = $this->_dao->exec($sql);
            if($result){
                return true;
            }else{
                return false;
            }
        }
}