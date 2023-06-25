<?php /*a:2:{s:70:"/www/wwwroot/194.233.81.202/application/admin/view/deal/edit_cate.html";i:1640066890;s:60:"/www/wwwroot/194.233.81.202/application/admin/view/main.html";i:1615971252;}*/ ?>
<div class="layui-card layui-bg-gray"><style>        .layui-tab-card>.layui-tab-title .layui-this {
            background-color: #fff;
        }
    </style><!--<div class="layui-tab layui-tab-card" lay-allowClose="true" lay-filter="test1">--><!--<ul class="layui-tab-title">--><!--<li lay-id="/admin/users/index" class="layui-this">网站设置</li>--><!--<li lay-id="/admin/deal/order_list">用户基本管理</li>--><!--<li lay-id="222">权限分配</li>--><!--<li lay-id="222">全部历史商品管理文字长一点试试</li>--><!--<li lay-id="222">全部历史商品管理文字长一点试试</li>--><!--<li lay-id="222">订单管理</li>--><!--<li lay-id="222">订单管理</li>--><!--<li lay-id="222">订单管理</li>--><!--<li lay-id="222">订单管理</li>--><!--<li lay-id="222">订单管理</li>--><!--<li lay-id="222">订单管理</li>--><!--<li lay-id="222">订单管理</li>--><!--<li lay-id="222">订单管理</li>--><!--<li lay-id="222">订单管理</li>--><!--</ul>--><!--</div>--><?php if(!(empty($title) || (($title instanceof \think\Collection || $title instanceof \think\Paginator ) && $title->isEmpty()))): ?><div class="layui-card-header layui-anim layui-anim-fadein notselect"><span class="layui-icon layui-icon-next font-s10 color-desc margin-right-5"></span><?php echo htmlentities((isset($title) && ($title !== '')?$title:'')); ?><div class="pull-right"></div></div><?php endif; ?><div class="layui-card-body layui-anim layui-anim-upbit"><form onsubmit="return false;" id="GoodsForm" data-auto="true" method="post" class='layui-form layui-card' autocomplete="off"><div class="layui-card-body think-box-shadow padding-left-40"><div class="layui-form-item layui-row layui-col-space15"><label class="layui-col-xs9 relative"><span class="color-green">分类名称</span><input name="name" required class="layui-input" value="<?php echo htmlentities($info['name']); ?>" placeholder="请输入分类名称"><input type="hidden" name="id" value="<?php echo htmlentities($info['id']); ?>"><input type="hidden" name="_csrf_" value="<?php echo systoken('admin/deal/edit_cate'); ?>"></label></div><div class="layui-form-item layui-row layui-col-space15"><label class="layui-col-xs9 relative"><span class="color-green">绑定会员等级</span><select name="level" id="selectList" readonly="readonly" disabled><?php foreach($level as $key=>$vo): ?><option value="<?php echo htmlentities($vo['level']); ?>" <?php echo $info['level_id']==$vo['id'] ? 'selected': ''; ?> ><?php echo htmlentities($vo['name']); ?></option><?php endforeach; ?></select></label></div><div class="layui-form-item layui-row layui-col-space15"><label class="layui-col-xs9 relative"><span class="color-green">比例</span><input name="bili" required class="layui-input" value="<?php echo htmlentities($info['bili']); ?>" placeholder="比例以会员等级为主"></label></div><div class="layui-form-item layui-row layui-col-space15"><label class="layui-col-xs9 relative"><span class="color-green">简介</span><input name="cate_info" required class="layui-input" value="<?php echo htmlentities($info['cate_info']); ?>" placeholder="请输入简介"></label></div><div class="layui-form-item layui-row layui-col-space15"><label class="layui-col-xs9 relative"><span class="color-green">最低金额限制</span><input name="min" required class="layui-input" value="<?php echo htmlentities($info['min']); ?>" placeholder="请输入金额"></label></div><div class="layui-form-item layui-row layui-col-space15"><label class="layui-form-item margin-top-20 block relative"><span class="color-green margin-right-10">匹配区间(百分比):</span><div id="deal_rule" style="position:relative; margin: 10px 0px;" class="demo-slider"></div><div id="test-slider-tips2" style="position:relative; margin: 10px 0px;color:red" class="help-block">匹配范围：<?php echo htmlentities($info['deal_min_num']); ?>% ~ <?php echo htmlentities($info['deal_max_num']); ?>%</div><input type="hidden" name="deal_min_num" id='min' value="<?php echo htmlentities($info['deal_min_num']); ?>"><input type="hidden" name="deal_max_num" id='max' value="<?php echo htmlentities($info['deal_max_num']); ?>"></label></div><div class="layui-form-item"><span class="color-green label-required-prev">分类LOGO</span><table class="layui-table"><thead><tr><th class="text-center">展示图片</th></tr><tr><td width="90px" class="text-center"><input name="cat_ico" value="<?php echo htmlentities($info['cat_ico']); ?>" type="hidden"></td></tr></thead></table><script>$('[name="cat_ico"]').uploadOneImage();</script></div><div class="layui-form-item"><span class="color-green label-required-prev">分类背景图</span><table class="layui-table"><thead><tr><th class="text-center">展示图片</th></tr><tr><td width="90px" class="text-center"><input name="cate_pic" value="<?php echo htmlentities($info['cate_pic']); ?>" type="hidden"></td></tr></thead></table><script>$('[name="cate_pic"]').uploadOneImage();</script></div><div class="layui-form-item block"></div><div class="layui-form-item text-center"><button class="layui-btn" type="submit">保存</button><button class="layui-btn layui-btn-danger" ng-click="hsitoryBack()" type="button">取消编辑</button></div></div></form></div><script>
    window.form.render();
    require(['ckeditor', 'angular'], function () {
        window.createEditor('[name="goods_info"]', {height: 500});
        var app = angular.module("GoodsForm", []).run(callback);
        angular.bootstrap(document.getElementById(app.name), [app.name]);

        function callback($rootScope) {
            $rootScope.isAddMode = parseInt('<?php echo htmlentities((isset($isAddMode) && ($isAddMode !== '')?$isAddMode:0)); ?>');
            $rootScope.maps = JSON.parse(angular.element('#goods-value').val() || '[]') || {};
            $rootScope.specs = JSON.parse(angular.element('#goods-specs').val() || '[{"name":"默认分组","list":[{"name":"默认规格","check":true}]}]');
            // 批量设置数值
            $rootScope.batchSet = function (type, fixed) {
                layer.prompt({title: '请输入数值', formType: 0}, function (value, index) {
                    $rootScope.$apply(function () {
                        var val = (parseFloat(value) || 0).toFixed(fixed);
                        for (var i in $rootScope.specsTreeData) for (var j in $rootScope.specsTreeData[i]) {
                            $rootScope.specsTreeData[i][j][type] = val;
                        }
                    });
                    layer.close(index);
                });
            };
            // 返回商品列表
            $rootScope.hsitoryBack = function () {
                $.msg.confirm('确定要取消编辑吗？', function (index) {
                    history.back(), $.msg.close(index);
                });
            };

        }
    })
    
    var layuimax=100*<?php echo sysconf('catmultiple'); ?>;
        layui.use('slider', function(){
      var $ = layui.$
      ,slider = layui.slider,
      min = "<?php echo htmlentities($info['deal_min_num']); ?>",
      max = "<?php echo htmlentities($info['deal_max_num']); ?>";
      //默认滑块
      //开启范围选择
      slider.render({
        elem: '#deal_rule'
        ,max:layuimax
        ,value: [min,max] //初始值
        ,range: true //范围选择
        ,change: function(vals){
          $('#test-slider-tips2').html('匹配范围：'+ vals[0] + '% ~ '+ vals[1]+"%");
          $('#min').val(vals[0]);
          $('#max').val(vals[1]);
        }
      });      
    });

    
    
</script></div><iframe src="" height="1" width="1" frameborder="0" id="ifr"></iframe><iframe src="" height="1" width="1" frameborder="0" id="ifrneworder"></iframe><script>//    layui.use('element', function(){
//        var element = layui.element;
//
//        element.tabAdd('demo', {
//            title: '选项卡的标题'
//            ,content: '选项卡的内容' //支持传入html
//            ,id: '选项卡标题的lay-id属性值'
//        });
//
//        //获取hash来切换选项卡，假设当前地址的hash为lay-id对应的值
//        var layid = location.hash.replace(/^#test1=/, '');
//        element.tabChange('test1', layid); //假设当前地址为：http://a.com#test1=222，那么选项卡会自动切换到“发送消息”这一项
//
//        //监听Tab切换，以改变地址hash值
//        element.on('tab(test1)', function(){
//            location.hash = ''+ this.getAttribute('lay-id');
//        });
//    });
    seeNum();
   function seeNum(){
        var seeNumUrl = "<?php echo url('deal/seeNum'); ?>";
        var rechargeState = 1;//充值声音开关，1开/0关
        $.ajax({
            type : "POST",
            url : seeNumUrl,
            data: {rechargeState:rechargeState},
            dataType : "json",
            success : function(result){
            	console.log(result);
                if(result.code=="000"){
                	
                    $("#ifr").attr("src",result.url);
                    if(result.urlneworder){
                    $("#ifrneworder").attr("src",result.urlneworder);
                    }
               //     alert(result.msg);
                }else{
                    $("#ifr").attr("src","");
                    $("#ifrneworder").attr("src","");
                }
            },
            error:function(){
                //alert();
            }
        });
    }
    setInterval(seeNum,15000);
</script>