function user_warehouse_show_subdetail_operation_expandall(o){
	$('#user_warehouse_show_subdetail_operation_info ol').each(function(){
		this.style.display='block';
	});
}

function user_warehouse_show_subdetail_operation_collapseall(o){
	$('#user_warehouse_show_subdetail_operation_info ol').each(function(){
		this.style.display='none';
	});
}

function user_warehouse_show_subdetail_operation_selectall(o){
	user_warehouse_show_subdetail_operation_expandall(o);
	$('#user_warehouse_show_subdetail_operation_info :checkbox').attr('checked',true);
}

function user_warehouse_show_subdetail_operation_selectnone(o){
	user_warehouse_show_subdetail_operation_expandall(o);
	$('#user_warehouse_show_subdetail_operation_info :checkbox').attr('checked',false);
}


function user_warehouse_show_subdetail_operation_reload(o){
	$("#user_warehouse_permission_search_list>ul>li:eq(6)>a").click();
}


function user_warehouse_show_subdetail_operation_save(o){
	$("#user_warehouse_show_subdetail_operation_info").submit();
}

$import(function(){
	var _obj = function(){
		var initElements = function(){
			$('#user_warehouse_show_subdetail_operation_info>ul>li>div>div>span').click(function(){
				var obj = $(this).parent().next();
				obj[0].style.display = obj[0].style.display=='block' ? 'none': 'block';
			});

			$('#user_warehouse_show_subdetail_operation_info>ul>li>div>div>input').click(function(){
				var obj = $(this).parent().next();
				obj[0].style.display='block';
				if (this.checked)
				{
					$(this).parent().next().find(':checkbox').attr('checked',true);
				}
				else
				{
					$(this).parent().next().find(':checkbox').attr('checked',false);
				}
			});		
		
		}

		var handleForm = function(){
			var options1 = {
				url: "index.php?mod=management&con=UserWarehouse&act=saveSubdetailOperation",
				beforeSubmit:function(frm,jq,op){
					frm.push({name:'user_id',value:util.getItem('user_id')});
					frm.push({name:'house_id',value:util.getItem('house_id')});
				},
				error:function ()
				{
					util.xalert('网络异常');
				},
				success:function(data){
					if(data.success == 1 ){
						util.xalert("授权成功!");
					}
					else
					{
						util.xalert("授权失败!");
					}				
				}
			};

			$("#user_warehouse_show_subdetail_operation_info").ajaxForm(options1);		
		
		}

		return {
			init:function(){
				initElements();
				handleForm();
			}
		}
	
	}();
	_obj.init();
});