<?php /* Smarty version Smarty-3.1.21, created on 2021-05-27 11:48:01
         compiled from "C:\xampp\htdocs\cscmultiShop\design\backend\templates\addons\master_products\hooks\products\status_name_container.pre.tpl" */ ?>
<?php /*%%SmartyHeaderCode:129833256060af5cc168aec4-53885509%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5ad54cf5b3ea0f19f91e190705f1159c9fc69ff3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscmultiShop\\design\\backend\\templates\\addons\\master_products\\hooks\\products\\status_name_container.pre.tpl',
      1 => 1616559142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '129833256060af5cc168aec4-53885509',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product' => 0,
    'items_status' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60af5cc16dc897_00070965',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60af5cc16dc897_00070965')) {function content_60af5cc16dc897_00070965($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_enum')) include 'C:/xampp/htdocs/cscmultiShop/app/functions/smarty_plugins\\modifier.enum.php';
if (!is_callable('smarty_modifier_unset_key')) include 'C:/xampp/htdocs/cscmultiShop/app/functions/smarty_plugins\\modifier.unset_key.php';
?><?php if (!$_smarty_tpl->tpl_vars['product']->value['company_id']) {?>
    <?php ob_start();?><?php echo htmlspecialchars(smarty_modifier_enum("Addons\VendorDataPremoderation\ProductStatuses::DISAPPROVED"), ENT_QUOTES, 'UTF-8');?>
<?php $_tmp7=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['items_status'] = new Smarty_variable(smarty_modifier_unset_key($_smarty_tpl->tpl_vars['items_status']->value,$_tmp7), null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['items_status'] = clone $_smarty_tpl->tpl_vars['items_status'];?>
<?php }?><?php }} ?>
