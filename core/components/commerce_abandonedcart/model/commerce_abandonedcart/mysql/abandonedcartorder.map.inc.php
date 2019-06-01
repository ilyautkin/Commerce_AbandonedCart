<?php
/**
 * Abandoned Cart for Commerce.
 *
 * Copyright 2019 by Tony Klapatch <tony@klapatch.net>
 *
 * This file is meant to be used with Commerce by modmore. A valid Commerce license is required.
 *
 * @package commerce_abandonedcart
 * @license See core/components/commerce_abandonedcart/docs/license.txt
 */

$xpdo_meta_map['AbandonedCartOrder']= array (
  'package' => 'commerce_abandonedcart',
  'version' => '1.1',
  'table' => 'commerce_abandoned_cart_order',
  'extends' => 'comSimpleObject',
  'tableMeta' => 
  array (
    'engine' => 'MyISAM',
  ),
  'fields' => 
  array (
    'user' => NULL,
    'order' => NULL,
    'msg_count' => 0,
    'converted' => 0,
    'added_on' => NULL,
    'converted_on' => NULL,
  ),
  'fieldMeta' => 
  array (
    'user' => 
    array (
      'dbtype' => 'int',
      'precision' => '10',
      'phptype' => 'int',
      'null' => false,
    ),
    'order' => 
    array (
      'dbtype' => 'int',
      'precision' => '10',
      'phptype' => 'int',
      'null' => false,
    ),
    'msg_count' => 
    array (
      'dbtype' => 'int',
      'precision' => '10',
      'phptype' => 'int',
      'null' => false,
      'default' => 0,
    ),
    'converted' => 
    array (
      'dbtype' => 'tinyint',
      'precision' => '1',
      'phptype' => 'boolean',
      'null' => false,
      'default' => 0,
    ),
    'added_on' => 
    array (
      'dbtype' => 'int',
      'precision' => '10',
      'phptype' => 'int',
      'null' => false,
    ),
    'converted_on' => 
    array (
      'dbtype' => 'int',
      'precision' => '10',
      'phptype' => 'int',
      'null' => true,
    ),
  ),
  'aggregates' => 
  array (
    'User' => 
    array (
      'class' => 'AbandonedCartUser',
      'local' => 'user',
      'foreign' => 'id',
      'cardinality' => 'one',
      'owner' => 'foreign',
    ),
    'Order' => 
    array (
      'class' => 'comOrder',
      'local' => 'order',
      'foreign' => 'id',
      'cardinality' => 'one',
      'owner' => 'foreign',
    ),
  ),
);
