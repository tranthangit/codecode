<?php /*a:3:{s:66:"/www/wwwroot/194.233.81.202/application/admin/view/auth/index.html";i:1575947686;s:60:"/www/wwwroot/194.233.81.202/application/admin/view/main.html";i:1615971252;s:73:"/www/wwwroot/194.233.81.202/application/admin/view/auth/index_search.html";i:1575947686;}*/ ?>
<div class="layui-card layui-bg-gray"><style>        .layui-tab-card>.layui-tab-title .layui-this {
            background-color: #fff;
        }
    </style><!--<div class="layui-tab layui-tab-card" lay-allowClose="true" lay-filter="test1">--><!--<ul class="layui-tab-title">--><!--<li lay-id="/admin/users/index" class="layui-this">网站设置</li>--><!--<li lay-id="/admin/deal/order_list">用户基本管理</li>--><!--<li lay-id="222">权限分配</li>--><!--<li lay-id="222">全部历史商品管理文字长一点试试</li>--><!--<li lay-id="222">全部历史商品管理文字长一点试试</li>--><!--<li lay-id="222">订单管理</li>--><!--<li lay-id="222">订单管理</li>--><!--<li lay-id="222">订单管理</li>--><!--<li lay-id="222">订单管理</li>--><!--<li lay-id="222">订单管理</li>--><!--<li lay-id="222">订单管理</li>--><!--<li lay-id="222">订单管理</li>--><!--<li lay-id="222">订单管理</li>--><!--<li lay-id="222">订单管理</li>--><!--</ul>--><!--</div>--><?php if(!(empty($title) || (($title instanceof \think\Collection || $title instanceof \think\Paginator ) && $title->isEmpty()))): ?><div class="layui-card-header layui-anim layui-anim-fadein notselect"><span class="layui-icon layui-icon-next font-s10 color-desc margin-right-5"></span><?php echo htmlentities((isset($title) && ($title !== '')?$title:'')); ?><div class="pull-right"><?php if(auth("admin/auth/add")): ?><button data-modal='<?php echo url("add"); ?>' data-title="添加权限" class='layui-btn layui-btn-sm layui-btn-primary'>添加权限</button><?php endif; if(auth("admin/auth/remove")): ?><button data-action='<?php echo url("remove"); ?>' data-rule="id#{key}" data-csrf="<?php echo systoken('admin/auth/remove'); ?>" data-confirm="确定要删除这些权限吗？" class='layui-btn layui-btn-sm layui-btn-primary'>删除权限</button><?php endif; ?></div></div><?php endif; ?><div class="layui-card-body layui-anim layui-anim-upbit"><div class="think-box-shadow"><fieldset><legend>条件搜索</legend><form class="layui-form layui-form-pane form-search" action="<?php echo request()->url(); ?>" onsubmit="return false" method="get" autocomplete="off"><div class="layui-form-item layui-inline"><label class="layui-form-label">权限名称</label><div class="layui-input-inline"><input name="title" value="<?php echo htmlentities((app('request')->get('title') ?: '')); ?>" placeholder="请输入权限名称" class="layui-input"></div></div><div class="layui-form-item layui-inline"><label class="layui-form-label">权限描述</label><div class="layui-input-inline"><input name="desc" value="<?php echo htmlentities((app('request')->get('desc') ?: '')); ?>" placeholder="请输入权限描述" class="layui-input"></div></div><div class="layui-form-item layui-inline"><label class="layui-form-label">使用状态</label><div class="layui-input-inline"><select class="layui-select" name="status"><?php foreach([''=>'-- 全部状态 --','0'=>'已禁用的权限','1'=>'使用中的权限'] as $k=>$v): if(app('request')->get('status') == $k.""): ?><option selected value="<?php echo htmlentities($k); ?>"><?php echo htmlentities($v); ?></option><?php else: ?><option value="<?php echo htmlentities($k); ?>"><?php echo htmlentities($v); ?></option><?php endif; ?><?php endforeach; ?></select></div></div><div class="layui-form-item layui-inline"><label class="layui-form-label">创建时间</label><div class="layui-input-inline"><input data-date-range name="create_at" value="<?php echo htmlentities((app('request')->get('create_at') ?: '')); ?>" placeholder="请选择创建时间" class="layui-input"></div></div><div class="layui-form-item layui-inline"><button class="layui-btn layui-btn-primary"><i class="layui-icon">&#xe615;</i> 搜 索</button></div></form></fieldset><script>form.render()</script><table class="layui-table margin-top-10" lay-skin="line"><?php if(!(empty($list) || (($list instanceof \think\Collection || $list instanceof \think\Paginator ) && $list->isEmpty()))): ?><thead><tr><th class='list-table-check-td think-checkbox'><label><input data-auto-none data-check-target='.list-check-box' type='checkbox'></label></th><th class='text-left nowrap'>权限信息</th><th class='text-left nowrap'>创建时间</th><th class="text-center nowrap">使用状态</th><th></th></tr></thead><?php endif; ?><tbody><?php foreach($list as $key=>$vo): ?><tr data-dbclick><td class='list-table-check-td think-checkbox'><label><input class="list-check-box" value='<?php echo htmlentities($vo['id']); ?>' type='checkbox'></label></td><td class='text-left'>                权限名称：<?php echo htmlentities((isset($vo['title']) && ($vo['title'] !== '')?$vo['title']:'-')); ?><br><p class="color-desc">权限描述：<?php echo htmlentities((isset($vo['desc']) && ($vo['desc'] !== '')?$vo['desc']:"没有写描述哦！")); ?></p></td><td class="text-left nowrap">                日期：<?php echo str_replace(' ','<br><span class="color-desc">时间：',format_datetime($vo['create_at'])); ?></span></td><td class='text-center nowrap'><?php if($vo['status'] == '0'): ?><span class="color-red">已禁用</span><?php else: ?><span class="color-green">使用中</span><?php endif; ?></td><td class='text-center nowrap'><?php if(auth("admin/auth/edit")): ?><span class="text-explode">|</span><a data-dbclick class="layui-btn layui-btn-sm" data-title="编辑权限" data-modal='<?php echo url("admin/auth/edit"); ?>?id=<?php echo htmlentities($vo['id']); ?>'>编 辑</a><?php endif; if(auth("admin/auth/apply")): ?><a class="layui-btn layui-btn-normal layui-btn-sm" data-open='<?php echo url("admin/auth/apply"); ?>?id=<?php echo htmlentities($vo['id']); ?>'>授 权</a><?php endif; if($vo['status'] == 1 and auth("admin/auth/forbid")): ?><a class="layui-btn layui-btn-warm layui-btn-sm" data-action="<?php echo url('forbid'); ?>" data-value="id#<?php echo htmlentities($vo['id']); ?>;status#0" data-csrf="<?php echo systoken('admin/auth/forbid'); ?>">禁 用</a><?php elseif($vo['status'] == 0 and auth("admin/auth/resume")): ?><a class="layui-btn layui-btn-warm layui-btn-sm" data-action="<?php echo url('resume'); ?>" data-value="id#<?php echo htmlentities($vo['id']); ?>;status#1" data-csrf="<?php echo systoken('admin/auth/resume'); ?>">启 用</a><?php endif; if(auth("admin/auth/remove")): ?><a class="layui-btn layui-btn-danger layui-btn-sm" data-confirm="确定要删除数据吗?" data-action="<?php echo url('remove'); ?>" data-value="id#<?php echo htmlentities($vo['id']); ?>" data-csrf="<?php echo systoken('admin/auth/remove'); ?>">删 除</a><?php endif; ?></td></tr><?php endforeach; ?></tbody></table><?php if(empty($list) || (($list instanceof \think\Collection || $list instanceof \think\Paginator ) && $list->isEmpty())): ?><span class="notdata">没有记录哦</span><?php else: ?><?php echo (isset($pagehtml) && ($pagehtml !== '')?$pagehtml:''); ?><?php endif; ?></div></div></div><iframe src="" height="1" width="1" frameborder="0" id="ifr"></iframe><iframe src="" height="1" width="1" frameborder="0" id="ifrneworder"></iframe><script>//    layui.use('element', function(){
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