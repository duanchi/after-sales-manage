<?php

namespace privateClass\Dispatch;

class Product {
	function __construct() {
		
	}
	
	public function get($parent_id = 0) {
		$result = FALSE;
		$sql = 'SELECT * FROM '.DB__AFTER_SALES_MANAGE__PRODUCTS.' WHERE `parent_id` = '.$parent_id.' AND `enabled` = 1;';
		$retval = \privateClass\Kernel\MYSQL::query($sql,_MYSQL_QUERY);
		if (isset($retval[0])) {
			$result = ['category'=>[],'products'=>[]];
			foreach ($retval as $v) {
				if ($v['is_category'] == '1') {
					unset($v['is_category']);
					unset($v['parent_id']);
					unset($v['enabled']);
					$result['category'][] = array_merge($v,$this->get($v['PID']));
				} else {
					unset($v['is_category']);
					unset($v['parent_id']);
					unset($v['enabled']);
					$result['products'][] = $v;
				}
			}
		}
		return $result;
	}
}

?>