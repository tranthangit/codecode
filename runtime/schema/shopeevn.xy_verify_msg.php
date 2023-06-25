<?php 
return array (
  'tel' => 
  array (
    'name' => 'tel',
    'type' => 'char(11)',
    'notnull' => false,
    'default' => '',
    'primary' => true,
    'autoinc' => false,
  ),
  'msg' => 
  array (
    'name' => 'msg',
    'type' => 'char(5)',
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
  'type' => 
  array (
    'name' => 'type',
    'type' => 'tinyint(4)',
    'notnull' => false,
    'default' => '0',
    'primary' => false,
    'autoinc' => false,
  ),
);