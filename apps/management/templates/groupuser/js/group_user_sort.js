$import(function(){
	$('#group_user_sort').disableSelection();
	$("#group_user_sort ul").sortable({ opacity: 0.6, cursor: 'move', update: function() {} });

	$('#group_user_sort button').click(function(){
		var order = $('#group_user_sort ul').sortable("serialize");
		if (order)
		{
			$.post("index.php?mod=management&con=GroupUser&act=saveSort", order, function(data){
				if (data.success==1)
				{
					$('.modal-scrollable').trigger('click');//关闭遮罩
					util.xalert('操作完成',function(){
						util.page(util.getItem('url'));
					});
				}
				else
				{
					bootbox.error(data);
				}
			});
		}
		else
		{
			util.xalert("我找遍了整个地球也没有发现可排序的用户\r\n亲，你瞅见了吗？");
		}
	});
});