<?php /* Smarty version Smarty-3.1.21, created on 2021-05-27 11:48:11
         compiled from "C:\xampp\htdocs\cscmultiShop\design\backend\templates\addons\vendor_data_premoderation\hooks\products\update_product_status_container.pre.tpl" */ ?>
<?php /*%%SmartyHeaderCode:185311054860af5ccb1f23b1-70308288%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '72aa664c77f76b25a41256ff2a8b6055d87937d3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscmultiShop\\design\\backend\\templates\\addons\\vendor_data_premoderation\\hooks\\products\\update_product_status_container.pre.tpl',
      1 => 1616559142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '185311054860af5ccb1f23b1-70308288',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product_data' => 0,
    'runtime' => 0,
    'approved_status' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60af5ccb2647b8_21914950',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60af5ccb2647b8_21914950')) {function content_60af5ccb2647b8_21914950($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_enum')) include 'C:/xampp/htdocs/cscmultiShop/app/functions/smarty_plugins\\modifier.enum.php';
?><?php $_smarty_tpl->tpl_vars['approved_status'] = new Smarty_variable($_smarty_tpl->tpl_vars['product_data']->value['status']!==smarty_modifier_enum("Addons\VendorDataPremoderation\ProductStatuses::DISAPPROVED")&&$_smarty_tpl->tpl_vars['product_data']->value['status']!==smarty_modifier_enum("Addons\VendorDataPremoderation\ProductStatuses::REQUIRES_APPROVAL"), null, 0);
if ($_smarty_tpl->tpl_vars['runtime']->value['company_id']&&!$_smarty_tpl->tpl_vars['approved_status']->value) {?>
    <?php $_smarty_tpl->tpl_vars['non_editable'] = new Smarty_variable(true, null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['non_editable'] = clone $_smarty_tpl->tpl_vars['non_editable'];?>
<?php } elseif (!$_smarty_tpl->tpl_vars['runtime']->value['company_id']&&!$_smarty_tpl->tpl_vars['approved_status']->value) {?>
    <?php $_smarty_tpl->tpl_vars['data_product_statuses'] = new Smarty_variable(array("data-ca-product-statuses"=>"true","data-ca-product-statuses-disapproved"=>smarty_modifier_enum("Addons\VendorDataPremoderation\ProductStatuses::DISAPPROVED"),"data-ca-product-statuses-requires-approval"=>smarty_modifier_enum("Addons\VendorDataPremoderation\ProductStatuses::REQUIRES_APPROVAL")), null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['data_product_statuses'] = clone $_smarty_tpl->tpl_vars['data_product_statuses'];?>
<?php }
if ($_smarty_tpl->tpl_vars['product_data']->value['status']===smarty_modifier_enum("Addons\VendorDataPremoderation\ProductStatuses::DISAPPROVED")) {?>
    <?php $_smarty_tpl->tpl_vars['product_status_style'] = new Smarty_variable("text-error", null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['product_status_style'] = clone $_smarty_tpl->tpl_vars['product_status_style'];?>
<?php } elseif ($_smarty_tpl->tpl_vars['product_data']->value['status']===smarty_modifier_enum("Addons\VendorDataPremoderation\ProductStatuses::REQUIRES_APPROVAL")) {?>
    <?php $_smarty_tpl->tpl_vars['product_status_style'] = new Smarty_variable("text-warning", null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['product_status_style'] = clone $_smarty_tpl->tpl_vars['product_status_style'];?>
<?php }?><?php }} ?>
