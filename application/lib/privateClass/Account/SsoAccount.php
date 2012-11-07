<?php

namespace privateClass\Account;

class SsoAccount {
	public $_profile = array();
	function __construct() {
		if(!isset($_SESSION)) session_start();
	}
	public function login($uid, $username, $token) {
		$result = FALSE;
		if (!$this->get_user($uid)) {
			//如果没有在系统初始化,则初始化用户
			$result = $this->init_user($uid, $username, $token);
			$_SESSION['UID'] = $uid;
		}
		return $result;
	}
	
	public function check_login($redirect_to_login = TRUE) {
		$result = isset($_SESSION['UID']) ? $_SESSION['UID'] : FALSE;
		$retval = FALSE;
		
		//如果已经登录 则获取用户oauth授权码进行用户profile获取
		if ($result != FALSE) $retval = $this->get_user($result);
		else $this->redirect_sso_login();
		
		if (!$retval) {
			unset($_SESSION['UID']);
			$result = FALSE;
			if ($redirect_to_login == TRUE) $this->redirect_sso_login();
		} elseif (empty($retval['access_token'])) $this->get_oauth();//如果access_token为空,跳转oauth授权
		else $result = $retval;
		return $result;
	}
	
	public function redirect_sso_login() {
		header('Location:'.\Yaf\Registry::get('config')->api->sso->login.'?|'._API_ACCESS_SECRET_KEY);
		setcookie('username',$_COOKIE['username']);
		setcookie('token',$_COOKIE['token']);
		setcookie('access_secret_key',_API_ACCESS_SECRET_KEY);
	}
	
	public function get_oauth() {
		if (!isset($_SESSION['UID']) || empty($_SESSION['UID'])) $this->check_login();
		else {
			header('Location:'.\Yaf\Registry::get('config')->api->oauth->authorize.'?|'._API_ACCESS_SECRET_KEY);
			exit();
		}
	}
	
	public function put_oauth($access_token) {
		$result = FALSE;
		if (!isset($_SESSION['UID']) || empty($_SESSION['UID'])) $this->check_login();
		else {
			$sql = 'UPDATE '.DB__SUPPORT_FOR_OPEN_PLATFORM__USERS.' 
					SET `access_token` = \''.$access_token.'\' 
					WHERE `UID` = '.$_SESSION['UID'];
			$result = \privateClass\Kernel\MYSQL::query($sql,_MYSQL_UPDATE);
		}
		return $result;
	}
	
	public function get_profile($access_token) {
		if (!empty($access_token)) {
			_curl(\Yaf\Registry::get('config')->api->user->profile.'?|'._API_ACCESS_SECRET_KEY.'&access_token='.$access_token);
		}
	}
	
	private function get_user($uid = NULL) {
		$result = FALSE;
		$sql = 'SELECT `UID`, `username`, `access_token`
					FROM'.DB__SUPPORT_FOR_OPEN_PLATFORM__USERS.'
					WHERE `UID` = '.($uid ? $uid : 0).'
					LIMIT 1;';
		$retval = \privateClass\Kernel\MYSQL::query($sql,_MYSQL_QUERY);
		if (isset($retval[0])) $result = $retval[0];
		return $result;
	}
	
	public function init_user($uid, $username, $token) {
		$sql = 'INSERT INTO '.DB__SUPPORT_FOR_OPEN_PLATFORM__USERS.' 
				(`UID`, `username`, `token`) VALUES 
				('.$uid.',\''.$username.'\',\''.$token.'\');';
		return \privateClass\Kernel\MYSQL::query($sql,_MYSQL_INSERT);
	}
	
	public function get_user_by_pid($pid) {
		$uid = 0;
		$result = FALSE;
		$sql = 'SELECT `master_leading`, `slave_leading` FROM '.DB__AFTER_SALES_MANAGE__PRODUCTS.' 
				WHERE `PID` = '.$pid.' AND `enabled` = 1 
				LIMIT 1;';
		$retval = \privateClass\Kernel\MYSQL::query($sql,_MYSQL_QUERY);
		if (isset($retval[0])) {
			if (empty($retval[0]['master_leading']) && !empty($retval[0]['slave_leading'])) {
				$uid = explode(',', $retval[0]['slave_leading'])[0];
			} elseif (!empty($retval[0]['master_leading'])) $uid = $retval[0]['master_leading'];
		}
		$sql = 'SELECT `UID`, `username`, `ROLE_ID`, `update_time` FROM '.DB__AFTER_SALES_MANAGE__USERS.' 
				WHERE `UID` = '.$uid.' AND `enabled` = 1 
				LIMIT 1;';
		$retval = \privateClass\Kernel\MYSQL::query($sql,_MYSQL_QUERY);
		if (isset($retval[0])) $result = $retval[0];
		return $result;
	}
	
	function __destruct() {
	}
}