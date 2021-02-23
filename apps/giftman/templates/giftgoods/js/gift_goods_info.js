$import(function(){
	var info_form_id = 'gift_goods_info';//form表单id
	var info_form_base_url = 'index.php?mod=giftman&con=GiftGoods&act=';//基本提交路径
	var info_id= '<%$view->get_id()%>';
	var name= '<%$view->get_name()%>';
	var goods_number= '<%$view->get_goods_number()%>';
	var sell_sprice= '<%$view->get_sell_sprice()%>';

	var obj = function(){
		var initElements = function(){
             $("#"+info_form_id+" select").select2({
                placeholder: "请选择",
                allowClear: true,
            }).change(function(e){
                $(this).valid();
            });
            
            //复选框美化
             var test = $("#gift_goods_info input[type='checkbox']:not(.toggle, .make-switch)");
            if (test.size() > 0) {
                test.each(function () {
                if ($(this).parents(".checker").size() == 0) {
                    $(this).show();
                    $(this).uniform();
                }
              });
            }
            
			//单选美化
			var test = $("#"+info_form_id+" input[type='radio']:not(.toggle, .star, .make-switch)");
			if (test.size() > 0) {
				test.each(function () {
					if ($(this).parents(".checker").size() == 0) {
						$(this).show();
						$(this).uniform();
					}
				});
			}
			//复选美化
//			var test = $("#"+info_form_id+" input[type='checkbox']:not(.toggle, .make-switch)");
//			if (test.size() > 0) {
//				test.each(function () {
//					if ($(this).parents(".checker").size() == 0) {
//						$(this).show();
//						$(this).uniform();
//					}
//				});
//			}
			//时间选择器 需要引入"public/js/bootstrap-datepicker/js/bootstrap-datepicker.js","public/js/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js"
//			if ($.datepicker) {
//				$('.date-picker').datepicker({
//					format: 'yyyy-mm-dd',
//					rtl: App.isRTL(),
//					autoclose: true
//				});
//				$('body').removeClass("modal-open"); // fix bug when inline picker is used in modal
//			}
			//下拉美化 需要引入"public/js/select2/select2.min.js"
//			$('#'+info_form_id+' select').select2({
//				placeholder: "请选择",
//				allowClear: true,
////				minimumInputLength: 2
//			}).change(function(e){
//				$(this).valid();
//			});	
		};
		
		//表单验证和提交
		var handleForm = function(){
			var url = info_form_base_url+(info_id ? 'update' : 'insert');
			var options1 = {
				url: url,
				error:function ()
				{
					util.timeout(info_form_id);
				},
				beforeSubmit:function(frm,jq,op){
					return util.lock(info_form_id);
				},
				success: function(data) {
					$('#'+info_form_id+' :submit').removeAttr('disabled');//解锁
					if(data.success == 1 ){
						$('.modal-scrollable').trigger('click');//关闭遮罩(当前弹出框和背景锁定)
						util.xalert(
							info_id ? "修改成功!": "添加成功!",
							function(){
								if (data._cls)
								{//查看编辑
									util.retrieveReload();//刷新查看页签
									util.syncTab(data.tab_id);//刷新数据主列表，无法定位到分页（有可能数据列表页签已经关闭，也有可能是其他对象穿透查看，所以分页函数不一定存在）
								}
								else
								{
									if (info_id)
									{//刷新当前页
										util.page(util.getItem('url'));
									}
									else
									{//刷新首页
										gift_goods_search_page(util.getItem("orl"));
									}
								}
							}
						);
					}
					else
					{
						util.error(data);//错误处理
					}
				}
			};

			$('#'+info_form_id).validate({
				errorElement: 'span', //default input error message container
				errorClass: 'help-block', // default input error message class
				focusInvalid: false, // do not focus the last invalid input
				rules: {
					name:{
						required:true
					},
                    goods_number:{
                        required:true
					},
                    sell_sprice:{
                        required:true,
                        number:true,
                        min:0,
					},

				},
				messages: {
//					'user_id[]':{
//						required:'请选择用户'
//					},
//					abc:{
//						maxlength:'最多输入20个字符'	
//					}
                    name:{
                        required:'赠品名称不能为空'
                    },
                    goods_number:{
                        required:'赠品款号不能为空'
                    },
                    sell_sprice:{
                        required:'赠品售价不能为空',
                        number:'赠品售价只能是合法数字',
                        min:'赠品售价不能小于0',
                    },
				},

				highlight: function (element) { // hightlight error inputs
					$(element)
						.closest('.form-group').addClass('has-error'); // set error class to the control group
					//$(element).focus();
				},

				success: function (label) {
					label.closest('.form-group').removeClass('has-error');
					label.remove();
				},

				errorPlacement: function (error, element) {
					error.insertAfter(element.closest('.form-control'));
				},

				submitHandler: function (form) {
					$("#"+info_form_id).ajaxSubmit(options1);
				}
			});
			//回车提交
			$('#'+info_form_id+' input').keypress(function (e) {
				if (e.which == 13) {
					$('#'+info_form_id).validate().form();
				}
			});
		};
        var initData=function(){
            $('#menu_info :reset').on('click',function(){
                $('#info_form_id input[name="name"]').val(name);
                $('#info_form_id input[name="goods_number"]').val(goods_number);
                $('#info_form_id input[name="sell_sprice"]').val(sell_sprice);
            })
        };
		return {
			init:function(){
				initElements();//处理表单元素
				handleForm();//处理表单验证和提交
				initData();//处理表单重置和其他特殊情况
			}
		}
	}();
	obj.init();
});