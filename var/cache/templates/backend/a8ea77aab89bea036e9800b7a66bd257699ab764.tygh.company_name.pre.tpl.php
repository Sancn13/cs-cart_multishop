<?php /* Smarty version Smarty-3.1.21, created on 2021-05-27 11:27:46
         compiled from "C:\xampp\htdocs\cscmultiShop\design\backend\templates\addons\master_products\hooks\companies\company_name.pre.tpl" */ ?>
<?php /*%%SmartyHeaderCode:49725636860af5802006267-42202701%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a8ea77aab89bea036e9800b7a66bd257699ab764' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscmultiShop\\design\\backend\\templates\\addons\\master_products\\hooks\\companies\\company_name.pre.tpl',
      1 => 1616559142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '49725636860af5802006267-42202701',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'object' => 0,
    'clone' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60af580202cbd9_64794442',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60af580202cbd9_64794442')) {function content_60af580202cbd9_64794442($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('master_products.all_vendors_master_product'));
?>
<?php if (!$_smarty_tpl->tpl_vars['runtime']->value['company_id']&&!$_smarty_tpl->tpl_vars['object']->value['company_id']&&$_smarty_tpl->tpl_vars['object']->value['product_id']&&!$_smarty_tpl->tpl_vars['clone']->value) {?>
    <?php $_smarty_tpl->createLocalArrayVariable('object', null, 1);
$_smarty_tpl->tpl_vars['object']->value['company_name'] = $_smarty_tpl->__("master_products.all_vendors_master_product");
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['object'] = clone $_smarty_tpl->tpl_vars['object'];?>
<?php }?><?php }} ?>
