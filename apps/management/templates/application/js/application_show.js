function menu_group_search_page(url){
	util.page(url,1);
}


$import(function(){
	util.setItem('orl1','index.php?mod=management&con=MenuGroup&act=search&_id='+getID().split('-').pop());//设定刷新的初始url
	util.setItem('formID1','menu_group_search_form');
	util.setItem('listDIV1','menu_group_search_list');


	var obj1 = function(){
		var handleForm1 = function(){
			util.search(1);	
		}
	
		return {
		
			init:function(){
				handleForm1();
				menu_group_search_page(util.getItem('orl1'));
			}
		}
	
	}();

	obj1.init();


	

	//util.closeDetail();//收起所有明细
	util.closeDetail(true);//展示第一个明细
});