<?php 
return array (
  'id' => 
  array (
    'name' => 'id',
    'type' => 'int(11)',
    'notnull' => false,
    'default' => NULL,
    'primary' => true,
    'autoinc' => true,
  ),
  'name' => 
  array (
    'name' => 'name',
    'type' => 'varchar(255)',
    'notnull' => false,
    'default' => NULL,
    'primary' => false,
    'autoinc' => false,
  ),
  'bili' => 
  array (
    'name' => 'bili',
    'type' => 'varchar(255)',
    'notnull' => false,
    'default' => NULL,
    'primary' => false,
    'autoinc' => false,
  ),
  'cate_info' => 
  array (
    'name' => 'cate_info',
    'type' => 'varchar(255)',
    'notnull' => false,
    'default' => '',
    'primary' => false,
    'autoinc' => false,
  ),
  'goods_price' => 
  array (
    'name' => 'goods_price',
    'type' => 'decimal(10,2)',
    'notnull' => false,
    'default' => NULL,
    'primary' => false,
    'autoinc' => false,
  ),
  'cate_pic' => 
  array (
    'name' => 'cate_pic',
    'type' => 'varchar(120)',
    'notnull' => false,
    'default' => '',
    'primary' => false,
    'autoinc' => false,
  ),
  'cat_ico' => 
  array (
    'name' => 'cat_ico',
    'type' => 'varchar(50)',
    'notnull' => false,
    'default' => NULL,
    'primary' => false,
    'autoinc' => false,
  ),
  'addtime' => 
  array (
    'name' => 'addtime',
    'type' => 'int(10)',
    'notnull' => false,
    'default' => NULL,
    'primary' => false,
    'autoinc' => false,
  ),
  'status' => 
  array (
    'name' => 'status',
    'type' => 'int(1)',
    'notnull' => false,
    'default' => '0',
    'primary' => false,
    'autoinc' => false,
  ),
  'min' => 
  array (
    'name' => 'min',
    'type' => 'varchar(255)',
    'notnull' => false,
    'default' => NULL,
    'primary' => false,
    'autoinc' => false,
  ),
  'level_id' => 
  array (
    'name' => 'level_id',
    'type' => 'int(11)',
    'notnull' => false,
    'default' => NULL,
    'primary' => false,
    'autoinc' => false,
  ),
  'deal_min_num' => 
  array (
    'name' => 'deal_min_num',
    'type' => 'int(2)',
    'notnull' => false,
    'default' => NULL,
    'primary' => false,
    'autoinc' => false,
  ),
  'deal_max_num' => 
  array (
    'name' => 'deal_max_num',
    'type' => 'int(3)',
    'notnull' => false,
    'default' => NULL,
    'primary' => false,
    'autoinc' => false,
  ),
  'deal_min_numbaifenbi' => 
  array (
    'name' => 'deal_min_numbaifenbi',
    'type' => 'int(2)',
    'notnull' => false,
    'default' => '0',
    'primary' => false,
    'autoinc' => false,
  ),
  'deal_max_numbaifenbi' => 
  array (
    'name' => 'deal_max_numbaifenbi',
    'type' => 'int(2)',
    'notnull' => false,
    'default' => '0',
    'primary' => false,
    'autoinc' => false,
  ),
);