<?php
/**
 * @name ApiController
 * @author duanChi <http://weibo.com/shijingye>
 * @desc 派单控制器
 * @see http://www.php.net/manual/en/class.yaf-controller-abstract.php
 */
class ApiController extends Yaf\Controller_Abstract {
	/** 
     * 默认动作
     * Yaf支持直接把Yaf_Request_Abstract::getParam()得到的同名参数作为Action的形参
     * 对于如下的例子, 当访问http://yourhost/dashboard/index/index/index/name/duanChi <http://weibo.com/shijingye> 的时候, 你就会发现不同
     */
	public function IndexAction() {
		return FALSE;
	}
	public function UserAction() {
		$_GET['pid'] = isset($_GET['pid']) ? $_GET['pid'] : 0;
		
		$user = \privateClass\Account\SsoAccounter::getInstance()->get_user_by_pid($_GET['pid']);
		echo json_encode($user);
		return FALSE;
	}
}