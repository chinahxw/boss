var role_permission_rel_info_role_id_201412252 = '<%$role_id%>';
var role_permission_rel_info_parent_id = '<%$parent_id%>';

function role_permission_opr_selectall(o){
	$('#role_permission_opr_info_1>div>div').each(function(){
		if ($(this).hasClass('checkbuttonNo'))
		{
			$(this).removeClass('checkbuttonNo').addClass('checkbuttonOk');
			$(this).children('.triangleNo').removeClass('triangleNo').addClass('triangleOk');
		}
	});
}

function role_permission_opr_save(o){
	var ids=[];
	$('#role_permission_opr_info_1 .checkbuttonOk .checktext').each(function(){
		ids.push($(this).attr('id'))
	});
	$.post('index.php?mod=management&con=rolePermission&act=saveOpr',{role_id:role_permission_rel_info_role_id_201412252,parent_id:role_permission_rel_info_parent_id,ids:ids},function(data){
		if (data.success==1)
		{
			util.xalert('操作完成');
		}
		else
		{
			util.error(data);
		}
	});
}

$import(function(){
	$('#role_permission_opr_info_1').disableSelection();
	$("#role_permission_opr_info_1>div>div").click(
		function(event) {
			event.preventDefault();
			if ($(this).attr('class')=='checkbuttonOk')
			{
				$(this).removeClass('checkbuttonOk').addClass('checkbuttonNo');
				$(this).children('.triangleOk').removeClass('triangleOk').addClass('triangleNo');
			}
			else
			{
				$(this).removeClass('checkbuttonNo').addClass('checkbuttonOk');
				$(this).children('.triangleNo').removeClass('triangleNo').addClass('triangleOk');
			}
		}
	);
});
