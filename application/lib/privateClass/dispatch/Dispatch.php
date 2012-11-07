<?php

namespace privateClass\dispatch;

class Dispatch {
	const _SUPPORT = 0;
	const _CONSULT = 1;
	function __construct() {
	}
	function __destruct() {
	}
	
	public function add($type = _CONSULT) {
		$sql = '';
		switch($type) {
			case _SUPPORT :
				
				break;
				
			case _SUPPORT :
			default :
				$sql = 'INSERT INTO '.DB__AFTER_SALES_MANAGE__DISPATCHES.' 
						(`PID`, `job_number`, `customer`, `contacts`, `description`, `comments`, `occurrence_time`) VALUES 
						([value-1],[value-2],[value-3],[value-4],[value-5],[value-6],[value-7],[value-8],[value-9],[value-10],[value-11],[value-12],[value-13]);';
				break;
		}
	}
}

?>