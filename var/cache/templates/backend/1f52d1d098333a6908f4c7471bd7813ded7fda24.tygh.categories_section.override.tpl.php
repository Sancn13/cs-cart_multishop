<?php /* Smarty version Smarty-3.1.21, created on 2021-05-27 11:48:09
         compiled from "C:\xampp\htdocs\cscmultiShop\design\backend\templates\addons\vendor_debt_payout\hooks\products\categories_section.override.tpl" */ ?>
<?php /*%%SmartyHeaderCode:104089784360af5cc9808e36-00645501%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1f52d1d098333a6908f4c7471bd7813ded7fda24' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscmultiShop\\design\\backend\\templates\\addons\\vendor_debt_payout\\hooks\\products\\categories_section.override.tpl',
      1 => 1616559142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '104089784360af5cc9808e36-00645501',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product_data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60af5cc9844ed5_69031365',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60af5cc9844ed5_69031365')) {function content_60af5cc9844ed5_69031365($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_enum')) include 'C:/xampp/htdocs/cscmultiShop/app/functions/smarty_plugins\\modifier.enum.php';
?><?php if ($_smarty_tpl->tpl_vars['product_data']->value['product_type']==smarty_modifier_enum("Addons\\VendorDebtPayout\\ProductTypes::DEBT_PAYOUT")) {?>
    <!-- empty -->
<?php }?>
<?php }} ?>
