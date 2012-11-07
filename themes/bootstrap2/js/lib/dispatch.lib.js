function select_product (obj) {
	var data = $(obj).attr('data-value');
	if (data == '0' || data == 0 || data == null || data == undefined) {
		return false;
	} else {
		$('#PID-selector-name').text((!$.isEmptyObject($(obj).parent().parent().siblings('a').text()) ? ($(obj).parent().parent().siblings('a').text() + ' - ') : '') + $(obj).text());
		$('#PID').val(data);
	}
}

function init_preview() {
	//显示处理人
	if ($('#PID').val() == '') alert('请返回选择产品类别');
	else get_product_leading($('#PID').val());
	
	//客户名称
	$('#preview_customer').text($('#customer').val());
	$('#preview_contacts').text($('#contacts').val());
	$('#preview_PID').text($('#PID-selector-name').text());
	$('#preview_description').text($('#description').val());
	$('#preview_comment').text($('#comment').val());
}

function reset_preview() {
	$('#ctrl_enable_msg').remove();
	$('#preview_customer').text('');
	$('#preview_contacts').text('');
	$('#preview_PID').text('');
	$('#preview_description').text('');
	$('#preview_comment').text('');
}

function get_product_leading(pid) {
	$.ajax({
		url:'/support/api/user',
		dataType:'json',
		data:{'pid':pid},
		success: function(response){
			if (response != false) {
				$('#preview_process_user').text(response.username);
				//短信提醒
				$('#enable_msg').attr('checked') == 'checked' ? $('#preview_process_user').append('<span id="ctrl_enable_msg">(已经启用短信提醒)</span>') : false;
			} else alert('无产品管理人!');
		}
	});
}

function dispatch_submit() {
	var o = {
		job_number:$('#preview_job_number').text(),
		occurrence_time:$('#preview_occurrence_time').text(),
		customer:$('#customer').val(),
		contacts:$('#contacts').val(),
		PID:$('#PID').val(),
		description:$('#description').val(),
		comment:$('#comment').val(),
		enable_msg:$('#enable_msg').val()
	};
	$.ajax({
		url:'/support/dispatch/support?type=ajax',
		type:'POST',
		//dataType:'json',
		data:o,
		success: function(response){
			alert(response);
			$('#add-dispatch-modal .modal-header h3').append('<span class="label label-success">已成功发送至史景烨</span>');
		}
	});
	
}