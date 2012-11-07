$(function(){
	//选择产品列表
	$('#PID-selector a[data-value]').on('click',function(){
		select_product(this);
	});
	$('#add-dispatch-modal').on('show',function(){
		init_preview();
	});
	$('#add-dispatch-modal').on('hidden',function(){
		reset_preview();
	});
	$('#add-dispatch-modal-submit').on('click',function(){
		dispatch_submit();
	});
});