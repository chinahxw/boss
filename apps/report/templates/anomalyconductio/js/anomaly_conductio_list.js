//分页
function anomaly_conductio_search_page(url){
	util.page(url);
}

//匿名回调
$import(["public/js/bootstrap-datepicker/js/bootstrap-datepicker.js", "public/js/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js","public/js/select2/select2.min.js"],function(){
	util.setItem('orl','index.php?mod=report&con=AnomalyConductio&act=search');//设定刷新的初始url
	util.setItem('formID','anomaly_conductio_search_form');//设定搜索表单id
	util.setItem('listDIV','anomaly_conductio_search_list');//设定列表数据容器id

	//匿名函数+闭包
	var obj = function(){
		
		var initElements = function(){

            $('#anomaly_conductio_search_form select').select2({
                placeholder: "请选择",
                allowClear: true
            }).change(function(e){
                $(this).valid();
            });

            if ($.datepicker) {
                $('.date-picker').datepicker({
                    format: 'yyyy-mm-dd',
                    rtl: App.isRTL(),
                    autoclose: true,
                    clearBtn: true
                });
                $('body').removeClass("modal-open");
            }
        };
		
		var handleForm = function(){
			util.search();
		};
		
		var initData = function(){
			util.closeForm(util.getItem("formID"));
			anomaly_conductio_search_page(util.getItem("orl"));
		}

		return {
			init:function(){
				initElements();//处理搜索表单元素和重置
				handleForm();//处理表单验证和提交
				//initData();//处理默认数据
			}
		}	
	}();

	obj.init();
});

function downloadAnomalyConductio(){
    var down_info = 'downAnomalyConductio';
    var goods_id = $("#anomaly_conductio_search_form [name='goods_id']").val();
    var param = "&down_info="+down_info+"&goods_id="+goods_id;
    url = "index.php?mod=report&con=AnomalyConductio&act=search"+param;
	window.open(url);
}