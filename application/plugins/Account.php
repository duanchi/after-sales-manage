<?php
class AccountPlugin extends Yaf\Plugin_Abstract {
	function __construct() {
		
	}
	public function routerStartup(Yaf\Request_Abstract $request, Yaf\Response_Abstract $response) {
	}
	
	public function routerShutdown(Yaf\Request_Abstract $request, Yaf\Response_Abstract $response) {
	}
	
	public function dispatchLoopStartup(Yaf\Request_Abstract $request, Yaf\Response_Abstract $response) {
		
	}
	
	public function preDispatch(Yaf\Request_Abstract $request, Yaf\Response_Abstract $response) {
		\privateClass\Account\SsoAccounter::init();
	}
	
	public function postDispatch(Yaf\Request_Abstract $request, Yaf\Response_Abstract $response) {
	}
	
	public function dispatchLoopShutdown(Yaf\Request_Abstract $request, Yaf\Response_Abstract $response) {
		\privateClass\Kernel\MYSQL::close();
	}
	
	public function preResponse(Yaf\Request_Abstract $request, Yaf\Response_Abstract $response) {
	
	}
}

?>