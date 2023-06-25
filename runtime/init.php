<?php 
// This cache file is automatically generated at:2023-06-22 12:39:12

 function is_mobile($tel){ if(preg_match("/^1[345789]{1}\d{9}$/",$tel)){ return true; }else{ return false; } } function is_image_base64($base64) { if (preg_match('/^(data:\s*image\/(\w+);base64,)/', $base64, $result)){ return true; }else{ return false; } } function check_pic($dir,$type_img){ $new_files = $dir.date("YmdHis"). '-' . rand(0,9999999) . "{$type_img}"; if(!file_exists($new_files)) return $new_files; else return check_pic($dir,$type_img); } function get_arr_column($arr, $key_name) { $arr2 = array(); foreach($arr as $key => $val){ $arr2[] = $val[$key_name]; } return $arr2; } function tow_float($number){ return (floor($number * 100) / 100); } function getSn($head='') { @date_default_timezone_set("PRC"); $order_id_main = date('YmdHis') . mt_rand(1000, 9999); $osn = $head.substr($order_id_main,2); return $osn; } function setconfig($name, $value) { if (is_array($name) and is_array($value)) { for ($i = 0; $i < count($name); $i++) { $names[$i] = '/\'' . $name[$i] . '\'(.*?),/'; $values[$i] = "'". $name[$i]. "'". "=>" . "'".$value[$i] ."',"; } $fileurl = APP_PATH . "../config/app.php"; $string = file_get_contents($fileurl); $string = preg_replace($names, $values, $string); file_put_contents($fileurl, $string); return true; } else { return false; } } function get_username() { $chars1 = "ABCDEFGHIJKLMNOPQRSTUVWXYZ"; $chars2 = "abcdefghijklmnopqrstuvwxyz0123456789"; $username = ""; for ( $i = 0; $i < mt_rand(2,3); $i++ ) { $username .= $chars1[mt_rand(0,25)]; } $username .='_'; for ( $i = 0; $i < mt_rand(4,6); $i++ ) { $username .= $chars2[mt_rand(0,35)]; } return $username; } function check_time( $a, $b) { $nowtime = time(); $start = strtotime($a.':00:00'); $end = strtotime($b.':00:00'); if ($nowtime >= $end || $nowtime <= $start){ return true; }else{ return false; } } function check_ifsc($ifsc) { if(utf8_strlen($ifsc)!=11||substr($ifsc ,4, 1)!=0){ return false; }else{ return true; } } function utf8_strlen($string = null) { preg_match_all('/./us', $string, $match); return count($match[0]); } 


 use think\Container; use think\Db; use think\exception\HttpException; use think\exception\HttpResponseException; use think\facade\Cache; use think\facade\Config; use think\facade\Cookie; use think\facade\Debug; use think\facade\Env; use think\facade\Hook; use think\facade\Lang; use think\facade\Log; use think\facade\Request; use think\facade\Route; use think\facade\Session; use think\facade\Url; use think\Response; use think\route\RuleItem; if (!function_exists('abort')) { function abort($code, $message = null, $header = []) { if ($code instanceof Response) { throw new HttpResponseException($code); } else { throw new HttpException($code, $message, null, $header); } } } if (!function_exists('action')) { function action($url, $vars = [], $layer = 'controller', $appendSuffix = false) { return app()->action($url, $vars, $layer, $appendSuffix); } } if (!function_exists('app')) { function app($name = 'think\App', $args = [], $newInstance = false) { return Container::get($name, $args, $newInstance); } } if (!function_exists('behavior')) { function behavior($behavior, $args = null) { return Hook::exec($behavior, $args); } } if (!function_exists('bind')) { function bind($abstract, $concrete = null) { return Container::getInstance()->bindTo($abstract, $concrete); } } if (!function_exists('cache')) { function cache($name, $value = '', $options = null, $tag = null) { if (is_array($options)) { Cache::connect($options); } elseif (is_array($name)) { return Cache::connect($name); } if ('' === $value) { return 0 === strpos($name, '?') ? Cache::has(substr($name, 1)) : Cache::get($name); } elseif (is_null($value)) { return Cache::rm($name); } if (is_array($options)) { $expire = isset($options['expire']) ? $options['expire'] : null; } else { $expire = is_numeric($options) ? $options : null; } if (is_null($tag)) { return Cache::set($name, $value, $expire); } else { return Cache::tag($tag)->set($name, $value, $expire); } } } if (!function_exists('call')) { function call($callable, $args = []) { return Container::getInstance()->invoke($callable, $args); } } if (!function_exists('class_basename')) { function class_basename($class) { $class = is_object($class) ? get_class($class) : $class; return basename(str_replace('\\', '/', $class)); } } if (!function_exists('class_uses_recursive')) { function class_uses_recursive($class) { if (is_object($class)) { $class = get_class($class); } $results = []; $classes = array_merge([$class => $class], class_parents($class)); foreach ($classes as $class) { $results += trait_uses_recursive($class); } return array_unique($results); } } if (!function_exists('config')) { function config($name = '', $value = null) { if (is_null($value) && is_string($name)) { if ('.' == substr($name, -1)) { return Config::pull(substr($name, 0, -1)); } return 0 === strpos($name, '?') ? Config::has(substr($name, 1)) : Config::get($name); } else { return Config::set($name, $value); } } } if (!function_exists('container')) { function container() { return Container::getInstance(); } } if (!function_exists('controller')) { function controller($name, $layer = 'controller', $appendSuffix = false) { return app()->controller($name, $layer, $appendSuffix); } } if (!function_exists('cookie')) { function cookie($name, $value = '', $option = null) { if (is_array($name)) { Cookie::init($name); } elseif (is_null($name)) { Cookie::clear($value); } elseif ('' === $value) { return 0 === strpos($name, '?') ? Cookie::has(substr($name, 1), $option) : Cookie::get($name); } elseif (is_null($value)) { return Cookie::delete($name); } else { return Cookie::set($name, $value, $option); } } } if (!function_exists('db')) { function db($name = '', $config = [], $force = true) { return Db::connect($config, $force)->name($name); } } if (!function_exists('debug')) { function debug($start, $end = '', $dec = 6) { if ('' == $end) { Debug::remark($start); } else { return 'm' == $dec ? Debug::getRangeMem($start, $end) : Debug::getRangeTime($start, $end, $dec); } } } if (!function_exists('download')) { function download($filename, $name = '', $content = false, $expire = 360, $openinBrowser = false) { return Response::create($filename, 'download')->name($name)->isContent($content)->expire($expire)->openinBrowser($openinBrowser); } } if (!function_exists('dump')) { function dump($var, $echo = true, $label = null) { return Debug::dump($var, $echo, $label); } } if (!function_exists('env')) { function env($name = null, $default = null) { return Env::get($name, $default); } } if (!function_exists('exception')) { function exception($msg, $code = 0, $exception = '') { $e = $exception ?: '\think\Exception'; throw new $e($msg, $code); } } if (!function_exists('halt')) { function halt($var) { dump($var); throw new HttpResponseException(new Response); } } if (!function_exists('input')) { function input($key = '', $default = null, $filter = '') { if (0 === strpos($key, '?')) { $key = substr($key, 1); $has = true; } if ($pos = strpos($key, '.')) { $method = substr($key, 0, $pos); if (in_array($method, ['get', 'post', 'put', 'patch', 'delete', 'route', 'param', 'request', 'session', 'cookie', 'server', 'env', 'path', 'file'])) { $key = substr($key, $pos + 1); } else { $method = 'param'; } } else { $method = 'param'; } if (isset($has)) { return request()->has($key, $method, $default); } else { return request()->$method($key, $default, $filter); } } } if (!function_exists('json')) { function json($data = [], $code = 200, $header = [], $options = []) { return Response::create($data, 'json', $code, $header, $options); } } if (!function_exists('jsonp')) { function jsonp($data = [], $code = 200, $header = [], $options = []) { return Response::create($data, 'jsonp', $code, $header, $options); } } if (!function_exists('lang')) { function lang($name, $vars = [], $lang = '') { return Lang::get($name, $vars, $lang); } } if (!function_exists('model')) { function model($name = '', $layer = 'model', $appendSuffix = false) { return app()->model($name, $layer, $appendSuffix); } } if (!function_exists('parse_name')) { function parse_name($name, $type = 0, $ucfirst = true) { if ($type) { $name = preg_replace_callback('/_([a-zA-Z])/', function ($match) { return strtoupper($match[1]); }, $name); return $ucfirst ? ucfirst($name) : lcfirst($name); } else { return strtolower(trim(preg_replace("/[A-Z]/", "_\\0", $name), "_")); } } } if (!function_exists('redirect')) { function redirect($url = [], $params = [], $code = 302) { if (is_integer($params)) { $code = $params; $params = []; } return Response::create($url, 'redirect', $code)->params($params); } } if (!function_exists('request')) { function request() { return app('request'); } } if (!function_exists('response')) { function response($data = '', $code = 200, $header = [], $type = 'html') { return Response::create($data, $type, $code, $header); } } if (!function_exists('route')) { function route($rule, $route, $option = [], $pattern = []) { return Route::rule($rule, $route, '*', $option, $pattern); } } if (!function_exists('session')) { function session($name, $value = '', $prefix = null) { if (is_array($name)) { Session::init($name); } elseif (is_null($name)) { Session::clear($value); } elseif ('' === $value) { return 0 === strpos($name, '?') ? Session::has(substr($name, 1), $prefix) : Session::get($name, $prefix); } elseif (is_null($value)) { return Session::delete($name, $prefix); } else { return Session::set($name, $value, $prefix); } } } if (!function_exists('token')) { function token($name = '__token__', $type = 'md5') { $token = Request::token($name, $type); return '<input type="hidden" name="' . $name . '" value="' . $token . '" />'; } } if (!function_exists('trace')) { function trace($log = '[think]', $level = 'log') { if ('[think]' === $log) { return Log::getLog(); } else { Log::record($log, $level); } } } if (!function_exists('trait_uses_recursive')) { function trait_uses_recursive($trait) { $traits = class_uses($trait); foreach ($traits as $trait) { $traits += trait_uses_recursive($trait); } return $traits; } } if (!function_exists('url')) { function url($url = '', $vars = '', $suffix = true, $domain = false) { return Url::build($url, $vars, $suffix, $domain); } } if (!function_exists('validate')) { function validate($name = '', $layer = 'validate', $appendSuffix = false) { return app()->validate($name, $layer, $appendSuffix); } } if (!function_exists('view')) { function view($template = '', $vars = [], $code = 200, $filter = null) { return Response::create($template, 'view', $code)->assign($vars)->filter($filter); } } if (!function_exists('widget')) { function widget($name, $data = []) { $result = app()->action($name, $data, 'widget'); if (is_object($result)) { $result = $result->getContent(); } return $result; } } if (!function_exists('xml')) { function xml($data = [], $code = 200, $header = [], $options = []) { return Response::create($data, 'xml', $code, $header, $options); } } if (!function_exists('yaconf')) { function yaconf($name, $default = null) { return Config::yaconf($name, $default); } } 

\think\facade\Config::set(array (
  'app' => 
  array (
    'app_name' => '',
    'app_host' => '',
    'app_debug' => true,
    'app_trace' => false,
    'app_status' => '',
    'is_https' => false,
    'auto_bind_module' => false,
    'root_namespace' => 
    array (
    ),
    'default_return_type' => 'html',
    'default_ajax_return' => 'json',
    'default_jsonp_handler' => 'jsonpReturn',
    'var_jsonp_handler' => 'callback',
    'default_timezone' => 'Asia/Shanghai',
    'lang_switch_on' => true,
    'default_validate' => '',
    'default_lang' => 'en-us',
    'controller_auto_search' => false,
    'use_action_prefix' => false,
    'action_suffix' => '',
    'empty_controller' => 'Error',
    'empty_module' => '',
    'default_module' => 'index',
    'app_multi_module' => true,
    'deny_module_list' => 
    array (
      0 => 'common',
    ),
    'default_controller' => 'Index',
    'default_action' => 'index',
    'url_convert' => true,
    'url_controller_layer' => 'controller',
    'class_suffix' => false,
    'controller_suffix' => false,
    'default_filter' => 'trim',
    'var_pathinfo' => 's',
    'pathinfo_fetch' => 
    array (
      0 => 'ORIG_PATH_INFO',
      1 => 'REDIRECT_PATH_INFO',
      2 => 'REDIRECT_URL',
    ),
    'https_agent_name' => '',
    'http_agent_ip' => 'HTTP_X_REAL_IP',
    'url_html_suffix' => 'html',
    'url_domain_root' => '',
    'var_method' => '_method',
    'var_ajax' => '_ajax',
    'var_pjax' => '_pjax',
    'request_cache' => false,
    'request_cache_expire' => NULL,
    'request_cache_except' => 
    array (
    ),
    'pathinfo_depr' => '/',
    'url_common_param' => false,
    'url_param_type' => 1,
    'url_lazy_route' => false,
    'url_route_must' => false,
    'route_rule_merge' => false,
    'route_complete_match' => false,
    'route_annotation' => false,
    'default_route_pattern' => '\\w+',
    'route_check_cache' => false,
    'route_check_cache_key' => '',
    'route_cache_option' => 
    array (
    ),
    'dispatch_success_tmpl' => '/www/wwwroot/194.233.81.202/thinkphp/tpl/dispatch_jump.tpl',
    'dispatch_error_tmpl' => '/www/wwwroot/194.233.81.202/thinkphp/tpl/dispatch_jump.tpl',
    'exception_tmpl' => '/www/wwwroot/194.233.81.202/thinkphp/tpl/think_exception.tpl',
    'error_message' => '页面错误！请稍后再试～',
    'show_error_msg' => false,
    'exception_handle' => '',
    'lang_list' => 
    array (
      0 => 'zh-cn',
      1 => 'en-us',
    ),
    'thinkadmin_ver' => 'v5',
    'pwd_str' => '!qws6F!xffD2vx80?95jt',
    'pwd_error_num' => 10,
    'allow_login_min' => 5,
    'zhangjun_sms' => 
    array (
      'userid' => '????',
      'account' => '?????',
      'pwd' => '????',
      'content' => '【????】您的验证码为：',
      'min' => 5,
    ),
    'smsbao' => 
    array (
      'user' => '1',
      'pass' => '1',
      'sign' => '1',
    ),
    'bipay' => 
    array (
      'appKey' => '2ed2c4347fa70847',
      'appSecret' => 'b471e157a6bcafea74360dbc0b7ba523',
    ),
    'paysapi' => 
    array (
      'uid' => '362c5d32770407de2f009c54',
      'token' => 'bedfd347390e127bd675c18dc92dfa16',
      'istype' => 1,
    ),
    'app_only' => 0,
    'vip_sj_bu' => 1,
    'app_url' => 'app',
    'version' => '20210406',
    'verify' => false,
    'mix_time' => '5',
    'max_time' => '10',
    'min_recharge' => '100',
    'max_recharge' => '5000',
    'deal_min_balance' => '100000',
    'deal_min_num' => '10',
    'deal_max_num' => '70',
    'deal_count' => '60',
    'deal_reward_count' => '0',
    'deal_timeout' => '120',
    'deal_feedze' => '60',
    'deal_error' => '0',
    'vip_1_commission' => '0',
    'min_deposit' => '100',
    '1_reward' => '0',
    '2_reward' => '0',
    '3_reward' => '0',
    '1_d_reward' => '0.35',
    '2_d_reward' => '0.12',
    '3_d_reward' => '0.08',
    '4_d_reward' => '0',
    '5_d_reward' => '0',
    'master_cardnum' => '6868686868',
    'master_name' => 'NGUYEN VAN A',
    'master_bank' => 'VIETCOMBAK',
    'master_bk_address' => 'HANOI',
    'deal_zhuji_time' => '2',
    'deal_shop_time' => '2',
    'tixian_time_1' => '00',
    'tixian_time_2' => '24',
    'chongzhi_time_1' => '00',
    'chongzhi_time_2' => '24',
    'order_time_1' => '00',
    'order_time_2' => '24',
    'lxb_bili' => '1000',
    'lxb_time' => '1',
    'lxb_sy_bili1' => '1',
    'lxb_sy_bili2' => '1',
    'lxb_sy_bili3' => '1',
    'lxb_sy_bili4' => '1',
    'lxb_sy_bili5' => '1',
    'lxb_ru_max' => '1',
    'lxb_ru_min' => '1',
    'shop_status' => '1',
  ),
  'template' => 
  array (
    'auto_rule' => 1,
    'type' => 'Think',
    'view_base' => '',
    'view_path' => '',
    'view_suffix' => 'html',
    'view_depr' => '/',
    'tpl_begin' => '{',
    'tpl_end' => '}',
    'taglib_begin' => '{',
    'taglib_end' => '}',
    'strip_space' => true,
    'tpl_cache' => false,
    'tpl_replace_string' => 
    array (
      '__APP__' => '',
      '__ROOT__' => '',
      '__PUBLIC__' => 'https://shoppeevn.vn',
    ),
  ),
  'log' => 
  array (
    'type' => 'File',
    'level' => 
    array (
    ),
    'record_trace' => false,
    'json' => false,
    'close' => 'true',
    'single' => 'single',
    'max_files' => 50,
    'file_size' => 10485760,
    'apart_level' => 
    array (
      0 => 'error',
      1 => 'sql',
    ),
  ),
  'trace' => 
  array (
    'type' => 'Html',
    'file' => '/www/wwwroot/194.233.81.202/thinkphp/tpl/page_trace.tpl',
  ),
  'cache' => 
  array (
    'type' => 'File',
    'prefix' => '',
    'expire' => 0,
  ),
  'session' => 
  array (
    'id' => '',
    'var_session_id' => '',
    'prefix' => 'fw',
    'type' => '',
    'auto_start' => true,
    'httponly' => true,
    'secure' => false,
    'path' => '/www/wwwroot/194.233.81.202/runtime/sess/',
    'name' => 's467de6c0',
  ),
  'cookie' => 
  array (
    'prefix' => '',
    'expire' => 1800,
    'path' => '/',
    'domain' => '',
    'secure' => false,
    'httponly' => true,
    'setcookie' => true,
  ),
  'database' => 
  array (
    'type' => 'mysql',
    'dsn' => '',
    'hostname' => '127.0.0.1',
    'database' => 'shopeevn',
    'username' => 'shopeevn',
    'password' => 'shopeevn',
    'hostport' => '3306',
    'params' => 
    array (
    ),
    'charset' => 'utf8mb4',
    'prefix' => '',
    'debug' => true,
    'deploy' => 0,
    'rw_separate' => false,
    'master_num' => 1,
    'slave_no' => '',
    'fields_strict' => true,
    'resultset_type' => 'array',
    'auto_timestamp' => false,
    'datetime_format' => 'Y-m-d H:i:s',
    'sql_explain' => false,
    'query' => '\\think\\db\\Query',
  ),
  'paginate' => 
  array (
    'type' => 'bootstrap',
    'var_page' => 'page',
    'list_rows' => 15,
  ),
  'console' => 
  array (
    'name' => 'Think Console',
    'version' => '0.1',
    'user' => NULL,
    'auto_path' => '',
  ),
  'middleware' => 
  array (
    'default_namespace' => 'app\\http\\middleware\\',
  ),
  'wechat' => 
  array (
    'service_url' => 'https://demo.thinkadmin.top',
    'miniapp' => 
    array (
      'appid' => 'wx8c108930fe12b7ef',
      'appsecret' => '13d829992a2b6a0a44195a4a580da56d',
      'mch_id' => '1332187001',
      'mch_key' => 'A82DC5BD1F3359081049C568D8502BC5',
      'ssl_p12' => '/www/wwwroot/194.233.81.202/config/cert/1332187001_20181030_cert.p12',
      'cache_path' => '/www/wwwroot/194.233.81.202/runtime/wechat/',
    ),
  ),
));
