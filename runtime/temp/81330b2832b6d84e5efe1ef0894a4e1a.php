<?php /*a:1:{s:72:"/www/wwwroot/194.233.81.202/application/index/view/my/detail-orange.html";i:1662721328;}*/ ?>
<!DOCTYPE html><html lang="zh-CN"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><meta http-equiv="X-UA-Compatible" content="IE=edge"><meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, viewport-fit=cover"><title><?php echo lang('充值.提现'); ?></title><link rel="stylesheet" href="/static_new/css/public.css"><link rel="stylesheet" href="/static_new/css/icon-font.css"><style>        body {
            background: #fff;
            margin-bottom: 65px;
            color: black;
        }

        .header {
            width: 100%;
            background:#FF8828 !important;
            top: 0;
            z-index: 99;
            position: relative;
            color: #5A5A5A;
        }

        .header > p {
            width: 96%;
            margin: 0 2%;
            height: 46px;
            line-height: 46px;
            text-align: center;
        }

        .help-main {
            margin: 15px 10px;
            background: #f3f2f2;
            border-radius: 10px;
            padding: 20px 10px;
        }

        .title {
            padding-bottom: 10px;
            font-weight: 700;
            font-size: 22px;
        }

        .time {
            color: #5A5A5A;
            font-size: 14px;
        }

        .help-detile {
            margin-top: 10px;
            font-size: 13px;
        }

        .help-detile img {
            max-width: 99%;
        }
        .goback>a {
            color: #5A5A5A !important;
            font-size: 14px;
        }
    </style><link rel="stylesheet" href="/static_new/css/theme.css"><script src="/static_new/js/pack.js"></script><script>        (function () {
            var dw = document.createElement("script");
            dw.src = "/static_new/js/pack.js?e9154e78c011e7e0eba17228a1621937"
            var s = document.getElementsByTagName("script")[0];
            s.parentNode.insertBefore(dw, s);
        })()
    </script><script type="application/javascript">        window.onpageshow = function (event) {
            if (event.persisted) {
                window.location.reload();
            }
        };
    </script></head><body id="app"><div class="header"><div class="goback"><span class="icon iconfont icon-fanhui"></span><a href="javascript:history.go(-1)"><?php echo lang('返回'); ?></a></div><p><?php if(app('cookie')->get('think_var') == "zh-cn"): ?><?php echo htmlentities($msg['title']); elseif(app('cookie')->get('think_var') == "kr-kr"): ?><?php echo htmlentities($msg['kr_title']); elseif(app('cookie')->get('think_var') == "fr-fr"): ?><?php echo htmlentities($msg['fr_title']); elseif(app('cookie')->get('think_var') == "es-es"): ?><?php echo htmlentities($msg['es_title']); elseif(app('cookie')->get('think_var') == "pt-pt"): ?><?php echo htmlentities($msg['pt_title']); else: ?><?php echo htmlentities($msg['en_title']); ?><?php endif; ?></p></div><div class="help-main"><p class="time"><!--<?php  echo date('Y-m-d H:i:s', $msg['addtime']);  ?>--></p><div class="help-detile"><?php if(app('cookie')->get('think_var') == "zh-cn"): ?><?php echo $msg['content']; elseif(app('cookie')->get('think_var') == "kr-kr"): ?><?php echo $msg['kr_content']; elseif(app('cookie')->get('think_var') == "fr-fr"): ?><?php echo $msg['fr_content']; elseif(app('cookie')->get('think_var') == "es-es"): ?><?php echo $msg['es_content']; elseif(app('cookie')->get('think_var') == "pt-pt"): ?><?php echo $msg['pt_content']; else: ?><?php echo $msg['en_content']; ?><?php endif; ?></div></div></body></html>