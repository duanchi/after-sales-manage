<?php

namespace privateClass\Dispatch;

class Dispatch {
	const _SUPPORT = 0;
	const _CONSULT = 1;
	function __construct() {
	}
	function __destruct() {
	}
	
	/**
	 * 添加工单
	 * @param $type _SUPPORT:售后工单,_CONSULT:咨询工单
	 * @return multitype:boolean
	 */
	public function add($type = self::_SUPPORT) {
		$sql = '';
		$result = FALSE;
		switch($type) {
			case self::_CONSULT :
				
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
	
	public function make_jobnumber() {
		!isset($_GET['pid']) || empty($_GET['pid']) ? $_GET['pid'] = 0 : FALSE ;
		$result = FALSE;
		$sql = 'SELECT * FROM '.DB__AFTER_SALES_MANAGE__DISPATCH_JOBNUMBER_INIT.' WHERE `PID` = '.$_GET['pid'].' LIMIT 1;';
		$retval = \privateClass\Kernel\MYSQL::query($sql,_MYSQL_QUERY);
		if (isset($retval[0])) {
			$date = date('Ymd');
			$sql = '';
			if ($date == $retval[0]['init_date']) {
				$result = $retval[0]['identify'].'-'.$retval[0]['init_date'].str_pad($retval[0]['temp_number'],4,'0',STR_PAD_LEFT);
				$sql = 'UPDATE '.DB__AFTER_SALES_MANAGE__DISPATCH_JOBNUMBER_INIT.'
						SET `temp_number` = '.((int)$retval[0]['temp_number'] + 1).'
						WHERE `INIT_ID` = '.$retval[0]['INIT_ID'].';';
			} else {
				$result = $retval[0]['identify'].'-'.$date.'0001';
				$sql = 'UPDATE '.DB__AFTER_SALES_MANAGE__DISPATCH_JOBNUMBER_INIT.' 
						SET `init_date` = \''.$date.'\', `temp_number` = 1 
						WHERE `INIT_ID` = '.$retval[0]['INIT_ID'].';';
				
			}
			\privateClass\Kernel\MYSQL::query($sql,_MYSQL_UPDATE);
		}
		return $result;
	}
}

?>