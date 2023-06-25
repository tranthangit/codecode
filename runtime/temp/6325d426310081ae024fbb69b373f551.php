<?php /*a:2:{s:71:"/www/wwwroot/194.233.81.202/application/index/view/my/index-orange.html";i:1662604145;s:75:"/www/wwwroot/194.233.81.202/application/index/view/public/floor-orange.html";i:1663144240;}*/ ?>
<!DOCTYPE html><!-- saved from url=(0035)http://qiang6-www.baomiche.com/#/My --><html data-dpr="1" style="font-size: 37.5px;"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><meta name="viewport" content="width=device-width,user-scalable=no,initial-scale=1,maximum-scale=1,minimum-scale=1"><title><?php echo lang('我的'); ?></title><link href="/static_new6/css/app.orange.css" rel="stylesheet"><link rel="stylesheet" href="/static_new/css/public.css"><script charset="utf-8" src="/static_new/js/jquery.min.js"></script><script charset="utf-8" src="/static_new/js/dialog.min.js"></script><script charset="utf-8" src="/static_new/js/common.js"></script><style type="text/css" title="fading circle style">
        .circle-color-8 > div::before {
            background-color: #ccc;
        }
        .login_nav li a{
            display: block;
            width: 100%;
            margin-top: 0.20rem;
        }
        .login_nav[data-v-d5f15326]{
            background: none;
        }
    </style></head><body style="font-size: 12px;"><div id="app"><div data-v-d5f15326="" class="main"><div class="my-index-header"><div data-v-d5f15326="" class="header"><!--                <span data-v-d5f15326="" class="title"><?php echo lang('我的'); ?></span>--><!--                <div data-v-d5f15326="" class="img">--><!--                    <a data-v-d5f15326="" href="" class="">--><!--                        <img data-v-d5f15326=""--><!--                             src="/web/img/Y-xx.png"--><!--                             alt="">--><!--                    </a>--><!--                    <a data-v-d5f15326="" href="javascript:void(0)" onclick="window.location.href=`/index/ctrl/set`" class="">--><!--                        <img data-v-d5f15326=""--><!--                             src="/web/img/Y-ll.png"--><!--                             alt="">--><!--                    </a>--><!--                </div>--><div data-v-d5f15326="" class="info"><img data-v-d5f15326="" src="/web/img/USER_item.png" onerror="this.src='/public/img/head.png'" alt="" class="headerImg"><div data-v-d5f15326="" class="name"><strong data-v-d5f15326=""><?php echo htmlentities($info['username']); ?></strong><small data-v-d5f15326=""><?php echo lang('邀请码'); ?>:<?php echo htmlentities($info['invite_code']); ?></small></div><div data-v-d5f15326="" style="font-size: 20px ;width: 60px;height: 60px;position: absolute;left:300px; text-align:center;line-height: 60px; background: url(/web/img/Y-vip.png) no-repeat;background-size:100% 100%; color: #D1790F "><?php echo htmlentities($level_name); ?></div><!--                    <div style="" ><?php echo htmlentities($level_name); ?></div>--></div><div data-v-d5f15326="" class="balance"><p data-v-d5f15326=""><span data-v-d5f15326=""><?php echo lang('余额'); ?>：
                        <small data-v-d5f15326="" style="font-size: .40rem"><?php echo lang('￥'); ?><?php echo htmlentities($info['balance']); ?><span></span></small></p><button data-v-d5f15326="" onclick="window.location.href=`/index/ctrl/recharge`" style="background-color: #FEA22C;color: white" class="" ><?php echo lang('充值'); ?></button><button data-v-d5f15326="" onclick="window.location.href=`/index/ctrl/deposit`"  class="" ><?php echo lang('提现'); ?></button></div><!--                <div data-v-d5f15326="" class="yh"></div>--></div></div><div class="content_item" ><ul data-v-d5f15326="" class="login_nav" style="border-bottom: 10px solid #f2f2f2;background-color: white ;border-radius: 15px;"><li data-v-d5f15326=""><a data-v-d5f15326="" href="javascript:void(0)" onclick="window.location.href=`/index/ctrl/recharge_admin`"   class=""><img data-v-d5f15326=""
                             src="/web/img/Ychong.png"
                             alt=""><p data-v-d5f15326=""><?php echo lang('充值记录'); ?></p></a></li><li data-v-d5f15326=""><a data-v-d5f15326="" href="javascript:void(0)" onclick="window.location.href=`/index/order/index`" class=""><img data-v-d5f15326=""
                             src="/web/img/chongz.png"
                             alt=""><p data-v-d5f15326=""><?php echo lang('抢单记录'); ?></p></a></li><li data-v-d5f15326=""><a data-v-d5f15326="" href="javascript:void(0)" onclick="window.location.href=`/index/ctrl/deposit_admin`"  class=""><img data-v-d5f15326=""
                             src="/web/img/chongy.png"
                             alt=""><p data-v-d5f15326=""><?php echo lang('提现记录'); ?></p></a></li></ul><ul data-v-d5f15326="" class="login_nav" style="background-color: white ;border-radius: 5px;"><li data-v-d5f15327=""><a data-v-d5f15326="" href="javascript:void(0)" onclick="window.location.href=`/index/ctrl/set`" class=""><img data-v-d5f15326=""
                             src="/web/img/user_item1.png"
                             alt=""><p data-v-d5f15327=""><?php echo lang('个人信息'); ?></p><img data-v-d5f15326=""
                             class="right"
                             src="/web/img/zjt.png"
                             alt=""></a></li><li data-v-d5f15327=""><a data-v-d5f15326="" href="javascript:void(0)" onclick="window.location.href=`/index/my/caiwu`" class=""><img data-v-d5f15326=""
                             src="/web/img/user_item2.png"
                             alt=""><p data-v-d5f15327=""><?php echo lang('账户明细'); ?></p><img data-v-d5f15326=""
                             class="right"
                             src="/web/img/zjt.png"
                             alt=""></a></li><li data-v-d5f15327=""><a data-v-d5f15326="" href="javascript:void(0)" onclick="window.location.href=`/index/my/invite`" class=""><img data-v-d5f15326=""
                             src="/web/img/user_item3.png"
                             alt=""><p data-v-d5f15327=""><?php echo lang('邀请好友'); ?></p><img data-v-d5f15326=""
                             class="right"
                             src="/web/img/zjt.png"
                             alt=""></a></li><li data-v-d5f15327=""><a data-v-d5f15326="" href="javascript:void(0)" onclick="window.location.href=`/index/my/msg`" class=""><img data-v-d5f15326=""
                             src="/web/img/user_item4.png"
                             alt=""><p data-v-d5f15327=""><?php echo lang('信息公告'); ?></p><img data-v-d5f15326=""
                             class="right"
                             src="/web/img/zjt.png"
                             alt=""></a></li><li data-v-d5f15327=""><a data-v-d5f15326="" href="javascript:void(0)" onclick="window.location.href=`/index/ctrl/junior`" class=""><img data-v-d5f15326=""
                             src="/web/img/user_item5.png"
                             alt=""><p data-v-d5f15327=""><?php echo lang('团队报表'); ?></p><img data-v-d5f15326=""
                             class="right"
                             src="/web/img/zjt.png"
                             alt=""></a></li><li data-v-d5f15327=""><a data-v-d5f15326="" href="javascript:void(0)" onclick="window.location.href=`<?php if(sysconf('app_url')): ?><?php echo sysconf('app_url'); else: ?>/download<?php endif; ?>`" class=""><img data-v-d5f15326="" src="/web/img/user_item6.png" alt=""><p data-v-d5f15327=""><?php echo lang('APP下载'); ?></p><img data-v-d5f15326=""
                             class="right"
                             src="/web/img/zjt.png"
                             alt=""></a></li><li data-v-d5f15327=""><button data-v-d5f15326="" class="tabs_btn1"><img data-v-d5f15326="" src="/web/img/user_item7.png" alt="" style="margin: 0.2rem 0.4rem 0.2rem 0"><!--                        <p data-v-d5f15327=""><?php echo lang('退出登陆'); ?></p>--><?php echo lang('退出登陆'); ?><img data-v-d5f15326=""
                             class="right"
                             src="/web/img/zjt.png"
                             alt=""></button></li><!--                <button data-v-d5f15326="" class="tabs_btn1">--><!--                    <img data-v-d5f15326="" src="/web/img/user_item7.png" alt="">--><!--                    <?php echo lang('退出登陆'); ?>--><!--                    <img data-v-d5f15326=""--><!--                         class="right"--><!--                         src="/web/img/zjt.png"--><!--                         alt="">--><!--                </button>--></ul><!--            <div data-v-d5f15326="" class="LoginOut">--><!--                <button data-v-d5f15326="" class="tabs_btn1"><?php echo lang('退出登陆'); ?></button>--><!--            </div>--></div><link href="/web/css/orange.css" rel="stylesheet" /><div data-v-59e03106="" data-v-43c1797b="" class="footer"><ul data-v-59e03106=""><li data-v-59e03106="" class="" onclick="window.location.href='<?php echo url('index/home'); ?>'"><img data-v-59e03106="" src="/public/black-tb2.png" alt="" /><img data-v-59e03106="" src="/public/black-tb222.png" alt="" /><p data-v-59e03106=""><?php echo lang('首页'); ?></p></li><li data-v-59e03106="" class="" onclick="window.location.href='<?php echo url('order/index'); ?>'"><img data-v-59e03106="" src="/public/black-tb3.png" alt="" /><img data-v-59e03106="" src="/public/black-tb333.png" alt="" /><p data-v-59e03106=""><?php echo lang('记录'); ?></p></li><li data-v-59e03106="" class="t" onclick="window.location.href='<?php echo url('rot_order/index'); ?>'"><img data-v-59e03106="" src="<?php echo lang('/public/addon.png'); ?>" alt="" /><img data-v-59e03106="" src="<?php echo lang('/public/addon.png'); ?>" alt="" /></li><li data-v-59e03106="" class="" onclick="window.location.href='<?php echo url('support/index'); ?>'"><img data-v-59e03106="" src="/public/black-tb4.png" alt="" /><img data-v-59e03106="" src="/public/black-tb444.png" alt="" /><p data-v-59e03106=""><?php echo lang('在线'); ?></p></li><li data-v-59e03106="" class="" onclick="window.location.href='<?php echo url('my/index'); ?>'"><img data-v-59e03106="" src="/public/black-tb1.png" alt="" /><img data-v-59e03106="" src="/public/black-tb111.png" alt="" /><p data-v-59e03106=""><?php echo lang('我的'); ?></p></li></ul></div><script>    function updateactivetime(){
        var url = "<?php echo url('user/updateactivetime'); ?>";
        var isopenoline = 1;
        $.ajax({
            type : "POST",
            url : url,
            data: isopenoline,
            dataType : "json",
            success : function(result){
                console.log(result);
                if(result.code=="0"){

                    alert(result.msg);
                }
            },
            error:function(){
                //alert();
            }
        });
    }
    updateactivetime();

    setInterval(updateactivetime,1000*30);

    (function(doc,win){
        var docEl = doc.documentElement,  //文档根标签
            resizeEvent =  'orientationchange' in window ? 'orientationchang' :'resize'; //viewport变化事件源
        var rescale = function(){
            //重置方法
            win.clientWidth = docEl.clientWidth;
            if (!win.clientWidth) return;
            // 改变DOM根节点fontSize大小的值;
            // (屏幕宽度/设计图宽度) = 缩放或扩大的比例值;
            docEl.style.fontSize = 70 * (win.clientWidth / 750) + 'px';
        }
        if (!doc.addEventListener) return;
        win.addEventListener(resizeEvent, rescale, false);
        doc.addEventListener('DOMContentLoaded', rescale, false);
    })(document, window);
</script><style></style></div></div><script>
    $(function() {
        $('.footer li').eq(4).addClass("on");

    })

    $('.tabs_btn1').click(function () {
        $(document).dialog({
            type: 'confirm',
            titleText: "<?php echo lang('确认退出吗'); ?>?",
            autoClose: 0,
            onClickConfirmBtn: function () {
                window.location.href="<?php echo url('user/logout'); ?>";
            },
            onClickCancelBtn: function () {

            }
        });
    });
        

</script></body></html>