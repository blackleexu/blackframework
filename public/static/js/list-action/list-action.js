$('.action-del').on('click',function () {
    var url = $(this).data('href');

    layui.use("layer", function () {
        var layer = layui.layer;  //layer初始化
        layer.confirm('确认删除',{btn:['确认','取消']},
            function () {
                $.post(url,{$params},function (data) {
                    if(data.is_ok=='ok'){
                        location.reload();//刷新页面
                        layer.msg(data.msg,{icon:6});
                    }else{
                        layer.msg(data.msg,{icon:5});
                    }
                });
            });
    });
});