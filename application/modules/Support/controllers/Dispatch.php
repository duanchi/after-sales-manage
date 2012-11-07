<?php
/**
 * @name DispatchController
 * @author duanChi <http://weibo.com/shijingye>
 * @desc 派单控制器
 * @see http://www.php.net/manual/en/class.yaf-controller-abstract.php
 */
class DispatchController extends Yaf\Controller_Abstract {
	/** 
     * 默认动作
     * Yaf支持直接把Yaf_Request_Abstract::getParam()得到的同名参数作为Action的形参
     * 对于如下的例子, 当访问http://yourhost/dashboard/index/index/index/name/duanChi <http://weibo.com/shijingye> 的时候, 你就会发现不同
     */
	public function IndexAction() {
		//@todo 需要按照用户权限跳转不同action
		$this->redirect('/support/dispatch/support');
		return FALSE;
	}
	public function SupportAction() {
		$result = TRUE;
		if ($this->getRequest()->method == 'POST' && $_GET['type'] == 'ajax') {
			//api方式处理请求
			$retval = TRUE;
			isset($_POST['job_number']) && !empty($_POST['job_number']) ? TRUE : $retval = FALSE;
			isset($_POST['occurrence_time']) && !empty($_POST['occurrence_time']) && strtotime($_POST['occurrence_time']) <= time() && strtotime($_POST['occurrence_time']) > time()-(30*60) ? TRUE : $_POST['occurrence_time'] = date('Y-m-d H:i:s');
			isset($_POST['customer']) && !empty($_POST['customer']) ? TRUE : $retval = FALSE;
			isset($_POST['contacts']) && !empty($_POST['contacts']) ? TRUE : $retval = FALSE;
			isset($_POST['PID']) && !empty($_POST['PID']) && (int)PID != 0 ? TRUE : $retval = FALSE;
			isset($_POST['description']) && !empty($_POST['description']) ? TRUE : $retval = FALSE;
			isset($_POST['comment']) && !empty($_POST['comment']) ? TRUE : $_POST['comment'] = '';
			isset($_POST['enable_msg']) && !empty($_POST['enable_msg']) && $_POST['enable_msg'] == 'true' ? $_POST['enable_msg'] = TRUE : $_POST['enable_msg'] = FALSE;
			$result = FALSE;
		}
		return $result;
	}
}