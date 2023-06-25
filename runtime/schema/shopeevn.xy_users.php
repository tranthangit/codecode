<?php 
return array (
  'id' => 
  array (
    'name' => 'id',
    'type' => 'int(10) unsigned',
    'notnull' => false,
    'default' => NULL,
    'primary' => true,
    'autoinc' => true,
  ),
  'tel' => 
  array (
    'name' => 'tel',
    'type' => 'varchar(20)',
    'notnull' => false,
    'default' => NULL,
    'primary' => false,
    'autoinc' => false,
  ),
  'username' => 
  array (
    'name' => 'username',
    'type' => 'varchar(36)',
    'notnull' => false,
    'default' => '',
    'primary' => false,
    'autoinc' => false,
  ),
  'nickname' => 
  array (
    'name' => 'nickname',
    'type' => 'varchar(36)',
    'notnull' => false,
    'default' => '',
    'primary' => false,
    'autoinc' => false,
  ),
  'email' => 
  array (
    'name' => 'email',
    'type' => 'varchar(20)',
    'notnull' => false,
    'default' => NULL,
    'primary' => false,
    'autoinc' => false,
  ),
  'pwd' => 
  array (
    'name' => 'pwd',
    'type' => 'char(40)',
    'notnull' => false,
    'default' => '',
    'primary' => false,
    'autoinc' => false,
  ),
  'salt' => 
  array (
    'name' => 'salt',
    'type' => 'char(16)',
    'notnull' => false,
    'default' => '',
    'primary' => false,
    'autoinc' => false,
  ),
  'parent_id' => 
  array (
    'name' => 'parent_id',
    'type' => 'int(10) unsigned',
    'notnull' => false,
    'default' => '0',
    'primary' => false,
    'autoinc' => false,
  ),
  'signiture' => 
  array (
    'name' => 'signiture',
    'type' => 'varchar(120)',
    'notnull' => false,
    'default' => '',
    'primary' => false,
    'autoinc' => false,
  ),
  'pwd_error_num' => 
  array (
    'name' => 'pwd_error_num',
    'type' => 'tinyint(3) unsigned',
    'notnull' => false,
    'default' => '0',
    'primary' => false,
    'autoinc' => false,
  ),
  'allow_login_time' => 
  array (
    'name' => 'allow_login_time',
    'type' => 'int(10) unsigned',
    'notnull' => false,
    'default' => '0',
    'primary' => false,
    'autoinc' => false,
  ),
  'real_name' => 
  array (
    'name' => 'real_name',
    'type' => 'varchar(36)',
    'notnull' => false,
    'default' => '',
    'primary' => false,
    'autoinc' => false,
  ),
  'id_card_num' => 
  array (
    'name' => 'id_card_num',
    'type' => 'char(18)',
    'notnull' => false,
    'default' => '',
    'primary' => false,
    'autoinc' => false,
  ),
  'top_pic' => 
  array (
    'name' => 'top_pic',
    'type' => 'varchar(96)',
    'notnull' => false,
    'default' => '',
    'primary' => false,
    'autoinc' => false,
  ),
  'bot_pic' => 
  array (
    'name' => 'bot_pic',
    'type' => 'varchar(96)',
    'notnull' => false,
    'default' => '',
    'primary' => false,
    'autoinc' => false,
  ),
  'id_status' => 
  array (
    'name' => 'id_status',
    'type' => 'tinyint(1) unsigned',
    'notnull' => false,
    'default' => '0',
    'primary' => false,
    'autoinc' => false,
  ),
  'invite_code' => 
  array (
    'name' => 'invite_code',
    'type' => 'char(6)',
    'notnull' => false,
    'default' => '',
    'primary' => false,
    'autoinc' => false,
  ),
  'addtime' => 
  array (
    'name' => 'addtime',
    'type' => 'int(10) unsigned',
    'notnull' => false,
    'default' => '0',
    'primary' => false,
    'autoinc' => false,
  ),
  'status' => 
  array (
    'name' => 'status',
    'type' => 'tinyint(1) unsigned',
    'notnull' => false,
    'default' => '2',
    'primary' => false,
    'autoinc' => false,
  ),
  'real_time' => 
  array (
    'name' => 'real_time',
    'type' => 'int(10) unsigned',
    'notnull' => false,
    'default' => '0',
    'primary' => false,
    'autoinc' => false,
  ),
  'pwd2' => 
  array (
    'name' => 'pwd2',
    'type' => 'char(40)',
    'notnull' => false,
    'default' => '',
    'primary' => false,
    'autoinc' => false,
  ),
  'salt2' => 
  array (
    'name' => 'salt2',
    'type' => 'char(16)',
    'notnull' => false,
    'default' => '',
    'primary' => false,
    'autoinc' => false,
  ),
  'headpic' => 
  array (
    'name' => 'headpic',
    'type' => 'varchar(3000)',
    'notnull' => false,
    'default' => '',
    'primary' => false,
    'autoinc' => false,
  ),
  'balance' => 
  array (
    'name' => 'balance',
    'type' => 'decimal(15,2) unsigned',
    'notnull' => false,
    'default' => '0.00',
    'primary' => false,
    'autoinc' => false,
  ),
  'freeze_balance' => 
  array (
    'name' => 'freeze_balance',
    'type' => 'decimal(15,2)',
    'notnull' => false,
    'default' => '0.00',
    'primary' => false,
    'autoinc' => false,
  ),
  'login_status' => 
  array (
    'name' => 'login_status',
    'type' => 'tinyint(1) unsigned',
    'notnull' => false,
    'default' => '0',
    'primary' => false,
    'autoinc' => false,
  ),
  'recharge_num' => 
  array (
    'name' => 'recharge_num',
    'type' => 'decimal(7,2)',
    'notnull' => false,
    'default' => '0.00',
    'primary' => false,
    'autoinc' => false,
  ),
  'deposit_num' => 
  array (
    'name' => 'deposit_num',
    'type' => 'decimal(7,2)',
    'notnull' => false,
    'default' => '0.00',
    'primary' => false,
    'autoinc' => false,
  ),
  'deal_status' => 
  array (
    'name' => 'deal_status',
    'type' => 'tinyint(1) unsigned',
    'notnull' => false,
    'default' => '1',
    'primary' => false,
    'autoinc' => false,
  ),
  'deal_error' => 
  array (
    'name' => 'deal_error',
    'type' => 'tinyint(1)',
    'notnull' => false,
    'default' => '0',
    'primary' => false,
    'autoinc' => false,
  ),
  'deal_reward_count' => 
  array (
    'name' => 'deal_reward_count',
    'type' => 'int(11)',
    'notnull' => false,
    'default' => '0',
    'primary' => false,
    'autoinc' => false,
  ),
  'deal_count' => 
  array (
    'name' => 'deal_count',
    'type' => 'int(4)',
    'notnull' => false,
    'default' => '0',
    'primary' => false,
    'autoinc' => false,
  ),
  'deal_time' => 
  array (
    'name' => 'deal_time',
    'type' => 'int(10) unsigned',
    'notnull' => false,
    'default' => '0',
    'primary' => false,
    'autoinc' => false,
  ),
  'active' => 
  array (
    'name' => 'active',
    'type' => 'smallint(5) unsigned',
    'notnull' => false,
    'default' => '0',
    'primary' => false,
    'autoinc' => false,
  ),
  'childs' => 
  array (
    'name' => 'childs',
    'type' => 'int(11)',
    'notnull' => false,
    'default' => '0',
    'primary' => false,
    'autoinc' => false,
  ),
  'kouchu_balance' => 
  array (
    'name' => 'kouchu_balance',
    'type' => 'decimal(15,2)',
    'notnull' => false,
    'default' => NULL,
    'primary' => false,
    'autoinc' => false,
  ),
  'kouchu_balance_uid' => 
  array (
    'name' => 'kouchu_balance_uid',
    'type' => 'int(11)',
    'notnull' => false,
    'default' => NULL,
    'primary' => false,
    'autoinc' => false,
  ),
  'show_td' => 
  array (
    'name' => 'show_td',
    'type' => 'int(11)',
    'notnull' => false,
    'default' => '1',
    'primary' => false,
    'autoinc' => false,
  ),
  'show_cz' => 
  array (
    'name' => 'show_cz',
    'type' => 'int(11)',
    'notnull' => false,
    'default' => '1',
    'primary' => false,
    'autoinc' => false,
  ),
  'show_tx' => 
  array (
    'name' => 'show_tx',
    'type' => 'int(11)',
    'notnull' => false,
    'default' => '1',
    'primary' => false,
    'autoinc' => false,
  ),
  'show_tel' => 
  array (
    'name' => 'show_tel',
    'type' => 'int(11)',
    'notnull' => false,
    'default' => '1',
    'primary' => false,
    'autoinc' => false,
  ),
  'show_num' => 
  array (
    'name' => 'show_num',
    'type' => 'int(11)',
    'notnull' => false,
    'default' => '1',
    'primary' => false,
    'autoinc' => false,
  ),
  'show_tel2' => 
  array (
    'name' => 'show_tel2',
    'type' => 'int(11)',
    'notnull' => false,
    'default' => '1',
    'primary' => false,
    'autoinc' => false,
  ),
  'wx_ewm' => 
  array (
    'name' => 'wx_ewm',
    'type' => 'varchar(255)',
    'notnull' => false,
    'default' => NULL,
    'primary' => false,
    'autoinc' => false,
  ),
  'zfb_ewm' => 
  array (
    'name' => 'zfb_ewm',
    'type' => 'varchar(255)',
    'notnull' => false,
    'default' => NULL,
    'primary' => false,
    'autoinc' => false,
  ),
  'level' => 
  array (
    'name' => 'level',
    'type' => 'int(11)',
    'notnull' => false,
    'default' => NULL,
    'primary' => false,
    'autoinc' => false,
  ),
  'lixibao_balance' => 
  array (
    'name' => 'lixibao_balance',
    'type' => 'decimal(15,4)',
    'notnull' => false,
    'default' => '0.0000',
    'primary' => false,
    'autoinc' => false,
  ),
  'lixibao_dj_balance' => 
  array (
    'name' => 'lixibao_dj_balance',
    'type' => 'decimal(15,4)',
    'notnull' => false,
    'default' => '0.0000',
    'primary' => false,
    'autoinc' => false,
  ),
  'ip' => 
  array (
    'name' => 'ip',
    'type' => 'varchar(128)',
    'notnull' => false,
    'default' => NULL,
    'primary' => false,
    'autoinc' => false,
  ),
  'is_jia' => 
  array (
    'name' => 'is_jia',
    'type' => 'int(11)',
    'notnull' => false,
    'default' => '0',
    'primary' => false,
    'autoinc' => false,
  ),
  'activetime' => 
  array (
    'name' => 'activetime',
    'type' => 'int(11)',
    'notnull' => false,
    'default' => NULL,
    'primary' => false,
    'autoinc' => false,
  ),
  'deal_min_num' => 
  array (
    'name' => 'deal_min_num',
    'type' => 'int(4)',
    'notnull' => false,
    'default' => NULL,
    'primary' => false,
    'autoinc' => false,
  ),
  'deal_max_num' => 
  array (
    'name' => 'deal_max_num',
    'type' => 'int(4)',
    'notnull' => false,
    'default' => NULL,
    'primary' => false,
    'autoinc' => false,
  ),
  'trc20' => 
  array (
    'name' => 'trc20',
    'type' => 'varchar(34)',
    'notnull' => false,
    'default' => NULL,
    'primary' => false,
    'autoinc' => false,
  ),
  'pipei_dan' => 
  array (
    'name' => 'pipei_dan',
    'type' => 'text',
    'notnull' => false,
    'default' => NULL,
    'primary' => false,
    'autoinc' => false,
  ),
  'pipei_type' => 
  array (
    'name' => 'pipei_type',
    'type' => 'int(1)',
    'notnull' => false,
    'default' => NULL,
    'primary' => false,
    'autoinc' => false,
  ),
  'pipei_grouping' => 
  array (
    'name' => 'pipei_grouping',
    'type' => 'int(4)',
    'notnull' => false,
    'default' => NULL,
    'primary' => false,
    'autoinc' => false,
  ),
  'autoorder' => 
  array (
    'name' => 'autoorder',
    'type' => 'int(1)',
    'notnull' => false,
    'default' => '0',
    'primary' => false,
    'autoinc' => false,
  ),
);