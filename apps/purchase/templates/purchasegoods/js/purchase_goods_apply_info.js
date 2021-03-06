$import(function(){
    var id = '<%$view->get_id()%>';
    var pinfo_id = '<%$pinfo_id%>';
    var obj = function(){
        var initElements = function(){
            $('#purchase_goods_apply_info select').select2({
                placeholder: "请选择",
                allowClear: true
            }).change(function(e){
                $(this).valid();
            });

            $('#purchase_goods_apply_info .close-btn').click(function(){
                $('.modal-scrollable').trigger('click');
            });
        }

        var handleForm = function(){
            var url = 'index.php?mod=purchase&con=PurchaseGoods&act=applyInsert';

            var options1 = {
                url: url,
                error:function ()
                {
                    alert('请求超时，请检查链接');
                },
                beforeSubmit:function(frm,jq,op){
                    $('body').modalmanager('loading');//进度条和遮罩
                },
                success: function(data) {
                    if(data.success == 1 ){
                        $('.modal-scrollable').trigger('click');//关闭遮罩
                        util.xalert('操作成功');
                        util.retrieveReload();
                    }else{
                        $('body').modalmanager('removeLoading');//关闭进度条
                        util.xalert(data.error ? data.error : (data ? data :'程序异常'));
                    }
                },
                error:function(){
                    $('.modal-scrollable').trigger('click');
                    alert("数据加载失败");
                }
            };


            $('#purchase_goods_apply_info').validate({
                errorElement: 'span', //default input error message container
                errorClass: 'help-block', // default input error message class
                focusInvalid: false, // do not focus the last invalid input
                rules: {
                },
                messages: {
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
                    $("#purchase_goods_apply_info").ajaxSubmit(options1);
                }
            });
            //回车提交
            $('#purchase_goods_apply_info input').keypress(function (e) {
                if (e.which == 13) {
                    if ($('#purchase_goods_apply_info').validate().form()) {
                        $('#purchase_goods_apply_info').submit();
                    }
                    else
                    {
                        return false;
                    }
                }
            });

        }

        var initData = function(){
        }

        return {
            init:function(){
                initElements();
                handleForm();
                initData();
            }
        }

    }();
    obj.init();

});
