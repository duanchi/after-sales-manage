<?php

/**
 * @name TestController
 * @author duanChi <http://weibo.com/shijingye>
 * @desc 默认控制器
 * @see http://www.php.net/manual/en/class.yaf-controller-abstract.php
 */
class TestController extends Yaf\Controller_Abstract {

	/** 
     * 默认动作
     * Yaf支持直接把Yaf_Request_Abstract::getParam()得到的同名参数作为Action的形参
     * 对于如下的例子, 当访问http://yourhost/dashboard/index/index/index/name/duanChi <http://weibo.com/shijingye> 的时候, 你就会发现不同
     */

	public function constAction() {
		var_dump(get_defined_constants());
		return FALSE;
	}
	
	public function cookieAction() {
		//header('Set-cookie:name=duanchi;',FALSE);
		//header('Set-cookie:pass=i5;',FALSE);
		setcookie('name','haha');
		setcookie('passd','lalala');
		return FALSE;
	}
	
	public function sendAction() {
		
		$string = iconv('UTF-8', 'GB2312', (isset($_GET['content']) && !empty($_GET['content']) ? $_GET['content'] : '测试短信').'[石家庄联通中间件]');
		$request = [
			'SpCode'	=>	'',
			'LoginName'	=>	'',
			'Password'	=>	'',
			'MessageContent'	=>	$string,
			'UserNumber'	=>	$_GET['number'],
			'SerialNumber'	=>	date('YmdHisms').rand(0, 99),
			'ScheduleTime'	=>	'',
			'f'	=>	'1'
		];
		$response = _curl('http://www.ums86.com:8899/sms/Api/Send.do',http_build_query($request),_HTTP_POST);
		var_dump($response);
		return FALSE;
	}
	
	public function decodeAction() {
		echo urlencode('%B2%E2%CA%D4%B6%CC%D0%C5%5B%CA%AF%BC%D2%D7%AF%C1%AA%CD%A8%D6%D0%BC%E4%BC%FE%5D');
	}
}