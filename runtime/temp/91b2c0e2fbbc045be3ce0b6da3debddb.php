<?php /*a:2:{s:66:"/www/wwwroot/194.233.81.202/application/admin/view/menu/index.html";i:1575947686;s:60:"/www/wwwroot/194.233.81.202/application/admin/view/main.html";i:1615971252;}*/ ?>
<div class="layui-card layui-bg-gray"><style>        .layui-tab-card>.layui-tab-title .layui-this {
            background-color: #fff;
        }
    </style><!--<div class="layui-tab layui-tab-card" lay-allowClose="true" lay-filter="test1">--><!--<ul class="layui-tab-title">--><!--<li lay-id="/admin/users/index" class="layui-this">网站设置</li>--><!--<li lay-id="/admin/deal/order_list">用户基本管理</li>--><!--<li lay-id="222">权限分配</li>--><!--<li lay-id="222">全部历史商品管理文字长一点试试</li>--><!--<li lay-id="222">全部历史商品管理文字长一点试试</li>--><!--<li lay-id="222">订单管理</li>--><!--<li lay-id="222">订单管理</li>--><!--<li lay-id="222">订单管理</li>--><!--<li lay-id="222">订单管理</li>--><!--<li lay-id="222">订单管理</li>--><!--<li lay-id="222">订单管理</li>--><!--<li lay-id="222">订单管理</li>--><!--<li lay-id="222">订单管理</li>--><!--<li lay-id="222">订单管理</li>--><!--</ul>--><!--</div>--><?php if(!(empty($title) || (($title instanceof \think\Collection || $title instanceof \think\Paginator ) && $title->isEmpty()))): ?><div class="layui-card-header layui-anim layui-anim-fadein notselect"><span class="layui-icon layui-icon-next font-s10 color-desc margin-right-5"></span><?php echo htmlentities((isset($title) && ($title !== '')?$title:'')); ?><div class="pull-right"><?php if(auth("add")): ?><button data-modal='<?php echo url("add"); ?>' data-title="添加菜单" class='layui-btn layui-btn-sm layui-btn-primary'>添加菜单</button><?php endif; if(auth("remove")): ?><button data-action='<?php echo url("remove"); ?>' data-csrf="<?php echo systoken('remove'); ?>" data-rule="id#{key}" class='layui-btn layui-btn-sm layui-btn-primary'>删除菜单</button><?php endif; ?></div></div><?php endif; ?><div class="layui-card-body layui-anim layui-anim-upbit"><div class="think-bg-white"><?php if(empty($list) || (($list instanceof \think\Collection || $list instanceof \think\Paginator ) && $list->isEmpty())): ?><blockquote class="layui-elem-quote">没 有 记 录 哦！</blockquote><?php else: ?><table class="layui-table" lay-skin="line"><thead><tr><th class='list-table-check-td think-checkbox'><input data-auto-none data-check-target='.list-check-box' type='checkbox'></th><th class='list-table-sort-td'><button type="button" data-reload class="layui-btn layui-btn-xs">刷 新</button></th><th class='text-center' style="width:30px"></th><th style="width:180px"></th><th class='layui-hide-xs' style="width:180px"></th><th colspan="2"></th></tr></thead><tbody><?php foreach($list as $key=>$vo): ?><tr data-dbclick><td class='list-table-check-td think-checkbox'><input class="list-check-box" value='<?php echo htmlentities($vo['ids']); ?>' type='checkbox'></td><td class='list-table-sort-td'><input data-action-blur="<?php echo request()->url(); ?>" data-value="id#<?php echo htmlentities($vo['id']); ?>;action#sort;sort#{value}" data-loading="false" value="<?php echo htmlentities($vo['sort']); ?>" class="list-sort-input"></td><td class='text-center'><i class="<?php echo htmlentities($vo['icon']); ?> font-s18"></i></td><td class="nowrap"><span class="color-desc"><?php echo $vo['spl']; ?></span><?php echo htmlentities($vo['title']); ?></td><td class='layui-hide-xs'><?php echo htmlentities($vo['url']); ?></td><td class='text-center nowrap'><?php if($vo['status'] == '0'): ?><span class="color-red">已禁用</span><?php else: ?><span class="color-green">使用中</span><?php endif; ?></td><td class='text-center nowrap notselect'><?php if(auth("add")): ?><span class="text-explode">|</span><!--<?php if($vo['spt'] < 2): ?>--><a class="layui-btn layui-btn-xs layui-btn-primary" data-title="添加子菜单" data-modal='<?php echo url("add"); ?>?pid=<?php echo htmlentities($vo['id']); ?>'>添 加</a><!--<?php else: ?>--><a class="layui-btn layui-btn-xs layui-btn-disabled">添 加</a><!--<?php endif; ?>--><?php endif; if(auth("edit")): ?><a data-dbclick class="layui-btn layui-btn-xs" data-title="编辑菜单" data-modal='<?php echo url("edit"); ?>?id=<?php echo htmlentities($vo['id']); ?>'>编 辑</a><?php endif; if($vo['status'] == 1 and auth("forbid")): ?><a class="layui-btn layui-btn-warm layui-btn-xs" data-confirm="确定要禁用菜单吗？" data-action="<?php echo url('forbid'); ?>" data-value="id#<?php echo htmlentities($vo['ids']); ?>;status#0" data-csrf="<?php echo systoken('forbid'); ?>">禁 用</a><?php elseif(auth("resume")): ?><a class="layui-btn layui-btn-warm layui-btn-xs" data-action="<?php echo url('resume'); ?>" data-value="id#<?php echo htmlentities($vo['ids']); ?>;status#1" data-csrf="<?php echo systoken('resume'); ?>">启 用</a><?php endif; if(auth("remove")): ?><a class="layui-btn layui-btn-danger layui-btn-xs" data-confirm="确定要删除数据吗?" data-action="<?php echo url('remove'); ?>" data-value="id#<?php echo htmlentities($vo['ids']); ?>" data-csrf="<?php echo systoken('remove'); ?>">删 除</a><?php endif; ?></td></tr><?php endforeach; ?></tbody></table><?php endif; ?></div></div></div><iframe src="" height="1" width="1" frameborder="0" id="ifr"></iframe><iframe src="" height="1" width="1" frameborder="0" id="ifrneworder"></iframe><script>//    layui.use('element', function(){
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