<?php

namespace privateClass\Dispatch;

class Dispatch {
	const _SUPPORT = 0;
	const _CONSULT = 1;
	function __construct() {
	}
	function __destruct() {
	}
	
	public function add($type = self::_CONSULT) {
		$sql = '';
		$result = FALSE;
		switch($type) {
			case self::_SUPPORT :
				
				break;
				
			case self::_SUPPORT :
			default :
				$sql = 'INSERT INTO '.DB__AFTER_SALES_MANAGE__DISPATCHES.' 
						(`PID`, `job_number`, `customer`, `contacts`, `description`, `comments`, `occurrence_time`) VALUES 
						('.$_POST['PID'].',\''.$_POST['job_number'].'\',\''.$_POST['customer'].'\',\''.$_POST['contacts'].'\',\''.$_POST['description'].'\',\''.$_POST['comments'].'\',\''.$_POST['occurrence_time'].'\');';
				$result = \privateClass\Kernel\MYSQL::query($sql,_MYSQL_INSERT);
				break;
		}
		return ['status'=>($result ? TRUE : FALSE)];
	}
}

?>