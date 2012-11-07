<?php
class SmartyPlugin extends Yaf\Plugin_Abstract {
	function __construct() {
		
	}
	public function routerStartup(Yaf\Request_Abstract $request, Yaf\Response_Abstract $response) {
		
	}
	
	public function routerShutdown(Yaf\Request_Abstract $request, Yaf\Response_Abstract $response) {
		$smarty = new privateClass\Smarty\Adapter(null, Yaf\Registry::get('config')->get('smarty'));
		//初始化跟路径模板
		$smarty->assign('ROOT_TEMPLATE_PATH',Yaf\Registry::get('config')->get('smarty')->get('template_dir'));
		$smarty->assign('_REQUEST',[
			'module'	=>	$request->module,
			'controller'	=>	$request->controller,
			'action'	=>	$request->action
		]);
		Yaf\Dispatcher::getInstance()->setView($smarty);
	}
	
	public function dispatchLoopStartup(Yaf\Request_Abstract $request, Yaf\Response_Abstract $response) {
	
	}
	
	public function preDispatch(Yaf\Request_Abstract $request, Yaf\Response_Abstract $response) {
		
	}
	
	public function postDispatch(Yaf\Request_Abstract $request, Yaf\Response_Abstract $response) {
		
	}
	
	public function dispatchLoopShutdown(Yaf\Request_Abstract $request, Yaf\Response_Abstract $response) {
		
	}
	
	public function preResponse(Yaf\Request_Abstract $request, Yaf\Response_Abstract $response) {
	
	}
}

?>