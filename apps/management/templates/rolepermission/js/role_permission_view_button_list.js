var role_permission_view_button_infot_role_id_20150117 = '<%$role_id%>';
var RolePermissionViewButtonListObj = function(){
	var handleTreeList = function(role_id){
		var setting = {
			data: {
				simpleData: {
					enable: true
				}
			},
			callback: {
				onClick: onClick
			}
		};

		function onClick(e,treeId, treeNode) {
			if (treeNode.tid)
			{
				$.post('index.php?mod=management&con=RolePermission&act=viewButtonList',{permission_id:treeNode.tid,role_id:role_id,rid:treeNode.rid},function(data){
					$('#role_permission_view_button_info').html(data);
				});
			}
			else
			{
				$('#role_permission_view_button_info').html('没有按钮');
			}
		}

		var zNodes =[];

		$.ajax({
			async:true,
			type: "POST",
			url: "index.php?mod=management&con=RolePermission&act=menuList&role_id="+role_id,
			dataType:"json",
			success: function(data){

				var i1=i2=true;
				$.each(data,function(i,item){
					if (item.code)
					{
						var chk = parseInt(item.chk);
						if (chk>0)
						{
							var json = {id:item.i,name:item.label,pId:item.parent_id,tid:item.id,rid:item.resource_id}
						}
						else
						{
							return true;
						}
					}
					else
					{
						var json = {id:item.i,name:item.label,pId:item.parent_id,doCheck:false,nocheck:true}
						if (i1)
						{
							json.open=true;
							i1=false;
						}
						else if(i2)
						{
							json.open=true;
							i2=false;
						}
					}
					zNodes.push(json);
				});
				if (zNodes.length)
				{
					$("#role_permission_view_button_tree").addClass('ztree');
					$.fn.zTree.init($("#role_permission_view_button_tree"), setting, zNodes);
				}
				else
				{
					$("#role_permission_view_button_tree").html('没有菜单');
				}
			}
		});
	
	}

	return {
		init:function(){
			handleTreeList(role_permission_view_button_infot_role_id_20150117);
		}
	}
}();


$import(["public/js/jquery-ztree/css/zTreeStyle.css","public/js/jquery-ztree/js/jquery.ztree.core-3.5.js"],function(){
	RolePermissionViewButtonListObj.init();
});