$import(function(){
	var info_form_id = 'add_order_log_add';//form表单id
	var info_form_base_url = 'index.php?mod=shipping&con=ShipFreight&act=addNote';//基本提交路径
	var order_no = '<%$order_no|default:0%>';

	var obj = function(){
		var initElements = function(){

		};

		//表单验证和提交
		var handleForm = function(){
			var url = info_form_base_url+'&dx=sub&order_no'+order_no;
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
							'添加成功',
							function(){
							//add by zhangruiying
								var url="index.php?mod=shipping&con=ShipFreight&act=orderSearch";
								//var order_no=$('#ship_freight_search_form input[name=order_no]').val();
								url+='&order_no='+order_no;
								util.page(url);
								//add end 添加完刷新页面
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
					'remark':{
						required:true,
						maxlength:100
					},
				},
				messages: {
					'remark':{
						required:'请输入操作内容',
						maxlength:'最多输入100个字符'
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
		var initData = function(){
			$('#'+info_form_id+' :reset').on('click',function(){

			});
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